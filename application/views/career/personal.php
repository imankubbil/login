       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="container">
               <div class="card border-primary mb-3 col-lg">
                   <div class="card-body text-primary">
                       <h1 class="card-title text-center"><?= $title; ?></h1>
                       <hr style="width:400px; border: 1px solid blue;">
                       <!-- form data pribadi -->
                       <div class="row mt-4">
                           <form action="<?= base_url('career/personal'); ?>" method="post">
                               <div class="form-row">
                                   <div class="form-group col-lg-12">
                                       <label for="email"><strong>Email</strong></label>
                                       <input type="email" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" readonly><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="nama"><strong>Nama lengkap</strong></label>
                                       <input type="text" id="nama" name="nama" class="form-control" placeholder="Nama lengkap" value="<?= set_value('nama'); ?>"><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="panggilan"><strong>Nama panggilan</strong></label>
                                       <input type="text" id="panggilan" name="panggilan" class="form-control" placeholder="Nama panggilan" value="<?= set_value('panggilan'); ?>"><?= form_error('panggilan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="ktp"><strong>No KTP</strong></label>
                                       <input type="text" id="ktp" name="ktp" class="form-control" placeholder="No ktp" value="<?= set_value('ktp'); ?>"><?= form_error('ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="kk"><strong>No kartu keluarga</strong></label>
                                       <input type="text" id="kk" name="kk" class="form-control" placeholder="Kartu keluarga" value="<?= set_value('kk'); ?>"><?= form_error('kk', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="tempat"><strong>Tempat lahir</strong></label>
                                       <input type="text" id="tempat" name="tempat" class="form-control" placeholder="Tempat lahir" value="<?= set_value('tempat'); ?>"><?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="ttl"><strong>Tanggal lahir</strong></label>
                                       <input type="date" name="ttl" class="form-control" id="ttl" value="<?= set_value('ttl'); ?>">
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="umur"><strong>Umur</strong></label>
                                       <input type="text" id="umur" name="umur" class="form-control" placeholder="Umur" value="<?= set_value('umur'); ?>"><?= form_error('umur', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="gender"><strong>Jenis kelamin</strong></label>
                                       <select class="form-control" name="gender" id="gender" required="yes" >
                                           <option value="">-- Pilih Gender --</option>
                                           <option value="male">Laki-Laki</option>
                                           <option value="female">Perempuan</option>
                                       </select>
                                       <?= form_error('gender', '<small class="text-danger pl-3">', '</small>'); ?>
                                       
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="agama"><strong>Agama</strong></label>
                                       <select class="form-control" name="agama" id="agama" required="yes">
                                           <option value="">-- Pilih Agama --</option>
                                           <option value="islam">Islam</option>
                                           <option value="kristen">Kristen</option>
                                           <option value="hindu">Hindu</option>
                                           <option value="buddha">Buddha</option>
                                           <option value="konghucu">Konghucu</option>
                                           <option value="lainnya">Lainnya</option>
                                       </select>
                                      
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="telp"><strong>No telephone</strong></label>
                                       <input type="tel" name="telp" class="form-control" id="telp" placeholder="No telephone" value="<?= set_value('telp'); ?>"><?= form_error('telp', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="wn"><strong>Warga negara</strong></label>
                                       <input type="text" id="wn" name="wn" class="form-control" placeholder="Warga negara" value="<?= set_value('wn'); ?>"><?= form_error('wn', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="alamat"><strong>Alamat KTP</strong></label>
                                       <textarea class="form-control" name="alamat" id="alamat" value="<?= set_value('alamat'); ?>"></textarea><?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <button type="submit" class="btn btn-primary" id="btn_personal"><i class="far fa-paper-plane"></i> Send Data</button>
                                       <a class="btn btn-warning" href="<?= base_url('career'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>
                                   </div>
                           </form>

                       </div>
                   </div>
               </div>

           </div>
           <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->