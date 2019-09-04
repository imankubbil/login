         <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="container">
               <div class="card border-danger mb-3 col-lg">
                   <div class="card-body text-danger">
                       <h1 class="card-title text-center"><?= $title; ?></h1>
                       <!-- <hr style="width:500px; border: 1px solid red;"> -->
                       <!-- form riwayat pekerjaan -->

                       <div class="card border-danger mb-3 col-lg">
                         <div class="card-body text-danger">
                            <?=form_open('career/workHistoryEdit')?>
                              <div class="row mt-4">
                                <div class="form-row">
                                  <?php
                                    $no = 1;
                                    foreach ($work_history as $wh) :
                                  ?>
                                    <input type="hidden" name="id_workhistory<?=$no?>" value="<?=set_value('id_workhistory$no', $wh['id_workhistory'])?>">
                                     <div class="form-group col-lg-12">
                                         <input type="email" id="email<?=$no?>" name="email<?=$no?>" class="form-control" value="<?=set_value('email$no', $wh['email']);?>" hidden>
                                     </div>

                                     <div class="form-group col-md-12">
                                         <label for="nama_perusahaan1"><strong>Nama Perusahaan</strong></label>
                                         <input type="text" id="nama_perusahaan<?=$no?>" name="nama_perusahaan<?=$no?>" class="form-control" placeholder="Nama Perusahaan" value="<?= $wh['nama_perusahaan']; ?>"><?= form_error('nama_perusahaan<?=$no?>', '<small class="text-danger pl-3">', '</small>'); ?>
                                     </div>

                                     <div class=col-md-3>
                                             <label for="awal_kerja<?=$no?>"><strong>Awal Periode Kerja</strong></label>
                                             <div class="input-group">
                                                 <input type="date" name="awal_kerja<?=$no?>" class="form-control" placeholder="Mulai" value="<?= $wh['awal_kerja']; ?>">
                                                 <div class="input-group-append">
                                                     <button class="btn btn-primary" type="button">
                                                         <i class="fas fa-calendar-alt"></i>
                                                     </button>
                                                 </div>
                                             </div>
                                             <?= form_error('awal_kerja<?=$no?>', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                         <div class=col-md-3>
                                             <label for="akhir_kerja"><strong>Akhir Periode Kerja</strong></label>
                                             <div class="input-group">
                                                 <input type="date" name="akhir_kerja<?=$no?>" class="form-control" placeholder="Berakhir" value="<?= $wh['akhir_kerja']; ?>">
                                                 <div class="input-group-append">
                                                     <button class="btn btn-primary" type="button">
                                                         <i class="fas fa-calendar-alt"></i>
                                                     </button>
                                                 </div>
                                             </div>
                                             <?= form_error('akhir_kerja<?=$no?>', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="jabatan<?=$no?>"><strong>Jabatan Terakhir</strong></label>
                                             <input type="text" id="jabatan<?=$no?>" name="jabatan<?=$no?>" class="form-control" placeholder="Jabatan" value="<?= $wh['jabatan']; ?>"><?= form_error('jabatan<?=$no?>', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="gaji<?=$no?>"><strong>Gaji Terakhir</strong></label>
                                             <input type="text" id="gaji<?=$no?>" name="gaji<?=$no?>" class="form-control" placeholder="Gaji" value="<?= getRupiah($wh['gaji']); ?>"><?= form_error('gaji<?=$no?>', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                         <div class="form-group col-md-6">
                                             <label for="alasan_pindah<?=$no?>"><strong>Alasan Pindah</strong></label>
                                             <input type="text" id="alasan_pindah<?=$no?>" name="alasan_pindah<?=$no?>" class="form-control" placeholder="Alasan Pindah" value="<?= $wh['alasan_pindah']; ?>">
                                             <?= form_error('alasan_pindah<?=$no?>', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                         <div class="form-group col-md-12">
                                             <label for="job_desk<?=$no?>"><strong>Job Desk</strong></label>
                                             <textarea class="form-control" name="job_desk<?=$no?>" id="job_desk <?=$no?>"><?= $wh['job_desk']; ?></textarea><?= form_error('job_desk<?=$no?>', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                  <?php $no++; endforeach?>
                                </div>
                                <div class="form-group col-md-8">
                                   <button type="submit" class="btn btn-primary" id="btn_work_history"><i class="far fa-paper-plane"></i> Edit Data</button>
                                   <a class="btn btn-warning" href="<?= base_url('career'); ?>" role="button" id="back"><i class="fas fa-undo"></i> Back</a>
                                </div>
                              </div>
                             </div>
                            <?=form_close()?>
                          </div>
                       </div>
                   </div>
                  
               </div>
            </div>
        </div>
               <!-- End of Main Content -->