/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - p03_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`p03_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `p03_db`;

/*Table structure for table `artifacts` */

DROP TABLE IF EXISTS `artifacts`;

CREATE TABLE `artifacts` (
  `administration_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `major` varchar(30) DEFAULT NULL,
  `filename` varchar(225) DEFAULT NULL,
  `title` varchar(225) NOT NULL,
  `status` varchar(30) DEFAULT NULL,
  `views` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`administration_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

/*Data for the table `artifacts` */

insert  into `artifacts`(`administration_id`,`team_id`,`date`,`major`,`filename`,`title`,`status`,`views`) values 
(1,'201801','2020-11-25 00:00:00','Sistem Informasi','Perancangan Sistem Informasi Pemasaran  Berbasis Website E-Commerce.pdf','Perancangan Sistem Informasi Pemasaran  Berbasis Website E-Commerce','Final','Public'),
(2,'201801','2020-11-26 00:00:00','Sistem Informasi','Perancangan Sistem Informasi Berbasis Website Di Sekolah Vokasi UMS.pdf','Perancangan Sistem Informasi Berbasis Website Di Sekolah Vokasi UMS','Final','Public'),
(3,'201801','2020-11-26 00:00:00','Sistem Informasi','Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya.pdf','Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya','Final','Public'),
(4,'201802','2020-11-28 00:00:00','Sistem Informasi','Sistem Informasi Penjuaalan Berbasis Web Pada CV Pinasthika Khatulistiwa Kubu Raya.pdf','Sistem Informasi Penjuaalan Berbasis Web Pada CV Pinasthika Khatulistiwa Kubu Raya','Final','Public'),
(5,'201802','2020-12-19 21:28:31','Sistem Informasi','15-01-generating-test-cases.pdf','Modul Kelompok 2','Final','Public'),
(6,'201801','2020-12-19 21:28:31','Sistem Informasi','15-01-generating-test-cases.pdf','Modul Kelompok 1','Final','Public'),
(7,'201801','2020-11-26 00:00:00','Sistem Informasi','Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya.pdf','Revisi I Dokumen Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya','Revisi','Private'),
(8,'201801','2020-11-26 00:00:00','Sistem Informasi','Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya.pdf','Revisi II Dokumen Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya','Revisi','Private'),
(9,'201802','2020-11-28 00:00:00','Sistem Informasi','Sistem Informasi Penjuaalan Berbasis Web Pada CV Pinasthika Khatulistiwa Kubu Raya.pdf','Revisi I Dokumen Sistem Informasi Penjuaalan Berbasis Web Pada CV Pinasthika Khatulistiwa Kubu Raya','Revisi','Private'),
(10,'201802','2020-11-28 00:00:00','Sistem Informasi','Sistem Informasi Penjuaalan Berbasis Web Pada CV Pinasthika Khatulistiwa Kubu Raya.pdf','Revisi II Dokumen Sistem Informasi Penjuaalan Berbasis Web Pada CV Pinasthika Khatulistiwa Kubu Raya','Revisi','Private');

/*Table structure for table `comments` */

DROP TABLE IF EXISTS `comments`;

CREATE TABLE `comments` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `nomor_induk` varchar (30) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `comment` varchar(2500) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `comments` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id_event` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

/*Data for the table `events` */

insert  into `events`(`id_event`,`team_id`,`event`,`date`,`description`) values 
(1,'201801','Pra-Seminar','2020-12-22','Dilaksanakan secara daring via zoom pukul 13:00'),
(2,'201802','Pra-Seminar','2020-12-23','Dilaksanakan secara daring via zoom pukul 13:00'),
(3,'201803','Pra-Seminar','2020-12-24','Dilaksanakan secara daring via zoom pukul 13:00'),
(4,'201801','Seminar','2020-12-29','Dilaksanakan secara daring via zoom pukul 13:00'),
(5,'201802','Seminar','2020-12-30','Dilaksanakan secara daring via zoom pukul 13:00'),
(6,'201803','Seminar','2020-12-31','Dilaksanakan secara daring via zoom pukul 13:00'),
(7,'201801','Pra-Sidang','2021-01-04','Dilaksanakan secara daring via zoom pukul 13:00'),
(8,'201801','Sidang','2021-01-07','Dilaksanakan secara daring via zoom pukul 13:00');

