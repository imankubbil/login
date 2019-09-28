     <div class="container-fluid">
       	<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
<<<<<<< HEAD
<<<<<<< HEAD

=======
        <div class="row mt-3">
          <div class="col-lg">
            <div class="card">
              <div class="card-body">
                <div class="row col-md mt-4">
                  <label><strong>Sort By </strong></label>
                  <div class="form-group col-md-4">
                    <select class="form-control" name="jenjang" id="jenjang" style="border-color: #228B22;">
                      <option value="">-- Jenjang Pendidikan --</option>
                      <option value="SD">SD</option>
                      <option value="SMP">SMP</option>
                      <option value="SMA/SMK">SMA/SMK</option>
                      <option value="D3">D3</option>
                      <option value="S1">S1</option>
                      <option value="S2">S2</option>
                      <option value="S3">S3</option>
                      <option value="lainnya">Lainnya</option>
                    </select>
                  </div>  
                  <div class="col-md-4">
                    <button type="button" class="form-control btn btn-success"><i class="fas fa-edit"></i> Nilai Psikotest</button>
                  </div>         
                </div>
              </div> 
            </div>
          </div>
        </div>
        
>>>>>>> origin/lekha
=======
>>>>>>> 00402915edd3cd477a6db818023160bd902490ff
        <div class="row mt-3">
          <div class="col-lg">
            <div class="card">
              <div class="card-body">
                <a type="button" href="<?=base_url()?>print_laporan/print_data_job_applicant" title="Print Data" class="btn btn-primary float-right mb-4"> <i class="fa fa-print"></i> Print</a>
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

                           <?=form_open('auth/informationPsikotest');?>
                           <input type="text" name="email" value="<?=$d['email']?>" hidden>
                           <button type="submit" class="badge badge-danger">Send Email</button>
                           <?=form_close();?>
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
