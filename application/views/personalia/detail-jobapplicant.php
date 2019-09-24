       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
           	<div class="row">
           		<div class="card mb-3 col-lg">
               <div class="row no-gutters">
                   <div class="col-md-4">
                       <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img mt-2" style="width: 200px; height: 200px;">
                   </div>
                   <div class="col-md-8">
                       <div class="card-body">
                           <p class="card-text text-center">Nilai Psikotest</p>
                           <table class="table">
                               <tr>
                                   <td><?= print_r($data['allpersonal']); ?></td>
                               </tr>
                           </table>
                       </div>
                   </div>
               </div>
           </div>
     
        </div>


       </div>
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content --> 