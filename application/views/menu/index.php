       <!-- Begin Page Content -->
       <div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
           <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">
                 </div>

           <div class="row">
               <div class="col-lg-6">
                   <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
                   <!-- <?= $this->session->flashdata('message'); ?> -->

                   <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Menu</a>

                   <div class="table-responsive">
                   <table class=" table table-hover" id="tabel_data_pelamar">
                       <thead>
                           <tr>
                               <th scope="col">#</th>
                               <th scope="col">Menu</th>
                               <th scope="col">Action</th>
                           </tr>
                       </thead>
                       <tbody>
                           <?php $i = 1; ?>
                           <?php foreach ($menu as $m) : ?>
                           <tr>
                               <th scope="row"><?= $i; ?></th>
                               <td><?= $m['menu']; ?></td>
                               <td>
                                  <button type="button" class="badge badge-success edit_menu_manajemen" title="Edit" data-menu="<?=$m['menu']?>" data-id_menu="<?=$m['id']?>"> Edit </button>
                                   <a href="<?= base_url(); ?>menu/menuDelete/<?= $m['id']; ?>" role="button" class="badge badge-danger tombol-hapus"> Delete </a>
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
       <!-- /.container-fluid -->

       </div>
       <!-- End of Main Content -->

       <!-- Modal edit -->
       <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Edit Menu Management</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="<?= base_url('menu/menuEdit/'); ?>" method="post">
            <div class="modal-body">
              <input type="hidden" name="id" id="id_menu" value="">
              <div class="form-group">
                <input type="text" name="menu" class="form-control" id="menuedit" value="" >  
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
          </div>
        </div>
      </div>

       <!-- Modal add -->
       <div class="modal fade" id="newMenuModal" tabindex="-1" role="dialog" aria-labelledby="newMenuModalLabel" aria-hidden="true">
           <div class="modal-dialog" role="document">
               <div class="modal-content">
                   <div class="modal-header">
                       <h5 class="modal-title" id="newMenuModalLabel">Add New Menu</h5>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                           <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                   <form action="<?= base_url('menu'); ?>" method="post">
                       <div class="modal-body">
                           <div class="form-group">
                               <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
                           </div>
                       </div>
                       <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                           <button type="submit" class="btn btn-primary">Add</button>
                       </div>
                   </form>
               </div>
           </div>
       </div> 
