        <div class="container-fluid">
          <div class="container">
            <div class="card border-danger mb-3 col-lg">
              <div class="card-body text-danger">
               <h1 class="card-title text-center"><?= $title; ?></h1>            
                <div class="row mt-4 justify-content-center">
                  <form action="<?= base_url('admin/editusermanagement'); ?>" method="post">
                    <div class="form-row">
                    <input type="text" name="id" value="<?= $data['id'];?>" hidden>
                      <div class="form-group col-md-6">
                       <label for="name"><strong>Nama</strong></label>
                       <input type="text" id="name" class="form-control" value="<?= set_value('name', $data['name']); ?>" readonly>
                      </div>
                      <div class="form-group col-md-6">
                         <label for="email"><strong>Email</strong></label>
                         <input type="text" id="email" class="form-control" value="<?= set_value('email', $data['email']); ?>" readonly>
                      </div>

                      <div class="form-group col-md-6">
                         <label for="role_id"><strong>Role ID</strong></label>
                         <select class="form-control" name="role_id" id="role_id">
                           <option value="1" <?php if ($data['role_id'] == "1") {
                            echo "selected=selected";
                          } ?>>1</option>
                          <option value="2" <?php if ($data['role_id'] == "2") {
                            echo "selected=selected";
                          } ?>>2</option>
                          </select>
                      </div>

                      <div class="form-group col-md-6">
                         <label for="is_active"><strong>Is Active</strong></label>
                         <select class="form-control" name="is_active" id="is_active">
                           <option value="0" <?php if ($data['is_active'] == "0") {
                            echo "selected=selected";
                          } ?>>0</option>
                          <option value="1" <?php if ($data['is_active'] == "1") {
                            echo "selected=selected";
                          } ?>>1</option>
                          </select>
                      </div>

                      <div class="form-group col-md-4 mt-3">
                       <button type="submit" name="submit" class="btn btn-primary" id="btn_education"><i class="far fa-paper-plane"></i> Edit Data</button>
                       <a class="btn btn-warning" href="<?= base_url('admin/usermanagement'); ?>" role="button"><i class="fas fa-undo"></i> Back</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>