<?php
Class Print_laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('Personalia_model');
        $this->load->library('pdf');
    }

    function index() {
        redirect('print_laporan');
    }
    
    function print_data_job_applicant(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(275,7,'SELMA BY INFORMA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(275,7,'LIST DATA JOB APPLICANT',0,1,'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);

        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(15,6,'NO',1,0,'C');
        $pdf->Cell(30,6,'NAMA',1,0,'C');
        $pdf->Cell(30,6,'JOB APPLY',1,0,'C');
        $pdf->Cell(25,6,'JENJANG PENDIDIKAN',1,0,'C');
        $pdf->Cell(10,6,'NILAI PSIKOTEST',1,0,'C');
        $pdf->Cell(10,6,'NILAI SEKOLAH',1,0,'C');
        $pdf->Cell(25,6,'EMAIL',1,0,'C');
        $pdf->Cell(50,6,'ALAMAT',1,0,'C');
        $pdf->Cell(25,6,'KETERANGAN',1,1,'C');

        $pdf->SetFont('Arial','',10);

        $data_job_applicant = $this->Personalia_model->getData();
        $no = 1;
        foreach ($data_job_applicant as $row){
            $nilai_psikotest = ($row['nilai_psikotest'] == '') ? 'Belum Psikotest' : $row['nilai_psikotest'];
            $keterangan = ($row['nilai_psikotest'] >= 75) ? 'Lulus Psikotest' : 'Tidak Lulus'; 
            $pdf->Cell(15,6,$no,1,0,'C');
            $pdf->Cell(30,6,$row['nama'],1,1,'C');
            $pdf->Cell(30,6,getJobRequire($row['id_jobvacancy']),1,2,'C');
            $pdf->Cell(25,6,$row['jenjang'],1,3,'C');
            $pdf->Cell(10,6,$nilai_psikotest,1,0,'C'); 
            $pdf->Cell(10,6,$row['nilai'],1,0,'C'); 
            $pdf->Cell(25,6,$row['email'],1,0,'C'); 
            $pdf->Cell(50,6,$row['alamat'],1,0,'C'); 
            $pdf->Cell(25,6,$keterangan,1,0,'C'); 
            $no++;
        }

        $pdf->Output();
    }
}