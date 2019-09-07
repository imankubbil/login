       <div class="container-fluid">
       	<h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
       	<div class="row">
       		<div class="col-lg">
       			<div class="card border-danger">
                                   <form action="<?= base_url('Personalia/editPsikotest'); ?>" method="post" onSubmit="return validate()">
                                          <div class="card-body text-danger">
                                                 <?php echo validation_errors(); ?>
                                                 <div class="row" id="edit_pertanyaan">
                                                        <div class="form-group col-md-10">
                                                               <label for="question"><strong>Pertanyaan</strong></label>
                                                               <textarea class="form-control" name="question" id="question" required><?= $data['question']; ?></textarea>
                                                        </div>

                                                        <div class="form-group col-md-2" style="bottom: -35px;">
                                                               <button type="button" title="Edit" class="btn btn-primary btn-lg btn-block edit"> Edit </button>
                                                        </div>
                                                 </div>
                                                        <?= form_error('pertanyaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                                        <br>
                                                        <?php foreach ($data['answer'] as $answer) :?>
                                                               <div class="form-group row">
                                                                      <div class="col-md-1">
                                                                             <div class="form-check">
                                                                                    <div class="custom-control custom-checkbox large">
                                                                                           <input type="checkbox" name="a[]" class="custom-control-input" id="<?=$answer['id_answer']?>" <?php if ($answer['status'] == 1) { echo 'checked' ;}?> value="<?=$answer['id_answer']."-".$answer['urutan']?>">
                                                                                           <label class="custom-control-label" for="<?=$answer['id_answer']?>"><strong><?= $answer['urutan']; ?></strong> </label>
                                                                                    </div>
                                                                             </div>                                                       
                                                                      </div>
                                                                      <div class="col-md-9">
                                                                             <textarea name="jawaban[]" class="form-control satu" required><?= $answer['jawaban']; ?></textarea>
                                                                             <?= form_error('jawaban[]', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>

                                                                      <div class="form-group col-md-2" style="bottom: -5px;">
                                                                      <button type="button" title="Edit" class="btn btn-primary btn-lg btn-block edit"> Edit </button>
                                                                      </div>
                                                               </div>

                                                               
                                                        <?php endforeach; ?>
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
</div>
</div>
</div>
