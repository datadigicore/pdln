-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 28, 2015 at 08:50 PM
-- Server version: 5.5.46-0ubuntu0.14.04.2
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sipdln`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE IF NOT EXISTS `data_diri` (
  `id_data_diri` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `no_aplikasi` int(11) NOT NULL,
  `nama_pemohon` varchar(50) NOT NULL,
  `nip_pemohon` varchar(18) NOT NULL,
  `no_hp_pemohon` varchar(15) NOT NULL,
  `instansi_pemohon` varchar(100) NOT NULL,
  `sub_instansi_pemohon` varchar(50) NOT NULL,
  `jabatan_pemohon` varchar(100) NOT NULL,
  `pekerjaan_pemohon` varchar(50) NOT NULL,
  `no_passport_pemohon` varchar(30) NOT NULL,
  `tgl_valid_passport` date NOT NULL,
  `cv_pemohon` varchar(50) NOT NULL,
  `foto_pemohon` varchar(50) NOT NULL,
  `karpeg_pemohon` varchar(50) NOT NULL,
  `surat_tugas_pemohon` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `other_data` varchar(50) NOT NULL,
  PRIMARY KEY (`id_data_diri`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE IF NOT EXISTS `instansi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_instansi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id`, `nama_instansi`) VALUES
(1, 'Sekretariat Jenderal'),
(2, 'Inspektorat Jenderal'),
(3, 'Ditjen Pendidikan Anak Usia Dini & Pendidikan Masyarakat'),
(4, 'Ditjen Pendidikan Dasar dan Menengah'),
(5, 'Badan Penelitian dan Pengembangan'),
(6, 'Badan Pengembangan dan Pembinaan Bahasa'),
(7, 'Ditjen Guru dan Tenaga Kependidikan'),
(8, 'Ditjen Kebudayaan'),
(9, 'Staf Ahli Bidang Inovasi dan Daya Saing'),
(10, 'Staf Ahli Bidang Hubungan Pusat dan Daerah'),
(11, 'Staf Ahli Bidang Pembangunan dan Karakter'),
(12, 'Staf Ahli Bidang Regulasi Pendidikan dan Kebudayaan'),
(13, 'Staf Khusus Pengelolaan Pemangku Kepentingan'),
(14, 'Staf Khusus Pendidikan'),
(15, 'Staf Khusus Tata Kelola');

-- --------------------------------------------------------

--
-- Table structure for table `log_activity`
--

CREATE TABLE IF NOT EXISTS `log_activity` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `aksi` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_instansi`
--

