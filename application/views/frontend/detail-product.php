<section>
	<div class="container">
		<div class="row p-t-30 p-b-30">
			<div class="col-lg-6">
				<img src="<?= base_url('assets/img/product/') . $data['image']; ?>" style="height: 500px; width: 500px;">
			</div>
			<div class="col-lg-6 p-t-30 text-justify">
				<h2 class="m-text5 t-center p-b-20"><?= $data['product_name']; ?></</h2>
				<h3 class="m-text6 p-b-30" style="color:black;">Detail dan Spesifikasi Product :</h3>
				<p class=" m-text5 text-justify"><strong><?= $data['deskripsi']; ?></strong></p><br>
				
			<a href="<?= base_url('Frontend/product'); ?>" class="btn btn-success">Back</a>
			</div>
		</div>
		
	</div>
	
</section>