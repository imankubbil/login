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
                           <form action="<?= base_url('career/familyData'); ?>" method="post">
                               <div class="form-row">
                                   <div class="form-group col-lg-12">
                                       <input type="email" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" hidden>
                                   </div>
                                   <div class="form-check form-check-inline col-md-3 mb-3">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Menikah">
                                       <label class="form-check-label" for="inlineRadio1">Menikah</label>
                                   </div>
                                   <div class="form-check form-check-inline col-md-3 mb-3">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Belum menikah">
                                       <label class="form-check-label" for="inlineRadio2">Belum Menikah</label>
                                   </div>
                                   <div class="form-check form-check-inline col-md-3 mb-3">
                                       <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Janda/duda">
                                       <label class="form-check-label" for="inlineRadio3">Janda/Duda</label>
                                   </div>
                                   <div class="form-group col-md-6" id="pasangan" style="display:none;">
                                       <label for="nama_pasangan"><strong>Nama Istri/Suami</strong></label>
                                       <input type="text" id="nama_pasangan" name="nama_pasangan" class="form-control" placeholder="Nama istri/suami" value="<?= set_value('nama_pasangan'); ?>"><?= form_error('pasangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6" id="anak" style="display:none;">
                                       <label for="jumlah_anak"><strong>Jumlah Anak</strong></label>
                                       <select class="form-control" name="jumlah_anak" id="jumlah_anak" required="yes"><?php for ($i = 0; $i <= 15; $i++) echo "<option value='$i'> $i </option>"  ?>
                                       </select><?= form_error('jumlah_anak', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="nama_ayah"><strong>Nama Ayah</strong></label>
                                       <input type="text" id="nama_ayah" name="nama_ayah" class="form-control" placeholder="Nama ayah" value="<?= set_value('nama_ayah'); ?>"><?= form_error('nama_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="nama_ibu"><strong>Nama Ibu</strong></label>
                                       <input type="text" id="nama_ibu" name="nama_ibu" class="form-control" placeholder="Nama Ibu" value="<?= set_value('nama_ibu'); ?>"><?= form_error('nama_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="pekerjaan_ayah"><strong>Pekerjaan Ayah</strong></label>
                                       <input type="text" id="pekerjaan_ayah" name="pekerjaan_ayah" class="form-control" placeholder="Pekerjaan ayah" value="<?= set_value('pekerjaan_ayah'); ?>"><?= form_error('pekerjaan_ayah', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="pekerjaan_ibu"><strong>Pekerjaan Ibu</strong></label>
                                       <input type="text" id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control" placeholder="Pekerjaan ibu" value="<?= set_value('pekerjaan_ibu'); ?>"><?= form_error('pekerjaan_ibu', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>

                                   <div class="form-group col-md-4">
                                       <label for="saudara_kandung"><strong>Saudara Kandung</strong></label>
                                       <select class="form-control" name="saudara_kandung" id="saudara_kandung" required="yes"><?php for ($i = 0; $i <= 15; $i++) echo "<option value='$i'> $i </option>"  ?>
                                       </select><?= form_error('saudara_kandung', '<small class="text-danger pl-3">', '</small>'); ?>
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