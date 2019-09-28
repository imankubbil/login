<section class="bg1 p-b-30">
	<div class="container">
		<div class="row t-right">
			<div class="col-lg">
				<a href="<?= base_url('Auth'); ?>" class="btn btn-primary btn-lg m-t-30 m-r-30">SignUp/Login</a>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="sec-title p-b-60 p-t-30">
	        <h3 class="m-text5 t-center ">
	          We are Hiring for
	        </h3>
	      </div>
		<div class="row justify-content-center mb-4">
			<div class="col-md-8">
				<div class="card border-primary">
					<div class="card-body text-primary">
						<?php foreach ($job as $j) : ?>
						<table class="table table-bordered">
							<thead>
								<tr>
									<th class="s-text12 t-center"><?= $j["job_require"]; ?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td style="color:black;"><h4>Requirements :</h4></td>
								</tr>
								<tr>
									<td><h3 style="color:black"><?= $j["deskripsi"]; ?></h3></td>
								</tr>
								<tr>
									<td><a href="<?= base_url('Auth'); ?>" class="btn btn-primary m-l-4 m-t-4 m-b-4 ">Apply Job</a></h5></td>
								</tr>
							</tbody>
						</table>
					<?php endforeach; ?>
						
					</div>


				</div>
			</div>
		</div>
	</div>
</section>