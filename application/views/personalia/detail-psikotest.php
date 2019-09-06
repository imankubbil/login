       <!-- Begin Page Content -->
       <div class="container-fluid">

         <!-- Page Heading -->
         <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>

         <div class="row">
          <div class="col-lg">
           <div class="card">
            <div class="card-body">
              <table>
               <thead>
                <tr>

                 <td>Pertanyaan</td>
                 <!-- <td><?= $question['question']; ?></td> -->
               </tr>
             </thead>
             <tbody>
              <?php $i = 1; ?>
              <?php foreach ($data as $ques) : ?>
               <tr>
                <th scope="row"><?= $i; ?></th>
              </tr>
              <tr>
                <th><?= $ques['question']; ?></th>
              </tr>
              <tr>
                <th><?= $ques['jawaban']; ?></th> 
              </tr>

              <?php $i++ ?>
            <?php endforeach; ?>
          </tbody>
          </table><br>

        <div>
          <a class="btn btn-primary" href="<?= base_url('Personalia/psikotestData'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>

        </div>
      </div>

    </div>

  </div>

</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 