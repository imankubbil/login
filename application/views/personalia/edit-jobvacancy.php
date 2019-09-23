       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
           	<div class="row">
           		<div class="col-lg">
           			<div class="card">
           				<div class="card-body">
           					<form action="<?= base_url('personalia/editJobVacancy'); ?>" method="post">
           						<div class="form-row">

                                    <div class="form-group col-md-12">
                                       <input type="text" id="id_jobvacancy" name="id_jobvacancy" class="form-control" value="<?= $data['id_jobvacancy']; ?>" hidden>
                                   </div>

           							            <div class="form-group col-md-12">
                                       <input type="text" id="name" name="created" class="form-control" value="<?= $user['name']; ?>" hidden>
                                   </div>
           							            <div class="form-group col-md-12">
                                       <label for="job_require"><strong>Job Require</strong></label>
                                       <input type="text" id="job_require" name="job_require" class="form-control" placeholder="Masukkan Job Require" value="<?= $data['job_require'];?>"><?= form_error('job_require', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="deskripsi"><strong>Description</strong></label>
                                       <textarea class="form-control editor_jobvacancy" name="deskripsi" style="height: 250px;" placeholder="Masukkan deskripsi kriteria lowongan" value="<?= set_value('deskripsi'); ?>" ><?= $data['deskripsi']; ?></textarea>
                                       <?= form_error('deskripsi', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-4">
                                       <button type="submit" class="btn btn-primary" id="btn_personal"><i class="far fa-paper-plane"></i> Edit Data</button>
                                       <a class="btn btn-warning" href="<?= base_url('personalia/jobVacancy'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>
                                   </div>
           							
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