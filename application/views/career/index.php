             <!-- Begin Page Content -->
             <div class="container-fluid">

                 <!-- Page Heading -->
                 <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
                 <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
                 </div>

                 <div class="row">

                     <input type="hidden" value="<?= $this->session->flashdata('show') ?>" id="show_edit">
                 <div class="card border-success col-lg-6">
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
                                     <!-- <div id="edit_form"></div> -->
                                     <a href="<?= base_url('career/personalEdit'); ?>" class="btn btn-warning" id="edit_personal">Edit Form</a>
                                 </td>
                             </tr>
                             <tr id="edu_data">
                                 <td style="color:black; font-weight: bold">Education Data</td>
                                 <td id="ket_education" <?php if($education > 0) { echo "";} else { echo "hidden";}?>>
                                     <div class="badge badge-success">Sudah diisi</div>
                                 </td>
                                 <td><a href="<?= base_url('career/education'); ?>" class="btn btn-primary" <?php if($education > 0) { echo "hidden";}?>>Fill Form</a>
                                     <a href="<?= base_url('career/educationEdit'); ?>" class="btn btn-warning" id="edit_education">Edit Form</a>
                                 </td>
                             </tr>
                             <tr id="work_data">
                                 <td style="color:black; font-weight: bold">Work History</td>
                                 <td id="ket_work" <?php if($work_history > 0) { echo "";} else { echo "hidden";}?>>
                                     <div class="badge badge-success">Sudah diisi</div>
                                 </td>
                                 <td><a href="<?= base_url('career/workHistory'); ?>" class="btn btn-primary" <?php if($work_history > 0) { echo "hidden";}?>>Fill Form</a>
                                     <a href="<?= base_url('career/workHistoryEdit'); ?>" class="btn btn-warning" id="edit_work">Edit Form</a>
                                 </td>
                             </tr>
                             <tr id="family_data">
                                 <td style="color:black; font-weight: bold">Family Data</td>
                                 <td id="ket_family" <?php if($family > 0) { echo "";} else { echo "hidden";}?>>
                                     <div class="badge badge-success">Sudah diisi</div>
                                 </td>
                                 <td><a href="<?= base_url('career/familyData'); ?>" class="btn btn-primary" <?php if($family > 0) { echo "hidden";}?>>Fill Form</a>
                                     <a href="<?= base_url('career/FamilyEdit'); ?>" class="btn btn-warning" id="edit_work">Edit Form</a>
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
                                 <td><a href="<?= base_url('career/uploadFile'); ?>" class="btn btn-primary">Fill Form</a>
                                     <a href="<?= base_url('career/uploadEdit'); ?>" class="btn btn-warning" id="edit_self">Edit Form</a>
                                 </td>
                             </tr>
                         </table>
                         </div>
                         <!-- <a href="<?= base_url('career/exam'); ?>" class="btn btn-primary" title="apply" id="name">Apply and Send</a> -->
                         <button class="btn btn-primary" title="apply" id="name" data-toggle="modal" data-target="#modal_lanjut_psikotest" <?php if($user_answer > 0) { echo "hidden";}?>>Apply and Send</button>

                     </div>
                 </div>

                    <div class="col-lg-6">
                        <div class="card mt-4">
                            <div class="card-body ">
                                <h4 style="color:black; font-weight: bold">Rules :</h4>
                                <ul>
                                    <li>Isi semua form data lamaran kerja disamping ini</li>
                                    <li>Setelah form terisi klik tombol Apply and Send</li>
                                    <li>Lanjutkan untuk melakukan Psikotest</li>
                                    <li>Setelah Psikotest, tunggu Email kelulusan yang dikirimkan oleh pihak Personalia Selma By Informa</li>
                                </ul>

                            </div>
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