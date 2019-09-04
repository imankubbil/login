       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <div class="container">
               <div class="card border-danger mb-3 col-lg">
                   <div class="card-body text-danger">
                       <h1 class="card-title text-center"><?= $title; ?></h1>
                      
                       <!-- form data pribadi -->
                       <div class="row mt-4">
                           <?= form_open_multipart('career/uploadEdit'); ?>
                               <div class="form-row">
                                   <div class="form-group col-lg-12">
                                       <input type="email" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" hidden><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                    <div class="form-group col-md-6">
                                       <label for="no_ktp"><strong>No KTP</strong></label>
                                       <input type="text" id="no_ktp" name="no_ktp" class="form-control" value="<?= $upload_file['no_ktp']; ?>"><?= form_error('no_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="foto_ktp"><strong>File Scan KTP</strong></label>
                                       <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="foto_ktp" name="foto_ktp">
                                         <label class="custom-file-label" for="image">Choose file</label>
                                         <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:2MB</em></small>
                                         <?= form_error('foto_ktp', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="no_ijazah"><strong>No IJazah Terakhir</strong></label>
                                       <input type="text" id="no_ijazah" name="no_ijazah" class="form-control" value="<?= $upload_file['no_ijazah'];?>"><?= form_error('no_ijazah', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="foto_ijazah"><strong>File Scan Ijazah</strong></label>
                                       <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="foto_ijazah" name="foto_ijazah">
                                         <label class="custom-file-label" for="image">Choose file</label>
                                         <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:2MB</em></small>
                                         <?= form_error('foto_ijazah', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="no_npwp"><strong>No NPWP</strong></label>
                                       <input type="text" id="no_npwp" name="no_npwp" class="form-control" value="<?= $upload_file['no_npwp'];?>"><?= form_error('no_npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="foto_npwp"><strong>File Scan NPWP</strong></label>
                                       <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="foto_npwp" name="foto_npwp">
                                         <label class="custom-file-label" for="image">Choose file</label>
                                         <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:2MB</em></small>
                                         <?= form_error('foto_npwp', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="skck"><strong>Akhir Valid SKCK</strong></label>
                                       <input type="date" id="skck" name="skck" class="form-control" value="<?= $upload_file['skck']; ?>"><?= form_error('skck', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="foto_skck"><strong>File Scan SKCK</strong></label>
                                       <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="foto_skck" name="foto_skck">
                                         <label class="custom-file-label" for="image">Choose file</label>
                                         <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:2MB</em></small>
                                         <?= form_error('foto_skck', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="sertifikat"><strong>Nama Sertifikat</strong></label>
                                       <input type="text" id="sertifikat" name="sertifikat" class="form-control"  value="<?= $upload_file['sertifikat'];?>"><?= form_error('sertifikat', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="foto_sertifikat"><strong>File Scan Sertifikat</strong></label>
                                       <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="foto_sertifikat" name="foto_sertifikat">
                                         <label class="custom-file-label" for="image">Choose file</label>
                                         <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:2MB</em></small>
                                         <?= form_error('foto_sertifikat', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="foto_transkrip_nilai"><strong>File Scan Transkrip Nilai</strong></label>
                                       <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="foto_transkrip_nilai" name="foto_transkrip_nilai">
                                         <label class="custom-file-label" for="image">Choose file</label>
                                         <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:2MB</em></small>
                                         <?= form_error('foto_transkrip', '<small class="text-danger pl-3">', '</small>'); ?>
                                         </div>
                                   </div>
                                    <div class="form-group col-md-4">
                                       <button type="submit" class="btn btn-primary" id="btn_education" name="upload"><i class="far fa-paper-plane"></i> Send Data</button>
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