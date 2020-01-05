       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
              <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
                     <div class="row mt-3">
                      <div class="col-lg">
                       <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table table-hover mt-3" id="tabel_data_pelamar"> 
                                   <thead>
                                    <tr>
                                          <th>#</th>
                                          <th>Name</th>
                                          <th>Email</th>
                                          <th>Role Id</th>
                                          <th>Is Active</th>
                                          <th>Created</th>
                                          <th>Image</th>
                                          <th>Action</th>
                                   </tr>
                                   </thead>
                                   <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($data as $d) : ?>
                                   <tr>
                                      <th scope="row"><?= $i; ?></th>
                                      <td><?= $d['name']; ?></td>
                                      <td><?= $d['email']; ?></td>
                                      <td><?= $d['role_id']; ?></td>
                                      <td><?= $d['is_active']; ?></td>
                                      <td><?= date('d F Y', $d['date_created']); ?></td>
                                      <td><a href="<?= base_url('assets/img/profile/') . $d['image']; ?>" title="">
                                         <img src="<?= base_url('assets/img/profile/') . $d['image']; ?>" class="img-thumbnail" style="height: 150px; width: 150px;">
                                        </a>
                                        </td>
                                       <td>
                                       <a href="<?= base_url(); ?>Admin/editusermanagement/<?= $d['id']; ?>" class="badge badge-warning">Edit</a>              
                                       <a href="<?= base_url(); ?>Admin/deleteUserManagement/<?= $d['id']; ?>" class="badge badge-danger tombol-hapus">Delete</a>

                                       </td>
                                   </tr>
                                   <?php $i++ ?>
                                   <?php endforeach; ?>
                                   </tbody>
                            </table>
                                   
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