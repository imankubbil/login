-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Sep 2019 pada 18.12
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `answer`
--

CREATE TABLE `answer` (
  `id_answer` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `jawaban` text NOT NULL,
  `urutan` varchar(2) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `answer`
--

INSERT INTO `answer` (`id_answer`, `id_question`, `jawaban`, `urutan`, `status`) VALUES
(16, 10, 'mangga', 'A', 1),
(17, 10, 'macan', 'B', 0),
(18, 10, 'onta', 'C', 0),
(19, 10, 'sapi', 'D', 0),
(20, 10, 'kubbil', 'E', 0),
(21, 11, 'lekha', 'A', 1),
(22, 11, 'kiran', 'B', 0),
(23, 11, 'azura', 'C', 0),
(24, 11, 'aisyah', 'D', 0),
(25, 11, 'evan', 'E', 0),
(26, 12, 'kecil', 'A', 0),
(27, 12, 'mungil', 'B', 0),
(28, 12, 'tambun', 'C', 1),
(29, 12, 'kurus', 'D', 0),
(30, 12, 'imut', 'E', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id_education` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `jenjang` varchar(128) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `nilai` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `tahun_lulus` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id_education`, `email`, `jenjang`, `tempat`, `nilai`, `jurusan`, `tahun_lulus`) VALUES
(11, 'lekhasholehatii@gmail.com', 'S1', 'STMIK Pranata Indonesia Bekasi', '4.00', 'Sistem Informasi', 2019),
(12, 'imankubbil@gmail.com', 'D3', 'STMIK Pranata Indonesia', '3.56', 'Manajemen  Informatika', 2018),
(13, 'lekhasholehatii@gmail.com', 'SD', 'stmik pranata', '3.68', 'sistem informasi', 2019);

-- --------------------------------------------------------

--
-- Struktur dari tabel `family_data`
--

CREATE TABLE `family_data` (
  `id_family` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `status_pernikahan` varchar(128) NOT NULL,
  `nama_ayah` varchar(128) NOT NULL,
  `pekerjaan_ayah` varchar(128) NOT NULL,
  `nama_ibu` varchar(128) NOT NULL,
  `pekerjaan_ibu` varchar(128) NOT NULL,
  `saudara_kandung` varchar(128) NOT NULL,
  `nama_pasangan` varchar(128) NOT NULL,
  `jumlah_anak` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `family_data`
--

INSERT INTO `family_data` (`id_family`, `email`, `status_pernikahan`, `nama_ayah`, `pekerjaan_ayah`, `nama_ibu`, `pekerjaan_ibu`, `saudara_kandung`, `nama_pasangan`, `jumlah_anak`) VALUES
(2, 'lekhasholehatii@gmail.com', 'Menikah', 'daesung', 'artis', 'kim ji won', 'artis', '1', 'jiyong', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_vacancy`
--

CREATE TABLE `job_vacancy` (
  `id_jobvacancy` int(11) NOT NULL,
  `job_require` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `created` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `job_vacancy`
--

INSERT INTO `job_vacancy` (`id_jobvacancy`, `job_require`, `deskripsi`, `created`) VALUES
(1, 'IT manager', '1. minimal lulusan S1\r\n2. Bisa bekerja secara tim', ''),
(2, 'Admin', '1. mengoperasikan komputer\r\n2. menguasai excel\r\n3. bisa bekerja dengan tim', ''),
(3, 'coba', 'coba', 'lekha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_applicant`
--

CREATE TABLE `master_applicant` (
  `id_master_applicant` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_education` int(11) NOT NULL,
  `id_workhistory` int(11) NOT NULL,
  `id_concept` int(11) NOT NULL,
  `id_family` int(11) NOT NULL,
  `id_upload_file` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal`
--

CREATE TABLE `personal` (
  `id_personal` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `panggilan` varchar(128) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `kk` varchar(20) NOT NULL,
  `tempat` varchar(128) NOT NULL,
  `ttl` date NOT NULL,
  `umur` varchar(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `wn` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `personal`
--

INSERT INTO `personal` (`id_personal`, `email`, `nama`, `panggilan`, `ktp`, `kk`, `tempat`, `ttl`, `umur`, `gender`, `agama`, `wn`, `telp`, `alamat`) VALUES
(49, 'lekhasholehatii@gmail.com', 'Jiyong', 'Gd', '303211764571', '3033521131', 'Bekasi', '2019-05-21', '22', 'female', 'islam', 'Indonesia', '087724418139', 'Jl.sultan hasanudin gang camar rt 003 rw 001 desa tambun\r\nKontrakan bapak hamidi'),
(50, 'imankubbil@gmail.com', 'nur iman', 'kubbil', '3012323562424', '03012342255', 'Bekasi', '2019-05-25', '45', 'male', 'islam', 'Indonesia', '087724418139', 'Jl.sultan hasanudin gang camar rt 003 rw 001 desa tambun\r\nKontrakan bapak hamidi'),
(51, 'lsholehati@gmail.com', 'Kim nam gil', 'kim nam gil', '12083842424', '100934466723', 'Bekasi', '2019-05-30', '22', 'male', 'islam', 'Indonesia', '087724418139', 'Jl.sultan hasanudin gang camar rt 003 rw 001 desa tambun\r\nKontrakan bapak hamidi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `question`
--

CREATE TABLE `question` (
  `id_question` int(11) NOT NULL,
  `question` text NOT NULL,
  `name` varchar(128) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `question`
--

INSERT INTO `question` (`id_question`, `question`, `name`, `date_created`) VALUES
(10, 'sebutkan nama buah yang benar', 'lekha', '2019-08-15'),
(11, 'siapa yang mempunyai pipi besar?', 'lekha', '2019-08-15'),
(12, 'Sinonim dari gemuk adalah?', 'lekha', '2019-09-09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `self_concept`
--

CREATE TABLE `self_concept` (
  `id_concept` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `cita_cita` varchar(128) NOT NULL,
  `motto` varchar(128) NOT NULL,
  `organisasi` varchar(300) NOT NULL,
  `hobby` varchar(350) NOT NULL,
  `kelebihan` varchar(350) NOT NULL,
  `kekurangan` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `self_concept`
--

INSERT INTO `self_concept` (`id_concept`, `email`, `cita_cita`, `motto`, `organisasi`, `hobby`, `kelebihan`, `kekurangan`) VALUES
(1, 'lekhasholehatii@gmail.com', 'Dokter', 'Hakuna Matata', 'Osis', 'Membaca', 'Ingin tahu', 'kepo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload_file`
--

CREATE TABLE `upload_file` (
  `id_upload_file` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `no_ktp` varchar(128) NOT NULL,
  `foto_ktp` varchar(128) NOT NULL,
  `no_ijazah` varchar(128) NOT NULL,
  `foto_ijazah` varchar(128) NOT NULL,
  `foto_transkrip_nilai` varchar(128) NOT NULL,
  `no_npwp` varchar(128) NOT NULL,
  `foto_npwp` varchar(128) NOT NULL,
  `skck` date NOT NULL,
  `foto_skck` varchar(128) NOT NULL,
  `sertifikat` varchar(128) NOT NULL,
  `foto_sertifikat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `upload_file`
--

INSERT INTO `upload_file` (`id_upload_file`, `email`, `no_ktp`, `foto_ktp`, `no_ijazah`, `foto_ijazah`, `foto_transkrip_nilai`, `no_npwp`, `foto_npwp`, `skck`, `foto_skck`, `sertifikat`, `foto_sertifikat`) VALUES
(4, 'lekhasholehatii@gmail.com', '30398765678', 'D.O.-1.jpg', '254444444874', '2017-EXO-The-War-KoKobop-Chanyeol-Teaser.jpg', 'BAEKHYUN-KO-KO-BOP-TEASER3.jpg', '1324243546', 'EXO-Suho.jpg', '2019-05-11', 'EXO-Chen-Teaser-The-War-For-Ko-Ko-Bop-2017-Comeback.jpg', 'qadsaaaafsdg', 'exo-the-war-d-o3.jpg'),
(5, 'lekhasholehatii@gmail.com', '30398765678', '2017-EXO-The-War-Comeback-Chen-Teaser-For-Ko-Ko-Bop.jpg', '254444444874', 'BAEKHYUN-KO-KO-BOP-TEASER3.jpg', 'Kai-4.jpg', '1324243546', 'maxresdefault.jpg', '2019-05-11', 'exo-will-never-let-go-their-fans-for-life-with-new-winter-mv.jpg', 'qadsaaaafsdg', 'xiumin-the-war-ko-ko-bop.jpg'),
(6, 'lekhasholehatii@gmail.com', '30398765678', '2017-EXO-The-War-Comeback-Chen-Teaser-For-Ko-Ko-Bop.jpg', '254444444874', '2017-EXO-The-War-Comeback-DO-Teaser-For-Ko-Ko-Bop-Is-Released-EXO-all-members-teaser.jpg', 'D.O.-1.jpg', '1324243546', '2017-EXO-The-War-Comeback-Sehun-Teaser.jpg', '2019-05-12', '2017-EXO-The-War-KoKobop-Chanyeol-Teaser.jpg', 'qadsaaaafsdg', 'c1.jpg'),
(7, 'lekhasholehatii@gmail.com', '30398765678', 'exo-kokobop-the-war-group-teasers-1.jpg', '254444444874', 'EXO-Baekhyun-Kai-Chanyeol.jpg', 'EXO (1).jpg', '1324243546', 'EXO,Suho_1499994349_DEqC4KxVoAAvD0B.jpg', '2019-05-24', 'D.O.-1.jpg', 'qadsaaaafsdg', 'BAEKHYUN-KO-KO-BOP-TEASER3.jpg'),
(9, 'lekhasholehatii@gmail.com', '30398765678', 'EXO.jpg', '254444444874', 'BAEKHYUN-KO-KO-BOP-TEASER3 (1).jpg', 'BAEKHYUN-KO-KO-BOP-TEASER3.jpg', '1324243546', 'EXO.jpg', '2019-05-09', 'EXO,Xiumin_1500080732_DEvL2voVYAAHbXn.jpg', 'qadsaaaafsdg', 'EXO (1).jpg'),
(10, 'lekhasholehatii@gmail.com', '30398765678', 'EXO-Chen-Teaser-The-War-For-Ko-Ko-Bop-2017-Comeback.jpg', '254444444874', 'EXO (1).jpg', 'D.O.-1.jpg', '1324243546', 'exo_cover.png', '2019-05-25', 'EXO,Suho_1499994349_DEqC4KxVoAAvD0B (1).jpg', 'qadsaaaafsdg', 'exo (2).jpg'),
(11, 'lekhasholehatii@gmail.com', '30398765678', 'exo-the-war-chen2.jpg', '254444444874', 'EXO,Suho_1499994349_DEqC4KxVoAAvD0B.jpg', 'EXO,Xiumin_1500080732_DEvL2voVYAAHbXn.jpg', '1324243546', 'c1.jpg', '2019-05-11', 'exo-ko-ko-bop-teaser-baekhyun.jpg', 'qadsaaaafsdg', 'exo-ko-ko-bop-teaser-baekhyun.jpg'),
(12, 'lekhasholehatii@gmail.com', '30398765678', 'EXO-Suho.jpg', '254444444874', 'EXO-Suho.jpg', 'BAEKHYUN-KO-KO-BOP-TEASER3 (1).jpg', '1324243546', 'EXO,Suho_1499994349_DEqC4KxVoAAvD0B.jpg', '2019-05-25', 'exo (2).jpg', 'qadsaaaafsdg', 'D.O.-1.jpg'),
(13, 'lekhasholehatii@gmail.com', '1212', 'hospital.jpg', '341234143', 'faktur.jpg', 'faktur.jpg', '547457457547', 'flowchartgaji.png', '2029-07-05', 'dfd-level-1-1.jpeg', 'hjghjgjgjghjg', 'faktur.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'lekha', 'lekhasholehatii@gmail.com', 'BIGBANG_MADE_Tour_group_photo.png', '$2y$10$aW8bzf2MaztIJoHWCi/dXOp6y2j3osdWf0/wNqK8ekbQPrebj/e12', 1, 1, 1554220957),
(10, 'Jiyong', 'lsholehati@gmail.com', 'gd.jpg', '$2y$10$DtnjkSTJmRcHQ.bPkTHts.9.sy3Y.y4QC6v2q1gunAXb8UTTySwUC', 2, 1, 1554389785),
(15, 'iman kubbil', 'imankubbil@gmail.com', 'default.jpg', '$2y$10$LRs1CnRgaDY6nc.9A3Cwyebre8BrRs3wlWFmbMhhASI4fURNUKbe2', 2, 1, 1557670335);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 1, 4),
(7, 2, 4),
(10, 1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Career'),
(5, 'Personalia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_psikotest`
--

CREATE TABLE `user_psikotest` (
  `id_psikotest` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nilai_psikotest` varchar(128) NOT NULL,
  `waktu_test` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_psikotest`
--

INSERT INTO `user_psikotest` (`id_psikotest`, `email`, `nilai_psikotest`, `waktu_test`) VALUES
(1, 'lekhasholehatii@gmail.com', '90', '2019-05-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(8, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(9, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(10, 4, 'Apply a Job', 'career', 'fas fa-fw fa-book-open', 1),
(11, 5, 'Job Applicant Data', 'personalia', 'fas fa-fw fa-address-card', 1),
(12, 5, 'Psikotest Data', 'personalia/psikotestData', 'fas fa-fw fa-pen-square', 1),
(13, 5, 'Job Vacancy Management', 'personalia/jobvacancy', 'fas fa-fw fa-info-circle', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'imankubbil@gmail.com', '2114ffa847e9c5d4f453ec498d570062', 1554218302),
(2, 'lekhasholehatii@gmail.com', '30c8376c52bfa5c06bb61a9abb56a47d', 1554358834),
(3, 'lekhasholehatii@gmail.com', 'f6f324a21631b61ad5fe828e8e8d1770', 1554361688),
(4, 'lekhasholehatii@gmail.com', '3af4177664ea68bb6d09b91031e2bdf6', 1554361892),
(5, 'imankubbil@gmail.com', '69de0d1b7551a4df263b33a23e5b3910', 1557669324),
(6, 'imankubbil@gmail.com', 'ce476413c75e344044974ac0fcb2bae7', 1557669550),
(7, 'imankubbil@gmail.com', '8fcb84a053c9a0456b69c5786e950a25', 1557669626),
(8, 'imankubbil@gmail.com', '2037d6eb741eea7982e7a6d9ee4381fd', 1557670120),
(9, 'imankubbil@gmail.com', '465725f0b2821c0993abcbc9ec46205a', 1557670335);

-- --------------------------------------------------------

--
-- Struktur dari tabel `work_history`
--

CREATE TABLE `work_history` (
  `id_workhistory` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `awal_kerja` date NOT NULL,
  `akhir_kerja` date NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `gaji` int(11) NOT NULL,
  `alasan_pindah` varchar(128) NOT NULL,
  `job_desk` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `work_history`
--

INSERT INTO `work_history` (`id_workhistory`, `email`, `nama_perusahaan`, `awal_kerja`, `akhir_kerja`, `jabatan`, `gaji`, `alasan_pindah`, `job_desk`) VALUES
(12, 'lekhasholehatii@gmail.com', 'PT.GS Battery', '2019-04-05', '2019-04-12', 'admin', 4100000, 'resign', 'mengoperasikan mesin'),
(13, 'lekhasholehatii@gmail.com', 'PT.Mayora', '2019-04-05', '2019-04-12', 'CEO', 4100000, 'resign', 'mengoperasikan mesin'),
(14, 'lekhasholehatii@gmail.com', 'PT.Mayora', '2015-06-03', '2022-05-04', 'Gudang', 4000000, 'Ngantuk', 'asfasfsaf');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`id_answer`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indeks untuk tabel `family_data`
--
ALTER TABLE `family_data`
  ADD PRIMARY KEY (`id_family`);

--
-- Indeks untuk tabel `job_vacancy`
--
ALTER TABLE `job_vacancy`
  ADD PRIMARY KEY (`id_jobvacancy`);

--
-- Indeks untuk tabel `master_applicant`
--
ALTER TABLE `master_applicant`
  ADD PRIMARY KEY (`id_master_applicant`);

--
-- Indeks untuk tabel `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id_personal`);

--
-- Indeks untuk tabel `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id_question`);

--
-- Indeks untuk tabel `self_concept`
--
ALTER TABLE `self_concept`
  ADD PRIMARY KEY (`id_concept`);

--
-- Indeks untuk tabel `upload_file`
--
ALTER TABLE `upload_file`
  ADD PRIMARY KEY (`id_upload_file`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_psikotest`
--
ALTER TABLE `user_psikotest`
  ADD PRIMARY KEY (`id_psikotest`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `work_history`
--
ALTER TABLE `work_history`
  ADD PRIMARY KEY (`id_workhistory`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `answer`
--
ALTER TABLE `answer`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `family_data`
--
ALTER TABLE `family_data`
  MODIFY `id_family` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `job_vacancy`
--
ALTER TABLE `job_vacancy`
  MODIFY `id_jobvacancy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `master_applicant`
--
ALTER TABLE `master_applicant`
  MODIFY `id_master_applicant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal`
--
ALTER TABLE `personal`
  MODIFY `id_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT untuk tabel `question`
--
ALTER TABLE `question`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `self_concept`
--
ALTER TABLE `self_concept`
  MODIFY `id_concept` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `upload_file`
--
ALTER TABLE `upload_file`
  MODIFY `id_upload_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_psikotest`
--
ALTER TABLE `user_psikotest`
  MODIFY `id_psikotest` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `work_history`
--
ALTER TABLE `work_history`
  MODIFY `id_workhistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
