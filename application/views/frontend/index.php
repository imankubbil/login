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
        <h3 class="m-text5 t-center display-4">
          Life Style Articles
        </h3>
      </div>

      <div class="row">
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
                <img src="<?=base_url()?>assets/img/articles/1.jpg" class="img-fluid" style="width:350px; height: 200px;">
              </div>
                <div class="col-md-8">
                  <h3><strong>Tips Work Focus With Cozy Room</strong></h3>
                 <p class="text-justify text-turncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus sodales justo nec blandit. Etiam molestie urna sit amet pellentesque volutpat. Nam sem neque, auctor ut lobortis quis, aliquet eu neque. Fusce vestibulum, nisi et elementum porta, ex sem vehicula libero, quis viverra lacus mi quis magna. Sed tincidunt iaculis felis nec ornare. Morbi tincidunt eros ut purus pellentesque, vel eleifend nunc fermentum. Duis vel faucibus sapien.</p><br>
                 <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
        </div>   
      </div><br>

      <div class="row">
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
                <img src="<?=base_url()?>assets/img/articles/2.jpg" class="img-fluid" style="width:350px; height: 200px;">
              </div>
                <div class="col-md-8">
                  <h3><strong>Enjoy Your Time With Family</strong></h3>
                 <p class="text-justify text-turncate">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dapibus sodales justo nec blandit. Etiam molestie urna sit amet pellentesque volutpat. Nam sem neque, auctor ut lobortis quis, aliquet eu neque. Fusce vestibulum, nisi et elementum porta, ex sem vehicula libero, quis viverra lacus mi quis magna. Sed tincidunt iaculis felis nec ornare. Morbi tincidunt eros ut purus pellentesque, vel eleifend nunc fermentum. Duis vel faucibus sapien.</p><br>
                <a href="#" class="btn btn-success">Read More</a>
              </div>
            </div>
          </div>
        </div>   
      </div><br>

      <div class="row">
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <div class="col-md-4">
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

  <!-- Banner2 -->
  <section class="banner2 bg5 p-t-55 p-b-55">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
          <div class="hov-img-zoom pos-relative">
            <img src="images/banner-08.jpg" alt="IMG-BANNER">

            <div class="ab-t-l sizefull flex-col-c-m p-l-15 p-r-15">
              <span class="m-text9 p-t-45 fs-20-sm">
                The Beauty
              </span>

              <h3 class="l-text1 fs-35-sm">
                Lookbook
              </h3>

              <a href="#" class="s-text4 hov2 p-t-20 ">
                View Collection
              </a>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-8 col-lg-6 m-l-r-auto p-t-15 p-b-15">
          <div class="bgwhite hov-img-zoom pos-relative p-b-20per-ssm">
            <img src="images/shop-item-09.jpg" alt="IMG-BANNER">

            <div class="ab-t-l sizefull flex-col-c-b p-l-15 p-r-15 p-b-20">
              <div class="t-center">
                <a href="product-detail.html" class="dis-block s-text3 p-b-5">
                  Gafas sol Hawkers one
                </a>

                <span class="block2-oldprice m-text7 p-r-5">
                  $29.50
                </span>

                <span class="block2-newprice m-text8">
                  $15.90
                </span>
              </div>

              <div class="flex-c-m p-t-44 p-t-30-xl">
                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                  <span class="m-text10 p-b-1 days">
                    69
                  </span>

                  <span class="s-text5">
                    days
                  </span>
                </div>

                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                  <span class="m-text10 p-b-1 hours">
                    04
                  </span>

                  <span class="s-text5">
                    hrs
                  </span>
                </div>

                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                  <span class="m-text10 p-b-1 minutes">
                    32
                  </span>

                  <span class="s-text5">
                    mins
                  </span>
                </div>

                <div class="flex-col-c-m size3 bo1 m-l-5 m-r-5">
                  <span class="m-text10 p-b-1 seconds">
                    05
                  </span>

                  <span class="s-text5">
                    secs
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Blog -->
  <section class="blog bgwhite p-t-94 p-b-65">
    <div class="container">
      <div class="sec-title p-b-52">
        <h3 class="m-text5 t-center">
          Our Blog
        </h3>
      </div>

      <div class="row">
        <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
          <!-- Block3 -->
          <div class="block3">
            <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
              <img src="images/blog-01.jpg" alt="IMG-BLOG">
            </a>

            <div class="block3-txt p-t-14">
              <h4 class="p-b-7">
                <a href="blog-detail.html" class="m-text11">
                  Black Friday Guide: Best Sales & Discount Codes
                </a>
              </h4>

              <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
              <span class="s-text6">on</span> <span class="s-text7">July 22, 2017</span>

              <p class="s-text8 p-t-16">
                Duis ut velit gravida nibh bibendum commodo. Sus-pendisse pellentesque mattis augue id euismod. Inter-dum et malesuada fames
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
          <!-- Block3 -->
          <div class="block3">
            <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
              <img src="images/blog-02.jpg" alt="IMG-BLOG">
            </a>

            <div class="block3-txt p-t-14">
              <h4 class="p-b-7">
                <a href="blog-detail.html" class="m-text11">
                  The White Sneakers Nearly Every Fashion Girls Own
                </a>
              </h4>

              <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
              <span class="s-text6">on</span> <span class="s-text7">July 18, 2017</span>

              <p class="s-text8 p-t-16">
                Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit ame
              </p>
            </div>
          </div>
        </div>

        <div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
          <!-- Block3 -->
          <div class="block3">
            <a href="blog-detail.html" class="block3-img dis-block hov-img-zoom">
              <img src="images/blog-03.jpg" alt="IMG-BLOG">
            </a>

            <div class="block3-txt p-t-14">
              <h4 class="p-b-7">
                <a href="blog-detail.html" class="m-text11">
                  New York SS 2018 Street Style: Annina Mislin
                </a>
              </h4>

              <span class="s-text6">By</span> <span class="s-text7">Nancy Ward</span>
              <span class="s-text6">on</span> <span class="s-text7">July 2, 2017</span>

              <p class="s-text8 p-t-16">
                Proin nec vehicula lorem, a efficitur ex. Nam vehicula nulla vel erat tincidunt, sed hendrerit ligula porttitor. Fusce sit amet maximus nunc
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Instagram -->
  <section class="instagram p-t-20">
    <div class="sec-title p-b-52 p-l-15 p-r-15">
      <h3 class="m-text5 t-center">
        @ follow us on Instagram
      </h3>
    </div>

    <div class="flex-w">
      <!-- Block4 -->
      <div class="block4 wrap-pic-w">
        <img src="images/gallery-03.jpg" alt="IMG-INSTAGRAM">

        <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
          <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
            <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
            <span class="p-t-2">39</span>
          </span>

          <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
            <p class="s-text10 m-b-15 h-size1 of-hidden">
              Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
            </p>

            <span class="s-text9">
              Photo by @nancyward
            </span>
          </div>
        </a>
      </div>

      <!-- Block4 -->
      <div class="block4 wrap-pic-w">
        <img src="images/gallery-07.jpg" alt="IMG-INSTAGRAM">

        <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
          <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
            <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
            <span class="p-t-2">39</span>
          </span>

          <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
            <p class="s-text10 m-b-15 h-size1 of-hidden">
              Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
            </p>

            <span class="s-text9">
              Photo by @nancyward
            </span>
          </div>
        </a>
      </div>

      <!-- Block4 -->
      <div class="block4 wrap-pic-w">
        <img src="images/gallery-09.jpg" alt="IMG-INSTAGRAM">

        <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
          <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
            <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
            <span class="p-t-2">39</span>
          </span>

          <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
            <p class="s-text10 m-b-15 h-size1 of-hidden">
              Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
            </p>

            <span class="s-text9">
              Photo by @nancyward
            </span>
          </div>
        </a>
      </div>

      <!-- Block4 -->
      <div class="block4 wrap-pic-w">
        <img src="images/gallery-13.jpg" alt="IMG-INSTAGRAM">

        <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
          <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
            <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
            <span class="p-t-2">39</span>
          </span>

          <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
            <p class="s-text10 m-b-15 h-size1 of-hidden">
              Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
            </p>

            <span class="s-text9">
              Photo by @nancyward
            </span>
          </div>
        </a>
      </div>

      <!-- Block4 -->
      <div class="block4 wrap-pic-w">
        <img src="images/gallery-15.jpg" alt="IMG-INSTAGRAM">

        <a href="#" class="block4-overlay sizefull ab-t-l trans-0-4">
          <span class="block4-overlay-heart s-text9 flex-m trans-0-4 p-l-40 p-t-25">
            <i class="icon_heart_alt fs-20 p-r-12" aria-hidden="true"></i>
            <span class="p-t-2">39</span>
          </span>

          <div class="block4-overlay-txt trans-0-4 p-l-40 p-r-25 p-b-30">
            <p class="s-text10 m-b-15 h-size1 of-hidden">
              Nullam scelerisque, lacus sed consequat laoreet, dui enim iaculis leo, eu viverra ex nulla in tellus. Nullam nec ornare tellus, ac fringilla lacus. Ut sit amet enim orci. Nam eget metus elit.
            </p>

            <span class="s-text9">
              Photo by @nancyward
            </span>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- Shipping -->
  <section class="shipping bgwhite p-t-62 p-b-46">
    <div class="flex-w p-l-15 p-r-15">
      <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
        <h4 class="m-text12 t-center">
          Free Delivery Worldwide
        </h4>

        <a href="#" class="s-text11 t-center">
          Click here for more info
        </a>
      </div>

      <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
        <h4 class="m-text12 t-center">
          30 Days Return
        </h4>

        <span class="s-text11 t-center">
          Simply return it within 30 days for an exchange.
        </span>
      </div>

      <div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
        <h4 class="m-text12 t-center">
          Store Opening
        </h4>

        <span class="s-text11 t-center">
          Shop open from Monday to Sunday
        </span>
      </div>
    </div>
  </section>