       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
           	<div class="row">
           		<div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-primary shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-md font-weight-bold text-primary text-uppercase mb-1">Jumlah User</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-900 pl-4"><?= $data['user']; ?></div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-users fa-2x text-gray-400"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-success shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-md font-weight-bold text-success text-uppercase mb-1">Jumlah Produk</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-800 pl-4"><?= $data['product']; ?></div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-shopping-bag fa-2x text-gray-400"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>

	            <div class="col-xl-3 col-md-6 mb-4">
	              <div class="card border-left-warning shadow h-100 py-2">
	                <div class="card-body">
	                  <div class="row no-gutters align-items-center">
	                    <div class="col mr-2">
	                      <div class="text-md font-weight-bold text-warning text-uppercase mb-1">Jumlah Katalog</div>
	                      <div class="h5 mb-0 font-weight-bold text-gray-900 pl-4"><?= $data['catalogue']; ?></div>
	                    </div>
	                    <div class="col-auto">
	                      <i class="fas fa-book-open fa-2x text-gray-400"></i>
	                    </div>
	                  </div>
	                </div>
	              </div>
	            </div>


           	</div>


       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content --> 