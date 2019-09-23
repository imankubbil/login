       <!-- Begin Page Content -->
       <div class="container-fluid">

       	<!-- Page Heading -->
       	<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
<!-- <<<<<<< HEAD

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
        
>>>>>>> lekha -->
        <div class="row mt-3">
          <div class="col-lg">
            <div class="card">
              <div class="card-body">
              <div class="table-responsive">
              <?= $this->session->flashdata('message'); ?>
                <table class="table table-hover mt-3" id="tabel_data_pelamar"> 
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Jenjang Pendidikan</th>
                    <th>Nilai Psikotest</th>
                    <th>Nilai Sekolah</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                 <?php $i = 1; ?>
                 <?php foreach ($data as $d) : ?>
                   <tr>
                     <th scope="row"><?= $i; ?></th>
                     <td><?= $d['nama']; ?></td>
                     <td><?= $d['jenjang']; ?></td>
                     <td><?= $d['nilai_psikotest']; ?></td>
                     <td><?= $d['nilai']; ?></td>
                     <td><?= $d['email']; ?></td>
                     <td><?= $d['alamat']; ?></td>
                     <td>
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
   <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content --> 