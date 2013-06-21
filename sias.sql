SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `nama_admin` varchar(60) DEFAULT NULL,
  `kontak` varchar(15) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`id_admin`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_admin`, `kontak`, `email`) VALUES
(1, 'ros', '21232f297a57a5a743894a0e4a801fc3', 'Rosikhan Maulana Yusuf', '085649705026', 'siwedw@gmail.com'),
(2, 'dio', '21232f297a57a5a743894a0e4a801fc3', 'Claudio Fresta Suharsono', '-', '-');

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(20) DEFAULT NULL,
  `nama_guru` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id_guru`),
  UNIQUE KEY `nip` (`nip`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

INSERT INTO `guru` (`id_guru`, `nip`, `nama_guru`) VALUES
(1, '222001', 'Anderson Mattew'),
(2, '222002', 'Nina Hermonie'),
(3, '222003', 'Takanashi Rikka'),
(10, '222005', 'Polka Ginger'),
(11, '222004', 'Kemina Yuri'),
(13, '222006', 'A'),
(14, '222007', 'B'),
(15, '222008', 'C'),
(16, '222009', 'D'),
(17, '222010', 'E'),
(18, '222011', 'F'),
(19, '222012', 'G'),
(20, '222013', 'H'),
(21, '222014', 'I'),
(22, '222015', 'J'),
(23, '222016', 'K'),
(24, '222017', 'L'),
(25, '222018', 'M'),
(26, '222019', 'N');

CREATE TABLE IF NOT EXISTS `khs` (
  `id_khs` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `uk1` int(11) DEFAULT NULL,
  `uk2` int(11) DEFAULT NULL,
  `uh1` int(11) DEFAULT NULL,
  `uh2` int(11) DEFAULT NULL,
  `uts` int(11) DEFAULT NULL,
  `uas` int(11) DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `tahun` year(4) DEFAULT NULL,
  `valid` tinyint(1) DEFAULT NULL,
  `wajib` tinyint(1) DEFAULT NULL,
  `lulus` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id_khs`),
  KEY `nis` (`nis`),
  KEY `id_paket` (`id_paket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

INSERT INTO `khs` (`id_khs`, `nis`, `id_paket`, `uk1`, `uk2`, `uh1`, `uh2`, `uts`, `uas`, `nilai`, `semester`, `tahun`, `valid`, `wajib`, `lulus`) VALUES
(1, '111001', 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(2, '111001', 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, '111001', 26, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, '111003', 27, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, '111003', 28, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, '111004', 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(8, '111004', 31, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(9, '111004', 29, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(10, '111008', 38, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(11, '111008', 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(12, '111008', 30, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0);

CREATE TABLE IF NOT EXISTS `mapel` (
  `id_mapel` int(11) NOT NULL AUTO_INCREMENT,
  `nama_mapel` varchar(30) DEFAULT NULL,
  `skm` int(2) DEFAULT NULL,
  `sks` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_mapel`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`, `skm`, `sks`) VALUES
(1, 'BIOLOGI', 75, 3),
(2, 'SEJARAH', 75, 3),
(3, 'BAHASA INDONESIA', 75, 3),
(13, 'FISIKA', 75, 3),
(14, 'AGAMA', 75, 2),
(15, 'MATEMATIKA', 75, 3),
(16, 'KIMIA', 75, 3),
(17, 'PENDIDIKAN KEWARGANAEGARAAN', 75, 2),
(18, 'EKONOMI', 75, 3),
(19, 'TEKNOLOGI INFORMASI DAN KOMPUT', 75, 2),
(20, 'SOSIOLOGI', 75, 3),
(21, 'GEOGRAFI', 75, 3),
(22, 'BAHASA INGGRIS', 75, 3),
(23, 'BIMBINGAN KONSELING', 75, 2),
(24, 'KESENIAN', 75, 2),
(25, 'OLAH RAGA', 75, 2),
(26, 'BAHASA JERMAN', 75, 3),
(27, 'BAHASA JEPANG', 75, 3),
(28, 'BAHASA ARAB', 75, 3);

CREATE TABLE IF NOT EXISTS `paket` (
  `id_paket` int(11) NOT NULL AUTO_INCREMENT,
  `kode_paket` varchar(20) NOT NULL,
  `kode_syarat` varchar(20) DEFAULT NULL,
  `kelas` varchar(2) DEFAULT NULL,
  `batas` int(11) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `id_mapel` int(11) DEFAULT NULL,
  `id_ruang` int(11) DEFAULT NULL,
  `id_guru` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_paket`),
  KEY `id_mapel` (`id_mapel`),
  KEY `id_kelas` (`id_ruang`),
  KEY `id_guru` (`id_guru`),
  KEY `kode_paket` (`kode_paket`),
  KEY `kode_syarat` (`kode_syarat`),
  KEY `kelas` (`kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

INSERT INTO `paket` (`id_paket`, `kode_paket`, `kode_syarat`, `kelas`, `batas`, `semester`, `id_mapel`, `id_ruang`, `id_guru`) VALUES
(26, 'a1', NULL, 'A', 30, 1, 1, 1, 1),
(27, 'a1', NULL, 'B', 30, 1, 1, 2, 1),
(28, 'b1', NULL, 'A', NULL, NULL, 2, 2, 2),
(29, 'b1', NULL, 'B', NULL, NULL, 2, 3, 2),
(30, 'c1', NULL, 'A', NULL, NULL, 3, 3, 3),
(31, 'c1', NULL, 'B', NULL, NULL, 3, 4, 3),
(38, 'd1', NULL, 'A', 30, 1, 21, NULL, 20),
(39, 'd1', NULL, 'B', 30, 1, 21, NULL, 20);

CREATE TABLE IF NOT EXISTS `ruang` (
  `id_ruang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruang` varchar(20) DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `hari` varchar(7) DEFAULT NULL,
  PRIMARY KEY (`id_ruang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `jam_mulai`, `jam_selesai`, `hari`) VALUES
(1, '10A', '06:30:00', '07:45:00', 'Senin'),
(2, '10B', '07:45:00', '09:00:00', 'Selasa'),
(3, '10C', '09:30:00', '10:30:00', 'Rabu'),
(4, '10D', '10:30:00', '11:30:00', 'Kamis');

CREATE TABLE IF NOT EXISTS `setting` (
  `variable` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  PRIMARY KEY (`variable`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(15) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tempat` varchar(20) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `agama` varchar(10) DEFAULT NULL,
  `jenis_kelamin` varchar(3) NOT NULL,
  `goldar` varchar(5) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `nama_ayah` varchar(64) DEFAULT NULL,
  `hp_ayah` varchar(15) DEFAULT NULL,
  `nama_ibu` varchar(64) DEFAULT NULL,
  `hp_ibu` varchar(15) DEFAULT NULL,
  `nama_wali` varchar(64) DEFAULT NULL,
  `hp_wali` varchar(15) DEFAULT NULL,
  `alamat_ortu` varchar(255) DEFAULT NULL,
  `alamat_wali` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `angkatan` year(4) DEFAULT NULL,
  `bahasa` varchar(15) NOT NULL,
  `jalur` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nis_2` (`nis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

INSERT INTO `user` (`id`, `nis`, `pass`, `nama`, `tempat`, `tanggal`, `alamat`, `agama`, `jenis_kelamin`, `goldar`, `no_hp`, `nama_ayah`, `hp_ayah`, `nama_ibu`, `hp_ibu`, `nama_wali`, `hp_wali`, `alamat_ortu`, `alamat_wali`, `foto`, `angkatan`, `bahasa`, `jalur`) VALUES
(4, '111003', 'hebat', 'Lucy Heartfilia', 'Fiore', '2000-06-28', 'Fairy Tail', '', 'P', 'B', '', '', '-', 'Heartfilia', '-', '-', '-', 'Fiore', '-', NULL, NULL, '', 'Selected'),
(5, '111004', '827ccb0eea8a706c4c34a16891f84e7b', 'Rosikhan Maulana Yusuf', 'Malang', '2013-01-02', 'Jl. Delima 2', 'Islam', 'L', 'O', '085649705026', '', '', '', '', '', '', '', '', NULL, NULL, '', 'Undangan'),
(6, '111008', '1580a6e43ec39526127c0b238b9ec7e6', 'Wedge Watson', 'Malang', '2013-01-02', 'Jl. Semangka 300 Dermo', 'Islam', 'L', 'O', '+6285649705026', 'NKM', '+628', 'MMN', '+628', '-', '-', 'Jl. Semangka 300 Dermo', '-', NULL, NULL, '', 'Undangan'),
(9, '111001', '27b205035c328b16d8c8329c4b41e87e', 'Claudio Fresta Suharsono', 'Malang', '2013-06-10', '', 'Islam', 'L', 'B', '+628', '', '', '', '', '', '', '', '', NULL, NULL, '', 'Undangan');


ALTER TABLE `khs`
  ADD CONSTRAINT `khs_ibfk_2` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `khs_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `user` (`nis`);

ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_4` FOREIGN KEY (`id_guru`) REFERENCES `guru` (`id_guru`),
  ADD CONSTRAINT `paket_ibfk_7` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`),
  ADD CONSTRAINT `paket_ibfk_9` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
