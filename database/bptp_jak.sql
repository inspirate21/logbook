-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2015 at 03:29 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bptp_jak`
--

-- --------------------------------------------------------

--
-- Table structure for table `uraian_tugas`
--

CREATE TABLE IF NOT EXISTS `uraian_tugas` (
`id_laporan` int(11) NOT NULL,
  `judul_laporan` varchar(50) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `NIP` varchar(18) NOT NULL,
  `Tanggal_input` date NOT NULL,
  `Tanggal_tugas` date NOT NULL,
  `Isi_tugas` varchar(2000) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=50 ;

--
-- Dumping data for table `uraian_tugas`
--

INSERT INTO `uraian_tugas` (`id_laporan`, `judul_laporan`, `Nama`, `NIP`, `Tanggal_input`, `Tanggal_tugas`, `Isi_tugas`) VALUES
(9, 'hghca', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-03', '2015-07-03', ' jbgwkdqk'),
(10, 'lkwfjasd', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-06', '2015-07-06', '<p><strong> jhbg</strong></p>'),
(27, 'Penanaman  Sawi', 'Toto Rujito', '196112151987031001', '2015-07-08', '2015-07-08', '<p><strong>Pembenihan:</strong></p>\r\n<p>- Kebutuhan benih sawi untuk setiap hektar lahan tanam sebesar 750 gram.</p>\r\n<p>- Benih sawi berbentuk bulat, kecil-kecil. Permukaannya licin mengkilap dan agak keras. Warna kulit benih coklat kehitaman.</p>\r\n<p><strong>Pengolahan Tanah:</strong></p>\r\n<p>- Sedang ukuran bedengan pembibitan yaitu lebar 80 &ndash; 120 cm dan panjangnya 1 &ndash; 3 meter.</p>\r\n<p>- Curah hujan lebih dari 200 mm/bulan, tinggi bedengan 20 &ndash; 30 cm. - Dua minggu sebelum di tabur benih, bedengan pembibitan ditaburi dengan pupuk kandang lalu di tambah 20 gram urea, 10 gram TSP, dan 7,5 gram Kcl.</p>\r\n<p>- Cara melakukan pembibitan ialah sebagai berikut : benih ditabur, lalu ditutupi tanah setebal 1 &ndash; 2 cm, lalu disiram dengan sprayer.</p>\r\n<p>- Setelah berumur 3 &ndash; 4 minggu sejak disemaikan tanaman dipindahkan ke bedengan.</p>'),
(29, 'aa', 'Dr. Yudi Sastro, SP, MP', '197207021998031002', '2015-07-08', '2015-07-09', '<p style="text-align: center;">adfdfddfd</p>\r\n<p style="text-align: right;">jjjj</p>\r\n<p>&nbsp;</p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;">&nbsp;</p>\r\n<p style="text-align: right;">jvhkjhk,</p>'),
(31, 'hari pertama', 'Toto Rujito', '196112151987031001', '2015-07-08', '2015-07-15', '<p style="text-align: center;">Laporan</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p style="text-align: left;">afoadkfokadpkfdpokfd</p>'),
(32, 'hari kedua', 'Toto Rujito', '196112151987031001', '2015-07-08', '2015-07-08', '<p style="text-align: center;">laporan&nbsp;</p>\r\n<p style="text-align: center;">&nbsp;</p>\r\n<p>hjgjgilk</p>'),
(33, 'hari ke 10', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-09', '2015-07-10', '<p>aaaaaaaaaaaaa</p>'),
(35, '', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-09', '0000-00-00', '<div><img src="http://i.imgur.com/4rzSRCU.png" width="629" style="line-height: 1.7em; background-color: transparent;"><span style="line-height: 1.7em; background-color: transparent;">&nbsp;</span><img src="http://i.imgur.com/quKT4PG.png" style="line-height: 1.7em; background-color: transparent;" width="500"><br></div>'),
(36, '', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-09', '0000-00-00', '<img src="http://i.imgur.com/sTgRVKb.png" width="629"> '),
(37, 'coba', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-09', '2015-07-03', '<img src="http://i.imgur.com/klmFrM8.png" width="629"><div> </div><div><br></div><div style="text-align: center;">gambar1.logo</div><div style="text-align: center;"><br></div><div style="text-align: left;">sfdafdafjdhfjhdg fjgfjgfv fjvkf</div>'),
(38, '', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-09', '0000-00-00', '<img src="http://i.imgur.com/WhnxuoV.png" width="500"> <div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div><br></div><div>j,khj,hj,hn,</div>'),
(39, 'penanaman', 'Toto Rujito', '196112151987031001', '2015-07-13', '2015-07-13', '<p>hhdbdajfdawn</p>'),
(40, '', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '0000-00-00', '<img src="http://i.imgur.com/n6YvH0q.jpg" width="104"> <div><br></div><div>hghghghghg</div>'),
(41, 'a', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-13', 'a '),
(42, 's', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-16', 's '),
(43, 'd', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-23', 'd '),
(44, 'f', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-18', 'f '),
(45, 'g', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-03', 'g '),
(46, 'h', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-11', 'h '),
(47, 't', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-10', 't '),
(48, 'q', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-02', 'q '),
(49, 'z', 'Karno Heriswanto, A.Md', '197504082000031002', '2015-07-13', '2015-07-16', 'z ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nama` varchar(40) NOT NULL,
  `nip` varchar(18) NOT NULL,
  `pangkat` varchar(25) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `nip`, `pangkat`, `jabatan`, `username`, `password`, `role`) VALUES
