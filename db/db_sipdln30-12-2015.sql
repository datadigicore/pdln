-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 30, 2015 at 05:19 PM
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
-- Table structure for table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) NOT NULL DEFAULT '',
  `country_name` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=244 ;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`) VALUES
(1, 'US', 'United States'),
(2, 'CA', 'Canada'),
(3, 'AF', 'Afghanistan'),
(4, 'AL', 'Albania'),
(5, 'DZ', 'Algeria'),
(6, 'DS', 'American Samoa'),
(7, 'AD', 'Andorra'),
(8, 'AO', 'Angola'),
(9, 'AI', 'Anguilla'),
(10, 'AQ', 'Antarctica'),
(11, 'AG', 'Antigua and/or Barbuda'),
(12, 'AR', 'Argentina'),
(13, 'AM', 'Armenia'),
(14, 'AW', 'Aruba'),
(15, 'AU', 'Australia'),
(16, 'AT', 'Austria'),
(17, 'AZ', 'Azerbaijan'),
(18, 'BS', 'Bahamas'),
(19, 'BH', 'Bahrain'),
(20, 'BD', 'Bangladesh'),
(21, 'BB', 'Barbados'),
(22, 'BY', 'Belarus'),
(23, 'BE', 'Belgium'),
(24, 'BZ', 'Belize'),
(25, 'BJ', 'Benin'),
(26, 'BM', 'Bermuda'),
(27, 'BT', 'Bhutan'),
(28, 'BO', 'Bolivia'),
(29, 'BA', 'Bosnia and Herzegovina'),
(30, 'BW', 'Botswana'),
(31, 'BV', 'Bouvet Island'),
(32, 'BR', 'Brazil'),
(33, 'IO', 'British lndian Ocean Territory'),
(34, 'BN', 'Brunei Darussalam'),
(35, 'BG', 'Bulgaria'),
(36, 'BF', 'Burkina Faso'),
(37, 'BI', 'Burundi'),
(38, 'KH', 'Cambodia'),
(39, 'CM', 'Cameroon'),
(40, 'CV', 'Cape Verde'),
(41, 'KY', 'Cayman Islands'),
(42, 'CF', 'Central African Republic'),
(43, 'TD', 'Chad'),
(44, 'CL', 'Chile'),
(45, 'CN', 'China'),
(46, 'CX', 'Christmas Island'),
(47, 'CC', 'Cocos (Keeling) Islands'),
(48, 'CO', 'Colombia'),
(49, 'KM', 'Comoros'),
(50, 'CG', 'Congo'),
(51, 'CK', 'Cook Islands'),
(52, 'CR', 'Costa Rica'),
(53, 'HR', 'Croatia (Hrvatska)'),
(54, 'CU', 'Cuba'),
(55, 'CY', 'Cyprus'),
(56, 'CZ', 'Czech Republic'),
(57, 'DK', 'Denmark'),
(58, 'DJ', 'Djibouti'),
(59, 'DM', 'Dominica'),
(60, 'DO', 'Dominican Republic'),
(61, 'TP', 'East Timor'),
(62, 'EC', 'Ecuador'),
(63, 'EG', 'Egypt'),
(64, 'SV', 'El Salvador'),
(65, 'GQ', 'Equatorial Guinea'),
(66, 'ER', 'Eritrea'),
(67, 'EE', 'Estonia'),
(68, 'ET', 'Ethiopia'),
(69, 'FK', 'Falkland Islands (Malvinas)'),
(70, 'FO', 'Faroe Islands'),
(71, 'FJ', 'Fiji'),
(72, 'FI', 'Finland'),
(73, 'FR', 'France'),
(74, 'FX', 'France, Metropolitan'),
(75, 'GF', 'French Guiana'),
(76, 'PF', 'French Polynesia'),
(77, 'TF', 'French Southern Territories'),
(78, 'GA', 'Gabon'),
(79, 'GM', 'Gambia'),
(80, 'GE', 'Georgia'),
(81, 'DE', 'Germany'),
(82, 'GH', 'Ghana'),
(83, 'GI', 'Gibraltar'),
(84, 'GR', 'Greece'),
(85, 'GL', 'Greenland'),
(86, 'GD', 'Grenada'),
(87, 'GP', 'Guadeloupe'),
(88, 'GU', 'Guam'),
(89, 'GT', 'Guatemala'),
(90, 'GN', 'Guinea'),
(91, 'GW', 'Guinea-Bissau'),
(92, 'GY', 'Guyana'),
(93, 'HT', 'Haiti'),
(94, 'HM', 'Heard and Mc Donald Islands'),
(95, 'HN', 'Honduras'),
(96, 'HK', 'Hong Kong'),
(97, 'HU', 'Hungary'),
(98, 'IS', 'Iceland'),
(99, 'IN', 'India'),
(100, 'ID', 'Indonesia'),
(101, 'IR', 'Iran (Islamic Republic of)'),
(102, 'IQ', 'Iraq'),
(103, 'IE', 'Ireland'),
(104, 'IL', 'Israel'),
(105, 'IT', 'Italy'),
(106, 'CI', 'Ivory Coast'),
(107, 'JM', 'Jamaica'),
(108, 'JP', 'Japan'),
(109, 'JO', 'Jordan'),
(110, 'KZ', 'Kazakhstan'),
(111, 'KE', 'Kenya'),
(112, 'KI', 'Kiribati'),
(113, 'KP', 'Korea, Democratic People''s Republic of'),
(114, 'KR', 'Korea, Republic of'),
(115, 'XK', 'Kosovo'),
(116, 'KW', 'Kuwait'),
(117, 'KG', 'Kyrgyzstan'),
(118, 'LA', 'Lao People''s Democratic Republic'),
(119, 'LV', 'Latvia'),
(120, 'LB', 'Lebanon'),
(121, 'LS', 'Lesotho'),
(122, 'LR', 'Liberia'),
(123, 'LY', 'Libyan Arab Jamahiriya'),
(124, 'LI', 'Liechtenstein'),
(125, 'LT', 'Lithuania'),
(126, 'LU', 'Luxembourg'),
(127, 'MO', 'Macau'),
(128, 'MK', 'Macedonia'),
(129, 'MG', 'Madagascar'),
(130, 'MW', 'Malawi'),
(131, 'MY', 'Malaysia'),
(132, 'MV', 'Maldives'),
(133, 'ML', 'Mali'),
(134, 'MT', 'Malta'),
(135, 'MH', 'Marshall Islands'),
(136, 'MQ', 'Martinique'),
(137, 'MR', 'Mauritania'),
(138, 'MU', 'Mauritius'),
(139, 'TY', 'Mayotte'),
(140, 'MX', 'Mexico'),
(141, 'FM', 'Micronesia, Federated States of'),
(142, 'MD', 'Moldova, Republic of'),
(143, 'MC', 'Monaco'),
(144, 'MN', 'Mongolia'),
(145, 'ME', 'Montenegro'),
(146, 'MS', 'Montserrat'),
(147, 'MA', 'Morocco'),
(148, 'MZ', 'Mozambique'),
(149, 'MM', 'Myanmar'),
(150, 'NA', 'Namibia'),
(151, 'NR', 'Nauru'),
(152, 'NP', 'Nepal'),
(153, 'NL', 'Netherlands'),
(154, 'AN', 'Netherlands Antilles'),
(155, 'NC', 'New Caledonia'),
(156, 'NZ', 'New Zealand'),
(157, 'NI', 'Nicaragua'),
(158, 'NE', 'Niger'),
(159, 'NG', 'Nigeria'),
(160, 'NU', 'Niue'),
(161, 'NF', 'Norfork Island'),
(162, 'MP', 'Northern Mariana Islands'),
(163, 'NO', 'Norway'),
(164, 'OM', 'Oman'),
(165, 'PK', 'Pakistan'),
(166, 'PW', 'Palau'),
(167, 'PA', 'Panama'),
(168, 'PG', 'Papua New Guinea'),
(169, 'PY', 'Paraguay'),
(170, 'PE', 'Peru'),
(171, 'PH', 'Philippines'),
(172, 'PN', 'Pitcairn'),
(173, 'PL', 'Poland'),
(174, 'PT', 'Portugal'),
(175, 'PR', 'Puerto Rico'),
(176, 'QA', 'Qatar'),
(177, 'RE', 'Reunion'),
(178, 'RO', 'Romania'),
(179, 'RU', 'Russian Federation'),
(180, 'RW', 'Rwanda'),
(181, 'KN', 'Saint Kitts and Nevis'),
(182, 'LC', 'Saint Lucia'),
(183, 'VC', 'Saint Vincent and the Grenadines'),
(184, 'WS', 'Samoa'),
(185, 'SM', 'San Marino'),
(186, 'ST', 'Sao Tome and Principe'),
(187, 'SA', 'Saudi Arabia'),
(188, 'SN', 'Senegal'),
(189, 'RS', 'Serbia'),
(190, 'SC', 'Seychelles'),
(191, 'SL', 'Sierra Leone'),
(192, 'SG', 'Singapore'),
(193, 'SK', 'Slovakia'),
(194, 'SI', 'Slovenia'),
(195, 'SB', 'Solomon Islands'),
(196, 'SO', 'Somalia'),
(197, 'ZA', 'South Africa'),
(198, 'GS', 'South Georgia South Sandwich Islands'),
(199, 'ES', 'Spain'),
(200, 'LK', 'Sri Lanka'),
(201, 'SH', 'St. Helena'),
(202, 'PM', 'St. Pierre and Miquelon'),
(203, 'SD', 'Sudan'),
(204, 'SR', 'Suriname'),
(205, 'SJ', 'Svalbarn and Jan Mayen Islands'),
(206, 'SZ', 'Swaziland'),
(207, 'SE', 'Sweden'),
(208, 'CH', 'Switzerland'),
(209, 'SY', 'Syrian Arab Republic'),
(210, 'TW', 'Taiwan'),
(211, 'TJ', 'Tajikistan'),
(212, 'TZ', 'Tanzania, United Republic of'),
(213, 'TH', 'Thailand'),
(214, 'TG', 'Togo'),
(215, 'TK', 'Tokelau'),
(216, 'TO', 'Tonga'),
(217, 'TT', 'Trinidad and Tobago'),
(218, 'TN', 'Tunisia'),
(219, 'TR', 'Turkey'),
(220, 'TM', 'Turkmenistan'),
(221, 'TC', 'Turks and Caicos Islands'),
(222, 'TV', 'Tuvalu'),
(223, 'UG', 'Uganda'),
(224, 'UA', 'Ukraine'),
(225, 'AE', 'United Arab Emirates'),
(226, 'GB', 'United Kingdom'),
(227, 'UM', 'United States minor outlying islands'),
(228, 'UY', 'Uruguay'),
(229, 'UZ', 'Uzbekistan'),
(230, 'VU', 'Vanuatu'),
(231, 'VA', 'Vatican City State'),
(232, 'VE', 'Venezuela'),
(233, 'VN', 'Vietnam'),
(234, 'VG', 'Virgin Islands (British)'),
(235, 'VI', 'Virgin Islands (U.S.)'),
(236, 'WF', 'Wallis and Futuna Islands'),
(237, 'EH', 'Western Sahara'),
(238, 'YE', 'Yemen'),
(239, 'YU', 'Yugoslavia'),
(240, 'ZR', 'Zaire'),
(241, 'ZM', 'Zambia'),
(242, 'ZW', 'Zimbabwe'),
(243, 'TL', 'Timor Leste');

-- --------------------------------------------------------

--
-- Table structure for table `data_diri`
--

CREATE TABLE IF NOT EXISTS `data_diri` (
  `id_data_diri` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `no_aplikasi_data_diri` int(11) NOT NULL,
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
  `status` varchar(50) NOT NULL,
  `other_data` varchar(50) NOT NULL,
  PRIMARY KEY (`id_data_diri`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `data_diri`
--

INSERT INTO `data_diri` (`id_data_diri`, `id_user`, `no_aplikasi_data_diri`, `nama_pemohon`, `nip_pemohon`, `no_hp_pemohon`, `instansi_pemohon`, `sub_instansi_pemohon`, `jabatan_pemohon`, `pekerjaan_pemohon`, `no_passport_pemohon`, `tgl_valid_passport`, `cv_pemohon`, `foto_pemohon`, `karpeg_pemohon`, `surat_tugas_pemohon`, `status`, `other_data`) VALUES
(2, 2, 2, 'Sutresna', '0876678285678876', '08767966788', '1', '1', 'Eselon 1', 'PNS', 's4785678656789987', '2015-12-24', '', 'user.png', '', 'surat.jpg', 'Diterima', ''),
(17, 2, 3, 'Pebi Wijaya', '123456789123456789', '085711008788', '1', '4', 'Eselon 1', 'PNS', 's756391823', '2020-02-03', 'user.png', 'user.png', 'user.png', 'user.png', '1', ''),
(18, 2, 4, 'Erman', '12345678986762', '083652813374', '1', '1', 'Eselon 1', 'PNS', 's23836336345', '2020-02-02', 'user.png', 'user.png', 'user.png', 'user.png', '1', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `surat_bpkln`
--

INSERT INTO `surat_bpkln` (`id_surat_bpkln`, `id_user`, `no_aplikasi`, `no_surat_bpkln_setneg`, `tgl_surat_bpkln_setneg`, `surat_bpkln_setneg`, `no_surat_bpkln_kemlu`, `tgl_surat_bpkln_kemlu`, `surat_bpkln_kemlu`, `no_surat_setneg`, `tgl_surat_setneg`, `surat_setneg`, `data_lain_bpkln`) VALUES
(1, 2, 2, '', '0000-00-00', '', '', '0000-00-00', '', 'setneg/12345', '2015-12-31', '', 'lolos 45 orang'),
(17, 2, 3, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', ''),
(18, 2, 4, '', '0000-00-00', '', '', '0000-00-00', '', '', '0000-00-00', '', '');

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
  `tgl_awal_kegiatan` date DEFAULT NULL,
  `tgl_akhir_kegiatan` date DEFAULT NULL,
  `kategori_kegiatan` varchar(50) NOT NULL,
  `rincian_kegiatan` text NOT NULL,
  `sumber_dana_kegiatan` varchar(50) NOT NULL,
  `keterangan_sumber_dana_kegiatan` varchar(100) NOT NULL,
  `surat_undangan` varchar(100) NOT NULL,
  `surat_perjanjian` varchar(100) NOT NULL,
  `other_data` text NOT NULL,
  PRIMARY KEY (`id_surat_undangan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `surat_undangan`
