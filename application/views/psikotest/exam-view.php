       <div class="container-fluid">
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
           <div class="row">
               <div class="col-lg">
                   <div class="card">
                       <div class="card-body">
                           <?= form_open('career/exam'); ?>
                           <ul class="list-group list-group-flush">
                               <input type="text" name="email" value="<?= $user['email'] ?>" hidden>
                               <input type="text" name="count" value="<?= $count_question ?>" hidden>
                               <?php $no = 1;
                                foreach ($question as $ques) : ?>
                                   <li class="list-group-item"><?= $no ?>.) <?= $ques['question'] ?></li>
                                   <?php
                                        $CI = &get_instance();
                                        $jawaban = $CI->db->get_where('answer', ['id_question' => $ques['id_question']])->result_array();
                                        foreach ($jawaban as $jwb) {
                                            echo '  <ul class="list-group list-group-flush">
                                                            <li class="list-group-item">
                                                                <div class="form-check">
                                                                    <input type="radio" name="' . $no . 'jawaban" class="form-check-input" id="' . $jwb['id_question'] . $jwb['urutan'] . '" value="' . $jwb['id_answer'] . '-' . $jwb['id_question'] . '-' . $jwb['urutan'] . '">
                                                                    <label class="form-check-label" for="' . $jwb['id_question'] . $jwb['urutan'] . '">' . $jwb['urutan'] . '. ' . $jwb['jawaban'] . '</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    ';
                                        }
                                        ?>
                               <?php $no++;
                                endforeach; ?>
                           </ul>
                           <button type="submit" class="btn btn-primary">Simpan</button>
                           <?= form_close(); ?>
                       </div>
                   </div>
               </div>
           </div>
       </div>
       </div>