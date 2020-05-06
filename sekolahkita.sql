-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2020 pada 02.15
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahkita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_agenda`
--

CREATE TABLE `tbl_agenda` (
  `agenda_id` int(11) NOT NULL,
  `agenda_nama` varchar(200) DEFAULT NULL,
  `agenda_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `agenda_deskripsi` text,
  `agenda_mulai` date DEFAULT NULL,
  `agenda_selesai` date DEFAULT NULL,
  `agenda_tempat` varchar(90) DEFAULT NULL,
  `agenda_waktu` varchar(30) DEFAULT NULL,
  `agenda_keterangan` varchar(200) DEFAULT NULL,
  `agenda_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_agenda`
--

INSERT INTO `tbl_agenda` (`agenda_id`, `agenda_nama`, `agenda_tanggal`, `agenda_deskripsi`, `agenda_mulai`, `agenda_selesai`, `agenda_tempat`, `agenda_waktu`, `agenda_keterangan`, `agenda_author`) VALUES
(1, 'POST TEST PKB TK, SD, SMP DI TUK SMP 4 PAKEM BERJALAN LANCAR', '2017-01-22 06:18:01', 'Sejak awal  sampai dengan 17 November 2018   secara maraton dilaksanakan pos tes PKB di SMP 4 Pakem.  Pos tes dilaksanakan  setiap hari dengan 2 shiff pagi dan siang, bahkan pada tanggal 14 dan 17 November  dilaksanakan 3 shiff, pagi siang dan sore.', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '08.00 - 11.00 WIB', 'Sejak awal  sampai dengan 17 November 2018   secara maraton dilaksanakan pos tes PKB di SMP 4 Pakem.  Pos tes dilaksanakan  setiap hari dengan 2 shiff pagi dan siang, bahkan pada tanggal 14 dan 17 Nov', 'Muris Studio'),
(2, 'PEMBINAAN PENINGKATAN KAPASITAS ANGGOTA KORPRI SUB UNIT PELAYANAN PENDIDIKAN KECAMATAN PAKEM', '2017-01-22 06:26:33', 'Bertempat di aula SMP Negeri 4 Pakem Kamis, 2 Agustus 2018 dilaksanakan kegiatan pembinaan peningkatan kapasitas anggota KORPRI Sub unit Pelayanan Pendidikan Kecamatan Pakem. Kegiatan ini diikuti oleh guru dan karyawan jenjang TK, SD, SMP/Mts dan tenaga UPT Yandik Kecamatan Pakem. Hadir sebagai nara sumber adalah ketua unit korpri Dinas Pendidikan', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '07.30 - 12.00 WIB', '-Bertempat di aula SMP Negeri 4 Pakem Kamis, 2 Agustus 2018 dilaksanakan kegiatan pembinaan peningkatan kapasitas anggota KORPRI Sub unit Pelayanan Pendidikan Kecamatan Pakem. Kegiatan ini diikuti ole', 'Muris Studio'),
(3, 'KEGIATAN SORE AWAL TAHUN PELAJARAN 2018/2019', '2017-01-22 06:29:49', 'Berikut kami sampaikan agenda kegiatan sore awal tahun pelajaran 2018/2019', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '07.30 - 12.00 WIB', 'KEGIATAN SORE AWAL TAHUN PELAJARAN 2020', 'Muris Studio'),
(4, 'TUJUH SMP DI SLEMAN MELAKSANAKAN TPM ONLINE BERSAMA', '2020-05-02 12:28:14', 'Dalam rangka mempersiapkan siswa siswi kelas 9 menghadapi UN 2019 beberapa sekolah bekerja sama untuk melaksanakan kegiatan Tes Pendalaman Materi (TPM) mata pelajaran yang di UN kan.  TPM ini meliputi mata pelajaran Bahasa Indonesia, Matematika, Bahasa Inggris dan Ilmu Pengetahuan Alam. TPM kali ini bukan hanya sekedar CBT tapi dilaksanakan secara online.', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '08.00 - 11.00 WIB', 'Dalam rangka mempersiapkan siswa siswi kelas 9 menghadapi UN 2019 beberapa sekolah bekerja sama untuk melaksanakan kegiatan Tes Pendalaman Materi (TPM) mata pelajaran yang di UN kan.  TPM ini meliputi', 'Muris Studio'),
(5, 'PENYULUHAN PSIKOLOGI REMAJA SISWA SISWI', '2020-05-02 12:28:41', 'Dalam rangka memperkuat perkembangan pribadi yang baik, dan antisipasi dari segala bentuk penyimpangan, semua siswa SMP N 4 Pakem mengikuti kegiatan penyuluhan perkembangan remaja. Kegiatan ini dilaksanakan Jumat, 7 Desember 2018 bertempat di ruang A1, diikuti oleh semua siswa kelas 7,8 dan 9.', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '08.00 - 11.00 WIB', 'Dalam rangka memperkuat perkembangan pribadi yang baik, dan antisipasi dari segala bentuk penyimpangan, semua siswa SMP N 4 Pakem mengikuti kegiatan penyuluhan perkembangan remaja. Kegiatan ini dilaks', 'Muris Studio'),
(6, 'TKM DAN PAS ONLINE DI SMP BERJALAN LANCAR', '2020-05-02 12:29:05', 'Sejak beberapa tahun terakhir pembelajaran dan penilaian SMP N 4 Pakem dilakukan secara online. Demikian pula kegiatan tes kendali mutu kabupaten Sleman dan penilaian akhir semester ganjil tahun ajaran 2018/2019 yang dilaksanakan 27 November s.d. 5 Desember 2018 terlaksana dengan sangat lancar.', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '08.00 - 11.00 WIB', 'Sejak beberapa tahun terakhir pembelajaran dan penilaian SMP N 4 Pakem dilakukan secara online. Demikian pula kegiatan tes kendali mutu kabupaten Sleman dan penilaian akhir semester ganjil tahun ajara', 'Muris Studio'),
(7, 'MENDADAK SEMUA WARGA BERLINDUNG DI TEMPAT AMAN, BEL SEKOLAH BERBUNYI TIDAK BERATURAN, SUARA KERAS TERDENGAR MEMINTA UNTUK SEGERA BERLINDUNG, SUASANA MENCEKAM', '2020-05-02 12:29:52', 'MENDADAK SEMUA WARGA BERLINDUNG DI TEMPAT AMAN, BEL SEKOLAH BERBUNYI TIDAK BERATURAN, SUARA KERAS TERDENGAR MEMINTA UNTUK SEGERA BERLINDUNG, SUASANA MENCEKAM', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '08.00 - 11.00 WIB', 'MENDADAK SEMUA WARGA BERLINDUNG DI TEMPAT AMAN, BEL SEKOLAH BERBUNYI TIDAK BERATURAN, SUARA KERAS TERDENGAR MEMINTA UNTUK SEGERA BERLINDUNG, SUASANA MENCEKAM', 'Muris Studio'),
(8, 'PENGUATAN KARAKTER DI SEKOLAH MELALUI PERMAINAN TRADISIONAL', '2020-05-02 12:30:15', 'Suasana riuh  sorak sorai, penuh tepuk tangan dan gelak tawa. Itulah suasana  pagi hingga siang pada Kamis, 6 Desember 2018 di SMP Negeri 4 Pakem.  Berbeda dengan hari hari biasanya,  sehari setelah selesai pelaksanaan penilaian akhir semester (PAS) ganjil tahun ajaran 2018/2019 guru, karyawan dan siswa bermain, barcanda tawa sambil berolahraga bersama', '2020-05-02', '2020-05-02', 'MURIS STUDIO', '08.00 - 11.00 WIB', 'Suasana riuh  sorak sorai, penuh tepuk tangan dan gelak tawa. Itulah suasana  pagi hingga siang pada Kamis, 6 Desember 2018 di SMP Negeri 4 Pakem.  Berbeda dengan hari hari biasanya,  sehari setelah s', 'Muris Studio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_album`
--

CREATE TABLE `tbl_album` (
  `album_id` int(11) NOT NULL,
  `album_nama` varchar(50) DEFAULT NULL,
  `album_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `album_pengguna_id` int(11) DEFAULT NULL,
  `album_author` varchar(60) DEFAULT NULL,
  `album_count` int(11) DEFAULT '0',
  `album_cover` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_album`
--

INSERT INTO `tbl_album` (`album_id`, `album_nama`, `album_tanggal`, `album_pengguna_id`, `album_author`, `album_count`, `album_cover`) VALUES
(1, 'Kegiatan Pramuka', '2016-09-08 13:00:55', 1, 'Muris Studio', 5, '1445904c89e36f5fd6aa6ab9c3992adc.jpg'),
(3, 'Kegiatan OSIS', '2017-01-21 01:58:16', 1, 'Muris Studio', 3, '047cf01a796131d142a90db9a3dd96ca.jpg'),
(4, 'Foto Kegiatan Siswa Sekolah', '2017-01-24 01:31:13', 1, 'Muris Studio', 7, 'b115c482c4fb08add9091208bf4dc500.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_files`
--

CREATE TABLE `tbl_files` (
  `file_id` int(11) NOT NULL,
  `file_judul` varchar(120) DEFAULT NULL,
  `file_deskripsi` text,
  `file_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `file_oleh` varchar(60) DEFAULT NULL,
  `file_download` int(11) DEFAULT '0',
  `file_data` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_files`
--

INSERT INTO `tbl_files` (`file_id`, `file_judul`, `file_deskripsi`, `file_tanggal`, `file_oleh`, `file_download`, `file_data`) VALUES
(2, 'Dasar-dasar CSS', 'Modul dasar-dasar CSS 3. Modul ini membantu anda untuk memahami struktur dasar CSS', '2017-01-23 04:30:01', 'Drs. Joko', 0, 'ab9a183ff240deadbedaff78e639af2f.pdf'),
(3, '14 Teknik Komunikasi Yang Paling Efektif', 'Ebook 14 teknik komunikasi paling efektif membantu anda untuk berkomunikasi dengan baik dan benar', '2017-01-23 15:26:06', 'Drs. Joko', 0, 'ab2cb34682bd94f30f2347523112ffb9.pdf'),
(4, 'Bagaimana Membentuk Pola Pikir yang Baru', 'Ebook ini membantu anda membentuk pola pikir baru.', '2017-01-23 15:27:07', 'Drs. Joko', 0, '30f588eb5c55324f8d18213f11651855.pdf'),
(5, '7 Tips Penting mengatasi Kritik', '7 Tips Penting mengatasi Kritik', '2017-01-23 15:27:44', 'Drs. Joko', 0, '329a62b25ad475a148e1546aa3db41de.docx'),
(6, '8 Racun dalam kehidupan kita', '8 Racun dalam kehidupan kita', '2017-01-23 15:28:17', 'Drs. Joko', 0, '8e38ad4948ba13758683dea443fbe6be.docx'),
(7, 'Jurnal Teknolgi Informasi', 'Jurnal Teknolgi Informasi', '2017-01-25 03:18:53', 'Gunawan, S.Pd', 0, '87ae0f009714ddfdd79e2977b2a64632.pdf'),
(8, 'Jurnal Teknolgi Informasi 2', 'Jurnal Teknolgi Informasi', '2017-01-25 03:19:22', 'Gunawan, S.Pd', 0, 'c4e966ba2c6e142155082854dc5b3602.pdf'),
(9, 'Naskah Publikasi IT', 'Naskah Teknolgi Informasi', '2017-01-25 03:21:04', 'Gunawan, S.Pd', 0, '71380b3cf16a17a02382098c028ece9c.pdf'),
(10, 'Modul Teknologi Informasi', 'Modul Teknologi Informasi', '2017-01-25 03:22:08', 'Gunawan, S.Pd', 0, '029143a3980232ab2900d94df36dbb0c.pdf'),
(11, 'Modul Teknologi Informasi Part II', 'Modul Teknologi Informasi', '2017-01-25 03:22:54', 'Gunawan, S.Pd', 0, 'ea8f3f732576083156e509657614f551.pdf'),
(12, 'Modul Teknologi Informasi Part III', 'Modul Teknologi Informasi', '2017-01-25 03:23:21', 'Gunawan, S.Pd', 0, 'c5e5e7d16e4cd6c3d22c11f64b0db2af.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_galeri`
--

CREATE TABLE `tbl_galeri` (
  `galeri_id` int(11) NOT NULL,
  `galeri_judul` varchar(60) DEFAULT NULL,
  `galeri_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `galeri_gambar` varchar(40) DEFAULT NULL,
  `galeri_album_id` int(11) DEFAULT NULL,
  `galeri_pengguna_id` int(11) DEFAULT NULL,
  `galeri_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`galeri_id`, `galeri_judul`, `galeri_tanggal`, `galeri_gambar`, `galeri_album_id`, `galeri_pengguna_id`, `galeri_author`) VALUES
(4, 'Diskusi Pemilihan Ketua Osis', '2017-01-21 14:04:53', '5f8436e2c30570dfe2114f05af5e9215.jpg', 3, 1, 'Muris Studio'),
(5, 'Panitia Pemilu Osis', '2017-01-22 04:13:20', '504cd9e83e047becee6ec32e4af7e534.jpg', 3, 1, 'Muris Studio'),
(6, 'Proses Pemilu Osis', '2017-01-22 04:13:43', '83f7e70d0f89f2d8a7695e5f7059418f.jpg', 3, 1, 'Muris Studio'),
(7, 'Belajar dengan native speaker', '2017-01-24 01:26:22', 'd884f7fe18efebd07d7725ecf3bf3481.jpg', 1, 1, 'Muris Studio'),
(8, 'Diskusi dengan native speaker', '2017-01-24 01:27:05', 'f652521a6c283c2df9da808cc4aae1c6.jpg', 1, 1, 'Muris Studio'),
(9, 'Foto bareng native speaker', '2017-01-24 01:27:28', '69fc9bf961e3aac2fc79af00922b3933.png', 1, 1, 'Muris Studio'),
(10, 'Foto bareng native speaker', '2017-01-24 01:28:40', '853f2d57da50c6f516944a6cec68c694.jpg', 1, 1, 'Muris Studio'),
(11, 'Foto bareng native speaker', '2017-01-24 01:28:54', 'f92d6de4457a33e5a1d957b0e3d20335.jpg', 1, 1, 'Muris Studio'),
(12, 'Belajar sambil bermain', '2017-01-24 01:31:42', '5e3c09430ba03b2e60de6c06c6dbafec.jpg', 4, 1, 'Muris Studio'),
(13, 'Belajar sambil bermain', '2017-01-24 01:31:55', 'e4d51d428be01628693b4bff4e453463.jpg', 4, 1, 'Muris Studio'),
(14, 'Belajar komputer programming', '2017-01-24 01:32:24', 'a23dcd7e6b129257fd03d7198fe1bb49.jpg', 4, 1, 'Muris Studio'),
(15, 'Belajar komputer programming', '2017-01-24 01:32:34', 'cf0585d2d5a627639ef4ed48beab65c2.jpg', 4, 1, 'Muris Studio'),
(16, 'Belajar komputer programming', '2017-01-24 01:32:44', 'e53b596a6a821179169c647ffdaebd10.jpg', 4, 1, 'Muris Studio'),
(17, 'Belajar sambil bermain', '2017-01-24 01:33:08', 'e8ec9657a6c5ff5eea059785c949b5ce.jpg', 4, 1, 'Muris Studio'),
(18, 'Makan bersama', '2017-01-24 01:33:24', 'a92df7b3e7a8488f0e8ca186e6551194.jpg', 4, 1, 'Muris Studio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `guru_id` int(11) NOT NULL,
  `guru_nip` varchar(30) DEFAULT NULL,
  `guru_nama` varchar(70) DEFAULT NULL,
  `guru_jenkel` varchar(2) DEFAULT NULL,
  `guru_tmp_lahir` varchar(80) DEFAULT NULL,
  `guru_tgl_lahir` varchar(80) DEFAULT NULL,
  `guru_mapel` varchar(120) DEFAULT NULL,
  `guru_photo` varchar(40) DEFAULT NULL,
  `guru_tgl_input` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`guru_id`, `guru_nip`, `guru_nama`, `guru_jenkel`, `guru_tmp_lahir`, `guru_tgl_lahir`, `guru_mapel`, `guru_photo`, `guru_tgl_input`) VALUES
(1, '-', 'Nensy Larasati,S.Pd.', 'L', 'Bandung', '25 September 1993', 'Bahasa Jawa	', 'a9cbe86849c837cc0931eff7b9991d00.png', '2017-01-26 07:49:43'),
(2, '927482658274981', 'Mei Indri, S.Pd', 'L', 'Purwokerto', '25 Juni 2020', 'Bahasa Indonesia	', '792ef9e0267a1b021c9b99763a980a0b.jpg', '2017-01-26 13:38:54'),
(3, '-', 'Agustina Setyani,S.Ag', 'L', 'Purwokerto', '15 Desember 1995', 'Agama', '96e1400c5cf46d382073e8e8af0b86b6.jpg', '2017-01-26 13:41:20'),
(4, '-', 'Fury Ismaya, S.Pd', 'P', 'Purwokerto', '15 Desember 1995', 'Sejarah', '999998fd4172c4cd99389b7f734d2b23.jpg', '2017-01-26 13:42:08'),
(5, '-', 'Arneta Dwi Safitri, M. Pd.', 'P', 'Purwokerto', '15 Desember 1995', 'Fisika', '5b88365eea4e14fd027adf1ed0c17efa.jpeg', '2017-01-26 13:42:48'),
(6, '-', 'Rachmaningtiyas Wietda Ayu Nirmandini, S.Pd.', 'L', 'Purwokerto', '15 Desember 1995', 'Matematika', '0010e6d466aef6042f7a914c7f567dd3.jpg', '2017-01-26 13:43:46'),
(7, '-', 'Lutviarini Latifah, S.Pd., M.Sc.', 'P', 'Purwokerto', '15 Desember 1995', 'Bahasa Inggris, IPA', 'b2917470f024fc3dd62c43e37665d767.jpg', '2017-01-26 13:45:11'),
(8, '-', 'Asrini Yuli Wahyuni,SH', 'P', 'Purwokerto', '15 Desember 1995', 'Olahraga', 'efb1d0cc744b320f6dae31c4711f562a.jpg', '2017-01-27 04:28:23'),
(9, '-', 'Windy Mazaya Amalina', 'P', 'Purwokerto', '15 Desember 1995', 'Sejarah', '1d3b877f1619db4e2fd883a2aff15b09.jpg', '2020-05-01 21:18:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_inbox`
--

CREATE TABLE `tbl_inbox` (
  `inbox_id` int(11) NOT NULL,
  `inbox_nama` varchar(40) DEFAULT NULL,
  `inbox_email` varchar(60) DEFAULT NULL,
  `inbox_kontak` varchar(20) DEFAULT NULL,
  `inbox_pesan` text,
  `inbox_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `inbox_status` int(11) DEFAULT '1' COMMENT '1=Belum dilihat, 0=Telah dilihat'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_inbox`
--

INSERT INTO `tbl_inbox` (`inbox_id`, `inbox_nama`, `inbox_email`, `inbox_kontak`, `inbox_pesan`, `inbox_tanggal`, `inbox_status`) VALUES
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:44:12', 0),
(3, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ini adalah pesan ', '2017-06-21 03:45:57', 0),
(5, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Ping !', '2017-06-21 03:53:19', 0),
(7, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', '-', 'Hi, there!', '2017-07-01 07:28:08', 0),
(8, 'M Fikri', 'fikrifiver97@gmail.com', '084375684364', 'Hi There, Would you please help me about register?', '2018-08-06 13:51:07', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_nama` varchar(30) DEFAULT NULL,
  `kategori_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kategori_id`, `kategori_nama`, `kategori_tanggal`) VALUES
(1, 'Pendidikan', '2016-09-06 05:49:04'),
(2, 'Politik', '2016-09-06 05:50:01'),
(3, 'Sains', '2016-09-06 05:59:39'),
(5, 'Penelitian', '2016-09-06 06:19:26'),
(6, 'Prestasi', '2016-09-07 02:51:09'),
(13, 'Olah Raga', '2017-01-13 13:20:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `kelas_id` int(11) NOT NULL,
  `kelas_nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`kelas_id`, `kelas_nama`) VALUES
(1, 'Kelas X.1'),
(2, 'Kelas X.2'),
(3, 'Kelas X.3'),
(4, 'Kelas X.4'),
(5, 'Kelas X.5'),
(6, 'Kelas X.6'),
(7, 'Kelas X.7'),
(8, 'Kelas XI IPA.1'),
(9, 'Kelas XI IPA.2'),
(10, 'Kelas XI IPA.3'),
(11, 'Kelas XI IPA.4'),
(12, 'Kelas XI IPA.5'),
(13, 'Kelas XI IPA.6'),
(14, 'Kelas XI IPA.7'),
(15, 'Kelas XI IPS.1'),
(16, 'Kelas XI IPS.2'),
(17, 'Kelas XI IPS.3'),
(18, 'Kelas XI IPS.4'),
(19, 'Kelas XI IPS.5'),
(20, 'Kelas XI IPS.6'),
(21, 'Kelas XI IPS.7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `komentar_nama` varchar(30) DEFAULT NULL,
  `komentar_email` varchar(50) DEFAULT NULL,
  `komentar_isi` varchar(120) DEFAULT NULL,
  `komentar_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `komentar_status` varchar(2) DEFAULT NULL,
  `komentar_tulisan_id` int(11) DEFAULT NULL,
  `komentar_parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `komentar_nama`, `komentar_email`, `komentar_isi`, `komentar_tanggal`, `komentar_status`, `komentar_tulisan_id`, `komentar_parent`) VALUES
(1, 'M Fikri', 'fikrifiver97@gmail.com', ' Nice Post.', '2018-08-07 15:09:07', '1', 24, 0),
(2, 'M Fikri Setiadi', 'fikrifiver97@gmail.com', ' Awesome Post', '2018-08-07 15:14:26', '1', 24, 0),
(3, 'Joko', 'joko@gmail.com', 'Thank you.', '2018-08-08 03:54:56', '1', 24, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_log_aktivitas`
--

CREATE TABLE `tbl_log_aktivitas` (
  `log_id` int(11) NOT NULL,
  `log_nama` text,
  `log_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `log_ip` varchar(20) DEFAULT NULL,
  `log_pengguna_id` int(11) DEFAULT NULL,
  `log_icon` blob,
  `log_jenis_icon` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_mapel`
--

CREATE TABLE `tbl_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(100) NOT NULL,
  `keterangan_mapel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_mapel`
--

INSERT INTO `tbl_mapel` (`id_mapel`, `nama_mapel`, `keterangan_mapel`) VALUES
(2, 'IPA', 'Belajar IPA'),
(3, 'IPS', 'Belajar IPS'),
(4, 'Bahasa Inggris', 'Bahasa Inggris');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_moto` varchar(100) DEFAULT NULL,
  `pengguna_jenkel` varchar(2) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_tentang` text,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_facebook` varchar(35) DEFAULT NULL,
  `pengguna_twitter` varchar(35) DEFAULT NULL,
  `pengguna_linkdin` varchar(35) DEFAULT NULL,
  `pengguna_google_plus` varchar(35) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_moto`, `pengguna_jenkel`, `pengguna_username`, `pengguna_password`, `pengguna_tentang`, `pengguna_email`, `pengguna_nohp`, `pengguna_facebook`, `pengguna_twitter`, `pengguna_linkdin`, `pengguna_google_plus`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`) VALUES
(1, 'Muris Studio', 'Solusi Informasi Teknolosi', 'L', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Solusi Informasi Teknolosi', 'suryaciptainformatika@gmail.com', '085799696924', '-', '-', '', '', 1, '1', '2020-09-03 06:07:55', 'dcffbd1ad6ae7b98222701364708adb4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengumuman`
--

CREATE TABLE `tbl_pengumuman` (
  `pengumuman_id` int(11) NOT NULL,
  `pengumuman_judul` varchar(150) DEFAULT NULL,
  `pengumuman_deskripsi` text,
  `pengumuman_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengumuman_author` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengumuman`
--

INSERT INTO `tbl_pengumuman` (`pengumuman_id`, `pengumuman_judul`, `pengumuman_deskripsi`, `pengumuman_tanggal`, `pengumuman_author`) VALUES
(1, 'INFORMASI PERINGATAN HARI PRAMUKA', 'Informasi disampaikan kepada seluruh siswa SMP Negeri 4 Pakem bahwa pada hari Senin 14 Agustus 2020 upacara / apel hari pramuka. Semua siswa memakai pakaian pramuka lengkap dengan segala atributnya. Jam pelaksanaan upacara / apel seperti biasa tiap hari Senin.', '2020-05-02 01:17:30', 'Muris Studio'),
(2, 'INFORMASI PELAKSANAAN UPACARA PERINGATAN HUT RI KE-72', 'Informasi disampaikan kepada seluruh Siswa SMP Negeri 4 Pakem bahwa pada hari Kamis 17 Agustus 2017 upacara dalam rangka HUT RI ke-72. Semua siswa memakai pakaian yang biasa dipakai pada hari senin.  Upacara dimulai pukul 07.00 WIB. Setelah selesai upacara, siswa langsung pulang. Kecuali petugas yang ditunjuk mewakili sekolah di kecamatan.Yang bertempat di M-Sekolah. Raport diambil oleh orang tua/wali kelas murid masing-masing', '2020-05-02 01:17:30', 'Muris Studio'),
(3, ' NOV 2017 0 Pengumuman Sekolah INFORMASI UPACARA PERINGATAN HARI PAHLAWAN', 'Informasi disampaikan kepada seluruh Siswa SMP Negeri 4 Pakem bahwa pada hari Jumat 10 Nopember 2017 upacara peringatan Hari Pahlawan. Tidak ada senam pagi. Semua siswa memakai pakaian pramuka.  Upacara dimulai pukul 06.30 WIB. Informasi mohon disebarluaskan. Terimakasih', '2020-05-02 01:17:30', 'Muris Studio'),
(4, 'PENDATAAN SISWA KELAS 7 BOARDING & REGULER', 'Pengumuman khusus untuk siswa baru kelas 7 CIBI BOARDING & Kelas Reguler Kepada seluruh siswa baru kelas 7 CIBI BOARDING & Kelas Reguler diwajibkan untuk mengisi form pendataan siswa baru. Harap untuk menyiapkan dokumen pendukung sebelum mengisi formulir', '2020-05-02 01:17:30', 'Muris Studio'),
(5, 'PENGUMUMAN UNTUK SISWA KELAS 9', 'Diumumkan kepada seluruh siswa kelas 9 SMP Negeri 4 Pakem diharapkan hadir di sekolah : Hari /tanggal  : Jumat, 17 Juni 2016 Jam                   : 08.00 WIB Tempat             : Aula depan Untuk cap 3 jari ijazah & mengambil undangan pelepasan siswa kelas 9', '2020-05-02 12:19:09', 'Muris Studio'),
(6, 'PANDUAN KEGIATAN RAMADHAN 1441 H', 'Berikut kami sampaikan panduan kegiatan ramadhan 1441 H , silakan unduh di tautan berikut :\r\n\r\nPANDUAN RAMADHAN 1441 H \r\n\r\nInformasi sekolah terbaru, selalu kunjungi web sekolah!', '2020-05-02 12:19:58', 'Muris Studio'),
(7, 'JADWAL PEMBELAJARAN JARAK JAUH MULAI 29 APRIL- 5 MEI 2020', 'Berikut kami sampaikan jadwal pembelajaran jarak jauh 29 April – 5 Mei 2020 dan  perpanjangan masa belajar dirumah berlaku mulai 29 April  – 16 Mei 2020, silakan unduh di tautan berikut :\r\n\r\nJADWAL PEMBELAJARAN JARAK JAUH 29 APRIL – 5 MEI 2020\r\nINFORMASI PJJ 29 APRIL – 16 MEI 2020\r\nPANDUAN RAMADHAN 1441 H \r\nInformasi sekolah ter-update, selalu kunjungi web sekolah. Terimakasih.', '2020-05-02 12:21:31', 'Muris Studio'),
(8, 'JADWAL BARU PEMBELAJARAN ONLINE 22-28 APRIL 2020', 'Berikut kami sampaikan jadwal pembelajaran online berlaku mulai 22-28 April 2020, serta informasi OSOP silakan unduh di tautan berikut :\r\n\r\n>>JADWAL PEMBELAJARAN ONLINE_ 22-28 APRIL 2020<<\r\n\r\nInformasi sekolah ter-update, selalu kunjungi web sekolah. Terimakasih.', '2020-05-02 12:21:59', 'Muris Studio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengunjung`
--

CREATE TABLE `tbl_pengunjung` (
  `pengunjung_id` int(11) NOT NULL,
  `pengunjung_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `pengunjung_ip` varchar(40) DEFAULT NULL,
  `pengunjung_perangkat` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengunjung`
--

INSERT INTO `tbl_pengunjung` (`pengunjung_id`, `pengunjung_tanggal`, `pengunjung_ip`, `pengunjung_perangkat`) VALUES
(930, '2018-08-09 08:04:59', '::1', 'Chrome'),
(931, '2020-04-30 09:24:35', '::1', 'Chrome'),
(932, '2020-04-30 17:03:42', '::1', 'Chrome'),
(933, '2020-04-30 17:17:54', '192.168.43.1', 'Chrome'),
(934, '2020-05-01 18:28:26', '::1', 'Chrome'),
(935, '2020-05-01 21:12:36', '192.168.43.1', 'Chrome'),
(936, '2020-05-02 12:58:12', '192.168.43.22', 'Chrome'),
(937, '2020-05-02 17:19:17', '::1', 'Firefox'),
(938, '2020-05-02 17:41:38', '192.168.43.22', 'Chrome'),
(939, '2020-05-02 18:07:26', '192.168.43.1', 'Chrome'),
(940, '2020-05-03 21:17:35', '::1', 'Chrome'),
(941, '2020-05-04 22:36:09', '::1', 'Chrome'),
(942, '2020-05-05 21:10:13', '::1', 'Chrome'),
(943, '2020-05-05 21:32:53', '192.168.43.1', 'Chrome');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `siswa_id` int(11) NOT NULL,
  `siswa_nis` varchar(20) DEFAULT NULL,
  `siswa_nama` varchar(70) DEFAULT NULL,
  `siswa_jenkel` varchar(2) DEFAULT NULL,
  `siswa_kelas_id` int(11) DEFAULT NULL,
  `siswa_photo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`siswa_id`, `siswa_nis`, `siswa_nama`, `siswa_jenkel`, `siswa_kelas_id`, `siswa_photo`) VALUES
(1, '9287482', 'Alvaro Sanchez', 'L', 8, '083d547659a2d4bb15c0322d15955da5.png'),
(2, '9287483', 'Ririn Cantika', 'P', 8, '74eec6ad37550cc12fe8fa83d46878af.jpg'),
(4, '123083', 'Ari Hidayat', 'L', 1, 'e371e67618ad53c99de380782c373023.png'),
(5, '123084', 'Irma Chaiyo', 'P', 1, '1e148b42c71562841ba3018fc97b748a.png'),
(6, '123085', 'Nadila Ginting', 'P', 1, '8125da21f903803b6992214967239ab3.png'),
(7, '123086', 'Anna Marina', 'P', 1, '33eaf3e3faf28a0fe31670c022f641f1.png'),
(8, '123086', 'Dhea Lubis', 'P', 1, '03e651410e969c3c26e8e0d35380470d.png'),
(9, '123087', 'Nadia Ginting', 'P', 1, 'd7823f8d98d376c085aa284a54d63264.png'),
(10, '123088', 'Mita Febrina', 'P', 1, 'eca0280a4a57c911ee68b8318d1e517f.png'),
(11, '123089', 'Elizabeth ', 'P', 1, 'ec1232a08d650bc8c3197c9db95a7fc8.png'),
(12, '123090', 'Della Guswono', 'P', 1, '6c82fce13bb3eff1fd2e897b2c3cfeeb.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `testimoni_id` int(11) NOT NULL,
  `testimoni_nama` varchar(30) DEFAULT NULL,
  `testimoni_isi` varchar(120) DEFAULT NULL,
  `testimoni_email` varchar(35) DEFAULT NULL,
  `testimoni_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_tulisan`
--

CREATE TABLE `tbl_tulisan` (
  `tulisan_id` int(11) NOT NULL,
  `tulisan_judul` varchar(100) DEFAULT NULL,
  `tulisan_isi` text,
  `tulisan_tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `tulisan_kategori_id` int(11) DEFAULT NULL,
  `tulisan_kategori_nama` varchar(30) DEFAULT NULL,
  `tulisan_views` int(11) DEFAULT '0',
  `tulisan_gambar` varchar(40) DEFAULT NULL,
  `tulisan_pengguna_id` int(11) DEFAULT NULL,
  `tulisan_author` varchar(40) DEFAULT NULL,
  `tulisan_img_slider` int(2) NOT NULL DEFAULT '0',
  `tulisan_slug` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_tulisan`
--

INSERT INTO `tbl_tulisan` (`tulisan_id`, `tulisan_judul`, `tulisan_isi`, `tulisan_tanggal`, `tulisan_kategori_id`, `tulisan_kategori_nama`, `tulisan_views`, `tulisan_gambar`, `tulisan_pengguna_id`, `tulisan_author`, `tulisan_img_slider`, `tulisan_slug`) VALUES
(20, 'SEJUMLAH PESERTA DIDIK SMAN 78 MASUK PTN MELALUI JALUR PRESTASI', '<p>Tahun Pelajaran 2018/2019 Sejumlah Peserta didik SMAN 78 Jakarta di terima di perguruan Tinggi Negeri melalui Jalur prestasi, diantaranya masuk melalui jalur Seleksi Nasional Perguruan tinggi Negeri (SNMPTN) berjumlah 58 siswa.</p>\r\n\r\n<p>Mereka merupakan putra putri terbaik yang memiliki prestasi akademik 40% terbaik di sekolah dan terseleksi melalui jalur raport tanpa test. Kampus yang bakal mereka tempati seperti di UI, ITB, UGM, UNJ dan lain sebagainya.</p>\r\n\r\n<p>Selain melalui jalur SNMPTN ada juga sebanyak 34 siswa dari SMAN 78 Jakarta juga diterima di jalur prestasi dan pemerataan kesempatan Belajar Universitas Indonesia (PPKB Paralel UI) yaitu salah satu jalur penerimaan yang di selenggarakan oleh UI yang menggunakan nilai raport tanpa test untuk siswa-siswi yang berminat melanjutkan pendidikan tingginya di Universitas Indonesia.</p>\r\n\r\n<p>Sedangkan 1 siswa SMAN 78 atas nama Rachmadana Fajri Majid juga merupakan salah satu siswa yang diterima di UI melalui jalur Talent Scouting, yaitu satu jalauryang diselenggarakan oleh kampus UI melalui jalur raport tanpa test untuk program Kleas Internasional.</p>\r\n\r\n<p>Satu hal lagi yang juga patut kita syukuri adalah Beberapa siswa SMAN 78 juga telah diterima di perguruan tinggi luar Negeri seperti Jepang, Kanada, dan belanda, baik melalaui jalur tes maupun beasiswa yang diselenggarakan oleh Pihak Universitas di Luar Negeri.</p>\r\n\r\n<p>Proses seleksi yang harus mereka lewati tidak hanya melalui nilai prestasi akademik tetapi juga prestasi non akademik, Kemampuan bahasa asing yang dibuktikan dengan sertifikat, penulisan Essay dan juga wawancara. Siswa-siswi tidak hanya berkompetisi dengan siswa dari dalam negeri saja tetapi mereka juga harus bersaing dengan pelajar seluruh dunia. Semoga sukses.</p>\r\n', '2020-02-05 09:24:42', 1, 'Pendidikan', 28, '4add43a5d93fc3ba8a81869127e11f99.jpg', 1, 'Muris Studio', 0, 'sejumlah-peserta-didik-sman-78-masuk-ptn-melalui-jalur-prestasi'),
(22, 'UPACARA HARI LAHIR PANCASILA 1 JUNI DI SMAN 78 JAKARTA BERLANGSUNG KHIDMAD', '<p>Hari Sabtu, 1 Juni 2019 bertepatan dengan 27 Ramadhan 1440 H, SMA Negeri 78 Jakarta melaksanakan Upacara hari kelahiran Pancasila bertempat di lapangan sekolah.</p>\r\n\r\n<p>Ada yang menarik dari upacara kali ini karena pertama: bertepatan dengan bulan suci Ramadhan hari yang ke 27 dan beberapa guru maupun karyawan ada yang sudah pulang kampung halaman dalam menyambut hari raya Idul Fitri, kedua : Kepala sekolah meminta agar yang sudah pulang kampung ikut melaksanakan upacara di wilayah masing-masing dengan bergabung ke sekolah atau instansi terdekat.</p>\r\n\r\n<p>Mantap ternyata integritas tetap terjaga, anjuran dari Bapak Kepala Sekolah (Dr. Saryono, M.Si) dilaksanakan dengan penuh amanah terpantau beberapa guru dan karyawan SMAN 78 melaksanakan Upacara hari lahir pancasila di SMAN 6 Jogjakarta, SMAN 1 Gombong-jateng SMAN 2 PLG, SMAN 1 Leuwiliang Bogor, SMAN 1 Simo Boyolali, SMPN 1 Gombong, dan lain sebagainya. Laporan ini didapat dari bukti fisik berupa foto dan surat keterangan melaksanakan upacara yang ditandatangani oleh kepala sekolahnya.</p>\r\n\r\n<p>Mereka disambut dengan senang hati. Salah satu peserta upacara dari SMAN 78 Jakarta ( Ibu Yuliana Guru Kimia) yang upacara di SMAN 1 Simo Boyolali menuturkan &quot; Kami di sambut dengan sangat welcome, senang sekali rasanya&quot;. Di SMAN 78 Jakarta upacara juga berlangsung dengan khidmad, peserta upacara dari unsur pendidik, tenaga kependidikan dan peserta didik.</p>\r\n\r\n<p>Petugas pembina upacara Kepala Sekolah Dr. Saryono, Msi, petugas lainya dari unsur ekskul Paskib, Ekskul PKS dan Paduan Suara dengan menyanykan lagu Garuda pancasila dan Mars SMAN 78 Jakarta. Dalam sambutannya Kepala sekolah mengatakan &quot; Mari bersama-sama kita semua mengimplementasikan Pancasila dalam kehidupan sehari-hari sebagai wujud kecintaan kita pada NKRI dan Pancasila&quot;.</p>\r\n\r\n<p>&quot;Saya Indonesia&quot; peserta upacara menjawab&quot; Saya Pancasila &quot; kalimat penutup pembina upacara hari kelahiran Pancasila dan juga di akhiri dengan tepuk tangan seluruh peseta upacara. Sekian dan terima kasih.</p>\r\n', '2020-02-05 09:24:42', 3, 'Sains', 9, 'a49888c350ee1037ab856b95ac26aa03.jpg', 1, 'Muris Studio', 0, 'upacara-hari-lahir-pancasila-1-juni-di-sman-78-jakarta-berlangsung-khidmad'),
(23, 'PELEPASAN PESERTA DIDIK KELAS XII ANGKATAN KE- 42', '<p>Kegiatan Pelepasan Peserta didik Kelas XII anggkatan KE 42 di laksanakan di Hotel Pullman Jakarta tanggal 13 Mei 2019 dalam suasana Bulan Ramadhan 1440 H.</p>\r\n\r\n<p><br />\r\nMeskipun dilaksanakan pada bulan puasa acara tetap berlangsung kidmad dan lancar. Acara pelepasan ini di hadiri oleh Kepala Suku Dinas Pendidikan Wilayah Jakarta Barat 2 Ibu Urip Asih, M.Pd, Pengawas SMAN 78 Ibu Hj.Nurul Muftahidah,M.Pd, Komite sekolah, Perwakilan Ikatan Alumni Sekolah (IAS), guru purna bhakti, dan orang tua siswa yang sangat berbahagia melihat putra putrinya lulus dari jenjang SMA dengan prestasi yang membanggakan.</p>\r\n\r\n<p>Dalam Sambutannya Kepala SMAN 78 Jakarta Dr. Saryono, M.si Mengatakan bahwa &quot;stakesholder Sekolah harus mampu melayani sepenuh hati untuk mendulang prestasi dan menjaga Prestasi&quot;.</p>\r\n\r\n<p>Tahun ini (Tahun pelajaran 2018/2019) Kita patut bersyukur karena banyak prestasi yang bisa diraih oleh SMAN 78 diantaranya: 87 siswa mendapat nilai 100, rangking 5 besar UN tingkat DKI Jakarta untuk program Ilmu-ilmu Sosial. Acara Pelepasan kelas XII ini Juga dimeriahkan oleh penampilan Ekskul Paduan suara, Tari, Marawis dan solo vokal.</p>\r\n\r\n<p>Ada yang beda dari pelaksanaan pelepasan tahun ini yang biasanya diselenggarakan di lapangan sekolah kali ini dilaksanakan di luar sekolah, tentu kegiatan ini didukung oleh orang tua siswa, komite serta Ikatan Alumni Sekolah.</p>\r\n', '2020-02-05 09:24:42', 5, 'Penelitian', 6, '217410a33b775e40cbdc57e079ce2b4c.jpg', 1, 'Muris Studio', 0, 'pelepasan-peserta-didik-kelas-xii-angkatan-ke--42'),
(24, 'DUA SISWA SMA NEGERI 78 MENGIKUTI JAMBORE KEPANDUAN SEDUNIA KE- 24 DI VIRGINIA, AMERIKA SERIKAT', '<p>Raden Akbar Wira Dharma kelas XI MIPA E dan M. Raihan Adityaputra kelas XI MIPA C adalah dua siswa terbaik SMA Negeri 78 Jakarta mendapat kesempatan mengikuti kegiatan Jambore Kepanduan sedunia ke-24 tahun 2019. 24th World Scout Jamboree 2019 Kegiatan ini diikuti sekitar 50.000 peserta dari 170 negaradan teritori. Kegiatan jambore dunia ini di laksanakan dari tanggal 22 Juli sampai 2 Agustus 2019 bertempat di Summit Bechtel Reserve, West Virginia, Amerika Serikat.</p>\r\n\r\n<p>Kegiatan Kepanduan Jambore dunia ke- 24 ini mengangkat tema &#39;membuka kunci dunia&#39;. Semoga kegiatan ini memberikan pencerahan dalam dunia kepanduan dan masing-masing peserta memiliki kompetensi unggul dalam bidang kepramukaan sehingga punya kontribusi dalam memajukan kegiatan kepramukaan di sekolahnya. Kepal a SMA Negeri 78 Jakarta DR. Saryono, M.Si mengatakan&#39;Selamat untuk siswa dari 78 kalian tunas bangsa hebat bisa mengikuti Jambore dunia, raih pengalamn sebanyak-banyaknya dan bagikan kepada teman-teman yang lain , sehingga kegiatan kepramukaan di SMA Negeri 78 akan lebih baik&#39;.</p>\r\n', '2020-02-05 09:24:42', 6, 'Prestasi', 163, '9e67a59d62319ae27a5d7b87688faaf7.jpg', 1, 'Muris Studio', 0, 'dua-siswa-sma-negeri-78-mengikuti-jambore-kepanduan-sedunia-ke--24-di-virginia,-amerika-serikat'),
(25, 'Membangun Mutu Pendidikan Melalui Kemitraan Sekolah', '<p>Lima hari di Malinau memberikan pengalaman yg menorehkan warna dalam hidupku.<br />\r\nTugas yg diberikan Kemendikbud satu persatu aku tunaikan. Hari pertama kunjungan ke SMAN 1 mendapat sambutan yg hangat penuh persahabatan, didahului upacara bendara dan tarian khas 4 budaya: Tidung,Bugis,Dayak Lundayeh,dan Dayak Kenya. Anak2 yg gagah dan cantik, menyajikan hiburan penuh kegembiraan.</p>\r\n\r\n<p>Hari kedua ke SMAN 3 dan hari ketiga ke SMAN 8 hampir sama tetapi tanpa tarian khas etnis Tidung dan Bugis. Namun tidak mengurangi kesemaraan seremonial pagi itu.</p>\r\n\r\n<p>Segenap warga sekolah tumpah di lapangan merasakan kegembiraan. Supervisi thd 2 guru matematika di dua sekolah yg berbeda memberi informasi bahwa pemerintah tidak boleh merasa lelah untuk terus memberi penguatan tentang konsep pembelajaran abad 21 dg dimensi :4C,Literasi dan Character Building.</p>\r\n\r\n<p>Di hari terakhir supervisi guru matemtika barulah saya mendapakan seorang guru muda, energik,suara lantang, menguasai konsep dan melakukan pendekatan pembelajaran yg mencerdaskan, membangun konsep, dg alat bantu yg kreatif, suasana kelas hidup, dan anak2 bahagia mengikuti pelajaran. Panggilan singkat guru muda tsb Pak Tri (30 ) terlihat menerapkan metode 4C, mengajak anak browsing (literasi), dan mengajak siswa bersyukur atas anugrah yg diberikan Tuhan ( membangun karakter ).</p>\r\n\r\n<p>Pemerintah melalui berbagai program harus terus membangun kompetensi profesional guru. Fokus penguatan tetap metode pada metide pembelajaran abad 21. Kurikulum 2013 dg pendekatan pembelajaran abad 21 diharapkan dpt mencerdaskan anak2 Indonesia.</p>\r\n', '2020-02-05 09:24:42', 1, 'Pendidikan', 22, '67b03f7b75700396f6ca684c052c83a9.jpg', 1, 'Muris Studio', 0, 'membangun-mutu-pendidikan-melalui-kemitraan-sekolah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_video`
--

CREATE TABLE `tbl_video` (
  `id_video` int(11) NOT NULL,
  `id_mapel` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL,
  `kode_video` varchar(100) NOT NULL,
  `judul_video` varchar(150) NOT NULL,
  `deskripsi_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_video`
--

INSERT INTO `tbl_video` (`id_video`, `id_mapel`, `kelas_id`, `kode_video`, `judul_video`, `deskripsi_video`) VALUES
(2, 3, 2, 'EdQE_oeU2yo', 'Materi IPS Kelas 7 Semester Genap Bab III', 'Materi IPS Kelas 7 Semester Genap Bab III'),
(3, 3, 15, 'z2VF7j2RBzM', 'Materi IPS Kelas 8 k13 (Perlawanan Terhadap Kolonialisme dan Imperialisme) Part 1', 'Materi IPS Kelas 8 k13 (Perlawanan Terhadap Kolonialisme dan Imperialisme) Part 1\r\n\r\n'),
(4, 3, 15, 'lIQBbvBZcqk', 'MATERI IPS MANUSIA DAN LINGKUNGAN, KELAS 4 TEMA 9 SUBTEMA 1', 'MATERI IPS MANUSIA DAN LINGKUNGAN, KELAS 4 TEMA 9 SUBTEMA 1\r\n'),
(5, 3, 17, 'DNoj82nGmK8', 'Materi IPS Kelas 4 SD Tema 9 Subtema 2. Pemanfaatan Sumber Daya Alam', 'Materi IPS Kelas 4 SD Tema 9 Subtema 2. Pemanfaatan Sumber Daya Alam'),
(6, 3, 17, 'kdmnP7Me0xg', 'Video Pembelajaran Kelas 8 K13 - IPS - Perubahan Masyarakat Indonesia pada Masa Penjajahan', 'Video Pembelajaran Kelas 8 K13 - IPS - Perubahan Masyarakat Indonesia pada Masa Penjajahan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  ADD PRIMARY KEY (`agenda_id`);

--
-- Indeks untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  ADD PRIMARY KEY (`album_id`),
  ADD KEY `album_pengguna_id` (`album_pengguna_id`);

--
-- Indeks untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`file_id`);

--
-- Indeks untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  ADD PRIMARY KEY (`galeri_id`),
  ADD KEY `galeri_album_id` (`galeri_album_id`),
  ADD KEY `galeri_pengguna_id` (`galeri_pengguna_id`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`guru_id`);

--
-- Indeks untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  ADD PRIMARY KEY (`inbox_id`);

--
-- Indeks untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`kelas_id`);

--
-- Indeks untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`),
  ADD KEY `komentar_tulisan_id` (`komentar_tulisan_id`);

--
-- Indeks untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  ADD PRIMARY KEY (`log_id`),
  ADD KEY `log_pengguna_id` (`log_pengguna_id`);

--
-- Indeks untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- Indeks untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  ADD PRIMARY KEY (`pengumuman_id`);

--
-- Indeks untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  ADD PRIMARY KEY (`pengunjung_id`);

--
-- Indeks untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`siswa_id`);

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`testimoni_id`);

--
-- Indeks untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  ADD PRIMARY KEY (`tulisan_id`),
  ADD KEY `tulisan_kategori_id` (`tulisan_kategori_id`),
  ADD KEY `tulisan_pengguna_id` (`tulisan_pengguna_id`);

--
-- Indeks untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`id_video`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_agenda`
--
ALTER TABLE `tbl_agenda`
  MODIFY `agenda_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_album`
--
ALTER TABLE `tbl_album`
  MODIFY `album_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_galeri`
--
ALTER TABLE `tbl_galeri`
  MODIFY `galeri_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  MODIFY `guru_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_inbox`
--
ALTER TABLE `tbl_inbox`
  MODIFY `inbox_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `kelas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_log_aktivitas`
--
ALTER TABLE `tbl_log_aktivitas`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_mapel`
--
ALTER TABLE `tbl_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengumuman`
--
ALTER TABLE `tbl_pengumuman`
  MODIFY `pengumuman_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tbl_pengunjung`
--
ALTER TABLE `tbl_pengunjung`
  MODIFY `pengunjung_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=944;

--
-- AUTO_INCREMENT untuk tabel `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `siswa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `testimoni_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_tulisan`
--
ALTER TABLE `tbl_tulisan`
  MODIFY `tulisan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `id_video` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
