       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
           	<div class="row justify-content-md-center">
           		<div class="col-md-6">
           			<div class="card justify-content-md-center">
           				<div class="card-body">
           				<p class="text-right">Created by : <?= $data['created']; ?></p>
           				<p class="text-center"><strong><?= $data['job_require']; ?></strong></p>
           				<table class="table table-hover">
           					<thead>
           						<tr>
           							<th>Desciption : </th>
           						</tr>
           					</thead>
           					<tbody>
           						<tr>
           							<td><?= $data['deskripsi']; ?></td>
           						</tr>
           					</tbody>
           				</table>

           				<a class="btn btn-warning" href="<?= base_url('personalia/jobvacancy'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>

           					
           				</div>
           				
           			</div>
           			
           		</div>
           		
           	</div>
       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content --> 