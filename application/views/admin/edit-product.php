       <!-- Begin Page Content -->
       <div class="container-fluid">

       	<!-- Page Heading -->
       	<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
       	<div class="row">
       		<div class="col-lg">
       			<div class="card">
       				<div class="card-body">
       					<?= form_open_multipart('admin/editProduct'); ?>
                <div class="form-group col-md-12">
                    <input type="text" id="id_product" name="id_product" class="form-control" value="<?= $data['id_product']; ?>" hidden>
                </div>
       					<div class="form-group col-md-12">
       						<input type="text" id="name" name="created" class="form-control" value="<?= $user['name']; ?>" hidden>
       					</div>
       					<div class="form-group col-md-12">
       						<label for="product_name"><strong>Product Name</strong></label>
       						<input type="text" id="product_name" name="product_name" class="form-control" placeholder="Masukkan Product Name" value="<?= $data['product_name']; ?>"><?= form_error('product_name', '<small class="text-danger pl-3">', '</small>'); ?>
       					</div>
                <div class="form-group col-md-12">
                  <label ><strong>Picture</strong></label>
                    <div class="col-sm-3">
                      <img src="<?= base_url('assets/img/product/') . $data['image']; ?>" class="img-thumbnail">
                    </div>
                <div class="custom-file">
                  <div class="col-sm-6 mt-3">
                    <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                      <small class="text-primary pl-3"><em>Upload file with Extension : Png/Jpg/Jpeg, Max:10MB</em></small>
                  </div>
                </div>
                </div>

                <div class="form-group col-md-12">
                  <label for="deskripsi"><strong>Description</strong></label>
                    <textarea class="form-control editor_jobvacancy" name="deskripsi" value="<?= set_value('deskripsi'); ?>" style="height: 250px;" placeholder="Masukkan deskripsi kriteria lowongan" ><?= $data['deskripsi']; ?></textarea>
                      <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                </div>

                <div class="form-group col-md-4">
                  <button type="submit" class="btn btn-primary" id="btn_personal"><i class="far fa-paper-plane"></i> Send Data</button>
                  <a class="btn btn-warning" href="<?= base_url('Admin/product'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>
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