--

INSERT INTO `surat_undangan` (`id_surat_undangan`, `id_user`, `no_aplikasi`, `no_surat_undangan`, `tgl_surat_undangan`, `instansi_pengundang`, `negara_tujuan`, `tgl_awal_kegiatan`, `tgl_akhir_kegiatan`, `kategori_kegiatan`, `rincian_kegiatan`, `sumber_dana_kegiatan`, `keterangan_sumber_dana_kegiatan`, `surat_undangan`, `surat_perjanjian`, `other_data`) VALUES
(2, 2, 2, 'undangan/d.g/3345/update', '2015-12-24', 'Universitas Brithd', 'London', '2016-01-01', '2016-02-04', 'APBN', 'Pelatihan Digital Forensik', 'Pribadi', 'JICA dan Kemendikbud', '', '', ''),
(28, 2, 3, 'undangan/99', '2015-03-11', 'Instansi Pengundang', 'Amerika', '2015-11-12', '2015-12-12', 'APBN', 'workshop auto mata', 'Pribadi', 'Dana Pribadi', 'user.png', 'user.png', ''),
(29, 2, 4, '-', '2015-07-28', 'Frankfurt ', 'Jerman', '2015-12-05', '2015-12-19', 'APBN', 'Sebagai Peserta dalam rangka FBF 2015', 'APBN', 'Galeri Nasional Indonesia', 'user.png', 'user.png', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `surat_unit_utama`
--

INSERT INTO `surat_unit_utama` (`id_surat_unit_utama`, `id_user`, `no_aplikasi`, `no_surat_unit_utama`, `tgl_surat_unit_utama`, `instansi_unit_utama`, `penandatangan_surat_unit_utama`, `perihal_surat_unit_utama`, `surat_unit_utama`, `other_data`) VALUES
(2, 2, 2, 'unitutama/kln/6373/update', '2015-12-27', 'Biro Umum', 'Kepala Biro KLN', 'Permohonan izin', '', ''),
(27, 2, 3, 'unit/utama/32', '2015-03-10', '16', 'Kepala Biro KLN', 'Permohonan izin', 'user.png', ''),
(28, 2, 4, '249e/gn/ll/vii/2015', '2015-08-10', '11', 'Tubagus S', 'Permohonan persetujuan dinas keluar negeri', 'user.png', '');

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
