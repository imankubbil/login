<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$title?></title>
</head>
<body>
    <header class="clearfix">
        <h1 align="center">Report Data Job Applicant</h1>
    </header>
    <main>
        <table align="center" border="1" style="border-collapse: collapse;">
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
    </main>
</body>
</html>