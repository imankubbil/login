<!-- Slide1 -->
  <section class="slide1">
    <div class="wrap-slick1">
      <div class="slick1">
        <div class="item-slick1 item1-slick1" style="background-image: url(<?=base_url()?>assets/img/slider/banner2.jpg);">
          <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp">
              Selma By Informa
            </h2>
            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown">
              Isi Rumah Harga Ramah
            </span>
          </div>
        </div>

        <div class="item-slick1 item2-slick1" style="background-image: url(<?=base_url()?>assets/img/slider/banner3.jpg);">
          <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="lightSpeedIn">
              Selma By Informa
            </h2>
            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rollIn">
              Isi Rumah Harga Ramah
            </span>
          </div>
        </div>

        <div class="item-slick1 item3-slick1" style="background-image: url(<?=base_url()?>assets/img/slider/bed.jpg);">
          <div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
            <h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="rotateInUpRight">
              Selma By Informa
            </h2>
            <span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="rotateInDownLeft">
              Isi Rumah Harga Ramah
            </span>

          </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- Banner -->
  <section class="banner bgwhite p-t-40 p-b-40">
  
    <div class="container">
      <div class="sec-title p-b-60 p-t-30">
        <h3 class="m-text5 t-center ">
          Latest Promo on Selma By Informa
        </h3>
      </div>
      <div class="row">
        <?php foreach ($katalog as $k) : ?>
        <div class="col-sm-10 col-md-8 col-lg-4">
          <!-- block1 -->
          <div class="block1 hov-img-zoom pos-relative m-b-30">
            <a href="https://www.instagram.com/selma.indonesia/">
              <img src="<?= base_url('assets/img/catalogue/') . $k['image']; ?>" alt="IMG-BENNER">
            </a>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    </section>

  <!-- New Product -->
  <section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="container">
      <div class="sec-title p-b-60">
        <h3 class="m-text5 t-center ">
          Life Style Articles
        </h3>
      </div>

    <div class="col-lg">
        <div class="row">
              <div class="col-md-4 hov-img-zoom">
                <img src="<?=base_url()?>assets/img/articles/1.jpg" class="img-fluid" style="width:350px; height: 200px;">
              </div>
                <div class="col-md-8">
                  <h3><strong>Tips Work Focus With Cozy Room</strong></h3>
                 <p class="text-justify text-turncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus sodales justo nec blandit. Etiam molestie urna sit amet pellentesque volutpat. Nam sem neque, auctor ut lobortis quis, aliquet eu neque. Fusce vestibulum, nisi et elementum porta, ex sem vehicula libero, quis viverra lacus mi quis magna. Sed tincidunt iaculis felis nec ornare. Morbi tincidunt eros ut purus pellentesque, vel eleifend nunc fermentum. Duis vel faucibus sapien.</p><br>
                 <a href="#" class="btn btn-success">Read More</a>
              </div>
        </div>   
      </div><br>

    <div class="col-lg">
      <div class="row">
              <div class="col-md-4 hov-img-zoom">
                <img src="<?=base_url()?>assets/img/articles/2.jpg" class="img-fluid" style="width:350px; height: 200px;">
              </div>
                <div class="col-md-8">
                  <h3><strong>Enjoy Your Time With Family</strong></h3>
                 <p class="text-justify text-turncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus sodales justo nec blandit. Etiam molestie urna sit amet pellentesque volutpat. Nam sem neque, auctor ut lobortis quis, aliquet eu neque. Fusce vestibulum, nisi et elementum porta, ex sem vehicula libero, quis viverra lacus mi quis magna. Sed tincidunt iaculis felis nec ornare. Morbi tincidunt eros ut purus pellentesque, vel eleifend nunc fermentum. Duis vel faucibus sapien.</p><br>
                <a href="#" class="btn btn-success">Read More</a>
              </div>

        </div>   
    </div><br>

      <div class="col-lg">
        <div class="row">
              <div class="col-md-4 hov-img-zoom">
                <img src="<?=base_url()?>assets/img/articles/4.jpg" class="img-fluid" style="width:350px; height: 200px;">
              </div>
                <div class="col-md-8">
                  <h3><strong>Cook Fun, Have Fun</strong></h3>
                 <p class="text-justify text-turncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus sodales justo nec blandit. Etiam molestie urna sit amet pellentesque volutpat. Nam sem neque, auctor ut lobortis quis, aliquet eu neque. Fusce vestibulum, nisi et elementum porta, ex sem vehicula libero, quis viverra lacus mi quis magna. Sed tincidunt iaculis felis nec ornare. Morbi tincidunt eros ut purus pellentesque, vel eleifend nunc fermentum. Duis vel faucibus sapien.</p><br>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
        </div>   
      </div>
    </div>
  </section>

  <section class="bgwhite p-t-45 p-b-105">
    <div class="container">
      <div class="sec-title p-b-60">
        <h3 class="m-text5 t-center">
          Selma By Informa Events
        </h3>
      </div>

      <div class="wrap-slick2">
        <div class="slick2">
          <div class="item-slick2 p-l-15 p-r-15">
            <!-- Block2 -->
            <div class="block2">
              <div class="block2-img wrap-pic-w of-hidden pos-relative">
                <figure class="figure">
                  <img src="<?=base_url()?>assets/img/articles/7.jpg" class="figure-img img-fluid rounded">
                  <figcaption class="figure-caption text-center"><strong>Super Sale Selma Discount</strong></figcaption>
                </figure>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15">
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                 <figure class="figure">
                  <img src="<?=base_url()?>assets/img/articles/6.jpg" class="figure-img img-fluid rounded" style="height:260px;">
                  <figcaption class="figure-caption text-center"><strong>Grand Opening Selma</strong></figcaption>
                </figure>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15">
            <div class="block2">
              <div class="block2-img wrap-pic-w of-hidden pos-relative">
                 <figure class="figure">
                  <img src="<?=base_url()?>assets/img/articles/8.jpg" class="figure-img img-fluid rounded">
                  <figcaption class="figure-caption text-center"><strong>Super Sale Selma Discount</strong></figcaption>
                </figure>              
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15">
            <div class="block2">
              <div class="block2-img wrap-pic-w of-hidden pos-relative">
                 <figure class="figure">
                  <img src="<?=base_url()?>assets/img/articles/9.jpg" class="figure-img img-fluid rounded" style="height:260px;">
                  <figcaption class="figure-caption text-center"><strong>Media Gathering</strong></figcaption>
                </figure>
              </div>
            </div>
          </div>

          <div class="item-slick2 p-l-15 p-r-15">
          <div class="block2">
            <div class="block2-img wrap-pic-w of-hidden pos-relative">
                 <figure class="figure">
                  <img src="<?=base_url()?>assets/img/articles/7.jpg" class="figure-img img-fluid rounded">
                  <figcaption class="figure-caption text-center"><strong>Super Sale Selma Discount</strong></figcaption>
                </figure>
              </div>
            </div>
          </div>

          </div>
        </div>
      </div>
    </div>
  </section>
