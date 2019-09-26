       <!-- Begin Page Content -->
<div class="container-fluid">

           <!-- Page Heading -->
           <h1 class="h3 mb-4 text-gray-800 text-center"><?= $title; ?></h1>
           	<div class="row">
           		<div class="card mb-3 col-lg">
               <div class="row no-gutters">
                   <div class="col-md-4">
                       <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img mt-3 ml-4" style="width: 200px; height: 200px;">
                   </div>
                   <div class="col-md-8">
                       <div class="card-body">
                           <h3 class="card-text text-center">Info Umum</h3>
                           <table class="table">
                               <tr>
                               		<th>Nilai Psikotest</th>
                               		<th>: <?=$data['user_psikotest']['nilai_psikotest']; ?></th>
                                   
                               </tr>
                               <tr>
		               				<th>Jabatan Yang Dilamar</th>
		               				<th>: <?= getJobRequire($data['user_jobvacancy']['id_jobvacancy']) ?></th>
		               			</tr>
		               			<tr>
		               				<th>Tanggal Pendaftaran</th>
		               				<th>: <?= date('d F Y', $user['date_created']); ?></th>

		               			</tr>
                           </table>
                       </div>
                   </div>
              </div><hr>

               <div class="table-responsive">
		               <div class="col-lg-10">
			               	<table class="table table-hover table-bordered mt-4 ml-4">
			               			<h3 class="ml-4">Data Diri : </h3>
			               			<tr>
			               				<th style="width: 300px;">Nama Lengkap</th>
			               				<th>: <?= $data['allpersonal']['nama']; ?></th>
			               			</tr>
			               		    <tr>
			               				<th>Panggilan</th>
			               				<th>: <?= $data['allpersonal']['panggilan']; ?> </th>
			               			</tr>
			               			<tr>
			               				<th>Jenis Kelamin</th>
			               				<th>: <?= $data['allpersonal']['gender']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Tempat Lahir</th>
			               				<th>: <?= $data['allpersonal']['tempat']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Tanggal Lahir</th>
			               				<th>: <?= $data['allpersonal']['ttl']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Umur</th>
			               				<th>: <?= $data['allpersonal']['umur']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Agama</th>
			               				<th>: <?= $data['allpersonal']['agama']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>No HP</th>
			               				<th>: <?= $data['allpersonal']['telp']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Alamat</th>
			               				<th>: <?= $data['allpersonal']['alamat']; ?></th>
			               			</tr>


			               	</table>

			               	<table class="table table-hover table-bordered mt-4 ml-4">
			               		<h3 class="ml-4">Pendidikan Terakhir : </h3>
			               			<tr>
			               				<th style="width: 300px;">Jenjang</th>
			               				<th>: <?= $data['education']['jenjang']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Tempat</th>
			               				<th>: <?= $data['education']['tempat']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Jurusan</th>
			               				<th>: <?= $data['education']['jurusan']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Nilai Akhir</th>
			               				<th>: <?= $data['education']['nilai']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Tahun Lulus</th>
			               				<th>: <?= $data['education']['tahun_lulus']; ?></th>
			               			</tr>
			               	</table>

			               	<table class="table table-hover table-bordered mt-4 ml-4">
			               		<h3 class="ml-4">Riwayat Pekerjaan : </h3>
			               			<tr>
			               				<th style="width: 300px;">Nama Perusahaan</th>
			               				<th>: <?= $data['work_history']['nama_perusahaan']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Jabatan</th>
			               				<th>: <?= $data['work_history']['jabatan']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Alasan Pindah</th>
			               				<th>: <?= $data['work_history']['alasan_pindah']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Periode</th>
			               				<th>: <?= $data['work_history']['awal_kerja'];?> / <?= $data['work_history']['akhir_kerja']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Deskripsi</th>
			               				<th>: <?= $data['work_history']['job_desk']; ?></th>
			               			</tr>
			               	</table>

			               	<table class="table table-hover table-bordered mt-4 ml-4">
			               		<h3 class="ml-4">Data keluarga : </h3>
			               			<tr>
			               				<th style="width: 300px;">Status Pernikahan</th>
			               				<th>: <?= $data['family_data']['status_pernikahan']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Nama Pasangan</th>
			               				<th>: <?= $data['family_data']['nama_pasangan']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Jumlah Anak</th>
			               				<th>: <?= $data['family_data']['jumlah_anak']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Nama Ayah</th>
			               				<th>: <?= $data['family_data']['nama_ayah']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Pekerjaan Ayah</th>
			               				<th>: <?= $data['family_data']['pekerjaan_ayah']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Nama Ibu</th>
			               				<th>: <?= $data['family_data']['nama_ibu']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Saudara kandung</th>
			               				<th>: <?= $data['family_data']['saudara_kandung']; ?></th>
			               			</tr>
			               	</table>

			               		<table class="table table-hover table-bordered mt-4 ml-4">
			               		<h3 class="ml-4">Minat dan Konsep Diri : </h3>
			               			<tr>
			               				<th style="width: 300px;">Cita-cita</th>
			               				<th>: <?= $data['self_concept']['cita_cita']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Motto Hidup</th>
			               				<th>: <?= $data['self_concept']['motto']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Hobby</th>
			               				<th>: <?= $data['self_concept']['hobby']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Pengalaman Organisasi</th>
			               				<th>: <?= $data['self_concept']['organisasi']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Kelebihan Diri</th>
			               				<th>: <?= $data['self_concept']['kelebihan']; ?></th>
			               			</tr>
			               			<tr>
			               				<th>Kekurangan Diri</th>
			               				<th>: <?= $data['self_concept']['kekurangan']; ?></th>
			               			</tr>
			               	</table>
			               	<a href="#" class="btn btn-primary btn-lg  ml-4 mb-4">Print</a>
		          			<a href="<?= base_url('personalia'); ?>" class="btn btn-warning btn-lg mb-4">Back</a>
		               </div>
               </div>

           </div>

        </div>


    </div>
       <!-- /.container-fluid -->

</div>
       <!-- End of Main Content --> 