CREATE TABLE IF NOT EXISTS `sub_instansi` (
  `id_sub_instansi` int(11) NOT NULL AUTO_INCREMENT,
  `id_instansi` int(11) NOT NULL,
  `nama_sub_instansi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sub_instansi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `sub_instansi`
--

INSERT INTO `sub_instansi` (`id_sub_instansi`, `id_instansi`, `nama_sub_instansi`) VALUES
(1, 1, 'Biro Perencanaan & KLN'),
(2, 1, 'Biro Keuangan'),
(3, 1, 'Biro Kepegawaian'),
(4, 1, 'Biro Hukum & Organisasi'),
(5, 1, 'Biro Umum'),
(6, 1, 'Biro Komunikasi dan Layanan Masyarakat'),
(7, 1, 'Pusat Nalisis dan Sinkronisasi Kebijakan'),
(8, 1, 'Pusat Teknologi Informasi dan Komunikasi Pendidikan dan Kebudayaan'),
(9, 1, 'Pusat Data dan Statistik Pendidikan'),
(10, 1, 'Pusat Pendidikan dan Pelatihan Pegawai'),
(11, 1, 'Pusat Pengembangan Perfilman'),
(12, 1, 'Sekretariat Lembaga Sensor Film'),
(13, 2, 'Sekretariat Inspektorat Jenderal'),
(14, 2, 'Inspektorat I'),
(15, 2, 'Inspektorat II'),
(16, 2, 'Inspektorat III'),
(17, 2, 'Inspektorat Investigasi'),
(18, 3, 'Sekretariat Ditjen Pendidikan Anak Usia Dini & Pendidikan Masyarakat'),
(19, 3, 'Direktorat Pembinaan Pendidikan Keaksaraan & Kesetaraan'),
(20, 3, 'Direktorat Pembinaan Kursus dan Pelatihan'),
(21, 3, 'Direktorat Pembicaan Pendidikan Usia Dini'),
(22, 3, 'Direktorat Pembinaan Pendidikan Keluarga'),
(23, 4, 'Sekretariat Ditjen Pendidikan Dasar dan Menengah'),
(24, 4, 'Direktorat Pembinaan SD'),
(25, 4, 'Direktorat Pembinaan SMP'),
(26, 4, 'Direktorat Pembinaan SMA'),
(27, 4, 'Direktorat Pembinaan SMK'),
(28, 4, 'Direktorat Pembinaan Pendidikan Khusus dan Layanan Khusus'),
(29, 5, 'Sekretariat Badan Penelitian dan Pengembangan'),
(30, 5, 'Pusat Penelitian Kebijakan'),
(31, 5, 'Pusat Kurikulum dan Perbukuan'),
(32, 5, 'Pusat Penilaian Pendidikan'),
(33, 5, 'Pusat Penelitian Arkeologi Nasional'),
(34, 5, 'Pusat Penelitian dan Pengembangan Kebudayaan'),
(35, 6, 'Sekretariat Badan Pengembangan dan Pembinaan Bahasa'),
(36, 6, 'Pusat Pembinaan'),
(37, 6, 'Pusat Pengembangan dan Perlindungan'),
(38, 6, 'Pusat Pengembangan Strategis dan Diplomasi Kebahasaan'),
(39, 7, 'Sekretariat Ditjen Guru dan Tenaga Kependidikan'),
(40, 7, 'Direktorat Pembinaan GTK PAUD dan Diknas'),
(41, 7, 'Direktorat Pembinaan Guru Pendidikan Dasar'),
(42, 7, 'Direktorat Pembinaan Guru Pendidikan Menengah'),
(43, 7, 'Direktorat Pembinaan Tenaga Kependidikan Dikdasmen'),
(44, 7, 'Pusat Pengembangan dan Pemberdayaan Pendidik dan Tenaga Kependidikan Bidang Mesin dan Teknologi Indu'),
(45, 7, 'Pusat Pengembangan Tenaga Kependidikan'),
(46, 7, 'Pusat Penjaminan Mutu Pendidikan'),
(47, 7, 'Pusat Pengembangan Sumber Daya Manusia Kebudayaan'),
(48, 8, 'Sekretariat Ditjen Kebudayaan'),
(49, 8, 'Direktorat Internalisasi dan Diplomasi Budaya'),
(50, 8, 'Direktorat Kesenian'),
(51, 8, 'Direktorat Pelestarian Cagar Budaya dan Permuseuman'),
(52, 8, 'Direktorat Sejarah dan Nilai Budaya'),
(53, 8, 'Direktorat Pembinaan Kepercayaan Kepada Tuhan Yang Maha Esa dan Tradisi');

-- --------------------------------------------------------

--
-- Table structure for table `surat_bpkln`
--

CREATE TABLE IF NOT EXISTS `surat_bpkln` (
  `id_surat_bpkln` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `no_aplikasi` int(11) NOT NULL,
  `no_surat_bpkln_setneg` varchar(50) NOT NULL,
  `tgl_surat_bpkln_setneg` date NOT NULL,
  `surat_bpkln_setneg` varchar(100) NOT NULL,
  `no_surat_bpkln_kemlu` varchar(50) NOT NULL,
  `tgl_surat_bpkln_kemlu` date NOT NULL,
  `surat_bpkln_kemlu` varchar(100) NOT NULL,
  `no_surat_setneg` varchar(50) NOT NULL,
  `tgl_surat_setneg` date NOT NULL,
  `surat_setneg` varchar(100) NOT NULL,
  `data_lain_bpkln` text NOT NULL,
  PRIMARY KEY (`id_surat_bpkln`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `surat_undangan`
--

CREATE TABLE IF NOT EXISTS `surat_undangan` (
  `id_surat_undangan` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `no_aplikasi` int(11) NOT NULL,
  `no_surat_undangan` varchar(50) NOT NULL,
  `tgl_surat_undangan` date NOT NULL,
  `instansi_pengundang` varchar(100) NOT NULL,
  `negara_tujuan` varchar(50) NOT NULL,
  `tgl_awal_kegiatan` date NOT NULL,
  `tgl_akhir_kegiatan` date NOT NULL,
  `kategori_kegiatan` varchar(50) NOT NULL,
  `rincian_kegiatan` text NOT NULL,
  `sumber_dana_kegiatan` varchar(50) NOT NULL,
  `keterangan_sumber_dana_kegiatan` varchar(100) NOT NULL,
  `surat_undangan` varchar(100) NOT NULL,
  `surat_perjanjian` varchar(100) NOT NULL,
  `other_data` text NOT NULL,
  PRIMARY KEY (`id_surat_undangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `surat_unit_utama`
--

CREATE TABLE IF NOT EXISTS `surat_unit_utama` (
  `id_surat_unit_utama` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `no_aplikasi` int(11) NOT NULL,
  `no_surat_unit_utama` varchar(50) NOT NULL,
  `tgl_surat_unit_utama` date NOT NULL,
  `instansi_unit_utama` varchar(100) NOT NULL,
  `penandatangan_surat_unit_utama` varchar(250) NOT NULL,
  `perihal_surat_unit_utama` varchar(250) NOT NULL,
  `surat_unit_utama` varchar(100) NOT NULL,
  `other_data` varchar(250) NOT NULL,
  PRIMARY KEY (`id_surat_unit_utama`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(35) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `level` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `salt` varchar(15) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `email`, `alamat`, `no_telp`, `level`, `status`, `salt`) VALUES
(1, 'Master Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'yohanes.christomas@gmail.com', 'Puri Nirwana 1 Jalan Kalasan IV Blok CC 18 RT 09 / RW 16', '087870572818', 1, 1, ''),
(2, 'Master User', 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'yohanes.christomas@gmail.com', 'Puri Nirwana 1 Jalan Kalasan IV Blok CC 18 RT 09 / RW 16', '087870572818', 0, 1, ''),
(5, 'dhita', 'dhita', '58ffe90a3ad1fad4b5a782b9faa9d023', 'kartika@staff.gunadarma.ac.id', 'depok', '08569489894', 0, 1, ''),
(6, 'sutresna', 'ena', '21232f297a57a5a743894a0e4a801fc3', 'sutresna@gmail.com', 'Bekasi', '0856949898222', 0, 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
