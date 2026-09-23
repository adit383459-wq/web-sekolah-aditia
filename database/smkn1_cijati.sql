CREATE DATABASE IF NOT EXISTS smkn1_cijati CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE smkn1_cijati;
SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS berita;
DROP TABLE IF EXISTS ekstrakurikuler;
DROP TABLE IF EXISTS guru;
DROP TABLE IF EXISTS jurusans;
DROP TABLE IF EXISTS users;
SET FOREIGN_KEY_CHECKS=1;

CREATE TABLE users (id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL UNIQUE, email_verified_at TIMESTAMP NULL, password VARCHAR(255) NOT NULL, remember_token VARCHAR(100) NULL, created_at TIMESTAMP NULL, updated_at TIMESTAMP NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO users (name,email,email_verified_at,password,remember_token,created_at,updated_at) VALUES ('Administrator SMK Negeri 1 Cijati','admin@smkn1cijati.sch.id',NULL,'$2y$12$Ag1tGTS6kifPIGteeSdbiOSDzuyIcBED9cFBt8eMFXCbe5viQY452',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00');

CREATE TABLE jurusans (id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(150) NOT NULL, kode VARCHAR(20) NOT NULL UNIQUE, deskripsi TEXT NULL, icon VARCHAR(255) NULL, aktif TINYINT(1) NOT NULL DEFAULT 1, created_at TIMESTAMP NULL, updated_at TIMESTAMP NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE guru (id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(150) NOT NULL, nip VARCHAR(255) NULL, jabatan VARCHAR(255) NULL, mapel VARCHAR(255) NULL, foto VARCHAR(255) NULL, created_at TIMESTAMP NULL, updated_at TIMESTAMP NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE ekstrakurikuler (id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, nama VARCHAR(150) NOT NULL, deskripsi TEXT NULL, jadwal VARCHAR(255) NULL, pembina VARCHAR(255) NULL, icon VARCHAR(255) NULL, aktif TINYINT(1) NOT NULL DEFAULT 1, created_at TIMESTAMP NULL, updated_at TIMESTAMP NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE berita (id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY, judul VARCHAR(200) NOT NULL, slug VARCHAR(220) NOT NULL UNIQUE, ringkasan VARCHAR(500) NULL, isi LONGTEXT NULL, gambar VARCHAR(255) NULL, published_at TIMESTAMP NULL, created_at TIMESTAMP NULL, updated_at TIMESTAMP NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO jurusans (nama,kode,deskripsi,icon,aktif,created_at,updated_at) VALUES
('Pengembangan Perangkat Lunak dan Gim','PPLG','Mempelajari pemrograman, pengembangan aplikasi, website, basis data, dan gim.','💻',1,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('Agribisnis Tanaman Pangan dan Hortikultura','APHP','Mempelajari budidaya tanaman pangan, hortikultura, pengelolaan hasil, dan kewirausahaan pertanian.','🌱',1,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('Teknik Kendaraan Ringan Otomotif','TKRO','Mempelajari teknologi kendaraan ringan, perawatan, perbaikan, dan sistem otomotif modern.','🚗',1,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('Bisnis Daring dan Pemasaran','BDP','Mempelajari pemasaran, bisnis digital, e-commerce, pelayanan pelanggan, dan kewirausahaan.','📈',1,'2026-09-10 00:00:00','2026-09-10 00:00:00');

INSERT INTO guru (nama,nip,jabatan,mapel,foto,created_at,updated_at) VALUES
('SARIPUL BASAR','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('AHMAD SUHENDRA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('ELI MARYAMAH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('BUDIANA HERMAWAN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('SAKTI ALMASYAH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('D. JAMALUDIN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('RINA SUSANA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('EDEH KURNIAHSIH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('AYI SURYATI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('FERISKA ROSYANTI SPD','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('NANANG SURYANA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('ROMI DARMAYADI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('ASEP PURNAMA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('DIDI MEI SOMANTRI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('H. HAJANG RIDWAN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('INDRA MURGIANTO','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('INDRA PRIATNA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('INDRA MURGIANTO','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('SETIAWAN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('NURDIANSHAH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('MEGA NURUNNISA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('NOPI LYANTI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('MIA RUSMIATI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('SILVI DANU RESPITA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('DEDI SUKARDI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('NURAENI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('TATANG RUNSTANDI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('SITI RAHMAWATI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('AI NURHASANAH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('DINI ANDRIANI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('ISNAN WIRANURSYEAH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('LESTARI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('EMI RESMIYATI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('BANI FUDOLY','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('NURAH ALWAINI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('NURDIANSHAH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('RAMDAN BASTAMAN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('ASEP MUHLIS SULAEMAN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('YAYUP HINDRIYANI','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('WAHYUDIN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('WAHYUDIN','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('SANTI MUSTIKA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('KAMALIA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('ANDRI MUHOIR','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('ENDE ISKANDAR','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('RAHMAT WIDODO','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('MULDIANSYAH','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('SIMA KRISTINA','','Guru / Pegawai','',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00');

INSERT INTO ekstrakurikuler (nama,deskripsi,jadwal,pembina,icon,aktif,created_at,updated_at) VALUES
('Volleyball','Kegiatan olahraga untuk membangun kebugaran, kerja sama, dan sportivitas.','Sabtu','Pembina Olahraga','🏐',1,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('Pramuka','Melatih kepemimpinan, kedisiplinan, kemandirian, dan kepedulian.','Jumat','Pembina Pramuka','🏕️',1,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('Futsal','Kegiatan olahraga tim yang mengembangkan teknik, strategi, dan sportivitas.','Sabtu','Pembina Olahraga','⚽',1,'2026-09-10 00:00:00','2026-09-10 00:00:00'),
('Seni & Kreativitas','Wadah pengembangan bakat seni, kreativitas, dan ekspresi siswa.','Rabu','Pembina Seni','🎨',1,'2026-09-10 00:00:00','2026-09-10 00:00:00');

INSERT INTO berita (judul,slug,ringkasan,isi,gambar,published_at,created_at,updated_at) VALUES
('Selamat Datang di Website SMK Negeri 1 Cijati','selamat-datang-di-website-smk-negeri-1-cijati','Portal informasi sekolah untuk mengenal program, kegiatan, prestasi, dan berita terbaru.','Website SMK Negeri 1 Cijati menjadi pusat informasi digital yang menampilkan profil sekolah, jurusan, guru, ekstrakurikuler, dan berita sekolah.',NULL,'2026-09-10 00:00:00','2026-09-10 00:00:00','2026-09-10 00:00:00'),
('Empat Jurusan Unggulan SMK Negeri 1 Cijati','empat-jurusan-unggulan','Kenali empat program keahlian yang tersedia di SMK Negeri 1 Cijati.','SMK Negeri 1 Cijati memiliki PPLG, TKRO, APHP, dan BDP sebagai pilihan program keahlian untuk mengembangkan kompetensi siswa.',NULL,'2026-09-09 00:00:00','2026-09-10 00:00:00','2026-09-10 00:00:00'),
('SMK Negeri 1 Cijati Official di Media Sosial','smk-negeri-1-cijati-official-di-media-sosial','SMK Negeri 1 Cijati hadir di media sosial sebagai sarana informasi kegiatan, program keahlian, dan kabar terbaru sekolah.','SMK Negeri 1 Cijati terus memperkuat informasi digital melalui kanal resmi sekolah. Masyarakat dan siswa dapat mengikuti informasi terbaru mengenai kegiatan sekolah, program keahlian PPLG, APHP, TKRO, dan BDP, serta berbagai aktivitas siswa melalui media sosial resmi sekolah.','images/berita-smkn1-cijati-official.png','2026-09-10 00:00:00','2026-09-10 00:00:00','2026-09-10 00:00:00');
