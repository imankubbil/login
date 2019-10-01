<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <header class="clearfix">
        <div class="col-lg">
            <div class="row justify-content-center mt-4">
                <img src="<?= base_url('assets/img/logo/logo.jpg');?>" style="width: 120px; height: 50px;">
                 <h1 class="mt-1 pl-2">Laporan Data Pelamar Kerja</h1>
            </div>
        </div>
        
    </header>
    <main>
        <div class="col-md-8 mx-auto mt-4">
            <table class="table table-bordered">
                <thead align="center">
                    <tr>
                        <th>NO</th>
                        <th>NAMA</th>
                        <th>JOB APPLY</th>
                        <th>JENJANG PENDIDIKAN</th>
                        <th>NILAI PSIKOTEST</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; foreach ($data as $data_job) : ?>
                    <?php 
                        $nilai_psikotest = ($data_job['nilai_psikotest'] == '') ? 'Belum Psikotest' : $data_job['nilai_psikotest'];

                        $keterangan = ($data_job['nilai_psikotest'] >= 75) ? 'Lulus Psikotest' : 'Tidak Lulus';
                    ?>
                        <tr>
                            <td><?=$no?>.</td>
                            <td><?=$data_job['nama']?></td>
                            <td><?= getJobRequire($data_job['id_jobvacancy']); ?></td>
                            <td><?= $data_job['jenjang']; ?></td>
                            <td><?=$nilai_psikotest?></td>
                            <td><?=$keterangan?></td>
                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>