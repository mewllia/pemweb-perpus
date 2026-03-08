-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Mar 2026 pada 09.40
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpus_cilik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `penerbit` varchar(100) DEFAULT NULL,
  `tahun_terbit` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(1, 'Laskar Pelangi', 'Andrea Hirata', 'Bentang Pustaka', 2005),
(2, 'Sang Pemimpi', 'Andrea Hirata', 'Bentang Pustaka', 2006),
(3, 'Negeri 5 Menara', 'Ahmad Fuadi', 'Gramedia Pustaka Utama', 2009),
(4, 'Perahu Kertas', 'Dee Lestari', 'Bentang Pustaka', 2009),
(5, 'Bumi', 'Tere Liye', 'Gramedia Pustaka Utama', 2014),
(6, 'Ayat-Ayat Cinta', 'Habiburrahman El Shirazy', 'Republika', 2004),
(7, 'Harry Potter and the Philosopher\'s Stone', 'J.K. Rowling', 'Bloomsbury', 1997),
(8, 'Harry Potter and the Chamber of Secrets', 'J.K. Rowling', 'Bloomsbury', 1998),
(9, 'Harry Potter and the Prisoner of Azkaban', 'J.K. Rowling', 'Bloomsbury', 1999),
(10, 'Harry Potter and the Goblet of Fire', 'J.K. Rowling', 'Bloomsbury', 2000),
(11, 'Harry Potter and the Order of the Phoenix', 'J.K. Rowling', 'Bloomsbury', 2003),
(12, 'Harry Potter and the Half-Blood Prince', 'J.K. Rowling', 'Bloomsbury', 2005),
(13, 'Harry Potter and the Deathly Hallows', 'J.K. Rowling', 'Bloomsbury', 2007),
(14, 'Detective Conan', 'Gosho Aoyama', 'Shogakukan', 1994),
(15, 'Haikyuu!!', 'Haruichi Furudate', 'Shueisha', 2012),
(16, 'Naruto', 'Masashi Kishimoto', 'Shueisha', 1999),
(17, 'One Piece', 'Eiichiro Oda', 'Shueisha', 1997),
(18, 'Attack on Titan', 'Hajime Isayama', 'Kodansha', 2009),
(19, 'Jujutsu Kaisen', 'Gege Akutami', 'Shueisha', 2018),
(20, 'Spy x Family', 'Tatsuya Endo', 'Shueisha', 2019);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
