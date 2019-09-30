       <!-- Begin Page Content -->
       <div class="container-fluid">

       	<!-- Page Heading -->
       	<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>

       	<div class="row">
           <div class="col-lg">
            <div class="card">
             <div class="card-body">
              <form action="<?= base_url('personalia/addPsikotest'); ?>" method="post" id="form_psikotest" onSubmit="return validate()">
               <div class="form-group col-md-12">
                <label for="peranyaan"><strong>Pertanyaan</strong></label>

                <textarea class="form-control" name="pertanyaan" id="pertanyaan" placeholder="Masukan pertanyaan" value="<?= set_value('pertanyaan'); ?>"></textarea><?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
                <br>
                <div class="form-group row">
                  <div class="col-md-1">
                    <div class="form-check">
                     <div class="custom-control custom-checkbox large">
                      <input type="checkbox" name="a[]" class="custom-control-input" id="a" value="A">
                      <label class="custom-control-label" for="a"><strong>A</strong> </label>
                    </div>
                  </div>                                                       
                </div>
                <div class="col-md-11">
                  <textarea name="satu" class="form-control satu"></textarea>
                  <?= form_error('satu', '<small class="text-danger pl-3">', '</small>'); ?>   
                </div>
              </div>
              <div class="form-group row">
                <div class="col-md-1">
                 <div class="form-check">
                   <div class="custom-control custom-checkbox large">
                    <input type="checkbox" name="a[]" class="custom-control-input" id="b" value="B">
                    <label class="custom-control-label" for="b"><strong>B</strong></label>
                  </div>
                </div>                                                          
              </div>
              <div class="col-md-11">
                <textarea name="dua" class="form-control dua"></textarea>
                <?= form_error('dua', '<small class="text-danger pl-3">', '</small>'); ?>   
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-1">
                <div class="form-check">
                 <div class="custom-control custom-checkbox large">
                   <input type="checkbox" name="a[]" class="custom-control-input" id="c" value="C">
                   <label class="custom-control-label" for="c"><strong>C</strong></label>
                 </div>
               </div> 
             </div>
             <div class="col-md-11">
              <textarea name="tiga" class="form-control tiga"></textarea> 
              <?= form_error('tiga', '<small class="text-danger pl-3">', '</small>'); ?>  
            </div>
          </div>
          <div class="form-group row">
            <div class="col-md-1">
              <div class="form-check">
               <div class="custom-control custom-checkbox large">
                <input type="checkbox" name="a[]" class="custom-control-input" id="d" value="D">
                <label class="custom-control-label" for="d"><strong>D</strong> </label>
              </div>
            </div> 
          </div>
          <div class="col-md-11">
            <textarea name="empat" class="form-control empat"></textarea> 
            <?= form_error('empat', '<small class="text-danger pl-3">', '</small>'); ?>  
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-1">
            <div class="form-check">
             <div class="custom-control custom-checkbox large">
              <input type="checkbox" name="a[]" class="custom-control-input radio" id="e" value="E">
              <label class="custom-control-label" for="e"><strong>E</strong> </label>
            </div>
          </div> 
        </div>
        <div class="col-md-11">
          <textarea name="lima" class="form-control lima"></textarea> 
        </div>
      </div>
    </div>

    <div class="form-group row justify-content-end">
      <div class="col-sm-10">
        <button type="submit" class="btn btn-primary btn-lg" id="btn_psikotest"><i class="far fa-paper-plane"></i> Submit</button>
        <a class="btn btn-warning btn-lg" href="<?= base_url('Personalia/psikotestData'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>
      </div>
    </div>

    
  </form>
  
</div>
</div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 