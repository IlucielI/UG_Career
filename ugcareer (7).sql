-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2021 at 04:52 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ugcareer`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumnis`
--

CREATE TABLE `alumnis` (
  `id` int(10) UNSIGNED NOT NULL,
  `npm` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_masuk` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_lulus` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `npwp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prodi` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alumnis`
--

INSERT INTO `alumnis` (`id`, `npm`, `tahun_masuk`, `tahun_lulus`, `nik`, `npwp`, `no_telp`, `id_user`, `id_prodi`, `created_at`, `updated_at`) VALUES
(1, '16117040', '2017', '2021', '3212131427382930', '76869879879877', '08123456789', 2, 17, NULL, '2021-10-28 07:23:10'),
(2, '27219427', '2014', '2018', '32121377980001', '', '089656790567', 5, 12, '2021-10-21 00:07:26', '2021-10-21 00:07:26'),
(3, '16117040', '2014', '2021', '8021383023932', '', '093208932432', 6, 4, '2021-10-24 06:25:11', '2021-10-24 06:25:11'),
(4, '1689090', '', '2013', '2387497324090', '', '9328923', 12, 22, '2021-10-28 00:16:22', '2021-10-28 00:16:22');

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `id` int(10) UNSIGNED NOT NULL,
  `jenis_berita` enum('Pengumuman','Loker','Internship') COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `preview_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_berita` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`id`, `jenis_berita`, `judul_berita`, `preview_berita`, `isi_berita`, `foto`, `created_at`, `updated_at`) VALUES
(1, 'Pengumuman', 'The Prospect of Medical Tourism in Asia: Perspective of Indonesia and Uzbekistan', 'Universitas Gunadarma mengadakan webinar dengan tema The Prospect of Medical Tourism in Asia: Perspective of Indonesia and Uzbekistan,', '<p><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Universitas Gunadarma mengadakan webinar dengan tema&nbsp;</span><span style=\"box-sizing: border-box; font-weight: bold; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; color: blue;\">The Prospect of Medical Tourism in Asia: Perspective of Indonesia and Uzbekistan</span></span><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">, pada :</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Hari/ Tanggal : Jumat / 15 Oktober 2024</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Waktu : 13.00 WIB</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Pembicara :</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">1. Nilufarbegim Khayrullaeva ( Doctoral student of Bukhara State University. Lecturer of Tourism and Hotel Management Department)</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">2. Khamida Tulaeva (Head of the International Cooperation Departement. Lecturer of Tourism and Hotel Management Department)</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">3. Rena Fuji Erin Setyawati (Head of Medical Education Unit at the Faculty of Medicine Universitas Gunadarma)</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Peserta webinar untuk seluruh mahasiswa di Universitas Gunadarma dengan mengklik&nbsp;</span><a style=\"box-sizing: border-box; text-decoration-line: none; outline: 0px; color: #7e7e7e; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" href=\"https://forms.gle/RubNJH5ePc1GYg4f8\"><span style=\"box-sizing: border-box; color: blue;\"><span style=\"box-sizing: border-box; font-weight: bold;\">Link Pendaftaran</span></span></a><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Pendaftaran ditutup pada hari Kamis tanggal 14 September 2021 Pukul 21.00 atau jika quota</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">pendaftar telah terpenuhi sebanyak 200 orang. Peserta akan mendapatkan e-sertifikat.</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Mau dapat ilmu baru dan e-sertifikat ?</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Yuk segera daftar</span></p>', '1292548996CdA6U32tow.jpg', '2021-10-24 05:06:23', '2021-10-24 05:58:55'),
(2, 'Loker', 'TeSCA Digital Creative - 2021', 'TeSCA Digital Creative adalah sebuah penghargaan \"The Future Generation\" untuk mahasiswa yang kreatif dan memiliki inovasi digital. Tidak hanya itu saja, melalui penghargaan ini para peserta berkesempatan untuk mengembangkan karir digital dan mengakselerasi munculnya generasi digital masa depan untuk Indonesia tangguh.', '<p style=\"box-sizing: border-box; line-height: 1.6em; margin: 0px; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">TeSCA Digital Creative adalah sebuah penghargaan&nbsp;<em style=\"box-sizing: border-box;\">\"The Future Generation\"</em>&nbsp;untuk mahasiswa yang kreatif dan memiliki inovasi digital. Tidak hanya itu saja, melalui penghargaan ini para peserta berkesempatan untuk mengembangkan karir digital dan mengakselerasi munculnya generasi digital masa depan untuk Indonesia tangguh.</p>\r\n<p><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"box-sizing: border-box; font-weight: bold; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Syarat dan ketentuan untuk berpartisipasi</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Untuk mengikuti kompetisi TeSCA Digital Creative ini, terdapat beberapa syarat dan ketentuannya.</span></p>\r\n<p>&nbsp;</p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Harus berupa tim berjumlah maksimal 5 orang, yang terdiri dari Mahasiswa/Dosen/Asisten Dosen yang terdaftar sebagai Mahasiswa/Dosen di salah satu Perguruan Tinggi. Dalam satu tim, diperbolehkan dari universitas yang berbeda.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Mempunyai inovasi&nbsp;<em style=\"box-sizing: border-box;\">Digital Creative</em>&nbsp;yang harus diikutsertakan dimana inovasi tersebut diinisiasi di antara tanggal&nbsp;<span style=\"box-sizing: border-box; font-weight: bold;\">1 Juni 2020 s/d 31 Mei 2021.</span></li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Satu Inovasi Digital hanya dapat diikutsertakan dalam satu kategori saja.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Peserta wajib menyiapkan:<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<ul style=\"box-sizing: border-box;\">\r\n<ul style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Esay makalah (maks. 15 halaman)</li>\r\n</ul>\r\n</ul>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ul style=\"box-sizing: border-box;\">\r\n<ul style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Video esay (durasi maks. 5 menit)</li>\r\n</ul>\r\n</ul>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Memiliki dokumen lain yang dapat dilampirkan sebagai penguat inovasi digital&nbsp;<em style=\"box-sizing: border-box;\">(Highly Recommended Evidence)</em>&nbsp;dapat berupa video tutorial, video aktifitas,&nbsp;<em style=\"box-sizing: border-box;\">manual book</em>, dan dokumen&nbsp;<em style=\"box-sizing: border-box;\">evident</em>&nbsp;lainnya atau berupa link aplikasi/website dan&nbsp;<em style=\"box-sizing: border-box;\">customer testimony</em>.</li>\r\n</ol>\r\n</ol>\r\n<p>&nbsp;</p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<li style=\"box-sizing: border-box;\">Karya inovasi yang diikutsertakan adalah karya inovasi asli dan orisinil serta dapat dipertanggungjawabkan oleh peserta.</li>\r\n</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; font-weight: bold;\">Kategori yang masuk dalam penilaian TeSCA Digital Creative</span></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Terdapat 6 kategori dalam penilaian TeSCA Digital Creative meliputi sebagai berikut:</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">Lifestyle</em></span><br style=\"box-sizing: border-box;\" />Aplikasi atau produk digital yang dapat digunakan oleh personal dalam kehidupan harian, meliputi&nbsp;<em style=\"box-sizing: border-box;\">Fitness/Sports, Personal Health, Food, Music, Travel,</em>&nbsp;dll.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; font-weight: bold;\">Kriteria Penilaian :</span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Ide masalah dan inovasi penyelesaiannya</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Degree of disruptiveness</em></li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Proses Pengembangan</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Validasi Produk</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Traction</em>&nbsp;(misalnya :&nbsp;<em style=\"box-sizing: border-box;\">active user, revenue, transaksi,</em>&nbsp;dll)</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></li>\r\n</ol>\r\n</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">Social &amp; Community</em></span><br style=\"box-sizing: border-box;\" />Aplikasi atau produk digital yang dapat digunakan oleh sosial dan komunitas, termasuk aplikasi&nbsp;<em style=\"box-sizing: border-box;\">Social commerce, social logistics,</em>&nbsp;dll.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; font-weight: bold;\">Kriteria Penilaian :</span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Ide masalah dan inovasi penyelesaiannya</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Degree of disruptiveness</em></li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Proses Pengembangan</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Validasi Produk</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Traction</em>&nbsp;(misalnya :&nbsp;<em style=\"box-sizing: border-box;\">active user, revenue, transaksi,</em>&nbsp;dll)</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></li>\r\n</ol>\r\n</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">Education &amp; Information Distribution</em></span><br style=\"box-sizing: border-box;\" />Aplikasi atau produk digital yang digunakan untuk mengedukasi dan/atau menginformasikan sesuatu kepada masyarakat luas seperti&nbsp;<em style=\"box-sizing: border-box;\">educational apps, early warning information,&nbsp;</em>portal berita ataupun&nbsp;<em style=\"box-sizing: border-box;\">language translator,</em>&nbsp;dll.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; font-weight: bold;\">Kriteria Penilaian :</span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Ide masalah dan inovasi penyelesaiannya</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Degree of disruptiveness</em></li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Proses Pengembangan</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Validasi Produk</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Traction</em>&nbsp;(misalnya :&nbsp;<em style=\"box-sizing: border-box;\">active user, revenue, transaksi,</em>&nbsp;dll)</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></li>\r\n</ol>\r\n</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">Productivity</em></span><br style=\"box-sizing: border-box;\" />Aplikasi atau produk digital yang digunakan untuk meningkatkan produktifitas bekerja, meliputi:&nbsp;<em style=\"box-sizing: border-box;\">work order apps, resource management, dashboard, payment,</em>&nbsp;dll.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; font-weight: bold;\">Kriteria Penilaian :</span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Ide masalah dan inovasi penyelesaiannya</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Degree of disruptiveness</em></li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Proses Pengembangan</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Validasi Produk</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Traction</em>&nbsp;(misalnya :&nbsp;<em style=\"box-sizing: border-box;\">active user, revenue, transaksi,</em>&nbsp;dll)</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></li>\r\n</ol>\r\n</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">Entertaiment &amp; Home Intelligent</em></span><br style=\"box-sizing: border-box;\" />Aplikasi atau produk digital yang memadukan&nbsp;<em style=\"box-sizing: border-box;\">video, text, dan audio content</em>&nbsp;untuk menjadi hiburan, termasuk aplikasi pintar untuk pengelolaan rumah dan lingkungannya. Contohnya: Aplikasi Rumah Pintar,&nbsp;<em style=\"box-sizing: border-box;\">Video Streaming, podcasting apps,</em>&nbsp;dll.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; font-weight: bold;\">Kriteria Penilaian :</span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Ide masalah dan inovasi penyelesaiannya</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Degree of disruptiveness</em></li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Proses Pengembangan</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Validasi Produk</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Traction</em>&nbsp;(misalnya :&nbsp;<em style=\"box-sizing: border-box;\">active user, revenue, transaksi,</em>&nbsp;dll)</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></li>\r\n</ol>\r\n</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><span style=\"box-sizing: border-box; font-weight: bold;\"><em style=\"box-sizing: border-box;\">Games</em></span><br style=\"box-sizing: border-box;\" />Aplikasi atau produk digital yang dapat digunakan untuk sarana hiburan dalam bentuk permainan.<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><span style=\"box-sizing: border-box; font-weight: bold;\">Kriteria Penilaian :</span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Ide masalah dan inovasi penyelesaiannya</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Degree of disruptiveness</em></li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Proses Pengembangan</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\">Validasi Produk</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" />\r\n<ol style=\"box-sizing: border-box;\">\r\n<ol style=\"box-sizing: border-box;\">\r\n<li style=\"box-sizing: border-box;\"><em style=\"box-sizing: border-box;\">Traction</em>&nbsp;(misalnya :&nbsp;<em style=\"box-sizing: border-box;\">active user, revenue, transaksi,</em>&nbsp;dll)</li>\r\n</ol>\r\n</ol>\r\n<br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></li>\r\n</ol>\r\n</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Silahkan daftarkan kelompok Anda melalui Form Pendaftaran sebelum tanggal&nbsp;</ol>\r\n</ol>\r\n<p><span style=\"box-sizing: border-box; font-weight: bold;\">22 Oktober 2021.</span><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Yang terpilih berdasarkan dari hasil seleksi, secara otmatis menjadi perwakilan Universitas Gunadarma akan dikirimkan sebagai peserta TeSCA Digital Creative 2021.</ol>\r\n</ol>\r\n<p><br style=\"box-sizing: border-box;\" /><br style=\"box-sizing: border-box;\" /></p>\r\n<ol style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Ditunggu partisipasinya.</ol>', '645710342codecamp404.jpg', '2021-10-24 05:08:33', '2021-10-24 05:08:33'),
(3, 'Internship', 'Internship di Kalimalang Ceria', 'Pendaftaran Wisuda Daring Periode 10, 11 dan 12 sudah ditutup. Silakan bagi yang belum wisuda untuk mendaftar Wisuda Daring Periode 13. Link tautan pendaftaran https://bit.ly/DaftarWisudaDaring13 .', '<p><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Laboratorium Pengembangan Aplikasi dan Pemrograman Komputer - LePKom Universitas Gunadarma membuka pendaftaran untuk menjadi Asisten Laboratorium dengan kriteria:</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"box-sizing: border-box; font-weight: bold; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; color: blue;\"><u style=\"box-sizing: border-box;\">Persyaratan Umum :</u></span></span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">1. Mahasiswa aktif tingkat 2 dan 3 Universitas Gunadarma</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">2. Prodi Teknik Informatika dan Sistem Informasi</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">3. IPK terakhir minimal 3.00</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">4. Tidak terikat Lembaga atau Laboratorium lain</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">5. Bersedia menjadi asisten minimal 1 tahun</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"box-sizing: border-box; font-weight: bold; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\"><span style=\"box-sizing: border-box; color: blue;\"><u style=\"box-sizing: border-box;\">Berkas Pendaftaran :</u></span></span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Surat Lamaran</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Curriculum Vitae</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Foto terbaru berukuran 4x6 (2 lembar)</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Print out DNS (Nilai Lokal, Nilai Utama, dan Rangkuman Nilai dari Studentsite)</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Foto Copy KRS Aktif</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Foto Copy Sertifikat Seminar / Workshop (jika ada)</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Waktu pendaftaran : 4 - 16 Oktober 2021</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Link pendaftaran :&nbsp;</span><span style=\"box-sizing: border-box; font-weight: bold; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">bit.ly/OPRECLabAplikasi2021</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\">Informasi selengkapnya dapat menghubungi :</span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"box-sizing: border-box; font-weight: bold; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\"><em style=\"box-sizing: border-box;\">Vanessia (082138699795)</em></span><br style=\"box-sizing: border-box; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\" /><span style=\"box-sizing: border-box; font-weight: bold; color: #3a4049; font-family: Lato, sans-serif; font-size: 13px; background-color: #ffffff;\"><em style=\"box-sizing: border-box;\">Felix (085691705636)</em></span></p>', '901566662download (2).jpg', '2021-10-24 05:09:32', '2021-10-24 05:09:32');

-- --------------------------------------------------------

--
-- Table structure for table `datawebs`
--

CREATE TABLE `datawebs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_web` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_pelayanan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `datawebs`
--

INSERT INTO `datawebs` (`id`, `nama_web`, `no_telp`, `email`, `alamat`, `jam_pelayanan`, `created_at`, `updated_at`) VALUES
(1, 'UG Career Center', '087878787878', 'career@gunadarma.ac.id', 'Kampus D, Jl. Margonda Raya 100 - Depok', 'Senin - Jumat, 10.00-15.00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jawabanrespondendetails`
--

CREATE TABLE `jawabanrespondendetails` (
  `kd_jawaban` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kd_pertanyaan` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_jawabanresponden` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawabanrespondendetails`
--

INSERT INTO `jawabanrespondendetails` (`kd_jawaban`, `kd_pertanyaan`, `jawaban`, `id_jawabanresponden`, `created_at`, `updated_at`) VALUES
('P1', 'P1', 'BUMN', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P2', 'P2', '51 - 100 Orang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P3', 'P3', '2.000.000 - 2.500.000', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P4', 'P4', '21 - 40 Orang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P5', 'P5', '6 - 15 Orang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P6', 'P6', 'Sistem Informasi, Teknik Informatika', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P7A', 'P7', 'Sangat Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P7B', 'P7', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P7C', 'P7', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P7D', 'P7', 'Kurang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P7E', 'P7', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P8A', 'P8', 'Sangat Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P8B', 'P8', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P8C', 'P8', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P8D', 'P8', 'Kurang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P8E', 'P8', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9A', 'P9', 'Sangat Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9B', 'P9', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9C', 'P9', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9D', 'P9', 'Kurang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9E', 'P9', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9F', 'P9', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9G', 'P9', 'Sangat Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P9H', 'P9', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P10A', 'P10', 'Sangat Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P10B', 'P10', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P10C', 'P10', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P10D', 'P10', 'Kurang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P10E', 'P10', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P11A', 'P11', 'Sangat Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P11B', 'P11', 'Baik', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P11C', 'P11', 'Cukup', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('P11D', 'P11', 'Kurang', 5, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
('f5c', 'F5C', '8', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f5d', 'F5D', '7', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f8', 'F8', 'Beasiswa PPA', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f14', 'F14', 'Sangat Rendah', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f15', 'F15', 'Rendah', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f19a', 'F19A', 'Administrasi', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f19b', 'F19B', 'Tidak sesuai bidang keilmuan (di luar bidang keilmuan misalnya Sarjana Ekonomi jadi Public Relation)', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f19c', 'F19C', 'ya', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f19d', 'F19D', '7', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f19e', 'F19E', '9', 6, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
('f5c', 'F5C', '8', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f5d', 'F5D', '7', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f8', 'F8', 'Beasiswa PPA', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f14', 'F14', 'Sangat Rendah', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f15', 'F15', 'Rendah', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f19a', 'F19A', 'Administrasi', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f19b', 'F19B', 'Tidak sesuai bidang keilmuan (di luar bidang keilmuan misalnya Sarjana Ekonomi jadi Public Relation)', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f19c', 'F19C', 'ya', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f19d', 'F19D', '7', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35'),
('f19e', 'F19E', '9', 7, '2021-10-28 00:16:35', '2021-10-28 00:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `jawabanrespondens`
--

CREATE TABLE `jawabanrespondens` (
  `id` int(10) UNSIGNED NOT NULL,
  `kategori_responden` enum('alumni','perusahaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jawabanrespondens`
--

INSERT INTO `jawabanrespondens` (`id`, `kategori_responden`, `id_user`, `created_at`, `updated_at`) VALUES
(5, 'perusahaan', 3, '2021-10-24 06:37:04', '2021-10-24 06:37:04'),
(6, 'alumni', 12, '2021-10-28 00:16:22', '2021-10-28 00:16:22'),
(7, 'alumni', 12, '2021-10-28 00:16:35', '2021-10-28 00:16:35');

-- --------------------------------------------------------

--
-- Table structure for table `kabkotas`
--

CREATE TABLE `kabkotas` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_kabkota` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kabkota` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_provinsi` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kabkotas`
--

INSERT INTO `kabkotas` (`id`, `kd_kabkota`, `nama_kabkota`, `id_provinsi`, `created_at`, `updated_at`) VALUES
(1, '010100', 'Kab. Kepulauan Seribu', 1, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(2, '016000', 'Kota Jakarta Pusat', 1, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(3, '016100', 'Kota Jakarta Utara', 1, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(4, '016200', 'Kota Jakarta Barat', 1, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(5, '016300', 'Kota Jakarta Selatan', 1, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(6, '016400', 'Kota Jakarta Timur', 1, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(7, '020500', 'Kab. Bogor', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(8, '020600', 'Kab. Sukabumi', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(9, '020700', 'Kab. Cianjur', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(10, '020800', 'Kab. Bandung', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(11, '021000', 'Kab. Sumedang', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(12, '021100', 'Kab. Garut', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(13, '021200', 'Kab. Tasikmalaya', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(14, '021400', 'Kab. Ciamis', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(15, '021500', 'Kab. Kuningan', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(16, '021600', 'Kab. Majalengka', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(17, '021700', 'Kab. Cirebon', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(18, '021800', 'Kab. Indramayu', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(19, '021900', 'Kab. Subang', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(20, '022000', 'Kab. Purwakarta', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(21, '022100', 'Kab. Karawang', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(22, '022200', 'Kab. Bekasi', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(23, '022300', 'Kab. Bandung Barat', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(24, '022500', 'Kab. Pangandaran', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(25, '026000', 'Kota Bandung', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(26, '026100', 'Kota Bogor', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(27, '026200', 'Kota Sukabumi', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(28, '026300', 'Kota Cirebon', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(29, '026500', 'Kota Bekasi', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(30, '026600', 'Kota Depok', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(31, '026700', 'Kota Cimahi', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(32, '026800', 'Kota Tasikmalaya', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(33, '026900', 'Kota Banjar', 2, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(34, '030100', 'Kab. Cilacap', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(35, '030200', 'Kab. Banyumas', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(36, '030300', 'Kab. Purbalingga', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(37, '030400', 'Kab. Banjarnegara', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(38, '030500', 'Kab. Kebumen', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(39, '030600', 'Kab. Purworejo', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(40, '030700', 'Kab. Wonosobo', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(41, '030800', 'Kab. Magelang', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(42, '030900', 'Kab. Boyolali', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(43, '031000', 'Kab. Klaten', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(44, '031100', 'Kab. Sukoharjo', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(45, '031200', 'Kab. Wonogiri', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(46, '031300', 'Kab. Karanganyar', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(47, '031400', 'Kab. Sragen', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(48, '031500', 'Kab. Grobogan', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(49, '031600', 'Kab. Blora', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(50, '031700', 'Kab. Rembang', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(51, '031800', 'Kab. Pati', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(52, '031900', 'Kab. Kudus', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(53, '032000', 'Kab. Jepara', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(54, '032100', 'Kab. Demak', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(55, '032200', 'Kab. Semarang', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(56, '032300', 'Kab. Temanggung', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(57, '032400', 'Kab. Kendal', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(58, '032500', 'Kab. Batang', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(59, '032600', 'Kab. Pekalongan', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(60, '032700', 'Kab. Pemalang', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(61, '032800', 'Kab. Tegal', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(62, '032900', 'Kab. Brebes', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(63, '036000', 'Kota Magelang', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(64, '036100', 'Kota Surakarta', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(65, '036200', 'Kota Salatiga', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(66, '036300', 'Kota Semarang', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(67, '036400', 'Kota Pekalongan', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(68, '036500', 'Kota Tegal', 3, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(69, '040100', 'Kab. Bantul', 4, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(70, '040200', 'Kab. Sleman', 4, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(71, '040300', 'Kab. Gunung Kidul', 4, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(72, '040400', 'Kab. Kulon Progo', 4, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(73, '046000', 'Kota Yogyakarta', 4, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(74, '050100', 'Kab. Gresik', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(75, '050200', 'Kab. Sidoarjo', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(76, '050300', 'Kab. Mojokerto', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(77, '050400', 'Kab. Jombang', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(78, '050500', 'Kab. Bojonegoro', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(79, '050600', 'Kab. Tuban', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(80, '050700', 'Kab. Lamongan', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(81, '050800', 'Kab. Madiun', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(82, '050900', 'Kab. Ngawi', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(83, '051000', 'Kab. Magetan', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(84, '051100', 'Kab. Ponorogo', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(85, '051200', 'Kab. Pacitan', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(86, '051300', 'Kab. Kediri', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(87, '051400', 'Kab. Nganjuk', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(88, '051500', 'Kab. Blitar', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(89, '051600', 'Kab. Tulungagung', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(90, '051700', 'Kab. Trenggalek', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(91, '051800', 'Kab. Malang', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(92, '051900', 'Kab. Pasuruan', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(93, '052000', 'Kab. Probolinggo', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(94, '052100', 'Kab. Lumajang', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(95, '052200', 'Kab. Bondowoso', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(96, '052300', 'Kab. Situbondo', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(97, '052400', 'Kab. Jember', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(98, '052500', 'Kab. Banyuwangi', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(99, '052600', 'Kab. Pamekasan', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(100, '052700', 'Kab. Sampang', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(101, '052800', 'Kab. Sumenep', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(102, '052900', 'Kab. Bangkalan', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(103, '056000', 'Kota Surabaya', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(104, '056100', 'Kota Malang', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(105, '056200', 'Kota Madiun', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(106, '056300', 'Kota Kediri', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(107, '056400', 'Kota Mojokerto', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(108, '056500', 'Kota Blitar', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(109, '056600', 'Kota Pasuruan', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(110, '056700', 'Kota Probolinggo', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(111, '056800', 'Kota Batu', 5, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(112, '060100', 'Kab. Aceh Besar', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(113, '060200', 'Kab. Pidie', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(114, '060300', 'Kab. Aceh Utara', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(115, '060400', 'Kab. Aceh Timur', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(116, '060500', 'Kab. Aceh Tengah', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(117, '060600', 'Kab. Aceh Barat', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(118, '060700', 'Kab. Aceh Selatan', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(119, '060800', 'Kab. Aceh Tenggara', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(120, '061100', 'Kab. Simeulue', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(121, '061200', 'Kab. Bireuen', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(122, '061300', 'Kab. Aceh Singkil', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(123, '061400', 'Kab. Aceh Tamiang', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(124, '061500', 'Kab. Nagan Raya', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(125, '061600', 'Kab. Aceh Jaya', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(126, '061700', 'Kab. Aceh Barat Daya', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(127, '061800', 'Kab. Gayo Lues', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(128, '061900', 'Kab. Bener Meriah', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(129, '062000', 'Kab. Pidie Jaya', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(130, '066000', 'Kota Sabang', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(131, '066100', 'Kota Banda Aceh', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(132, '066200', 'Kota Lhokseumawe', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(133, '066300', 'Kota Langsa', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(134, '066400', 'Kab. Sabussalam', 6, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(135, '070100', 'Kab. Deli Serdang', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(136, '070200', 'Kab. Langkat', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(137, '070300', 'Kab. Karo', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(138, '070400', 'Kab. Simalungun', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(139, '070500', 'Kab. Dairi', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(140, '070600', 'Kab. Asahan', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(141, '070700', 'Kab. Labuhan Batu', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(142, '070800', 'Kab. Tapanuli Utara', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(143, '070900', 'Kab. Tapanuli Tengah', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(144, '071000', 'Kab. Tapanuli Selatan', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(145, '071100', 'Kab. Nias', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(146, '071500', 'Kab. Mandailing Natal', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(147, '071600', 'Kab. Toba Samosir', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(148, '071700', 'Kab. Nias Selatan', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(149, '071800', 'Kab. Pak pak Bharat', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(150, '071900', 'Kab. Humbang Hasudutan', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(151, '072000', 'Kab. Samosir', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(152, '072100', 'Kab. Serdang Bedagai', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(153, '072200', 'Kab. Batubara', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(154, '072300', 'Kab. Padang Lawas utara', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(155, '072400', 'Kab. Padang Lawas', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(156, '072500', 'Kab. Labuhan Batu Utara', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(157, '072600', 'Kab. Labuhan Batu Selatan', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(158, '072700', 'Kab. Nias Barat', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(159, '072800', 'Kab. Nias Utara', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(160, '076000', 'Kota Medan', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(161, '076100', 'Kota Binjai', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(162, '076200', 'Kota Tebing Tinggi', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(163, '076300', 'Kota Pematang Siantar', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(164, '076400', 'Kota Tanjung Balai', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(165, '076500', 'Kota Sibolga', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(166, '076600', 'Kota Padang Sidempuan', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(167, '076700', 'Kota Gunung Sitoli', 7, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(168, '080100', 'Kab. Agam', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(169, '080200', 'Kab. Pasaman', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(170, '080300', 'Kab. Lima Puluh Koto', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(171, '080400', 'Kab. Solok', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(172, '080500', 'Kab. Padang Pariaman', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(173, '080600', 'Kab. Pesisir Selatan', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(174, '080700', 'Kab. Tanah Datar', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(175, '080800', 'Kab. Sawahlunto/ Sijunjung', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(176, '081000', 'Kab. Kepulauan Mentawai', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(177, '081100', 'Kab. Solok Selatan', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(178, '081200', 'Kab. Dharmas Raya', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(179, '081300', 'Kab. Pasaman Barat', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(180, '086000', 'Kota Bukittinggi', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(181, '086100', 'Kota Padang', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(182, '086200', 'Kota Padang Panjang', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(183, '086300', 'Kota Sawah Lunto', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(184, '086400', 'Kota Solok', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(185, '086500', 'Kota Payakumbuh', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(186, '086600', 'Kota Pariaman', 8, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(187, '090100', 'Kab. Kampar', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(188, '090200', 'Kab. Bengkalis', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(189, '090400', 'Kab. Indragiri Hulu', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(190, '090500', 'Kab. Indragiri Hilir', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(191, '090800', 'Kab. Pelalawan', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(192, '090900', 'Kab. Rokan Hilir', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(193, '091000', 'Kab. Siak', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(194, '091100', 'Kab. Kuantan Singingi', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(195, '091400', 'Kab. Rokan Hulu', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(196, '091500', 'Kab. Kepulauan Meranti', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(197, '096000', 'Kota Pekanbaru', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(198, '096200', 'Kota Dumai', 9, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(199, '100100', 'Kab. Batang Hari', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(200, '100200', 'Kab. Bungo', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(201, '100300', 'Kab. Sarolangun', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(202, '100400', 'Kab. Tanjung Jabung Barat', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(203, '100500', 'Kab. Kerinci', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(204, '100600', 'Kab. Tebo', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(205, '100700', 'Kab. Muaro Jambi', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(206, '100800', 'Kab. Tanjung Jabung Timur', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(207, '100900', 'Kab. Merangin', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(208, '106000', 'Kota Jambi', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(209, '106100', 'Kab. Sungai Penuh', 10, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(210, '110100', 'Kab. Musi Banyu Asin', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(211, '110200', 'Kab. Ogan Komering Ilir', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(212, '110300', 'Kab. Ogan Komering Ulu', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(213, '110400', 'Kab. Muara Enim', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(214, '110500', 'Kab. Lahat', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(215, '110600', 'Kab. Musi Rawas', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(216, '110700', 'Kab. Banyuasin', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(217, '110800', 'Kab. Ogan Komering Ulu Timur', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(218, '110900', 'Kab. Ogan Komering Ulu Selatan', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(219, '111000', 'Kab. Ogan Ilir', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(220, '111100', 'Kab. Empat Lawang', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(221, '111200', 'Kab. Penukal Abab Lematang Ilir', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(222, '111300', 'Kab. Musi Rawas Utara', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(223, '116000', 'Kota Palembang', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(224, '116100', 'Kota Prabumulih', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(225, '116200', 'Kota Lubuk Linggau', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(226, '116300', 'Kota Pagar Alam', 11, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(227, '120100', 'Kab. Lampung Selatan', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(228, '120200', 'Kab. Lampung Tengah', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(229, '120300', 'Kab. Lampung Utara', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(230, '120400', 'Kab. Lampung Barat', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(231, '120500', 'Kab. Tulang Bawang', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(232, '120600', 'Kab. Tenggamus', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(233, '120700', 'Kab. Lampung Timur', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(234, '120800', 'Kab. Way Kanan', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(235, '120900', 'Kab. Pasawaran', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(236, '121000', 'Kab. Tulang Bawang Barat', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(237, '121100', 'Kab. Mesuji', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(238, '121200', 'Kab. Pringsewu', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(239, '121300', 'Kab. Pesisir Barat', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(240, '126000', 'Kota Bandar Lampung', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(241, '126100', 'Kota Metro', 12, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(242, '130100', 'Kab. Sambas', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(243, '130200', 'Kab. Pontianak', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(244, '130300', 'Kab. Sanggau', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(245, '130400', 'Kab. Sintang', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(246, '130500', 'Kab. Kapuas Hulu', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(247, '130600', 'Kab. Ketapang', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(248, '130800', 'Kab. Bengkayang', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(249, '130900', 'Kab. Landak', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(250, '131000', 'Kab. Sekadau', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(251, '131100', 'Kab. Melawi', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(252, '131200', 'Kab. Kayong Utara', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(253, '131300', 'Kab. Kuburaya', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(254, '136000', 'Kota Pontianak', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(255, '136100', 'Kota Singkawang', 13, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(256, '140100', 'Kab. Kapuas', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(257, '140200', 'Kab. Barito Selatan', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(258, '140300', 'Kab. Barito Utara', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(259, '140400', 'Kab. Kotawaringin Timur', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(260, '140500', 'Kab. Kotawaringin Barat', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(261, '140600', 'Kab. Katingan', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(262, '140700', 'Kab. Seruyan', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(263, '140800', 'Kab. Sukamara', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(264, '140900', 'Kab. Lamandau', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(265, '141000', 'Kab. Gunung Mas', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(266, '141100', 'Kab. Pulang Pisau', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(267, '141200', 'Kab. Murung Raya', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(268, '141300', 'Kab. Barito Timur', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(269, '146000', 'Kota Palangka Raya', 14, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(270, '150100', 'Kab. Banjar', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(271, '150200', 'Kab. Tanah Laut', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(272, '150300', 'Kab. Barito Kuala', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(273, '150400', 'Kab. Tapin', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(274, '150500', 'Kab. Hulu Sungai Selatan', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(275, '150600', 'Kab. Hulu Sungai Tengah', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(276, '150700', 'Kab. Hulu Sungai Utara', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(277, '150800', 'Kab. Tabalong', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(278, '150900', 'Kab. Kota Baru', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(279, '151000', 'Kab. Balangan', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(280, '151100', 'Kab. Tanah Bumbu', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(281, '156000', 'Kota Banjarmasin', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(282, '156100', 'Kota Banjarbaru', 15, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(283, '160100', 'Kab. Pasir', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(284, '160200', 'Kab. Kutai Kartanegara', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(285, '160300', 'Kab. Berau', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(286, '160400', 'Kab. Bulongan', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(287, '160700', 'Kab. Malinau', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(288, '160800', 'Kab. Nunukan', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(289, '160900', 'Kab. Kutai Barat', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(290, '161000', 'Kab. Kutai Timur', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(291, '161100', 'Kab. Penajam Paser Utara', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(292, '161200', 'Kab. Mahakam Ulu', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(293, '165400', 'Kab. Tanah Tidung', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(294, '166000', 'Kota Samarinda', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(295, '166100', 'Kota Balikpapan', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(296, '166200', 'Kota Tarakan', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(297, '166300', 'Kota Bontang', 16, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(298, '170100', 'Kab. Bolaang Mongondaw', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(299, '170200', 'Kab. Minahasa', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(300, '170300', 'Kab. Kep. Sangihe', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(301, '170400', 'Kab. Kepulauan Talaud', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(302, '170500', 'Kab. Minahasa Selatan', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(303, '170600', 'Kab. Minahasa Utara', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(304, '170800', 'Kab. Bolaang Mongondow Utara', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(305, '170900', 'Kab. Kepulauan Sitaro', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(306, '171000', 'Kab. Minahasa Tenggara', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(307, '171100', 'Kab. Bolaang Mongondaw Timur', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(308, '171200', 'Kab. Bolaang Mongondaw Selatan', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(309, '176000', 'Kota Manado', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(310, '176100', 'Kota Bitung', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(311, '176200', 'Kota Tomohon', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(312, '176300', 'Kota. Kotamobagu', 17, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(313, '180100', 'Kab. Banggai Kepulauan', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(314, '180200', 'Kab. Donggala', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(315, '180300', 'Kab. Parigi Mautong', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(316, '180400', 'Kab. Banggai', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(317, '180500', 'Kab. Buol', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(318, '180600', 'Kab. Toli-Toli', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(319, '180700', 'Kab. Marowali', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(320, '180800', 'Kab. Poso', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(321, '180900', 'Kab. Tojo Una-Una', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(322, '181000', 'Kab. Sigi', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(323, '181100', 'Kab. Banggai Laut', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(324, '181200', 'Kab. Morowali Utara', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(325, '186000', 'Kota Palu', 18, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(326, '190100', 'Kab. Maros', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(327, '190200', 'Kab. Pangkajene Kepulauan', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(328, '190300', 'Kab. Gowa', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(329, '190400', 'Kab. Takalar', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(330, '190500', 'Kab. Jeneponto', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(331, '190600', 'Kab. Barru', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(332, '190700', 'Kab. Bone', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(333, '190800', 'Kab. Wajo', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(334, '190900', 'Kab. Soppeng', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(335, '191000', 'Kab. Bantaeng', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(336, '191100', 'Kab. Bulukumba', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(337, '191200', 'Kab. Sinjai', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(338, '191300', 'Kab. Selayar', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(339, '191400', 'Kab. Pinrang', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(340, '191500', 'Kab. Sidenreng Rappang', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(341, '191600', 'Kab. Enrekang', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(342, '191700', 'Kab. Luwu', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(343, '191800', 'Kab. Tana Toraja', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(344, '192400', 'Kab. Luwu Utara', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(345, '192600', 'Kab. Luwu Timur', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(346, '192700', 'Kab. Toraja Utara', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(347, '196000', 'Kota Makassar', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(348, '196100', 'Kota Pare-Pare', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(349, '196200', 'Kota Palopo', 19, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(350, '200100', 'Kab. Konawe', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(351, '200200', 'Kab. Muna', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(352, '200300', 'Kab. Buton', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(353, '200400', 'Kab. Kolaka', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(354, '200500', 'Kab. Konawe Selatan', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(355, '200600', 'Kab. Wakatobi', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(356, '200700', 'Kab. Bombana', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(357, '200800', 'Kab. Kolaka Utara', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(358, '200900', 'Kab. Konawe Utara', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(359, '201000', 'Kab. Buton Utara', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(360, '201100', 'Kab. Kolaka Timur', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(361, '201200', 'Kab. Konawe Kepulauan', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(362, '201300', 'Kab. Muna Barat', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(363, '201400', 'Kab. Buton Selatan', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(364, '201600', 'Kab. Buton Tengah', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(365, '206000', 'Kota Kendari', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(366, '206100', 'Kota Baubau', 20, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(367, '210100', 'Kab. Maluku Tengah', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(368, '210200', 'Kab. Maluku Tenggara', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(369, '210300', 'Kab. Buru', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(370, '210400', 'Kab. Maluku Tenggara Barat', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(371, '210500', 'Kab. Seram Bagian Barat', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(372, '210600', 'Kab. Seram Bagian Timur', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(373, '210700', 'Kab. Kepulauan Aru', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(374, '210800', 'Kab. Maluku Barat Daya', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(375, '210900', 'Kab. Buru Selatan', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(376, '216000', 'Kota Ambon', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(377, '216100', 'Kota. Tual', 21, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(378, '220100', 'Kab. Buleleng', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(379, '220200', 'Kab. Jembrana', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(380, '220300', 'Kab. Tabanan', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(381, '220400', 'Kab. Badung', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(382, '220500', 'Kab. Gianyar', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(383, '220600', 'Kab. Klungkung', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(384, '220700', 'Kab. Bangli', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(385, '220800', 'Kab. Karang Asem', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(386, '226000', 'Kota Denpasar', 22, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(387, '230100', 'Kab. Lombok Barat', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(388, '230200', 'Kab. Lombok Tengah', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(389, '230300', 'Kab. Lombok Timur', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(390, '230400', 'Kab. Sumbawa', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(391, '230500', 'Kab. Dompu', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(392, '230600', 'Kab. Bima', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(393, '230700', 'Kab. Sumbawa Barat', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(394, '230800', 'Kab. Lombok Utara', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(395, '236000', 'Kota Mataram', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(396, '236100', 'Kota Bima', 23, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(397, '240100', 'Kab. Kupang', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(398, '240300', 'Kab. Timor Tengah Selatan', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(399, '240400', 'Kab. Timor Tengah Utara', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(400, '240500', 'Kab. Belu', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(401, '240600', 'Kab. Alor', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(402, '240700', 'Kab. Flores Timur', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(403, '240800', 'Kab. Sikka', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(404, '240900', 'Kab. Ende', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(405, '241000', 'Kab. Ngada', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(406, '241100', 'Kab. Manggarai', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(407, '241200', 'Kab. Sumba Timur', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(408, '241300', 'Kab. Sumba Barat', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(409, '241400', 'Kab. Lembata', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(410, '241500', 'Kab. Rote-Ndao', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(411, '241600', 'Kab. Manggarai Barat', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(412, '241700', 'Kab. Nagakeo', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(413, '241800', 'Kab. Sumba Tengah', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(414, '241900', 'Kab. Sumba Barat Daya', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(415, '242000', 'Kab. Manggarai Timur', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(416, '242100', 'Kab. Sabu Raijua', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(417, '242200', 'Kab. Malaka', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(418, '246000', 'Kota Kupang', 24, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(419, '250100', 'Kab. Jayapura', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(420, '250200', 'Kab. Biak Numfor', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(421, '250300', 'Kab. Yapen Waropen', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(422, '250700', 'Kab. Merauke', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(423, '250800', 'Kab. Jayawijaya', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(424, '250900', 'Kab. Nabire', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(425, '251000', 'Kab. Paniai', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(426, '251100', 'Kab. Puncak Jaya', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(427, '251200', 'Kab. Mimika', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(428, '251300', 'Kab. Boven Digoel', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(429, '251400', 'Kab. Mappi', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(430, '251500', 'Kab. Asmat', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(431, '251600', 'Kab. Yahukimo', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(432, '251700', 'Kab. Pegunungan Bintang', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(433, '251800', 'Kab. Tolikara', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(434, '251900', 'Kab. Sarmi', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(435, '252000', 'Kab. Keerom', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(436, '252600', 'Kab. Waropen', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(437, '252700', 'Kab. Supiori', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(438, '252800', 'Kab. Memberamo Raya', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(439, '252900', 'Kab. Nduga', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(440, '253000', 'Kab. Lanny Jaya', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(441, '253100', 'Kab. Membramo Tengah', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(442, '253200', 'Kab. Yalimo', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(443, '253300', 'kab. Puncak', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(444, '253400', 'Kab. Dogiyai', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(445, '253500', 'Kab. Deiyai', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(446, '253600', 'Kab. Intan Jaya', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(447, '256000', 'Kota Jayapura', 25, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(448, '260100', 'Kab. Bengkulu Utara', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(449, '260200', 'Kab. Rejang Lebong', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(450, '260300', 'Kab. Bengkulu Selatan', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(451, '260400', 'Kab. Muko-muko', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(452, '260500', 'Kab. Kepahiang', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(453, '260600', 'Kab. Lebong', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(454, '260700', 'Kab. Kaur', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(455, '260800', 'Kab. Seluma', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(456, '260900', 'Kab. Bengkulu Tengah', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(457, '266000', 'Kota Bengkulu', 26, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(458, '270100', 'Kab. Pulau Taliabu', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(459, '270200', 'Kab. Halmahera Tengah', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(460, '270300', 'Kab. Halmahera Barat', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(461, '270400', 'Kab. halmahera Utara', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(462, '270500', 'Kab. Halmahera Selatan', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(463, '270600', 'Kab. Halmahera Timur', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(464, '270700', 'Kab. Kepulauan Sula', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(465, '270800', 'Kab. Kepulauan Morotai', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(466, '276000', 'Kota Ternate', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(467, '276100', 'Kota Tidore Kepulauan', 27, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(468, '280100', 'Kab. Pandeglang', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(469, '280200', 'Kab. Lebak', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(470, '280300', 'Kab. Tangerang', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(471, '280400', 'Kab. Serang', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(472, '286000', 'Kota Cilegon', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(473, '286100', 'Kota Tangerang', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(474, '286200', 'Kota Serang', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(475, '286300', 'Kota tangerang Selatan', 28, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(476, '290100', 'Kab. Bangka', 29, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(477, '290200', 'Kab. Belitung', 29, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(478, '290300', 'Kab. Bangka Tengah', 29, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(479, '290400', 'Kab. Bangka Barat', 29, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(480, '290500', 'Kab. Bangka Selatan', 29, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(481, '290600', 'Kab. Belitung Timur', 29, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(482, '296000', 'Kota Pangkalpinang', 29, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(483, '300100', 'Kab. Boalemo', 30, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(484, '300200', 'Kab. Gorontalo', 30, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(485, '300300', 'Kab. Pohuwato', 30, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(486, '300400', 'Kab. Bone Bolango', 30, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(487, '300500', 'Kab. Gorontalo Utara', 30, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(488, '306000', 'Kota Gorontalo', 30, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(489, '310100', 'Kab. Bintan', 31, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(490, '310200', 'Kab. Karimun', 31, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(491, '310300', 'Kab. Natuna', 31, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(492, '310400', 'Kab. Lingga', 31, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(493, '310500', 'Kab. Kepulauan Anambas', 31, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(494, '316000', 'Kota Batam', 31, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(495, '316100', 'Kota Tanjungpinang', 31, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(496, '320100', 'Kab. Fak-Fak', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(497, '320200', 'Kab. Kaimana', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(498, '320300', 'Kab. Teluk Wondama', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(499, '320400', 'Kab. Teluk Bintuni', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(500, '320500', 'Kab. Manokwari', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(501, '320600', 'Kab. Sorong Selatan', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(502, '320700', 'Kab. Sorong', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(503, '320800', 'Kab. Raja Ampat', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(504, '320900', 'Kab. Tambrauw', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(505, '321000', 'Kab. Maybrat', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(506, '321100', 'Kab. Pegunungan Arfak', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(507, '321200', 'Kab. Manokwari Selatan', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(508, '326000', 'Kota Sorong', 32, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(509, '330100', 'Kab. Mamuju', 33, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(510, '330200', 'Kab. Mamuju Utara', 33, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(511, '330300', 'Kab. Polewali Mamasa', 33, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(512, '330400', 'Kab. Mamasa', 33, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(513, '330500', 'Kab. Majene', 33, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(514, '330600', 'Kab. Mamuju Tengah', 33, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(515, '340100', 'Kab. Malinau', 34, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(516, '340200', 'Kab. Bulungan', 34, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(517, '340300', 'Kab. Tana Tidung', 34, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(518, '340500', 'Kab. Nunukan', 34, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(519, '346000', 'Kota Tarakan', 34, '2021-10-20 06:34:54', '2021-10-20 06:34:54'),
(520, '999999', 'Luar Negeri', 35, '2021-10-20 06:34:54', '2021-10-20 06:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_21_074755_create_datawebs_table', 1),
(6, '2021_09_21_084127_create_provinsis_table', 1),
(7, '2021_09_21_084141_create_kabkotas_table', 1),
(8, '2021_09_21_151755_create_beritas_table', 1),
(9, '2021_09_21_152631_create_prodis_table', 1),
(10, '2021_09_21_155344_create_pertanyaans_table', 1),
(11, '2021_09_21_160326_create_pilihanjawabans_table', 1),
(12, '2021_09_22_042719_create_perusahaans_table', 1),
(13, '2021_09_22_042828_create_sekjurs_table', 1),
(14, '2021_09_24_165234_create_alumnis_table', 1),
(15, '2021_10_10_051411_create_pertanyaancabangs_table', 1),
(16, '2021_10_17_154746_create_jawabanperusahaans_table', 1),
(17, '2021_10_17_154815_create_jawabanalumnis_table', 1),
(18, '2021_10_20_095243_create_jawabanrespondens_table', 1),
(19, '2021_10_20_095306_create_jawabanrespondendetails_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaancabangs`
--

CREATE TABLE `pertanyaancabangs` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_cabang` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan_cabang` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pertanyaan` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaancabangs`
--

INSERT INTO `pertanyaancabangs` (`id`, `kd_cabang`, `pertanyaan_cabang`, `id_pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 'F1761', 'Etika', 18, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(2, 'F1763', 'Keahlian berdasarkan bidang ilmu', 18, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(3, 'F1765', 'Bahasa Inggris', 18, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(4, 'F1767', 'Penggunaan Teknologi Informasi', 18, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(5, 'F1769', 'Komunikasi', 18, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(6, 'F1771', 'Kerja sama tim', 18, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(7, 'F1773', 'Pengembangan Diri', 18, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(8, 'F1762', 'Etika', 19, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(9, 'F1764', 'Keahlian berdasarkan bidang ilmu', 19, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(10, 'F1766', 'Bahasa Inggris', 19, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(11, 'F1768', 'Penggunaan Teknologi Informasi', 19, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(12, 'F1770', 'Komunikasi', 19, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(13, 'F1772', 'Kerja sama tim', 19, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(14, 'F1774', 'Pengembangan Diri', 19, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(15, 'F21', 'Perkuliahan', 20, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(16, 'F22', 'Demonstrasi', 20, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(17, 'F23', 'Partisipasi dalam Proyek Riset', 20, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(18, 'F24', 'Magang', 20, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(19, 'F25', 'Praktikum', 20, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(20, 'F26', 'Kerja Lapangan', 20, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(21, 'F27', 'Diskusi', 20, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(22, 'P7A', 'Motivasi lulusan dalam menyelesaikan suatu pekerjaan', 29, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(23, 'P7B', 'Kreativitas lulusan dalam menyelesaikan suatu pekerjaan', 29, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(24, 'P7C', 'Motivasi lulusan dalam peningkatan karir', 29, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(25, 'P7D', 'Motivasi lulusan dalam menambah pengetahuan / keahlian yang dimilikinya', 29, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(26, 'P7E', 'Motivasi lulusan dalam menambah pengetahuan / keahlian di luar bidang ilmu yang dimilikinya', 29, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(27, 'P8A', 'Kemampuan lulusan dalam melakukan negosiasi', 30, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(28, 'P8B', 'Kemampuan lulusan dalam memecahkan permasalahan', 30, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(29, 'P8C', 'Kemampuan lulusan dalam menuangkan ide / inovasi', 30, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(30, 'P8D', 'Kemampuan lulusan dalam menciptakan suatu lapangan kerja', 30, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(31, 'P8E', 'Kemampuan lulusan dalam berpikir logis', 30, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(32, 'P9A', 'Kemampuan lulusan dalam menyelesaikan pekerjaan', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(33, 'P9B', 'Kemampuan lulusan dalam melaporkan hasil pekerjaannya', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(34, 'P9C', 'Kemampuan lulusan dalam mengoperasikan komputer / alat bantu modern / penggunaan teknologi informasi', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(35, 'P9D', 'Kemampuan lulusan dalam menangani permasalahan', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(36, 'P9E', 'Kemampuan lulusan dalam memenuhi segala aturan / petunjuk kerja', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(37, 'P9F', 'Kemampuan lulusan dalam bekerja mandiri', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(38, 'P9G', 'Kemampuan lulusan dalam memenuhi pekerjaan diluar pekerjaannya sendiri', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(39, 'P9H', 'Kemampuan lulusan dalam mengerjakan pekerjaan sesuai bidang ilmu yang dimilikinya', 31, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(40, 'P10A', 'Kemampuan lulusan dalam berkomunikasi dengan pimpinan', 32, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(41, 'P10B', 'Kemampuan lulusan dalam berkomunikasi dengan rekan kerja', 32, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(42, 'P10C', 'Kemampuan lulusan dalam berkomunikasi menggunakan bahasa asing', 32, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(43, 'P10D', 'Kemampuan lulusan dalam bekerja pada bagian / divisinya', 32, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(44, 'P10E', 'Integritas (etika dan moral) lulusan di tempat kerja', 32, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(45, 'P11A', 'Kemampuan lulusan dalam menyelesaikan pekerjaan rutin', 33, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(46, 'P11B', 'Kemampuan lulusan dalam membantu rekan kerja', 33, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(47, 'P11C', 'Kemampuan lulusan dalam menyelesaikan masalah tim', 33, '2021-10-24 00:45:26', '2021-10-24 00:45:26'),
(48, 'P11D', 'Kemampuan lulusan dalam bekerjasama dalam tim', 33, '2021-10-24 00:45:26', '2021-10-24 00:45:26');

-- --------------------------------------------------------

--
-- Table structure for table `pertanyaans`
--

CREATE TABLE `pertanyaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_tampilan` int(4) NOT NULL,
  `jenis_pertanyaan` enum('text','pilihan','checklist') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori_pertanyaan` enum('alumni','perusahaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelas_pertanyaan` enum('wajib','opsional') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_cabang` enum('ya','tidak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pertanyaan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pertanyaan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pertanyaans`
--

INSERT INTO `pertanyaans` (`id`, `no_tampilan`, `jenis_pertanyaan`, `kategori_pertanyaan`, `kelas_pertanyaan`, `is_cabang`, `kd_pertanyaan`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 5, 'text', 'alumni', 'wajib', 'tidak', 'F5B', 'Apa nama perusahaan/kantor tempat Anda bekerja?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(2, 17, 'text', 'alumni', 'wajib', 'tidak', 'F6', 'Berapa perusahaan/instansi/institusi yang sudah anda lamar (lewat surat atau e-mail) sebelum anda memeroleh pekerjaan pertama?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(3, 18, 'text', 'alumni', 'wajib', 'tidak', 'F7', 'Berapa banyak perusahaan/instansi/institusi yang merespons lamaran anda?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(4, 19, 'text', 'alumni', 'wajib', 'tidak', 'F7A', 'Berapa banyak perusahaan/instansi/institusi yang mengundang anda untuk wawancara?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(5, 91, 'pilihan', 'alumni', 'wajib', 'tidak', 'UG1', 'Apakah anda bekerja saat ini (termasuk kerja sambilan dan wirausaha)?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(6, 92, 'pilihan', 'alumni', 'wajib', 'tidak', 'UG2', 'Tempat anda bekerja saat ini bergerak di bidang apa?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(7, 93, 'pilihan', 'alumni', 'wajib', 'tidak', 'UG3', 'Berdasarkan pengalaman pada pekerjaan Anda  saat ini,  apa saran yang anda berikan  untuk peningkatan kualitas pembelajaran di Universitas Gunadarma?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(8, 20, 'pilihan', 'alumni', 'wajib', 'tidak', 'F10', 'Apakah anda aktif mencari pekerjaan dalam 4 minggu terakhir? ', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(9, 1, 'pilihan', 'alumni', 'wajib', 'tidak', 'F8', 'Jelaskan status Anda saat ini?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(10, 4, 'pilihan', 'alumni', 'wajib', 'tidak', 'F11', 'Apa jenis perusahaan/instansi/institusi tempat anda bekerja sekarang?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(11, 6, 'pilihan', 'alumni', 'wajib', 'tidak', 'F5C', 'Bila berwiraswasta, apa posisi/jabatan Anda saat ini ?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(12, 7, 'pilihan', 'alumni', 'wajib', 'tidak', 'F5D', 'Apa tingkat tempat kerja Anda?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(13, 9, 'pilihan', 'alumni', 'wajib', 'tidak', 'F12', 'Sebutkan sumberdana dalam pembiayaan kuliah?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(14, 10, 'pilihan', 'alumni', 'wajib', 'tidak', 'F14', 'Seberapa erat hubungan antara bidang studi dengan pekerjaan anda?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(15, 11, 'pilihan', 'alumni', 'wajib', 'tidak', 'F15', 'Tingkat pendidikan apa yang paling tepat/sesuai untuk pekerjaan anda saat ini?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(16, 94, 'pilihan', 'alumni', 'wajib', 'tidak', 'UG4', 'Jabatan anda pada waktu pertama bekerja', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(17, 95, 'pilihan', 'alumni', 'wajib', 'tidak', 'UG5', 'Tingkat kesesuaian antara Prodi asal saudara dengan pekerjaan yang saudara tekuni saat ini', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(18, 12, 'pilihan', 'alumni', 'wajib', 'ya', 'F17A', 'Pada saat lulus, pada tingkat mana kompetensi di bawah ini anda kuasai?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(19, 13, 'pilihan', 'alumni', 'wajib', 'ya', 'F17B', 'Pada saat ini, pada tingkat mana kompetensi di bawah ini diperlukan dalam pekerjaan?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(20, 14, 'pilihan', 'alumni', 'wajib', 'ya', 'F2', 'Menurut anda seberapa besar penekanan pada metode pembelajaran di bawah ini dilaksanakan di program studi anda?', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(21, 21, 'checklist', 'alumni', 'wajib', 'tidak', 'F16', 'Jika menurut anda pekerjaan anda saat ini tidak sesuai dengan pendidikan anda, mengapa anda mengambilnya? Jawaban bisa lebih dari satu', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(22, 16, 'checklist', 'alumni', 'wajib', 'tidak', 'F4', 'Bagaimana anda mencari pekerjaan tersebut? Jawaban bisa lebih dari satu', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(23, 1, 'pilihan', 'perusahaan', 'wajib', 'tidak', 'P1', 'Bentuk Perusahaan', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(24, 2, 'pilihan', 'perusahaan', 'wajib', 'tidak', 'P2', 'Jumlah pegawai seluruhnya yang bekerja di perusahaan ini', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(25, 3, 'pilihan', 'perusahaan', 'wajib', 'tidak', 'P3', 'Rata-rata standar gaji pertama (per bulan dalam rupiah) yang diberikan perusahaan kepada alumni Universitas Gunadarma', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(26, 4, 'pilihan', 'perusahaan', 'wajib', 'tidak', 'P4', 'Rata-rata jumlah alumni Universitas Gunadarma yang melamar di perusahaan ini setiap tahunnya', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(27, 5, 'pilihan', 'perusahaan', 'wajib', 'tidak', 'P5', 'Rata-rata jumlah alumni Universitas Gunadarma yang di terima di perusahaan ini setiap tahunnya', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(28, 6, 'text', 'perusahaan', 'wajib', 'tidak', 'P6', 'Lulusan Universitas Gunadarma yang bekerja di Perusahaan Bapak/Ibu adalah berasal dari Program Studi', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(29, 7, 'pilihan', 'perusahaan', 'wajib', 'ya', 'P7', 'Motivasi Kerja', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(30, 8, 'pilihan', 'perusahaan', 'wajib', 'ya', 'P8', 'Kepemimpinan dan Kemampuan Strategik', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(31, 9, 'pilihan', 'perusahaan', 'wajib', 'ya', 'P9', 'Kemampuan Manajerial', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(32, 10, 'pilihan', 'perusahaan', 'wajib', 'ya', 'P10', 'Komunikasi dan Adaptasi Lingkungan', '2021-10-28 02:37:35', '2021-10-28 02:37:35'),
(33, 11, 'pilihan', 'perusahaan', 'wajib', 'ya', 'P11', 'Kerja Sama', '2021-10-28 02:37:35', '2021-10-28 02:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id` int(10) UNSIGNED NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_web` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_cp` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_cp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaans`
--

INSERT INTO `perusahaans` (`id`, `alamat`, `no_telp`, `url_web`, `nama_cp`, `email_cp`, `jabatan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'jalanin aja', '0899999999999', 'kayaraya@gmail.com', 'Uswew', '', 'konglomerat', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pilihanjawabans`
--

CREATE TABLE `pilihanjawabans` (
  `id` int(10) UNSIGNED NOT NULL,
  `jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jawaban` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_pertanyaan` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pilihanjawabans`
--

INSERT INTO `pilihanjawabans` (`id`, `jawaban`, `kd_jawaban`, `id_pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 'Ya ', 'UG1', 5, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(2, 'Tidak', 'UG1', 5, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(3, 'Pertanian tanaman, peternakan, perburuan dan kegiatan yang berhubungan dengan itu   ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(4, 'Kehutanan dan penebangan kayu', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(5, 'Perikanan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(6, 'Pertambangan batu bara dan lignit', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(7, 'Pertambangan minyak bumi dan gas alam dan panas bumi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(8, 'Pertambangan bijih logam', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(9, 'Pertambangan dan penggalian lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(10, 'Jasa pertambangan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(11, 'Industri makanan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(12, 'Industri minuman', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(13, 'Industri pengolahan tembakau', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(14, 'Industri tekstil', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(15, 'Industri pakaian jadi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(16, 'Industri kulit, barang dari kulit dan alas kaki', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(17, 'Industri kayu, barang dari kayu dan gabus (tidak termasuk furnitur) dan barang anyaman dari bambu, rotan dan sejenisnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(18, 'Industri kertas dan barang dari kertas', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(19, 'Industri pencetakan dan reproduksi media rekaman', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(20, 'Industri produk dari batu bara dan pengilangan minyak bumi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(21, 'Industri bahan kimia dan barang dari bahan kimia', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(22, 'Industri farmasi, produk obat kimia dan obat tradisional', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(23, 'Industri karet, barang dari karet dan plastik', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(24, 'Industri barang galian bukan logam  ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(25, 'Industri logam dasar   ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(26, 'Industri barang logam, bukan mesin dan peralatannya  ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(27, 'Industri komputer, barang elektronik dan optik', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(28, 'Industri peralatan listrik', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(29, 'Industri mesin dan perlengkapan ytdl', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(30, 'Industri kendaraan bermotor, trailer dan semi trailer', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(31, 'Industri alat angkutan lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(32, 'Industri furnitur', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(33, 'Industri pengolahan lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(34, 'Jasa reparasi dan pemasangan mesin dan peralatan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(35, 'Pengadaan listrik, gas, uap/air panas dan udara dingin', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(36, 'Pengadaan air', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(37, 'Pengolahan limbah', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(38, 'Pengolahan sampah dan daur ulang', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(39, 'Jasa pembersihan dan pengelolaan sampah lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(40, 'Konstruksi gedung', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(41, 'Konstruksi bangunan sipil', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(42, 'Konstruksi khusus', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(43, 'Perdagangan, reparasi dan perawatan mobil dan sepeda motor', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(44, 'Perdagangan besar, bukan mobil dan sepeda motor', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(45, 'Perdagangan eceran, bukan mobil dan motor', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(46, 'Angkutan darat dan angkutan melalui saluran pipa ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(47, 'Angkutan udara', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(48, 'Pergudangan dan jasa penunjang angkutan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(49, 'Pos dan kurir ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(50, 'Penyediaan akomodasi ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(51, 'Penyediaan makanan dan minuman ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(52, 'Penerbitan ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(53, 'Produksi gambar bergerak, video dan program televisi, perekaman suara dan penerbitan musik ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(54, 'Penyiaran dan pemrograman', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(55, 'Telekomunikasi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(56, 'Kegiatan pemrograman, konsultasi komputer dan kegiatan yang berhubungan dengan itu', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(57, 'Kegiatan jasa informasi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(58, 'Jasa keuangan, bukan asuransi dan dana pensiun', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(59, 'Asuransi, reasuransi dan dana pensiun, bukan jaminan sosial wajib', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(60, 'Jasa penunjang jasa keuangan, asuransi dan dana pensiun', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(61, 'Real estat', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(62, 'Jasa hukum dan akuntansi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(63, 'Kegiatan kantor pusat dan konsultasi manajemen', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(64, 'Jasa arsitektur dan teknik sipil; analisis dan uji teknis', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(65, 'Penelitian dan pengembangan ilmu pengetahuan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(66, 'Periklanan dan penelitian pasar', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(67, 'Jasa profesional, ilmiah dan teknis lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(68, 'Jasa kesehatan hewan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(69, 'Jasa persewaan dan sewa guna usaha tanpa hak opsi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(70, 'Jasa ketenagakerjaan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(71, 'Jasa agen perjalanan, penyelenggara tur dan jasa reservasi lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(72, 'Jasa keamanan dan penyelidikan ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(73, 'Jasa untuk gedung dan pertamanan ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(74, 'Jasa administrasi kantor, jasa penunjang kantor dan jasa penunjang usaha lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(75, 'Administrasi pemerintahan, pertahanan dan jaminan sosial wajib', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(76, 'Jasa pendidikan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(77, 'Jasa kesehatan manusia', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(78, 'Jasa kegiatan sosial di dalam panti', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(79, 'Jasa kegiatan sosial di luar panti', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(80, 'Kegiatan hiburan, kesenian dan kreativitas', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(81, 'Perpustakaan, arsip, museum dan kegiatan kebudayaan lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(82, 'Kegiatan perjudian dan pertaruhan', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(83, 'Kegiatan olahraga dan rekreasi lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(84, 'Kegiatan keanggotaan organisasi', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(85, 'Jasa reparasi komputer dan barang keperluan pribadi dan perlengkapan rumah tangga', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(86, 'Jasa perorangan lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(87, 'Jasa perorangan yang melayani rumah tangga', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(88, 'Kegiatan yang menghasilkan barang dan jasa oleh rumah tangga yang digunakan sendiri untuk memenuhi kebutuhan ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(89, 'Kegiatan badan internasional dan badan ekstra internasional lainnya', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(90, 'Angkutan Air ', 'UG2', 6, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(91, 'Penambahan bahan pustaka', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(92, 'Pengembangan softskill', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(93, 'Menjaga rasio dosen: mahasiswa yang ideal', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(94, 'Bimbingan karir', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(95, 'Bahan kuliah yang lebih kini', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(96, 'Peningkatan  kualitas SDM', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(97, 'Peningkatan Sarana/prasarana', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(98, 'Membangun jejaring dengan industri', 'UG3', 7, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(99, 'Tidak', 'F1001', 8, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(100, 'Tidak, tapi saya sedang menunggu hasil lamaran kerja', 'F1001', 8, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(101, 'Ya, saya akan mulai bekerja dalam 2 minggu ke depan', 'F1001', 8, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(102, 'Ya, tapi saya belum pasti akan bekerja dalam 2 minggu ke depan', 'F1001', 8, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(103, 'Lainnya', 'F1002', 8, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(104, 'Bekerja (full time/part time)', 'F8', 9, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(105, 'Belum memungkinkan bekerja', 'F8', 9, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(106, 'Wiraswasta', 'F8', 9, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(107, 'Melanjutkan pendidikan', 'F8', 9, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(108, 'Tidak kerja tapi sedang mencari kerja', 'F8', 9, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(109, 'Instansi pemerintah ', 'F1101', 10, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(110, 'Organisasi non-profit/Lembaga Swadaya Masyarakat', 'F1101', 10, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(111, 'Perusahaan swasta', 'F1101', 10, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(112, 'Wiraswasta/perusahaan sendiri', 'F1101', 10, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(113, 'Lainnya, tuliskan:', 'F1101', 10, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(114, 'BUMN/BUMD', 'F1101', 10, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(115, 'Institusi / Organisasi Multirateral', 'F1102', 10, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(116, 'Founder', 'F5C', 11, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(117, 'Co-Founder', 'F5C', 11, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(118, 'Staff', 'F5C', 11, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(119, 'Freelance/Kerja Lepas', 'F5C', 11, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(120, 'Lokal/Wilayah/Wiraswasta tidak berbadan hukum', 'F5D', 12, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(121, 'Nasional/Wiraswasta berbadan hukum', 'F5D', 12, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(122, 'Multinasional/Internasional', 'F5D', 12, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(123, 'Biaya Sendiri / Keluarga', 'F1201', 13, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(124, 'Beasiswa ADIK', 'F1201', 13, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(125, 'Beasiswa BIDIKMISI', 'F1201', 13, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(126, 'Beasiswa PPA', 'F1201', 13, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(127, 'Beasiswa AFIRMASI', 'F1201', 13, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(128, 'Beasiswa Perusahaan/Swasta', 'F1201', 13, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(129, 'Lainnya, tuliskan:', 'F1202', 13, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(130, 'Sangat Erat', 'F14', 14, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(131, 'Erat', 'F14', 14, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(132, 'Cukup Erat', 'F14', 14, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(133, 'Kurang Erat', 'F14', 14, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(134, 'Tidak Sama Sekali ', 'F14', 14, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(135, 'Setingkat Lebih Tinggi', 'F15', 15, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(136, 'Tingkat yang Sama', 'F15', 15, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(137, 'Setingkat Lebih Rendah', 'F15', 15, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(138, 'Tidak Perlu Pendidikan Tinggi', 'F15', 15, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(139, 'Staff', 'UG4', 16, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(140, 'Operator / Pelaksana', 'UG4', 16, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(141, 'Administrasi', 'UG4', 16, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(142, 'Pengawas / Supervisor', 'UG4', 16, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(143, 'Kepala Bagian / Departemen', 'UG4', 16, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(144, 'Manajer', 'UG4', 16, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(145, 'Direktur', 'UG4', 16, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(146, 'Sangat sesuai dengan bidang keilmuan (kompetensi)', 'UG5', 17, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(147, 'Agak sesuai bidang keilmuan (sifatnya lebih pada keahlian tambahan misalnya bidang IT bagi lulusan non IT)', 'UG5', 17, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(148, 'Tidak sesuai bidang keilmuan (di luar bidang keilmuan misalnya Sarjana Ekonomi jadi Public Relation)', 'UG5', 17, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(149, 'Tidak berkaitan sama sekali (misalnya menjadi guru Agama, Rohaniawan, Relawan, dsb)', 'UG5', 17, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(150, 'Sangat Rendah', 'F17A', 18, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(151, 'Rendah', 'F17A', 18, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(152, 'Sedang', 'F17A', 18, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(153, 'Tinggi', 'F17A', 18, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(154, 'Sangat Tinggi', 'F17A', 18, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(155, 'Sangat Rendah', 'F17B', 19, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(156, 'Rendah', 'F17B', 19, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(157, 'Sedang', 'F17B', 19, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(158, 'Tinggi', 'F17B', 19, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(159, 'Sangat Tinggi', 'F17B', 19, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(160, 'Sangat Besar', 'F2', 20, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(161, 'Besar', 'F2', 20, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(162, 'Cukup Besar', 'F2', 20, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(163, 'Kurang', 'F2', 20, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(164, 'Tidak Sama Sekali', 'F2', 20, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(165, 'Pertanyaan tidak sesuai; pekerjaan saya sekarang sudah sesuai dengan pendidikan saya.', 'F1601', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(166, 'Saya belum mendapatkan pekerjaan yang lebih sesuai', 'F1602', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(167, 'Di pekerjaan ini saya memeroleh prospek karir yang baik.', 'F1603', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(168, 'Saya lebih suka bekerja di area pekerjaan yang tidak ada hubungannya dengan pendidikan saya.', 'F1604', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(169, 'Saya dipromosikan ke posisi yang kurang berhubungan dengan pendidikan saya dibanding posisi sebelumnya.', 'F1605', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(170, 'Saya dapat memeroleh pendapatan yang lebih tinggi di pekerjaan ini. ', 'F1606', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(171, 'Pekerjaan saya saat ini lebih aman/terjamin/secure', 'F1607', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(172, 'Pekerjaan saya saat ini lebih menarik ', 'F1608', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(173, 'Pekerjaan saya saat ini lebih memungkinkan saya mengambil pekerjaan tambahan/jadwal yang fleksibel, dll.', 'F1609', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(174, 'Pekerjaan saya saat ini lokasinya lebih dekat dari rumah saya', 'F16010', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(175, 'Pekerjaan saya saat ini dapat lebih menjamin kebutuhan keluarga saya.', 'F16011', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(176, 'Pada awal meniti karir ini, saya harus menerima pekerjaan yang tidak berhubungan dengan pendidikan saya.', 'F16012', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(177, 'Lainnya:', 'F16013', 21, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(178, 'Melalui iklan di koran/majalah, brosur', 'F401', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(179, 'Melamar ke perusahaan tanpa mengetahui lowongan yang ada', 'F402', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(180, 'Pergi ke bursa/pameran kerja', 'F403', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(181, 'Mencari lewat internet/iklan online/milis', 'F404', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(182, 'Dihubungi oleh perusahaan', 'F405', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(183, 'Menghubungi Kemenakertrans', 'F406', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(184, 'Menghubungi agen tenaga kerja komersial/swasta', 'F407', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(185, 'Memeroleh informasi dari pusat/kantor pengembangan karir fakultas/universitas', 'F408', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(186, 'Menghubungi kantor kemahasiswaan/hubungan alumni', 'F409', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(187, 'Membangun jejaring (network) sejak masih kuliah', 'F4010', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(188, 'Melalui relasi (misalnya dosen, orang tua, saudara, teman, dll.)', 'F4011', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(189, 'Membangun bisnis sendiri', 'F4012', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(190, 'Melalui penempatan kerja atau magang', 'F4013', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(191, 'Bekerja di tempat yang sama dengan tempat kerja semasa kuliah', 'F4014', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(192, 'Lainnya:', 'F4015', 22, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(193, 'BUMN', 'P1', 23, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(194, 'Perusahaan Terbatas (PT)', 'P1', 23, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(195, 'Koperasi', 'P1', 23, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(196, 'CV', 'P1', 23, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(197, 'Firma /Perusahaan Perorangan', 'P1', 23, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(198, 'Lainnya', 'P1', 23, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(199, '<50 Orang', 'P2', 24, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(200, '51 - 100 Orang', 'P2', 24, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(201, '101 - 150 Orang', 'P2', 24, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(202, '151 - 300 Orang', 'P2', 24, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(203, '301 - 500 Orang', 'P2', 24, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(204, '>500 Orang', 'P2', 24, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(205, '1.500.000 - 2.000.000', 'P3', 25, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(206, '2.000.000 - 2.500.000', 'P3', 25, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(207, '2.500.000 - 3.000.000', 'P3', 25, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(208, '3.500.000 - 4.000.000', 'P3', 25, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(209, '> 4.000.000', 'P3', 25, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(210, 'Tidak ada', 'P4', 26, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(211, '< 20 Orang', 'P4', 26, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(212, '21 - 40 Orang', 'P4', 26, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(213, '41 - 60 Orang', 'P4', 26, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(214, '61 - 80 Orang', 'P4', 26, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(215, '> 80 Orang', 'P4', 26, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(216, '< 5 Orang', 'P5', 27, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(217, '6 - 15 Orang', 'P5', 27, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(218, '16 - 20 Orang', 'P5', 27, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(219, '21 - 25 Orang', 'P5', 27, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(220, '26 - 30 Orang', 'P5', 27, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(221, '> 30', 'P5', 27, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(222, 'Sangat Baik', 'P7', 29, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(223, 'Baik', 'P7', 29, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(224, 'Cukup', 'P7', 29, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(225, 'Kurang', 'P7', 29, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(226, 'Sangat Baik', 'P8', 30, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(227, 'Baik', 'P8', 30, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(228, 'Cukup', 'P8', 30, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(229, 'Kurang', 'P8', 30, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(230, 'Sangat Baik', 'P9', 31, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(231, 'Baik', 'P9', 31, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(232, 'Cukup', 'P9', 31, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(233, 'Kurang', 'P9', 31, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(234, 'Sangat Baik', 'P10', 32, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(235, 'Baik', 'P10', 32, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(236, 'Cukup', 'P10', 32, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(237, 'Kurang', 'P10', 32, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(238, 'Sangat Baik', 'P11', 33, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(239, 'Baik', 'P11', 33, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(240, 'Cukup', 'P11', 33, '2021-10-28 02:37:48', '2021-10-28 02:37:48'),
(241, 'Kurang', 'P11', 33, '2021-10-28 02:37:48', '2021-10-28 02:37:48');

-- --------------------------------------------------------

--
-- Table structure for table `prodis`
--

CREATE TABLE `prodis` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_prodi` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` enum('D3','S1','S2','S3') COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_prodi` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prodis`
--

INSERT INTO `prodis` (`id`, `kd_prodi`, `jenjang`, `nama_prodi`, `created_at`, `updated_at`) VALUES
(1, '55001', 'S3', 'Ilmu Komputer', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(2, '55002', 'S3', 'Teknik Informatika', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(3, '60001', 'S3', 'Ilmu Ekonomi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(4, '73001', 'S3', 'Ilmu Psikologi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(5, '20101', 'S2', 'Teknik Elektro', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(6, '21101', 'S2', 'Teknik Mesin', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(7, '22101', 'S2', 'Teknik Sipil', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(8, '57101', 'S2', 'Manajemen Sistem Informasi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(9, '61101', 'S2', 'Manajemen', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(10, '70101', 'S2', 'Komunikasi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(11, '73101', 'S2', 'Psikologi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(12, '73103', 'S2', 'Psikologi Profesi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(13, '79102', 'S2', 'Sastra Inggris', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(14, '20201', 'S1', 'Teknik  Elektro', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(15, '21201', 'S1', 'Teknik  Mesin', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(16, '22201', 'S1', 'Teknik  Sipil', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(17, '23201', 'S1', 'Arsitektur', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(18, '26201', 'S1', 'Teknik Industri', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(19, '54211', 'S1', 'Agroteknologi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(20, '55201', 'S1', 'Teknik Informatika', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(21, '56201', 'S1', 'Sistem Komputer', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(22, '57201', 'S1', 'Sistem Informasi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(23, '60202', 'S1', 'Ekonomi Syariah', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(24, '61201', 'S1', 'Manajemen', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(25, '62201', 'S1', 'Akuntansi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(26, '70201', 'S1', 'Ilmu Komunkasi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(27, '73201', 'S1', 'Psikologi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(28, '79202', 'S1', 'Sastra Inggris', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(29, '93202', 'S1', 'Pariwisata', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(30, '56401', 'D3', 'Teknik Komputer', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(31, '57401', 'D3', 'Manajemen Informatika', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(32, '61404', 'D3', 'Manajemen Pemasaran', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(33, '61406', 'D3', 'Manajemen Keuangan', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(34, '62401', 'D3', 'Akuntasi', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(35, '15401', 'D3', 'Kebidanan', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(36, '79209', 'S1', 'Sastra Tiogkok', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(37, '90221', 'S1', 'Desain Interior', '2021-10-20 06:34:33', '2021-10-20 06:34:33'),
(38, '48201', 'S1', 'Farmasi', '2021-10-20 06:34:33', '2021-10-20 06:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `provinsis`
--

CREATE TABLE `provinsis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_provinsi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinsis`
--

INSERT INTO `provinsis` (`id`, `nama_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'D.K.I. Jakarta', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(2, 'Jawa Barat', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(3, 'Jawa Tengah', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(4, 'D.I. Yogyakarta', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(5, 'Jawa Timur', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(6, 'Aceh', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(7, 'Sumatera Utara', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(8, 'Sumatera Barat', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(9, 'Riau', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(10, 'Jambi', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(11, 'Sumatera Selatan', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(12, 'Lampung', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(13, 'Kalimantan Barat', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(14, 'Kalimantan Tengah', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(15, 'Kalimantan Selatan', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(16, 'Kalimantan Timur', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(17, 'Sulawesi Utara', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(18, 'Sulawesi Tengah', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(19, 'Sulawesi Selatan', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(20, 'Sulawesi Tenggara', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(21, 'Maluku', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(22, 'Bali', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(23, 'Nusa Tenggara Barat', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(24, 'Nusa Tenggara Timur', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(25, 'Papua', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(26, 'Bengkulu', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(27, 'Maluku Utara', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(28, 'Banten', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(29, 'Bangka Belitung', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(30, 'Gorontalo', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(31, 'Kepulauan Riau', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(32, 'Papua Barat', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(33, 'Sulawesi Barat', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(34, 'Kalimantan Utara', '2021-10-20 06:34:44', '2021-10-20 06:34:44'),
(35, 'Luar Negeri', '2021-10-20 06:34:44', '2021-10-20 06:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `sekjurs`
--

CREATE TABLE `sekjurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(10) UNSIGNED DEFAULT NULL,
  `id_prodi` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `forget_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` enum('admin','prodi','alumni','perusahaan') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `forget_password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Admin', 'admin', 'admin@gmail.com', '2021-10-20 06:34:16', '$2y$10$.5COMWqPPnSTRl/R0.qgaee7uGqPUT7quVzPrVJQCfNuL85KuLWxm', 'eyJpdiI6IklOSlF4eTRxZlVqU1czaStMSGN3V1E9PSIsInZhbHVlIjoiUFJuTUxtc3dGZjk5WFRiMG03Q0c5dz09IiwibWFjIjoiYTY1NGExNTdkOGZmN2Q2OTU3YjcxM2Y2NzZmNmM0OGRlYjU4MzBmMDhhYWQxYzExNTIzZmExMDFiMWNjYWIyYiIsInRhZyI6IiJ9', 'admin', NULL, '2021-10-20 06:34:17', '2021-10-20 06:34:17'),
(2, 'Aku Mahasiswa', 'alumni', 'mahasiswa@gmail.com', '2021-10-20 06:34:17', '$2y$10$C20wM6GmKq4aQ1lKgnCRZOGjOaPUi5G03CBwFnSJlzbvCw7GuL.C.', 'eyJpdiI6IkdJd0tLZGIwZmRPeXVadmxJaTd3dGc9PSIsInZhbHVlIjoidTBueEJDekZ6SitTWFFnZHFKM2JPdz09IiwibWFjIjoiMWZmN2NiZDc5M2EwZDk2YTQ5ZTQzOTVjMTNhYzVhNjE4NDg0YzFjMTIzMWVhMzEzODM0NWUwMWRiMjNkMDQ3NyIsInRhZyI6IiJ9', 'alumni', NULL, '2021-10-20 06:34:17', '2021-10-20 06:34:17'),
(3, 'Perusahaan Unicorn', 'perusahaan', 'perusahaan@gmail.com', '2021-10-20 06:34:17', '$2y$10$PV5/NbRyioA1EP0tVuDB3eglaLMspjwZWZ9ADzUJxN5HM2Ox8VyWG', 'eyJpdiI6IlVYdjdudHlkN3E2MGlXSHo2OE9YaFE9PSIsInZhbHVlIjoieUl0ZVNkSVVTdFE5UTFPcW8vaWhNZz09IiwibWFjIjoiNjllZjcxYWNjMzI3YmJjMjQzNzJiZmNjODgyOGQxNzk2NWY1NGNiODY5NDMyYmQxN2ZjYmY2M2Q2OGI2YTYyOCIsInRhZyI6IiJ9', 'perusahaan', NULL, '2021-10-20 06:34:17', '2021-10-20 06:34:17'),
(4, 'Prodi Akademik', 'prodi', 'prodi@gmail.com', '2021-10-20 06:34:17', '$2y$10$16BFKEBG5SQwRFgSVt1ci.m1b28pkCm0T6f1zexalx6Y.tBlAHwKu', 'eyJpdiI6IjRrY0dqRWFScDZOWWtoTkR2cVNMeEE9PSIsInZhbHVlIjoibkR1QzFNZHV0Z0tFQ0dvdHU3RTJWUT09IiwibWFjIjoiMjNhMTA5OWNjNjZkNWIzNjczMzc4MmFhN2JlYmYzM2MzM2FmMmY4ZWE4ZDJhNmNlMjQ5NWQ1NjlhZGE1NThmMSIsInRhZyI6IiJ9', 'prodi', NULL, '2021-10-20 06:34:17', '2021-10-20 06:34:17'),
(5, 'Uswatun Hasanahjhj', 'uswahgjg', 'rezkastoreioip@gmail.com', '2021-10-21 00:07:26', '$2y$10$5wmunYZYA/3n9tOYPEj72OLvJ288hcsyN5VrdFoZrzk.gnYzQxUi2', 'eyJpdiI6IkRmbzFlSFVvd2c4M09WVVNYVnNNNWc9PSIsInZhbHVlIjoiclRBUGduT1N0NUZKbVJCR2xkSDhjQT09IiwibWFjIjoiODU5NzVlMTUxNGFmYWYxNDIyNDM2OTdhYWYwOGQzNGRiMDc3ZTBlYzliODUyMjk4ZTMwMDY2MjZjN2Y4OTA1NSIsInRhZyI6IiJ9', 'alumni', NULL, '2021-10-21 00:07:26', '2021-10-21 00:07:26'),
(6, 'Uswatun Hasana', 'uswah', 'uswatunhasana02@gmail.com', '2021-10-24 06:25:11', '$2y$10$/0Hn6rhE3OYjU7qmclU3M.FJWbpgRIPabGawyfpx5m7.t2L2xVatG', 'eyJpdiI6IkZ3cEJDY3pXZFRHN3IyN25lZFNGR0E9PSIsInZhbHVlIjoiMGV1NlR0azR0cjBKZ0lvREgyZjFYZz09IiwibWFjIjoiMzA2NDA2MzFiMjVkMWU2YTZiYmNkOTQ1MjczMjkwMDc2OWI3MmE1MTZiZGU1OTFiOGY0MDgyNzlmNGNmYjA5YSIsInRhZyI6IiJ9', 'alumni', NULL, '2021-10-24 06:25:11', '2021-10-24 06:25:11'),
(7, 'hehe company', 'rezkastore', 'rezkastore@gmail.com', '2021-10-24 06:29:43', '$2y$10$hTN5TvEySuME03TzbR6A8.hoBSnO.QINH2DgT23W0mBNF4LWQ5xh6', 'eyJpdiI6IjQ1R0pvRy90RTJNU2RzZmxzZkxzdUE9PSIsInZhbHVlIjoiMVdYSGVEQWJmZDh3RkJIaUlLZnNoUT09IiwibWFjIjoiNzU4NTZmMTY5OTVhODVkNTkzMGU2N2VjZjkwYTRlZjQxNTBhNWRiMGEzZmRhYWU0Nzg3ZGEzYjgyOGQzYjI4NSIsInRhZyI6IiJ9', 'perusahaan', NULL, '2021-10-24 06:29:43', '2021-10-24 06:29:43'),
(12, 'Orang', '1689090', 'mahasiswaabc@gmail.com', '2021-10-28 00:16:22', '$2y$10$xocuDMv9Wh1A67x11AGuO.5yDpYvLmYaCVDCU.zlcDzJgoNx9SamG', 'eyJpdiI6InNsbC9iR3J4UWtEVWg3cEUrSjZqRmc9PSIsInZhbHVlIjoiMjlrQUhzZnhkMk5zWUtrY3ZKc3pYdz09IiwibWFjIjoiNzYyNzhiM2MyNGUyZmQ2NGJkY2E4MzhhZTFiZjY5M2Q3NzZiMmEwNzRkMGZjZWJkOGIxMTRjMjZhYjNlY2MzMiIsInRhZyI6IiJ9', 'alumni', NULL, '2021-10-28 00:16:22', '2021-10-28 00:16:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alumnis_id_user_foreign` (`id_user`),
  ADD KEY `alumnis_id_prodi_foreign` (`id_prodi`);

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datawebs`
--
ALTER TABLE `datawebs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jawabanrespondendetails`
--
ALTER TABLE `jawabanrespondendetails`
  ADD KEY `jawabanrespondendetails_id_jawabanresponden_foreign` (`id_jawabanresponden`);

--
-- Indexes for table `jawabanrespondens`
--
ALTER TABLE `jawabanrespondens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jawabanrespondens_id_user_foreign` (`id_user`);

--
-- Indexes for table `kabkotas`
--
ALTER TABLE `kabkotas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kabkotas_id_provinsi_foreign` (`id_provinsi`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pertanyaancabangs`
--
ALTER TABLE `pertanyaancabangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pertanyaancabangs_id_pertanyaan_foreign` (`id_pertanyaan`);

--
-- Indexes for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `perusahaans_id_user_foreign` (`id_user`);

--
-- Indexes for table `pilihanjawabans`
--
ALTER TABLE `pilihanjawabans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pilihanjawabans_id_pertanyaan_foreign` (`id_pertanyaan`);

--
-- Indexes for table `prodis`
--
ALTER TABLE `prodis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsis`
--
ALTER TABLE `provinsis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sekjurs`
--
ALTER TABLE `sekjurs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sekjurs_id_user_foreign` (`id_user`),
  ADD KEY `sekjurs_id_prodi_foreign` (`id_prodi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alumnis`
--
ALTER TABLE `alumnis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `datawebs`
--
ALTER TABLE `datawebs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jawabanrespondens`
--
ALTER TABLE `jawabanrespondens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kabkotas`
--
ALTER TABLE `kabkotas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=521;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pertanyaancabangs`
--
ALTER TABLE `pertanyaancabangs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pertanyaans`
--
ALTER TABLE `pertanyaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pilihanjawabans`
--
ALTER TABLE `pilihanjawabans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `prodis`
--
ALTER TABLE `prodis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `provinsis`
--
ALTER TABLE `provinsis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `sekjurs`
--
ALTER TABLE `sekjurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumnis`
--
ALTER TABLE `alumnis`
  ADD CONSTRAINT `alumnis_id_prodi_foreign` FOREIGN KEY (`id_prodi`) REFERENCES `prodis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnis_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawabanrespondendetails`
--
ALTER TABLE `jawabanrespondendetails`
  ADD CONSTRAINT `jawabanrespondendetails_id_jawabanresponden_foreign` FOREIGN KEY (`id_jawabanresponden`) REFERENCES `jawabanrespondens` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jawabanrespondens`
--
ALTER TABLE `jawabanrespondens`
  ADD CONSTRAINT `jawabanrespondens_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kabkotas`
--
ALTER TABLE `kabkotas`
  ADD CONSTRAINT `kabkotas_id_provinsi_foreign` FOREIGN KEY (`id_provinsi`) REFERENCES `provinsis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pertanyaancabangs`
--
ALTER TABLE `pertanyaancabangs`
  ADD CONSTRAINT `pertanyaancabangs_id_pertanyaan_foreign` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD CONSTRAINT `perusahaans_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pilihanjawabans`
--
ALTER TABLE `pilihanjawabans`
  ADD CONSTRAINT `pilihanjawabans_id_pertanyaan_foreign` FOREIGN KEY (`id_pertanyaan`) REFERENCES `pertanyaans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sekjurs`
--
ALTER TABLE `sekjurs`
  ADD CONSTRAINT `sekjurs_id_prodi_foreign` FOREIGN KEY (`id_prodi`) REFERENCES `prodis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sekjurs_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
