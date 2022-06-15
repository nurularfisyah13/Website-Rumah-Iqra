Studi Kasus : Website Rumah Iqra

Pengguna : 1. USER
           2. SUPER ADMIN
           3. ADMIN

-- Database: `db_iqra`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` INT(11) NOT NULL,
  `nama` VARCHAR(30) NOT NULL,
  `username` VARCHAR(30) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `level` enum('Super Admin','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Admin', 'admin', 'admin', 'Admin'),
(2, 'Nurul Arfisyah Daulay', 'nurul', 'nurul123', 'Admin'),
(3, 'Nurul Arfisyah Daulay', 'nurularfisyah', 'nurul123', 'Super Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengaturan`
--

CREATE TABLE `pengaturan` (
  `id` INT(11) NOT NULL,
  `nama` VARCHAR(30) NOT NULL,
  `email` VARCHAR(50) NOT NULL,
  `telepon` VARCHAR(50) NOT NULL,
  `alamat` TEXT,
  `logo` VARCHAR(50) NOT NULL,
  `favicon` VARCHAR(50) NOT NULL,
  `tentang` TEXT,
  `foto_iqra` VARCHAR(50) NOT NULL,
  `lokasi` TEXT
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengaturan`
--

INSERT INTO `pengaturan` (`id`, `nama`, `email`, `telepon`, `alamat`, `logo`, `favicon`, `tentang`, `foto_iqra`, `lokasi`) VALUES
(1, 'Rumah Iqra', 'rumahiqra@gmail.com', '0812-4598-2399', 'jl.', 'logo.png', 'favicon.png', '0812-4598-2399', 'foto-1.jpg', 'Lokasi 1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
--

CREATE TABLE `informasi` (
  `id` INT(11) NOT NULL,
  `judul` VARCHAR(30) NOT NULL,
  `keterangan` VARCHAR(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `informasi`
--
'
INSERT INTO `informasi` (`id`, `judul`, `keterangan`) VALUES
(1, 'Mengaji Bersama', 'keterangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` INT(11) NOT NULL,
  `foto` VARCHAR(20) NOT NULL,
  `keterangan` VARCHAR(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `foto`, `keterangan`) VALUES
(1, 'rumahiqra.jpg', 'keterangan');

-- --------------------------------------------------------


-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pengaturan`
--
ALTER TABLE `pengaturan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengajar`
--
ALTER TABLE `pengajar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `murid`
--
ALTER TABLE `murid`
  MODIFY `murid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

