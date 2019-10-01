     <div class="container-fluid">
       	<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
        <div class="row mt-3 justify-content-center">


           <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-success mb-1">Jumlah Pelamar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 pl-4"><?= $amount['user']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-tie fa-2x text-dark-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-md font-weight-bold text-primary mb-1">Pelamar Lulus Psikotest</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800 pl-4"><?= $amount['user_psikotest']?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate fa-2x text-dark-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          <div class="col-lg">
            <div class="card">
              <div class="card-body">
                <a type="button" href="javascript: w=window.open('<?=base_url()?>print_laporan/print_data_job_applicant', 'newwindow', 'width=1300', 'height=650'); w.focus(); w.print();" title="Print Data" class="btn btn-primary float-right mb-4"> <i class="fa fa-print"></i> Print</a>
                <div class="table-responsive">
                  <?= $this->session->flashdata('message'); ?>
                  <table class="table table-hover mt-3" id="tabel_data_pelamar"> 
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Job Apply</th>
                        <th>Jenjang Pendidikan</th>
                        <th>Nilai Psikotest</th>
                        <th>Nilai Sekolah</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php $i = 1; ?>
                     <?php foreach ($data as $d) : ?>
                       <tr>
                         <th scope="row"><?= $i; ?></th>
                         <td><?= $d['nama']; ?></td>
                         <td><?= getJobRequire($d['id_jobvacancy']); ?></td>
                         <td><?= $d['jenjang']; ?></td>
                         <td><?= $nilai_psikotest = ($d['nilai_psikotest'] == '') ? 'Belum Psikotest' : $d['nilai_psikotest']; ?></td>
                         <td><?= $d['nilai']; ?></td>
                         <td><?= $d['email']; ?></td>
                         <td><?= $d['alamat']; ?></td>
                         <td><?= $keterangan = ($d['nilai_psikotest'] >= 75) ? 'Lulus Psikotest' : 'Tidak Lulus'; ?></td>
                         <td class="text-center">
                           <a href="<?= base_url(); ?>Personalia/detailJobApplicant/<?= $d['id_personal']; ?>" class="badge badge-success">Detail</a>
                          <a href="#modal_send_email" class="badge badge-danger" data-toggle="modal"> Send Email </a>
                           <!-- <?=form_open('auth/informationPsikotest');?>
                           <input type="text" name="email" value="<?=$d['email']?>" hidden>
                           <button type="submit" class="badge badge-danger">Send Email</button>
                           <?=form_close();?> -->
                         </td>
                       </tr>
                       <?php $i++ ?>
                     <?php endforeach; ?>
                   </tbody>
                 </table>
               </div>
             </div>
           </div>
          </div>
        </div>
     </div>
   </div>
   <div class="modal fade" id="modal_send_email" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="newSubMenuModalLabel">Set Data Schedule</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <form action="<?= base_url('personalia/set_data_schedule'); ?>" method="post">
                       <div class="modal-body">
                           <div class="form-group">
                              <label for="">Hari, Tanggal, Pukul</label>
                              <div class="date_time_schedule">
                                <input type="datetime-local" class="form-control" name="date_time_schedule" data-format="dd-mm-YYYY hh:mm:ss"><span class="add-on"><i data-time-icon="icon-time" data-date-icon="icon-calendar"></i></span>
                              </div>
                           </div>
                           <div class="form-group">
                              <label for="">Lokasi</label>
                               <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="Lokasi">
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Add</button>
                       </div>
                   </form>
               </div>
           </div>
       </div> 
