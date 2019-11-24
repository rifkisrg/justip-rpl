-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2019 pada 08.15
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl_project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `tahun_terbit` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_event`, `judul`, `deskripsi`, `kategori`, `penulis`, `tahun_terbit`, `harga`, `gambar`) VALUES
(1, 0, 'Meteor', 'deskripsi', 'War', 'Tere', '2000', 'Rp. 20.000', '/assets/uploads/buku1.jpg'),
(3, 0, 'Bulan', 'hahaha', 'hahah', 'hahaha', '1999', '19999', 'assets/uploads/buku2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comment`
--

CREATE TABLE `comment` (
  `id_komen` int(11) NOT NULL,
  `teks_komen` longtext NOT NULL,
  `rating` int(3) NOT NULL,
  `nama_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama`, `tanggal`, `deskripsi`, `lokasi`, `image`) VALUES
(1, 'Big Bad Wolf Medan', '16 - 20 September 2019', 'Bazar buku Big Bad Wolf (BBW) hadir lagi di Surabaya! Dalam rangkaian ultah Jawa Timur, BBW mengunjungi masyarakat kota pahlawan pada 4-14 Oktober 2019. Tahun ini, Bazar Buku Big Bad Wolf telah sukses diselenggarakan di Jakarta, Bandung, Yogyakarta, dan Medan. Surabaya merupakan kota kelima di Indonesia yang Big Bad Wolf kunjungi pada tahun ini.\r\n\"Untuk terus meningkatkan literasi di Jawa Timur, bazar buku Big Bad Wolf terus bergerak untuk mengajak masyarakat agar lebih gemar membaca buku. Kemampuan mengidentifikasi, menyeleksi dan mengolah informasi dengan kritis sangat diperlukan agar kita tidak mudah terprovokasi dan terpengaruh,\" ujar Uli Silalahi, selaku Presiden Direktur PT Jaya Ritel Indonesia.\r\nBazar Buku ini akan diselenggarakan di JX International Convention Exhibition selama 24 jam nonstop dan gratis biaya masuk gedung.\r\nDalam bidang literasi, Indonesia masih terus berjuang untuk meningkatkan minat baca masyarakat yang terbilang cukup rendah, namun memiliki potensi peningkatan yang besar jika diberikan fasilitas yang memadai.\r\nBerdasarkan hasil survei Dinas Perpustakaan dan Arsip Provinsi Jawa Timur dengan Universitas Brawijaya dan Unair, minat baca pada tahun 2010 adalah hanya sebesar 42%, peningkatan terjadi ditahun 2016 meningkat sebesar ke 69.75%, seiring dengan diadakannya Bazar Buku Big Bad Wolf di tahun 2016, persentase terus meningkat di tahun 2017, yakni sebesar 72%. Peningkatan ini merupakan prestasi besar bagi masyarakat Jawa Timur.\r\nBazar Buku Big Bad Wolf Surabaya 2019 akan menyediakan pilihan buku yang beragam. Diskon besar-besaran yakni 60 hingga 80 persen untuk semua buku internasional juga bertujuan untuk menumbuhkan minat baca.\r\nBazar buku ini hadir dengan misi untuk menggalakkan budaya membaca sejak dini, meningkatkan minat baca, serta menyediakan akses untuk memperoleh buku bacaan yang berkualitas dengan harga terjangkau bagi semua kalangan masyarakat di Indonesia.\r\nDengan Bazar Buku Big Bad Wolf, diharapkan dapat menjadi salah satu wadah untuk menyebarluaskan wawasan ilmu pengetahuan dan mengajak masyarakat untuk lebih mencintai buku.\r\nBuku-buku yang dibawa Big Bad Wolf Surabaya 2019 tersedia bagi semua usia dan kalangan. Berbagai genre buku dapat ditemukan dalam bazar buku ini, mulai dari seni, budaya, novel, fiksi, romance, sastra, graphic novel, bisnis, arsitektur, memasak, fashion dan masih banyak lagi.\r\nBuku untuk mengasah motorik pada anak seperti activity books, sticker books, sound books, board books, pop-up books, juga dapat dibawa pulang dengan harga yang sangat terjangkau.\r\nBazar Buku Big Bad Wolf selalu berusaha memberikan bacaan yang bermutu dan mengikuti perkembangan zaman.\r\nSejak tahun lalu, Bazar Buku Big Bad Wolf telah memperkenalkan seri Buku Ajaib. Buku ini menggunakan teknologi Augmented Reality (AR) yang merupakan terobosan baru dalam menjadikan cerita dan pembelajaran lebih interaktif serta mengembangkan imajinasi anak-anak.\r\nMelalui Buku Ajaib, anak-anak dapat merasakan pengalaman unik menyaksikan karakter favorit mereka menjadi hidup. Dengan bantuan aplikasi gratis, anak-anak diajak untuk membaca, belajar, bermain dan berinteraksi dengan karakter kesayangan, seperti mewarnai halaman, menemukan objek tersembunyi, menikmati berbagai kreasi animasi, musik dan masih banyak lagi. Tahun ini Terdapat 17 judul Buku Ajaib termasuk dua kejutan judul baru: “ABC Fun with Mickey” dan “123 Counting Fun with Mickey”, yang hanya bisa didapatkan secara eksklusif di Bazar Buku Big Bad Wolf Surabaya 2019.\r\nHadir dalam Press Conference Big Bad Wolf Surabaya adalah Vice President Surabaya Consumer Card Functional Branch Bank Central Asia (BCA) Tommy Kurniawan Purnomo. Lebih lanjut, Tommy mengatakan BCA berkomitmen untuk mendukung kemajuan pendidikan di Indonesia melalui berbagai program dan kegiatan, salah satunya melalui dukungan ke bazar buku terbesar di dunia Bazar Buku Big Bad Wolf. Pasalnya, di era revolusi industri 4.0, generasi muda harus membekali diri dengan ilmu pengetahuan yang bisa didapat dari membaca buku-buku berkualitas.\r\n“Bazar Buku Big Bad Wolf Surabaya akan menghadirkan jutaan buku bacaan terbaik yang sayang untuk dilewatkan. Selama 24 jam nonstop, masyarakat Surabaya dapat mencari buku bacaan favorit dengan harga murah serta promo istimewa,” kata Tommy.\r\nDalam kesempatan tersebut, beragam promo istimewa yang ditawarkan antara lain voucher cashback hingga Rp500.000 dengan Kartu Kredit BCA; Debit BCA dengan Chip, Diskon 50% pembelian voucher Bazar Buku Big Bad Wolf dengan Reward BCA, program Beli 7 Gratis 1 Buku Ajaib Augmented Reality yang dibeli dengan Kartu Kredit BCA/ Debit BCA/Flazz/ Sakuku, tambahan diskon 20% untuk judul buku pilihan, serta Cicilan BCA 0% hingga 6 bulan.', 'Lapangan Merdeka, Medan', 'assets/img/events/medan_kv.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `events_book`
--

CREATE TABLE `events_book` (
  `id_event` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `events_book`
--

INSERT INTO `events_book` (`id_event`, `id_buku`) VALUES
(1, 3),
(1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `justipers`
--

CREATE TABLE `justipers` (
  `id` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `trans_from` varchar(255) NOT NULL,
  `trans_to` varchar(255) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_event`, `trans_from`, `trans_to`, `id_buku`, `jumlah`, `status`, `rating`) VALUES
(2, 1, 'Laila Mustofia', 'rfksrg', 3, 2, 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_member` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_member`, `username`, `password`, `name`, `instagram`, `email`, `image`, `role_id`, `is_active`) VALUES
(4, 'rifkisrg', '$2y$10$ehrylkK7GEtkUGezC9pYfOqssbfQe6btVQdg9Iy61Og8JQE2GHjYu', 'Rifki Siregar', '', 'rfk@mail.com', 'upload/product/default.jpg', 2, 1),
(5, 'lailaf', '$2y$10$stNWa0bIb9CViPFEtGKihOVxS3rBA3O.wXdGdKaxxiHM7ugGr8I/O', 'Laila Mustofia', 'lailaf', 'laila@mail.com', 'upload/product/default.jpg', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wishlist`
--

CREATE TABLE `wishlist` (
  `id_buku` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wishlist`
--

INSERT INTO `wishlist` (`id_buku`, `id_user`) VALUES
(1, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_komen`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `events_book`
--
ALTER TABLE `events_book`
  ADD KEY `id_buku` (`id_buku`),
  ADD KEY `id_event` (`id_event`);

--
-- Indeks untuk tabel `justipers`
--
ALTER TABLE `justipers`
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `justipers_ibfk_1` (`id_event`),
  ADD KEY `justipers_ibfk_2` (`id_user`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `transaksi_ibfk_3` (`trans_from`),
  ADD KEY `transaksi_ibfk_4` (`trans_to`),
  ADD KEY `transaksi_ibfk_1` (`id_buku`),
  ADD KEY `transaksi_ibfk_2` (`id_event`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_member`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD KEY `wishlist_ibfk_1` (`id_buku`),
  ADD KEY `wishlist_ibfk_2` (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `comment`
--
ALTER TABLE `comment`
  MODIFY `id_komen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `justipers`
--
ALTER TABLE `justipers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `events_book`
--
ALTER TABLE `events_book`
  ADD CONSTRAINT `events_book_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`),
  ADD CONSTRAINT `events_book_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`);

--
-- Ketidakleluasaan untuk tabel `justipers`
--
ALTER TABLE `justipers`
  ADD CONSTRAINT `justipers_ibfk_1` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `justipers_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`id_event`) REFERENCES `event` (`id_event`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_member`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
