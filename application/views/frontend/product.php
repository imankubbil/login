<section class="bg1 p-b-30">
<div class="container">
	<div class="row p-t-30">
		<div class="col-lg col-sm-10">
			<form action="" method="post">
				<input class="m-text12 bg5 w-full p-b-5" type="text" id="myInput" name="keyword" placeholder="     Search Product Name..." style="height: 50px;">
			</form>
			</div>
		</div>
	</div> 
</div>
</section>

<section>
	<div class="container p-t-30">
		<a href="<?= base_url('Frontend/product'); ?>" class="m-t-4" style="color:red;"><h2 class="m-text5">All Product</h2></a>       
	<div class="row p-t-30">
        <?php foreach ($product as $p) : ?>
        <div class="col-sm-10 col-md-8 col-lg-4">
          <!-- block1 -->
          <div class="block1 hov-img-zoom pos-relative m-b-30">
            <a href="<?= base_url(); ?>Frontend/detailProduct/<?= $p['id_product']; ?>">
              <img src="<?= base_url('assets/img/product/') . $p['image']; ?>" alt="IMG-BENNER" style="width: 300px; height: 300px;">
              <h4 class="s-text12 p-t-10 p-b-10">
          		<?= $p["product_name"]; ?>
        	  </h4>
        	  <a href="<?= base_url(); ?>Frontend/detailProduct/<?= $p['id_product']; ?>" class="btn btn-primary">See Detail</a>
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>

	</div>
</section>