('Dr. Ir. Bachtar Bakrie, M.Sc', '195711161982031002', 'Pembina Utama IV/e', 'Peneliti Utama', 'bachtar', '1234', 'member'),
('Ir. Oemi Koesmawardani, MAB', '195805111983032001', 'Pembina. IV/a', 'Kasubag TU', 'Oemi', '1234', 'Super Admin'),
('Dra. Listyawati, M.Si', '195809011988012001', 'Pembina IV/a', 'Penyuluh Non Klas', 'Listyawati', '1234', 'member'),
('Dra. Erti Nasir', '195908111990032001', 'Penata Tk.I III/d', 'Fungsional Umum', 'Erti', '1234', 'member'),
('Ir. Heni Wijayanti, Msi', '195909071986032001', 'Penata Tk.I III/d', 'Penyuluh Non Klas', 'Heni', '1234', 'member'),
('Tatik Maridah', '195910251992032001', 'Penata III/c', 'Fungsional Umum', 'Tatik', '1234', 'member'),
('Ir. Benny Victor Lotulung', '195911051991031001', 'Penata Tk.I III/d', 'Peneliti Pertama', 'Benny', '1234', 'member'),
('Ir. Syamsu Bahar, M.Si', '196009301987031002', 'Pembina IV/a', 'Peneliti Madya', 'Syamsu', '1234', 'member'),
('Ir. Etty Herawati, M.Si', '196110203198503200', 'Pembina Tk. I IV/b', 'Kepala Balai', 'Etty', '1234', 'Super Admin'),
('Toto Rujito', '196112151987031001', 'Penata Muda Tk.I III/b', 'Fungsional Umum', 'Toto', '1234', 'member'),
('drh. Dini Andayani, M.Si', '196201091991032002', 'Pembina IV/a', 'Penyuluh Pert Pertama', 'Dini', '1234', 'member'),
('Muhammad Nur, A.Md', '196207051993031002', 'Penata Muda Tk.I III/b', 'Fungsional Umum', 'Muhammad', '1234', 'member'),
('Yuswantiningsih, B.Sc', '196208031989032001', 'Penata III/c', 'Fungsional Umum', 'Yuswantiningsih', '1234', 'member'),
('Ir. Rochmiatul Wahyu Suryawati, M.Si', '196209041989032001', 'Pembina IV/a', 'Fungsional Umum', 'Rochmiatul', '1234', 'member'),
('Painah', '196303101988012001', 'Penata Muda Tk.I III/b', 'Bend. Penerima', 'Painah', '1234', 'member'),
('Supriyadi', '196304022007101001', 'Juru Tingkay I I/d', 'Fungsional Umum', 'Supriadi', '1234', 'member'),
('Ir. Adriani Ratnasari', '196304081991032002', 'Penata Tk.I III/d', 'Fungsional Umum', 'Adriani', '1234', 'member'),
('Ir. Usmiza Astuti, M.Si', '196305251991032002', 'Pembina IV/a', 'Penyuluh Non Klas', 'Usmiza', '1234', 'member'),
('Dr. Ir. Sostenis Sampeliling, M.Si', '196310301992031006', 'Pembina Tk.I IV/b', 'Penyuluh Pert. Ahli Madya', 'Sostenis', '1234', 'member'),
('Ir. One Tigor Pakpahan', '196401201993031001', 'Penata III/c', 'Fungsional Umum', 'One', '1234', 'member'),
('Ali Basah Umaryanto', '196403051994031001', 'Penata Muda III/a', 'Fungsional Umum', 'Ali', '1234', 'member'),
('Sumarni', '196503251992032001', 'Penata Muda Tk.I III/b', 'Fungsional Umum', 'Sumarni', '1234', 'member'),
('Jayadi Tibing', '196506041999031001', 'Juru Tk.I I/d', 'Fungsional Umum', 'Jayadi', '1234', 'member'),
('Namin', '196603222002121001', 'Juru I/c', 'Fungsional Umum', 'Namin', '1234', 'member'),
('Budi Darmawan, B.Sc', '196605161998031001', 'Penata Muda III/a', 'Fungsional Umum', 'Budi', '1234', 'member'),
('Ir. Emi Sugiartini, MP', '196704251994032001', 'Penata III/c', 'Peneliti Muda', 'Emi', '1234', 'member'),
('Ir. Andi Saenab, M.Si', '196804181996032001', 'Penata Tk.I III/d', 'Peneliti Muda', 'Andi', '1234', 'member'),
('Indarti Puji Lestari, SP, M.Si', '196903091998032001', 'Penata III/c', 'Peneliti Pertama', 'Indarti', '1234', 'member'),
('Fikri', '197002272007011002', 'Pengatur Muda Tk.I II/b', 'Fungsional Umum', 'Fikri', '1234', 'member'),
('Dewano Rikuser, S.Sos', '197010181993031002', 'Penata Muda III/a', 'Fungsional Umum', 'Dewano', '1234', 'member'),
('Muflihani Yanis, S.Pt, M.Si', '197103211998032001', 'Penata III/c', 'Peneliti Pertama', 'Muflihani', '1234', 'member'),
('Syarifah Aminah, SP, M.Si', '197105021999032001', 'Penata III/c', 'Peneliti Muda', 'Syarifah', '1234', 'member'),
('Irzal Indra', '197108202001121002', 'Pengatur II/c', 'Fungsional Umum', 'Irzal', '1234', 'member'),
('Marwan', '197203092007011001', 'Pengatur Muda Tk.I II/b', 'Fungsional Umum', 'Marwan', '1234', 'member'),
('Dr. Yudi Sastro, SP, MP', '197207021998031002', 'Penata Tk.I III/d', 'Kasie KSPP', 'Yudi', '1234', 'Super Admin'),
('Umming Sente, S.Pt', '197208251998032002', 'Penata III/c', 'Peneliti Muda', 'Umming', '1234', 'member'),
('Sadiyah, A.Md', '197212311999032001', 'Pengatur Tk.I II/d', 'Bend. Pengeluaran', 'Sa''diyah', '1234', 'member'),
('Waryat, S.Pi, MP', '197402211999031002', 'Penata III/c', 'Peneliti Muda', 'Waryat', '1234', 'member'),
('Ahmad Maulana', '197404102007011001', 'Juru Muda Tk.I I/b', 'Fungsional Umum', 'Ahmad', '1234', 'member'),
('Budiyanto', '19740615200812104', 'Juru I/c', 'Fungsional Umum', 'Budiyanto', '1234', 'member'),
('Syaiful Bahri', '197501111999031003', 'Pengatur TkI II/d', 'Fungsional Umum', 'Syaiful', '1234', 'member'),
('Karno Heriswanto, A.Md', '197504082000031002', 'Pengatur Tk.I II/d', 'Fungsional Umum', 'Karno', '1234', 'Admin'),
('David Putera Abdi Ginting', '197706192006041001', 'Penata Muda III/a', 'Fungsional Umum', 'David', '1234', 'member'),
('Sheila Safitri S.Sos', '197709202007012001', 'Pengatur Muda III/a', 'Fungsional Umum', 'Sheila', '1234', 'member'),
('Winarto', '197807172003121002', 'Pengatur II/c', 'Fungsional Umum', 'Winarto', '1234', 'member'),
('Ana Feronika Cindra Irawati, SP, MP', '197904252005012001', 'Penata Muda Tk.I III/b', 'Peneliti Muda', 'Ana', '1234', 'member'),
('Erna Puji Astuti, SP', '197905132009122004', 'Penata Muda III/a', 'Peneliti Non Klas', 'Erna', '1234', 'member'),
('drh. Neng Risris Sudolar', '197906162006042003', 'Penata III/c', 'Peneliti Pertama', 'Neng', '1234', 'member'),
('Tezar Ramadhan, S.TP', '197907302003121002', 'Penata III/c', 'Peneliti Pertama', 'Tezar', '1234', 'member'),
('Lukman Hakim, S.Si', '197909242011011005', 'Penata Muda III/a', 'Calon Pranata Lab', 'Lukman', '1234', 'member'),
('Ikrarwati, SP', '198010282006042001', 'Penata Muda Tk.III/b', 'Peneliti Pertama', 'Ikrarwati', '1234', 'member'),
('Budiyantoro, S.TP', '198012242009121002', 'Penata Muda III/a', 'Peneliti Non Klas', 'Budiyantoro', '1234', 'member'),
('Noveria Sjafrina, STP, M.Si', '198111292005012010', 'Penata Muda Tk.I III/b', 'Peneliti Pertama', 'Noveria', '1234', 'member'),
('Kartika Mayasari, SP', '198309052011012010', 'Penata Muda III/a', 'Calon Penyuluh Pertanian', 'Kartika', '1234', 'member'),
('Yosep Fadilah', '198409142008121002', 'Pengatur Muda II/a', 'Fungsional Umum', 'Yosep', '1234', 'member'),
('Wylla Sylvia Maharani, SP', '198409232011012013', 'Penata Muda III/a', 'Calon Peneliti', 'Wylla', '1234', 'member'),
('Yossi Handayani, S.TP', '198501102011012014', 'Penata Muda III/a', 'Calon Peneliti', 'Yossi', '1234', 'member'),
('Chery Soraya Ammatillah, SP', '198505192008012001', 'Penata Muda TK.I III/b', 'Calon Peneliti', 'Chery', '1234', 'member'),
('Gamma Noor Oktaningrum, S.TP', '198710042011012017', 'Penata Muda III/a', 'Calon Peneliti', 'Gamma', '1234', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uraian_tugas`
--
ALTER TABLE `uraian_tugas`
 ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uraian_tugas`
--
ALTER TABLE `uraian_tugas`
MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=50;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
