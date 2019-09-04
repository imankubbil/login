       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

           <div class="row">
               <div class="col-lg-8">
                   <?= $this->session->flashdata('message'); ?>
               </div>
           </div>

           <div class="card mb-3 col-lg-6">
               <div class="row no-gutters">
                   <div class="col-md-4">
                       <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
                   </div>
                   <div class="col-md-8">
                       <div class="card-body">
                           <p class="card-text text-right"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?></small></p>
                           <table class="table">
                               <tr>
                                   <td>Name : <?= $user['name']; ?></td>
                               </tr>
                               <tr>
                                   <td>Email : <?= $user['email']; ?> </td>
                               </tr>
                           </table>
                       </div>
                   </div>
               </div>
           </div>

       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->