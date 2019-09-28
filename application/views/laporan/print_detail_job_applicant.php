<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>

    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/style.css" rel="stylesheet">
</head>
<body>
    <header class="clearfix">
        <h1 align="center">Report Detail Job Applicant</h1>
    </header>
    <main>
    <div class="container-fluid">
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
                            <?php $count_work_history = count($data['work_history']); ?>
                            <?php $no = 0; foreach($data['work_history'] as $work_history) : ?>
                                <tr>
                                    <th style="width: 300px;">Nama Perusahaan</th>
                                    <th>: <?= $work_history['nama_perusahaan']; ?></th>
                                </tr>
                                <tr>
                                    <th>Jabatan</th>
                                    <th>: <?= $work_history['jabatan']; ?></th>
                                </tr>
                                <tr>
                                    <th>Alasan Pindah</th>
                                    <th>: <?= $work_history['alasan_pindah']; ?></th>
                                </tr>
                                <tr>
                                    <th>Periode</th>
                                    <th>: <?= $work_history['awal_kerja'];?> / <?= $work_history['akhir_kerja']; ?></th>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <th>: <?= $work_history['job_desk']; ?></th>
                                </tr>

                                <?php if($no+1 !== $count_work_history) : ?>
                                    <tr>
                                        <th colspan="2"></th>
                                    </tr>
                                <?php endif;?>
                            <?php $no++; endforeach;?>

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
                    </div>
                </div>

            </div>
        </div>
    </div>
    </main>
</body>
</html>