/*Table structure for table `examiners` */

DROP TABLE IF EXISTS `examiners`;

CREATE TABLE `examiners` (
  `nip` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `position` varchar(225) NOT NULL,
  `major` varchar(225) NOT NULL,
  `faculty` varchar(225) NOT NULL,
  `team` int(3) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `examiners` */

insert  into `examiners`(`nip`,`name`,`fullname`,`position`,`major`,`faculty`,`team`,`status`) values 
('0105038304','Adelina Manurung','Adelina Manurung, S.Si, M.Sc.','Lecturer','Teknik Bioproses','Fakultas Bioproses',1,'Aktif'),
('0110029201','Samuel Situmeang','Samuel Indra Gunawan Situmeang, S.T.I., M.Sc.','Instructor','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',2,'Aktif'),
('0117069202','Junita Amalia','Junita Amalia, S.Pd., M.Si','Associate Lecturer','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',3,'Aktif'),
('0128058805','Mario Simaremare','Mario E. S. Simaremare, S.Kom, M.Sc.','Instructor','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',4,'Aktif'),
('0130058501','Parmonangan Togatorop','Parmonangan Rotua Togatorop, S.Kom., M.T.I.','Associate Lecturer','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',5,'Aktif');

/*Table structure for table `forums` */

DROP TABLE IF EXISTS `forums`;

CREATE TABLE `forums` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `comment` varchar(3000) DEFAULT NULL,
  `date_created` date NOT NULL,
  `creator` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `forums` */

/*Table structure for table `loginhistory` */

DROP TABLE IF EXISTS `loginhistory`;

CREATE TABLE `loginhistory` (
  `activity_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `activity` varchar(225) DEFAULT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  PRIMARY KEY (`activity_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `loginhistory` */

insert  into `loginhistory`(`activity_id`,`user_id`,`name`,`activity`,`role`,`time`,`date`) values 
(1,'12S18043','Roy','Login',1,'13:00:00','2020-10-01'),
(2,'12S18058','Agnes','Submit artefak',1,'12:33:00','2020-10-15'),
(3,'12S18062','Ester','Submit artefak',1,'14:55:00','2020-10-31'),
(4,'12S18008','Indah','Submit artefak',1,'09:33:00','2020-10-21'),
(5,'12S18037','Andika','Login',1,'15:15:00','2020-10-20'),
(6,'Adelina','Adelina','Login',0,'08:10:00','2020-10-12'),
(7,'Samuel','Samuel','Login',0,'08:12:00','2020-10-31'),
(8,'Junita','Junita','Login',0,'09:01:00','2020-10-31'),
(9,'Humasak','Humasak','Login',0,'06:11:00','2020-10-31'),
(10,'Mario','Mario','Login',0,'07:34:00','2020-10-31');

/*Table structure for table `messages` */

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `textID` int(10) NOT NULL AUTO_INCREMENT,
  `text` varchar(1000) DEFAULT NULL,
  `user_id` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`textID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `messages` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `reviews` */

DROP TABLE IF EXISTS `reviews`;

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` varchar(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `text_review` varchar(250) NOT NULL,
  `prof_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

/*Data for the table `reviews` */

insert  into `reviews`(`review_id`,`team_id`,`title`,`text_review`,`prof_name`) values 
(1,'201801','Revisi I Dokumen Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya','Tugas Akhir ini masih belum sesuai antara isi dan judul. Silahkan memperbaiki isi dokumen segera. Semangat.','Samuel Situmeang'),
(2,'201802','Perancangan Sistem Informasi Manajemen Distribusi PT. Solopos Raya.pdf','Tugas Akhir ini masih belum sesuai antara isi dan judul. Silahkan memperbaiki isi dokumen segera. Semangat.','Junita Amalia');

/*Table structure for table `scores` */

DROP TABLE IF EXISTS `scores`;

CREATE TABLE `scores` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nip_examiner` varchar(20) NOT NULL,
  `event` varchar(50) NOT NULL,
  `team_id` varchar(10) NOT NULL,
  `grade` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

/*Data for the table `scores` */

insert  into `scores`(`id`,`nip_examiner`,`event`,`team_id`,`grade`) values 
(31,'0128058805','Pra-Seminar','201801',90),
(32,'0128058805','Seminar','201801',85),
(33,'0128058805','Pra-Sidang','201801',90),
(34,'0128058805','Sidang','201801',95),
(35,'0130058501','Pra-Seminar','201802',90),
(36,'0130058501','Seminar','201802',85),
(37,'0130058501','Pra-Sidang','201802',90),
(38,'0130058501','Sidang','201802',95),
(39,'0117069202','Pra-Seminar','201803',90),
(40,'0117069202','Seminar','201803',90),
(41,'0117069202','Pra-Sidang','201803',80),
(42,'0117069202','Sidang','201803',90);

/*Table structure for table `students` */

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `user_name` varchar(225) DEFAULT NULL,
  `teamid` int(11) DEFAULT NULL,
  `nim` varchar(8) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fullname` varchar(225) DEFAULT NULL,
  `faculty` varchar(50) NOT NULL,
  `major` varchar(50) NOT NULL,
  `batch` int(11) DEFAULT NULL,
  `class` varchar(5) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `students` */

insert  into `students`(`user_name`,`teamid`,`nim`,`name`,`fullname`,`faculty`,`major`,`batch`,`class`,`address`,`email`,`img`) values 
('iss18008',201802,'12S18008','Indah Manik','Indah Anastasya Manik','Fakultas Informatika dan Teknik Elektro','Sistem Informasi',2018,'13SI1','Laguboti, Toba','iss18008@students.del.ac.id','pict/Indah.jpg'),
('iss18037',201801,'12S18037','Andika Fransius','Andika Meidy Fransius Tarigan','Fakultas Informatika dan Teknik Elektro','Sistem Informasi',2018,'13SI2','Medan Selayang, Kota Medan','iss18037@students.del.ac.id','pict/Andika.jpeg'),
('iss18043',201802,'12S18043','Roy Gunawan','Roy Gunawan Napitupulu','Fakultas Informatika dan Teknik Elektro','Sistem Informasi',2018,'13SI2','Laguboti, Toba','iss18043@students.del.ac.id','pict/Roy.jpeg'),
('iss18058',201802,'12S18058','Agnes Hinsa','Agnes Hinsa Parina Sinaga','Fakultas Informatika dan Teknik Elektro','Sistem Informasi',2018,'13SI2','Medan Tuntungan, Kota Medan','iss18058@students.del.ac.id','pict/Agnes.jpg'),
('iss18062',201801,'12S18062','Ester Putri','Ester Putri Dearest Sidabutar','Fakultas Informatika dan Teknik Elektro','Sistem Informasi',2018,'13SI2','Siantar Timur, Pematang Siantar','iss18062@students.del.ac.id','pict/Ester.jpg');

/*Table structure for table `supervisors` */

DROP TABLE IF EXISTS `supervisors`;

CREATE TABLE `supervisors` (
  `nip` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `position` varchar(225) NOT NULL,
  `major` varchar(225) NOT NULL,
  `faculty` varchar(225) NOT NULL,
  `team` int(3) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `supervisors` */

insert  into `supervisors`(`nip`,`name`,`fullname`,`position`,`major`,`faculty`,`team`,`status`) values 
('0105038304','Adelina Manurung','Adelina Manurung, S.Si, M.Sc.','Lecturer','Teknik Bioproses','Fakultas Bioproses',1,'Aktif'),
('0110029201','Samuel Situmeang','Samuel Indra Gunawan Situmeang, S.T.I., M.Sc.','Instructor','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',2,'Aktif'),
('0117069202','Junita Amalia','Junita Amalia, S.Pd, M.Si','Associate Lecturer','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',3,'Aktif'),
('0126048301','Humasak Simanjuntak','Humasak Tommy Argo Simanjuntak, ST, M.ISD','Lecturer','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',4,'Aktif'),
('0128058805','Mario Simaremare','Mario E. S. Simaremare, S.Kom., M.Sc.','Instructor','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',5,'Aktif'),
('0130058501','Parmonangan Togatorop','Parmonangan Rotua Togatorop, S.Kom., M.T.I.','Associate Lecturer','Sistem Informasi','Fakultas Informatika dan Teknik Elektro',6,'Aktif');

/*Table structure for table `tasks` */

DROP TABLE IF EXISTS `tasks`;

CREATE TABLE `tasks` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(10) NOT NULL,
  `name_task` varchar(100) NOT NULL,
  `submission_status` varchar(20) NOT NULL,
  `due_date` date NOT NULL,
  `time_task` time NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `tasks` */

insert  into `tasks`(`task_id`,`team_id`,`name_task`,`submission_status`,`due_date`,`time_task`) values 
(1,201801,'Laporan Revisi Week 1','No Attempt','2020-12-09','00:00:00'),
(2,201801,'Update Bab III Tugas Akhir Robotic','No Attempt','2020-12-16','21:01:00'),
(3,201801,'Revisi II Tugas Akhir IoT Board','No Attempt','2020-12-19','22:02:00'),
(4,201801,'Submit Artefak Tugas Akhir Image Processing','No Attempt','2020-12-20','21:03:00'),
(5,201802,'Laporan Revisi Week 1','No Attempt','2020-12-09','00:00:00'),
(6,201802,'Update Bab III Tugas Akhir Robotic','No Attempt','2020-12-16','21:01:00'),
(7,201802,'Revisi II Tugas Akhir IoT Board','No Attempt','2020-12-19','22:02:00'),
(8,201802,'Submit Artefak Tugas Akhir Image Processing','No Attempt','2020-12-20','21:03:00');

/*Table structure for table `teams` */

DROP TABLE IF EXISTS `teams`;

CREATE TABLE `teams` (
  `registration_id` int(11) NOT NULL AUTO_INCREMENT,
  `team_id` int(11) NOT NULL,
  `team` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nim` varchar(8) NOT NULL,
  `title` varchar(200) NOT NULL,
  PRIMARY KEY (`registration_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

/*Data for the table `teams` */

insert  into `teams`(`registration_id`,`team_id`,`team`,`name`,`nim`,`title`) values 
(1,201801,1,'Andika Fransius','12S18037','Pemrograman dan Pengujian Aplikasi Web'),
(2,201801,1,'Ester Putri','12S18062','Pemrograman dan Pengujian Aplikasi Web'),
(3,201801,1,'Bejo Sujamet','12S18088','Pemrograman dan Pengujian Aplikasi Web'),
(4,201802,2,'Agnes Hinsa','12S18058','Manajemen Proyek Sistem Informasi'),
(5,201802,2,'Roy Gunawan','12S18043','Manajemen Proyek Sistem Informasi'),
(6,201802,2,'Indah Manik','12S18008','Manajemen Proyek Sistem Informasi'),
(7,201803,3,'Tralala Trilili','12S18070','Sistem Operasi'),
(8,201803,3,'Ulala Ulili','12S18073','Sistem Operasi');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` varchar(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  `role` tinyint(1) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`user_id`,`username`,`password`,`name`,`role`) values 
('12S18043','iss18043','sublime18','Roy Gunawan',1),
('12S18058','iss18058','findingnemo','Agnes Hinsa',1),
('12S18062','iss18062','kakester','Ester Putri',1),
('12S18008','iss18008','indahmanik','Indah Manik',1),
('12S18037','iss18037','andika','Andika Fransius',1),
('0105038304','Adelina','dosen1','Adelina Manurung',0),
('0110029201','Samuel','dosen2','Samuel Situmeang',0),
('0126048301','Humasak','dosen3','Humasak Simanjuntak',0),
('0117069202','Junita','dosen4','Junita Amalia',0),
('0128058805','Mario','dosen5','Mario Simaremare',0),
('0000000000','Admin','admin','Administrator',2),
('1111111111','Admin2','admin','Administrator 2',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
