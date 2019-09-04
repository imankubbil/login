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
                           <form action="<?= base_url('career/education'); ?>" method="post">
                               <div class="form-row">
                                   <div class="form-group col-lg-12">
                                       <input type="email" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" hidden><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="Jenjang"><strong>Pendidikan Terakhir</strong></label>
                                       <select class="form-control" name="jenjang" id="jenjang" required="yes">
                                           <option value="">-- Pilih Jenjang --</option>
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
                                   <div class="form-group col-md-12">
                                       <label for="tempat"><strong>Nama Sekolah/Perguruan Tinggi</strong></label>
                                       <input type="text" id="tempat" name="tempat" class="form-control" placeholder="Nama sekolah" value="<?= set_value('tempat'); ?>"><?= form_error('tempat', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="jurusan"><strong>Jurusan</strong></label>
                                       <input type="text" id="jurusan" name="jurusan" class="form-control" placeholder="Jurusan" value="<?= set_value('jurusan'); ?>"><?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <label for="nilai"><strong>Nilai Rata-Rata/ IPK Terakhir</strong></label>
                                       <input type="text" id="nilai" name="nilai" class="form-control" placeholder="ex : 4.00" value="<?= set_value('nilai'); ?>"><?= form_error('nilai', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>

                                  
                                   <div class="col-md-4">
                                        <label for="tahun_lulus"><strong>Tahun Lulus</strong></label>
                                        <div class="input-group">
                                            <input type="text" id="datepicker" name="tahun_lulus" class="form-control" placeholder="Tahun lulus" value="<?= set_value('tahun_lulus'); ?>" >
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                <i class="fas fa-calendar-alt"></i>
                                                </button>
                                            </div>
                                            <?= form_error('tahun_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                    </div>

                                   <div class="form-group col-md-4 mt-3">
                                       <button type="submit" class="btn btn-primary" id="btn_education"><i class="far fa-paper-plane"></i> Send Data</button>
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