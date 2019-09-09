            <!-- Begin Page Content -->
       <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
         <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>">

         <div class="row">
          <div class="col-lg mt-3">
           <a href="<?= base_url('Personalia/addJobVacancy'); ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add Job Vacancy</a>

         </div>
       </div>

       <div class="row mt-3">
        <div class="col-lg">
          <div class="card">
            <div class="card-body">
              <table class="table table-hover mt-3"> 
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Job Require</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
            <!--  <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
              <tr>
                <th scope="row"><?= $i; ?></th>
                <td><?= $d['question']; ?></td>
                <td><?= $d['jawaban']; ?></td>
                <td><?= $d['name']; ?></td>
                <td><?= $d['date_created']; ?></td>
                
                <td>
                  <a href="<?= base_url(); ?>Personalia/detailPsikotest/<?= $d['id_question']; ?>" class="badge badge-success">Detail</a>
                                 
              	  <a href="<?= base_url(); ?>Personalia/deletePsikotest/<?= $d['id_question']; ?>" class="badge badge-danger">Delete</a>

                </td>
              </tr>
              <?php $i++ ?>
            <?php endforeach; ?> -->
          </tbody>
        </table>

      </div>
    </div>
  </div>
</div>





</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 