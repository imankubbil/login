       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="container">
               <div class="card border-danger mb-3 col-lg">
                   <div class="card-body text-danger">
                       <h1 class="card-title text-center"><?= $title; ?></h1>
                       <!-- <hr style="width:600px; border: 1px solid red;"> -->
                       <!-- form data pribadi -->
                       <div class="row mt-4">
                           <form action="<?= base_url('career/selfEdit'); ?>" method="post">
                               <div class="form-row">
                                   <div class="form-group col-lg-12">
                                       <input type="email" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" hidden>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="cita_cita"><strong>Cita Cita</strong></label>
                                       <input type="text" id="cita_cita" name="cita_cita" class="form-control" placeholder="cita cita" value="<?= $self_concept['cita_cita']; ?>"><?= form_error('cita_cita', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="motto"><strong>Motto Hidup</strong></label>
                                       <input type="text" id="motto" name="motto" class="form-control" placeholder="Motto" value="<?= $self_concept['motto']; ?>"><?= form_error('motto', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>

                                   <div class="form-group col-md-12">
                                       <label for="organisasi"><strong>Pengalaman Organisasi</strong></label>
                                       <textarea class="form-control" name="organisasi" id="organisasi"><?= $self_concept['organisasi']; ?></textarea><?= form_error('organisasi', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="hobby"><strong>Hobby</strong></label>
                                       <textarea class="form-control" name="hobby" id="hobby" placeholder="Ketik Hobby anda"><?= $self_concept['hobby']; ?></textarea><?= form_error('hobby', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="kelebihan"><strong>Kelebihan Diri</strong></label>
                                       <textarea class="form-control" name="kelebihan" id="kelebihan"><?= $self_concept['kelebihan']; ?></textarea> <?= form_error('kelebihan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="kekurangan"><strong>Kekurangan Diri</strong></label>
                                       <textarea class="form-control" name="kekurangan" id="kekurangan"><?= $self_concept['kekurangan']; ?></textarea><?= form_error('kekurangan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <button type="submit" class="btn btn-primary" id="btn_self"><i class="far fa-paper-plane"></i> Edit Data</button>
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