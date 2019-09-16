       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
           	<div class="row">
           		<div class="col-lg">
           			<div class="card">
           				<div class="card-body">
           					<?= form_open_multipart('admin/editKatalog'); ?>
                <div class="form-group col-md-12">
                  <input type="text" id="name" name="id_catalogue" class="form-control" value="<?= $data['id_catalogue']; ?>" hidden>
                </div>
       					<div class="form-group col-md-12">
       						<input type="text" id="name" name="created" class="form-control" value="<?= $user['name']; ?>" hidden>
       					</div>
       					<div class="form-group col-md-12">
       						<label for="catalogue_name"><strong>Catalogue Name</strong></label>
       						<input type="text" id="catalogue_name" name="catalogue_name" class="form-control" placeholder="Masukkan Catalogue Name" value="<?= $data['catalogue_name']; ?>"><?= form_error('catalogue_name', '<small class="text-danger pl-3">', '</small>'); ?>
       					</div>
       					<div class="form-group row col-md-12">
                  <div col="col-md-4">
                      <img src="<?= base_url('assets/img/catalogue/') . $data['image']; ?>" class="img-thumbnail" style="height: 200px; width: 200px">
                  </div>
                  <div class="col-md-5">
                    <label for="image"><strong>Catalogue Picture</strong></label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image" accept=".png,.jpg,.jpeg">
                        <label class="custom-file-label" for="image">Choose file</label>
                        <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:10MB</em></small>
                      </div>
                  </div>
       						<div class="col-md-4">
       							<label for="periode"><strong>Catalogue Periode</strong></label>
                      <div class="input-group">
                        <input type="text" id="datepickerMonth" name="periode" class="form-control" placeholder="Periode bulan" value="<?= $data['periode']; ?>" >
                        <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-calendar-alt"></i>
                        </button>
                        </div>
                          <?= form_error('periode', '<small class="text-danger pl-3">', '</small>'); ?>
                      </div>
       						</div>
       					</div>
   
       					<div class="form-group col-md-12">
       						<label for="deskripsi"><strong>Description</strong></label>
       						<textarea class="form-control editor_jobvacancy" name="deskripsi" value="<?= set_value('deskripsi'); ?>" style="height: 250px;" placeholder="Masukkan deskripsi kriteria lowongan" ><?= $data['deskripsi']; ?></textarea>
       						<?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
       					</div>

       					<div class="form-group col-md-4">
       						<button type="submit" class="btn btn-primary" id="btn_personal"><i class="far fa-paper-plane"></i> Edit Data</button>
       						<a class="btn btn-warning" href="<?= base_url('Admin/katalog'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>
       					</div>
       				</form>
           					
           				</div>
           				
           			</div>
           			
           		</div>
           		
           	</div>
       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content --> 