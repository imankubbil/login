             <!-- Begin Page Content -->
             <div class="container-fluid">

                 <!-- Page Heading -->
                 <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
                 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
                 </div>
                <div class="card mb-3 col-lg-10 mx-auto">
                   <div class="row no-gutters mt-2">
                       <div class="col-md-4">
                        <div class="text-center">
                            <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img" style="width:150px; height: 120px;">
                        </div>
                           
                           <table class="table mt-3">
                                   <tr>
                                       <td><small class="text-muted">Name : <?= $user['name']; ?></small></td>
                                   </tr>
                                   <tr>
                                       <td><small class="text-muted">Email : <?= $user['email']; ?></small></td>
                                   </tr>
                            </table>
                       </div>
                       <div class="col-md-8">
                           <div class="card-body mt-4">
                               <h3>Rules :</h3>
                               <ul>
                                   <li>Isilah semua form lamaran kerja dibawah ini</li>
                                    <li>Setelah semua terisi, Klik tombol Apply and Send dan isilah Psikotest</li>
                                    <li>Tunggu konfirmasi hasil seleksi yang dikirim ke Email</li>
                               </ul>    
                           </div>
                       </div>
                   </div>
                </div>


                 <div class="row">
                     <input type="hidden" value="<?= $this->session->flashdata('show') ?>" id="show_edit">
                     <div class="card border-success col-lg-10 mx-auto">
                         <div class="card-body text-success">
                             <h3 class="card-title text-center">Fill Out All This Forms Below!</h3>
                             <div class="table-responsive">
                                 
                             <table class="table table-hover mt-4">
                                 <tr id="personal_data">
                                     <td style="color:black; font-weight: bold">Personal Data</td>
                                     <td id="ket_personal" <?php if($personal > 0) { echo "";} else { echo "hidden";}?>>
                                         <div class="badge badge-success">Sudah diisi</div>
                                     </td>
                                     <td><a href="<?= base_url('career/personal'); ?>" class="btn btn-primary" id="fill_personal" <?php if($personal > 0) { echo "hidden";}?>>Fill Form</a>
                                         <?php if($personal > 0 ) : ?>
                                         <a href="<?= base_url('career/personalEdit'); ?>" class="btn btn-warning" id="edit_personal">Edit Form</a>
                                         <?php else : ?>
                                            <button class="btn btn-warning" disabled> Edit Form</button>
                                        <?php endif;?>
                                     </td>
                                 </tr>
                                 <tr id="edu_data">
                                     <td style="color:black; font-weight: bold">Education Data</td>
                                     <td id="ket_education" <?php if($education > 0) { echo "";} else { echo "hidden";}?>>
                                         <div class="badge badge-success">Sudah diisi</div>
                                     </td>
                                     <td><a href="<?= base_url('career/education'); ?>" class="btn btn-primary" <?php if($education > 0) { echo "hidden";}?>>Fill Form</a>
                                        <?php if($education > 0 ) : ?>
                                         <a href="<?= base_url('career/educationEdit'); ?>" class="btn btn-warning" id="edit_education">Edit Form</a>
                                        <?php else : ?>
                                            <button class="btn btn-warning" disabled> Edit Form</button>
                                        <?php endif;?>
                                     </td>
                                 </tr>
                                 <tr id="work_data">
                                     <td style="color:black; font-weight: bold">Work History</td>
                                     <td id="ket_work" <?php if($work_history > 0) { echo "";} else { echo "hidden";}?>>
                                         <div class="badge badge-success">Sudah diisi</div>
                                     </td>
                                     <td><a href="<?= base_url('career/workHistory'); ?>" class="btn btn-primary" <?php if($work_history > 0) { echo "hidden";}?>>Fill Form</a>
                                        <?php if($work_history > 0 ) : ?>
                                         <a href="<?= base_url('career/workHistoryEdit'); ?>" class="btn btn-warning" id="edit_work">Edit Form</a>
                                        <?php else : ?>
                                            <button class="btn btn-warning" disabled> Edit Form</button>
                                        <?php endif;?>
                                     </td>
                                 </tr>
                                 <tr id="family_data">
                                     <td style="color:black; font-weight: bold">Family Data</td>
                                     <td id="ket_family" <?php if($family > 0) { echo "";} else { echo "hidden";}?>>
                                         <div class="badge badge-success">Sudah diisi</div>
                                     </td>
                                     <td><a href="<?= base_url('career/familyData'); ?>" class="btn btn-primary" <?php if($family > 0) { echo "hidden";}?>>Fill Form</a>
                                        <?php if($family > 0 ) : ?>
                                         <a href="<?= base_url('career/FamilyEdit'); ?>" class="btn btn-warning" id="edit_work">Edit Form</a>
                                        <?php else : ?>
                                            <button class="btn btn-warning" disabled> Edit Form</button>
                                        <?php endif;?>
                                     </td>
                                 </tr>
                                 <tr id="concept_data">
                                     <td style="color:black; font-weight: bold">Self Concept And Interest</td>
                                     <td id="ket_concept" <?php if($concept > 0) { echo "";} else { echo "hidden";}?>>
                                         <div class="badge badge-success">Sudah diisi</div>
                                     </td>
                                     <td><a href="<?= base_url('career/selfConcept'); ?>" class="btn btn-primary" <?php if($concept > 0) { echo "hidden";}?>>Fill Form</a>
                                        <?php if($concept > 0 ) : ?>
                                            <a href="<?= base_url('career/selfEdit'); ?>" class="btn btn-warning" id="edit_self">Edit Form</a>
                                        <?php else : ?>
                                            <button class="btn btn-warning" disabled> Edit Form</button>
                                        <?php endif;?>
                                     </td>
                                 </tr>
                                 <tr id="upload_file">
                                     <td style="color:black; font-weight: bold">Upload File</td>
                                     <td id="ket_upload" <?php if($upload > 0) { echo "";} else { echo "hidden";}?>>
                                         <div class="badge badge-success">Sudah diisi</div>
                                     </td>
                                     <td><a href="<?= base_url('career/uploadFile'); ?>" class="btn btn-primary" <?php if($upload > 0) { echo "hidden";}?>>Fill Form</a>
                                    </td>
                                 </tr>
                             </table>
                             </div>
                             <button class="btn btn-primary" title="apply" id="name" data-toggle="modal" data-target="#modal_lanjut_psikotest" <?php if($user_answer > 0) { echo "hidden";}?>>Apply and Send</button>

                         </div>
                     </div>
                </div>
             </div>

             <div class="modal fade" id="modal_lanjut_psikotest" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                 <div class="modal-dialog modal-md" role="document">
                     <div class="modal-content">
                         <div class="modal-body">
                             <div class="row">
                                 <div class="col-sm-12">
                                     <p class="text-center" style="color: blue;"><strong>Berkas Lamaran Anda Telah Terkirim</strong></p>
                                     <p class="text-center"><code><strong>Siapkan Diri Anda Untuk Melakukan Psikotest!!</strong></code></p>
                                     <a href="<?= base_url('career/exam'); ?>" class="btn btn-primary btn-block" title="lanjutkan" id="name">Lanjutkan, Untuk Psikotest</a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>