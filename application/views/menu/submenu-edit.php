       <!-- Begin Page Content -->
       <div class="container-fluid">

       	<!-- Page Heading -->
       	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

       	<div class="row">
       		<div class="card border-dark mb-3 col-lg-6">
       			<div class="card-body text-dark">
       				<form action="<?= base_url('menu/subMenuEdit/'); ?>" method="post">
       					<div class="form-row">
                                                 <input type="hidden" name="id" value="<?=$user_sub_menu['id']?>">
       						<div class="form-group col-lg-12">
       							<label for="title">Title</label>
       							<input type="text" name="title" class="form-control" value="<?= $user_sub_menu['title']; ?>">
       						</div>
                    <div class="form-group col-lg-12">
                      <label for="menu_id">Menu</label>
                        <select class="form-control" name="menu_id" id="menu_id">
                          <?php foreach ($menu as $m) : ?>
                            <option value="<?=$m['id']; ?>" <?php if ($user_sub_menu['menu_id'] == $m['id']) { echo "selected=selected";} ?>><?=$m['menu']?></option>
                          <?php endforeach; ?>
                                                          
                        </select>
                    </div>

                     <div class="form-group col-lg-12">
                       <label for="url">Url</label>
                       <input type="text" name="url" class="form-control" value="<?= $user_sub_menu['url']; ?>">
                     </div>
                    <div class="form-group col-lg-12">
                           <label for="icon">Icon</label>
                           <input type="text" name="icon" class="form-control" value="<?= $user_sub_menu['icon']; ?>">
                    </div>
                    <div class="form-group col-lg-12">
                           <div class="form-check">
                                 <input class="form-check-input" type="checkbox" value="<?= $user_sub_menu['is_active']; ?>" name="is_active" id="is_active" checked>
                                 <label class="form-check-label" for="is_active">
                                       Active?
                                </label>
                         </div>
                    </div>
                    <div class="form-group col-lg-12">
                      <button type="submit" class="btn btn-primary"><i class="far fa-paper-plane"></i> Edit Data</button>
                      <a class="btn btn-warning" href="<?= base_url('menu/subMenu'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>
                    </div>
              </div>


       </form>
</div>
</div>

</div>


</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 