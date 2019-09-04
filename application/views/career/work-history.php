       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="container">
               <div class="card border-primary mb-3 col-lg">
                   <div class="card-body text-primary">
                       <h1 class="card-title text-center"><?= $title; ?></h1>
                       <hr style="width:400px; border: 1px solid blue;">
                       <!-- form riwayat pekerjaan -->

                       <div class="card border-primary mb-3 col-lg">
                           <div class="card-body text-primary">
                               <div class="row mt-4">
                                   <form action="<?= base_url('career/workHistory'); ?>" method="post">
                                        <div class="form-row">
                                           <div class="form-group col-lg-12">
                                               <input type="email" id="email1" name="email1" class="form-control" value="<?=set_value('email1', $user['email']);?>" hidden>
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label for="nama_perusahaan1"><strong>Nama Perusahaan</strong></label>
                                               <input type="text" id="nama_perusahaan1" name="nama_perusahaan1" class="form-control" placeholder="Nama Perusahaan" value="<?= set_value('nama_perusahaan1'); ?>"><?= form_error('nama_perusahaan1', '<small class="text-danger pl-3">', '</small>'); ?>
                                           </div>

                                           <div class=col-md-3>
                                               <label for="awal_kerja1"><strong>Awal Periode Kerja</strong></label>
                                               <div class="input-group">
                                                   <input type="date" name="awal_kerja1" class="form-control" placeholder="Mulai" value="<?= set_value('awal_kerja1'); ?>">
                                                   <div class="input-group-append">
                                                       <button class="btn btn-primary" type="button">
                                                           <i class="fas fa-calendar-alt"></i>
                                                       </button>
                                                   </div>
                                               </div>
                                               <?= form_error('awal_kerja1', '<small class="text-danger pl-3">', '</small>'); ?>
                                           </div>
                                           <div class=col-md-3>
                                               <label for="akhir_kerja"><strong>Akhir Periode Kerja</strong></label>
                                               <div class="input-group">
                                                   <input type="date" name="akhir_kerja1" class="form-control" placeholder="Berakhir" value="<?= set_value('akhir_kerja1'); ?>">
                                                   <div class="input-group-append">
                                                       <button class="btn btn-primary" type="button">
                                                           <i class="fas fa-calendar-alt"></i>
                                                       </button>
                                                   </div>
                                               </div>
                                               <?= form_error('akhir_kerja1', '<small class="text-danger pl-3">', '</small>'); ?>
                                           </div>
                                           <div class="form-group col-md-6">
                                               <label for="jabatan1"><strong>Jabatan Terakhir</strong></label>
                                               <input type="text" id="jabatan1" name="jabatan1" class="form-control" placeholder="Jabatan" value="<?= set_value('jabatan1'); ?>"><?= form_error('jabatan1', '<small class="text-danger pl-3">', '</small>'); ?>
                                           </div>
                                           <div class="form-group col-md-6">
                                               <label for="gaji1"><strong>Gaji Terakhir</strong></label>
                                               <input type="number" id="gaji1" name="gaji1" class="form-control" placeholder="Ex- 4000000" value="<?= set_value('gaji1'); ?>"><?= form_error('gaji1', '<small class="text-danger pl-3">', '</small>'); ?>
                                           </div>
                                           <div class="form-group col-md-6">
                                               <label for="alasan_pindah1"><strong>Alasan Pindah</strong></label>
                                               <input type="text" id="alasan_pindah1" name="alasan_pindah1" class="form-control" placeholder="Alasan Pindah" value="<?= set_value('alasan_pindah1'); ?>"><?= form_error('alasan_pindah1', '<small class="text-danger pl-3">', '</small>'); ?>
                                           </div>
                                           <div class="form-group col-md-12">
                                               <label for="job_desk1"><strong>Job Desk</strong></label>
                                               <textarea class="form-control" name="job_desk1" id="job_desk1" value="<?= set_value('job_desk1'); ?>"></textarea><?= form_error('job_desk1', '<small class="text-danger pl-3">', '</small>'); ?>
                                           </div>
                                           <div id="form_kedua">

                                           </div>
                                           <div class="form-group col-md-8">
                                               <button type="submit" class="btn btn-primary" id="btn_work_history"><i class="far fa-paper-plane"></i> Send Data</button>
                                               <a class="btn btn-warning" href="<?= base_url('career'); ?>" role="button" id="back"><i class="fas fa-undo"></i> Back</a>
                                           </div>

                                        </div>
                                   </form>
                               </div>
                           </div>
                       </div>

                   </div>
                   <div class="col-md-6 mb-3">
                       <button type="text" class="btn btn-success" id="tambah"><i class="fas fa-plus"></i> Insert Column Work History</button>
                       <button type="text" class="btn btn-success" id="hapus" style="display: none;"><i class="far fa-minus-square"></i> Delete Column</button>
                   </div>


               </div>
               <!-- End of Main Content -->