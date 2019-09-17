-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 06 Sep 2019 pada 19.27
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `qrvalidasi`
--
CREATE DATABASE IF NOT EXISTS `qrvalidasi` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `qrvalidasi`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `namalengkap` varchar(40) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`, `namalengkap`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Dadung Awuk'),
(4, 'basuki', 'b4e364bb5eab14eedd9ae3d54437d52f', 'Basuki Oke');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `npm` varchar(10) DEFAULT NULL,
  `nama_mhs` varchar(40) DEFAULT NULL,
  `prodi` varchar(40) DEFAULT NULL,
  `tgl_lulus` date DEFAULT NULL,
  `no_ijazah` varchar(40) DEFAULT NULL,
  `ipk` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=34 ;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `npm`, `nama_mhs`, `prodi`, `tgl_lulus`, `no_ijazah`, `ipk`) VALUES
(32, '0582 5395 ', '99595 99595 59959', 'Afdeling I', '2019-07-01', 'BK 5995 RG', 'ADOLINA'),
(33, '9876 0987', '9887 - 0912 -8761 -0982', 'Afdeling X', '2019-09-13', 'BK 2399 IUL', 'PASIR MANDOGE');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
