<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Aplikasi Login <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to Log Out.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<script src="<?= base_url('assets/'); ?>js/boostrap-datepicker.js"></script>
<script src="<?= base_url('assets/'); ?>swal/sweetalert2.all.min.js"></script>
<script src="<?= base_url('assets/'); ?>js/script.js"></script>
<script src="<?= base_url('assets/js/dataTables/datatables.min.js') ?>"></script>

<script>
    $(document).ready( function () {
        $('#tabel_data_pelamar').DataTable();
    } );
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },

            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        })

    });

    $('.edit_menu_manajemen').on('click', function() {
      const id_menu = $(this).data('id_menu');
      const menu = $(this).data('menu');
      $('#id_menu').val(id_menu);
      $('#menuedit').val(menu);
      $('#exampleModalCenter').modal('show');
    });

    function myFunction() {
      var input, filter, table, tr, td, i, txtValue;
      input = document.getElementById("myInput");
      filter = input.value.toUpperCase();
      table = document.getElementById("myTable");
      tr = table.getElementsByTagName("tr");
      for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1) {
            tr[i].style.display = "";
          } else {
            tr[i].style.display = "none";
          }
        }       
      }
    }

    // $('#upload_file').on('submit', function(e){
    //   e.preventDefault();

    //   Swal.fire({
    //     title:'Apakah anda yakin?',
    //     text:"Data ingin disimpan",
    //     type:'warning',
    //     showCancelButton: true,
    //     confirmButtonColor: '#3085d6',
    //     cancelButtonColor: '#d33',
    //     confirmButtonText: 'Simpan Data!'
    //   }).then((result) => {
    //     if(result.value) {
    //       $.ajax({
    //         url: '<?=base_url('Career/uploadFile')?>',
    //         type: 'POST',
    //         // data : new FormData($('#upload_file')[0]),
    //         contentType : false,
    //         cache : false,
    //         // dataType : 'JSON';
    //         success : function(response) {
    //           console.log(response);
    //         }
    //       });
    //       // $.ajax({
    //       //  url: '<?= base_url() ?>Career/uploadFile',
    //       //  method: 'POST',
    //       //  data: new FormData(),
    //       //  dataType: 'JSON',
    //       //  success: function(response){
    //       //   console.log(response);
    //       //  }
    //       // })
    //     }
    //   });
    // });

    // Membuat fill form hide dan ubah background Personal
    // $(document).ready(function() {
    //     const show_edit = $('#show_edit').val();


    //     if (show_edit != undefined && show_edit != null && show_edit != "") {
    //         $('#ket_personal').show();
    //         $('#edit_personal').show();
    //         $('#fill_personal').hide();
    //         $("tr[id='personal_data']").css("background-color", "#b4f2a2");
    //     }



    //     // untuk cek data apakah sudah diisi belum
    //     ada_data();

    //     function ada_data() {
    //         $.ajax({
    //             type: 'ajax',
    //             url: '<?= base_url() ?>career/cekData',
    //             async: true,
    //             method: "POST",
    //             dataType: 'json',
    //             contentType: "application/json",
    //             success: function(data) {
    //                 console.log(data);
    //                 // cara ambil data berdasarkan id
    //                 // var id = data.personal['id'];
    //                 if (data.personal == null || data.personal == "") {
    //                     // console.log("hasil null");
    //                     $('#fill_personal').show();
    //                 } else {
    //                     // console.log("data ada");
    //                     $('#ket_personal').show();
    //                     $('#fill_personal').hide();
    //                     $('#edit_personal').show();
    //                     $("tr[id='personal_data']").css("background-color", "#b4f2a2");
    //                 }

    //                 // if(data.personal != null){
    //                 //     $('#edit_form').html(`<a href="<?= base_url() ?>career/personalEdit/`+id+`" class="btn btn-warning" id="edit_personal" style="display:none;">Edit Form</a>`)
    //                 // }
    //             }
    //         });
    //     }
    // });

    // membuat datepicker berdasarkan tahun saja
    $("#datepicker").datepicker({
        format: "yyyy",
        // startView: 'decade',
        // minView: 'decade',
        viewMode: "years",
        minViewMode: "years"
    });

    // Pengaturan untuk form work history
    $("#tambah").on('click', function() {
        $("#dua").show();
        $("#hapus").show();
        // $("#btn_work_history").hide();
        $("#form_kedua").append(`<hr style="border:1px solid;"><div class="form-row">
                                   <div class="form-group col-lg-12">
                                       <input type="email" id="email" name="email" class="form-control" value="<?= $user['email']; ?>" hidden><?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="nama_perusahaan"><strong>Nama Perusahaan</strong></label>
                                       <input type="text" id="nama_perusahaan" name="nama_perusahaan" class="form-control" placeholder="Nama Perusahaan" value="<?= set_value('nama_perusahaan'); ?>"><?= form_error('nama_perusahaan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>

                                   <div class=col-md-3>
                                       <label for="awal_kerja"><strong>Awal Periode Kerja</strong></label>
                                       <div class="input-group">
                                           <input type="date" name="awal_kerja" class="form-control" placeholder="Mulai" value="<?= set_value('awal_kerja'); ?>">
                                           <div class="input-group-append">
                                               <button class="btn btn-primary" type="button">
                                                   <i class="fas fa-calendar-alt"></i>
                                               </button>
                                           </div>
                                       </div>
                                       <?= form_error('awal_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class=col-md-3>
                                       <label for="akhir_kerja"><strong>Akhir Periode Kerja</strong></label>
                                       <div class="input-group">
                                           <input type="date" name="akhir_kerja" class="form-control" placeholder="Berakhir" value="<?= set_value('akhir_kerja'); ?>">
                                           <div class="input-group-append">
                                               <button class="btn btn-primary" type="button">
                                                   <i class="fas fa-calendar-alt"></i>
                                               </button>
                                           </div>
                                       </div>
                                       <?= form_error('akhir_kerja', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="jabatan"><strong>Jabatan Terakhir</strong></label>
                                       <input type="text" id="jabatan" name="jabatan" class="form-control" placeholder="Jabatan" value="<?= set_value('jabatan'); ?>"><?= form_error('jabatan', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="gaji"><strong>Gaji Terakhir</strong></label>
                                       <input type="text" id="gaji" name="gaji" class="form-control" placeholder="Gaji" value="<?= set_value('gaji'); ?>"><?= form_error('gaji', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-6">
                                       <label for="alasan_pindah"><strong>Alasan Pindah</strong></label>
                                       <input type="text" id="alasan_pindah" name="alasan_pindah" class="form-control" placeholder="Alasan Pindah" value="<?= set_value('alasan_pindah'); ?>"><?= form_error('alasan_pindah', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                   <div class="form-group col-md-12">
                                       <label for="job_desk"><strong>Job Desk</strong></label>
                                       <textarea class="form-control" name="job_desk" id="job_desk" value="<?= set_value('job_desk'); ?>"></textarea><?= form_error('job_desk', '<small class="text-danger pl-3">', '</small>'); ?>
                                   </div>
                                </div>`);
        $("#tambah").hide();
    });

    $("#hapus").on('click', function() {
        $("#dua").hide();
        $("#btn_work_history").show();
        $("#back").show();
        $("#hapus").hide();
        $("#form_kedua").hide();


    });

    // untuk radio button status pernikahan
    $('#inlineRadio1').on('click', function() {
        $('#pasangan').show();
        $('#anak').show();
        $('#nama_pasangan').attr("disabled", false);
    });
    $('#inlineRadio2').on('click', function() {
        $('#pasangan').hide();
        $('#anak').hide();
    });
    $('#inlineRadio3').on('click', function() {
        $('#anak').show();
        $('#pasangan').show();
        // $("#nama_pasangan").prop("readonly", true);
        $('#nama_pasangan').attr("disabled", true);
    });


    // untuk checkbox pertanyaan
    $("input:checkbox").on('click', function(){
      var $box = $(this);
      // console.log(value)
      if($box.is(":checked")) {
        var group ="input:checkbox[name='" + $box.attr("name") + "']";

          $(group).prop("checked", false);
          $box.prop("checked", true);
      } else {
          $box.prop("checked", false);
      }
    });
// validasi checkbox dengan alert
function validate() {
  var chks = document.getElementsByName('a[]');
  var hasChecked = false;
  for (var i = 0; i < chks.length; i++) {
    if (chks[i].checked) {
    hasChecked = true;
    break;
    }
  }

  if (hasChecked == false){
    // alert("Please Select True Answer");
    Swal.fire('Please Select True Answer');
    return false;
  }

  return true;
}


</script>

</body>

</html>