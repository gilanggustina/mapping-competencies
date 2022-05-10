/*
SQLyog Ultimate
MySQL - 10.4.24-MariaDB : Database - db_mapcomp
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_mapcomp` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `db_mapcomp`;

/*Table structure for table `cg` */

DROP TABLE IF EXISTS `cg`;

CREATE TABLE `cg` (
  `id_cg` char(8) NOT NULL,
  `nama_cg` varchar(255) NOT NULL,
  `id_department` char(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_ad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_cg`),
  KEY `id_department` (`id_department`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `cg` */

insert  into `cg`(`id_cg`,`nama_cg`,`id_department`,`created_at`,`updated_ad`) values 
('CG_0001','Macgyver','DP-0004','2022-03-07 10:44:27','2022-03-07 10:44:27'),
('CG_0002','Horenso','DP-0004','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0003','U-Vespa','DP-0004','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0004','Bimasakti','DP-0007','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0005','Sauberpro','DP-0005','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0006','Finish Good','DP-0006','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0007','Avatar','DP-0003','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0008','Planner','DP-0009','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0009','I2C','DP-0002','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0010','Shinning','DP-0003','2022-03-07 10:51:57','2022-03-07 10:51:57'),
('CG_0011','SALT','DP-0008','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0012','Metamorphosis','DP-0004','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0013','Superbin','DP-0004','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0014','Hybrid','DP-0004','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0015','Gemasd','DP-0004','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0016','Ganimeda','DP-0007','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0017','Cemot Warrior','DP-0005','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0018','RM','DP-0006','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0019','Matrix','DP-0009','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0020','Rising Star','DP-0002','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0021','TPM','DP-0002','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0022','Effervescent','DP-0008','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0023','Office PRD','DP-0004','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0024','RM','DP-0006','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0025','PM','DP-0006','2022-03-07 11:32:41','2022-03-07 11:32:41'),
('CG_0026','E-Max','DP-0004','2022-03-07 11:32:41','2022-03-07 11:32:41');

/*Table structure for table `competencies_directory` */

DROP TABLE IF EXISTS `competencies_directory`;

CREATE TABLE `competencies_directory` (
  `id_directory` int(11) NOT NULL AUTO_INCREMENT,
  `id_curriculum` int(11) NOT NULL,
  `id_job_title` char(8) NOT NULL,
  `between_year` enum('0','1','2','3','4','5') NOT NULL,
  `target` tinyint(6) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_directory`)
) ENGINE=InnoDB AUTO_INCREMENT=210 DEFAULT CHARSET=utf8mb4;

/*Data for the table `competencies_directory` */

insert  into `competencies_directory`(`id_directory`,`id_curriculum`,`id_job_title`,`between_year`,`target`) values 
(132,3,'JT-0049','0',0),
(133,3,'JT-0049','1',1),
(134,3,'JT-0049','2',2),
(135,3,'JT-0049','3',3),
(136,3,'JT-0049','4',4),
(137,3,'JT-0049','5',5),
(138,3,'JT-0013','0',0),
(139,3,'JT-0013','1',1),
(140,3,'JT-0013','2',2),
(141,3,'JT-0013','3',3),
(142,3,'JT-0013','4',4),
(143,3,'JT-0013','5',5),
(144,3,'JT-0015','0',0),
(145,3,'JT-0015','1',1),
(146,3,'JT-0015','2',2),
(147,3,'JT-0015','3',3),
(148,3,'JT-0015','4',4),
(149,3,'JT-0015','5',5),
(150,7,'JT-0049','0',0),
(151,7,'JT-0049','1',1),
(152,7,'JT-0049','2',2),
(153,7,'JT-0049','3',3),
(154,7,'JT-0049','4',4),
(155,7,'JT-0049','5',5),
(156,6,'JT-0153','0',0),
(157,6,'JT-0153','1',1),
(158,6,'JT-0153','2',2),
(159,6,'JT-0153','3',3),
(160,6,'JT-0153','4',4),
(161,6,'JT-0153','5',5),
(198,36,'JT-0049','0',0),
(199,36,'JT-0049','1',1),
(200,36,'JT-0049','2',2),
(201,36,'JT-0049','3',3),
(202,36,'JT-0049','4',4),
(203,36,'JT-0049','5',5),
(204,36,'JT-0153','0',0),
(205,36,'JT-0153','1',1),
(206,36,'JT-0153','2',2),
(207,36,'JT-0153','3',3),
(208,36,'JT-0153','4',4),
(209,36,'JT-0153','5',5);

/*Table structure for table `curriculum` */

DROP TABLE IF EXISTS `curriculum`;

CREATE TABLE `curriculum` (
  `id_curriculum` int(11) NOT NULL AUTO_INCREMENT,
  `no_training_module` varchar(150) NOT NULL,
  `id_skill_category` int(11) NOT NULL,
  `training_module` varchar(150) NOT NULL,
  `level` char(5) NOT NULL,
  `training_module_group` varchar(255) NOT NULL,
  `training_module_desc` text NOT NULL,
  `id_job_title` char(8) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_At` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_curriculum`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4;

/*Data for the table `curriculum` */

insert  into `curriculum`(`id_curriculum`,`no_training_module`,`id_skill_category`,`training_module`,`level`,`training_module_group`,`training_module_desc`,`id_job_title`,`created_at`,`updated_At`) values 
(36,'004/SKN/PEL-9283/2022',1,'Example Training Module','B','Training Module Group','Deskripsi','','2022-04-06 16:47:39','2022-04-06 16:47:39'),
(37,'005/IJIAJKS/OPP-2022',2,'Training Module General Skill','B','Training Group','Desc','','2022-04-06 16:53:40','2022-04-06 16:53:40');

/*Table structure for table `curriculum_to_job` */

DROP TABLE IF EXISTS `curriculum_to_job`;

CREATE TABLE `curriculum_to_job` (
  `id_ctb` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_curriculum` int(11) NOT NULL,
  `id_job_title` char(8) NOT NULL,
  PRIMARY KEY (`id_ctb`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `curriculum_to_job` */

insert  into `curriculum_to_job`(`id_ctb`,`id_curriculum`,`id_job_title`) values 
(9,36,'JT-0001'),
(10,36,'JT-0002'),
(11,36,'JT-0003'),
(12,36,'JT-0049'),
(13,36,'JT-0153'),
(14,37,'JT-0006'),
(15,37,'JT-0007'),
(16,37,'JT-0008'),
(17,37,'JT-0009');

/*Table structure for table `department` */

DROP TABLE IF EXISTS `department`;

CREATE TABLE `department` (
  `id_department` char(8) NOT NULL,
  `id_divisi` char(8) NOT NULL,
  `nama_department` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_department`),
  KEY `id_divisi` (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `department` */

insert  into `department`(`id_department`,`id_divisi`,`nama_department`,`created_at`,`updated_at`) values 
('DP-0001','DV-0001','MNF','0000-00-00 00:00:00','2020-10-20 16:21:23'),
('DP-0002','DV-0001','IOS','0000-00-00 00:00:00','2020-10-20 16:21:30'),
('DP-0003','DV-0002','BDA','0000-00-00 00:00:00','2021-01-27 04:23:26'),
('DP-0004','DV-0001','PRD','0000-00-00 00:00:00','2020-10-20 16:21:32'),
('DP-0005','DV-0001','ENG','0000-00-00 00:00:00','2021-06-18 06:09:29'),
('DP-0006','DV-0001','WHS','0000-00-00 00:00:00','2020-10-20 16:21:36'),
('DP-0007','DV-0001','QA','0000-00-00 00:00:00','2020-10-20 16:21:38'),
('DP-0008','DV-0002','HC','0000-00-00 00:00:00','2021-01-27 04:24:33'),
('DP-0009','DV-0001','MDP','0000-00-00 00:00:00','2020-10-20 16:21:41'),
('DP-0010','DV-0003','BOD','0000-00-00 00:00:00','2020-10-20 16:21:48');

/*Table structure for table `divisi` */

DROP TABLE IF EXISTS `divisi`;

CREATE TABLE `divisi` (
  `id_divisi` char(8) NOT NULL,
  `nama_divisi` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_divisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `divisi` */

insert  into `divisi`(`id_divisi`,`nama_divisi`,`created_at`,`updated_at`) values 
('DV_0001','Manufacturing','2022-01-31 09:15:13','2022-01-31 09:15:13'),
('DV_0002','Supporting','2022-01-31 09:15:13','2022-01-31 09:15:13'),
('DV_0003','BOD','2022-01-31 09:15:13','2022-01-31 09:15:13');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `job_title` */

DROP TABLE IF EXISTS `job_title`;

CREATE TABLE `job_title` (
  `id_job_title` char(8) NOT NULL,
  `id_department` char(8) NOT NULL,
  `nama_job_title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_job_title`),
  KEY `id_department` (`id_department`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `job_title` */

insert  into `job_title`(`id_job_title`,`id_department`,`nama_job_title`,`created_at`,`updated_at`) values 
('JT-0001','DP-0005','Advisor Engineering','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0002','DP-0009','Application & Development Support Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0003','DP-0004','Bin Filling Forklift Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0004','DP-0004','Bin Filling Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0005','DP-0004','Bin Washing Forklift Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0006','DP-0004','Bin Washing Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0007','DP-0004','Bin Washing Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0008','DP-0004','Blending Forklift Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0009','DP-0004','Blending Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0010','DP-0005','Building Maintenance','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0011','DP-0004','Can Filling Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0012','DP-0004','Can Packing Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0013','DP-0004','CIP Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0014','DP-0008','Cleaning Service','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0015','DP-0004','Compounding Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0016','DP-0002','Document Controller','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0017','DP-0004','Drier Circle Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0018','DP-0004','Drier Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0019','DP-0004','Drier Continous Cleaner','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0020','DP-0004','Drier Group Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0021','DP-0004','Drier Roving Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0022','DP-0008','Driver','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0023','DP-0004','Dry Sachet Circle Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0024','DP-0004','Dry Sachet Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0025','DP-0004','Dry Sachet Group Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0026','DP-0004','Dry Sachet Packing Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0027','DP-0004','Dumping Forklift Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0028','DP-0004','Dumping Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0029','DP-0004','Dumping Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0030','DP-0004','Eductor Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0031','DP-0004','Eductor Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0032','DP-0005','Electrical Technician','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0033','DP-0005','Engineering Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0034','DP-0005','Engineering Analyst','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0035','DP-0005','Engineering Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0036','DP-0004','Evaporator Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0037','DP-0003','FA & IT Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0038','DP-0004','Fat Blend & Mixing Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0039','DP-0004','Fat Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0040','DP-0004','Filling & Packing Coordinator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0041','DP-0004','Filling & Packing Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0042','DP-0003','Finance & Accounting Junior Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0043','DP-0003','Finance & Accounting Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0044','DP-0003','Finance & Accounting Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0045','DP-0005','Forklift Technician','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0046','DP-0008','General Affair Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0047','DP-0008','General Affair Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0048','DP-0008','Human Capital Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0049','DP-0008','HRD Administration','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0050','DP-0005','HVAC Technician','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0051','DP-0002','Improvement Facilitator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0052','DP-0002','Improvement Junior Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0053','DP-0002','Integrated Operation System Dept. Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0054','DP-0008','IR & GA Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0055','DP-0009','IT Infrastructure & Security Management','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0056','DP-0009','Information Technology Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0057','DP-0008','Komandan','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0058','DP-0005','Maintenance Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0059','DP-0005','Maintenance Planner','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0060','DP-0005','Maintenance System Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0061','DP-0009','Manufacturing Development & Planning Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0062','DP-0001','Manufacturing Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0063','DP-0001','Manufacturing Junior Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0064','DP-0005','Mechanic Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0065','DP-0005','Mechanical Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0066','DP-0005','Mechanical Technician','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0067','DP-0008','Mnf Human Capital Dev Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0068','DP-0005','Operational Maintenance Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0069','DP-0008','Payroll & Personnel Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0070','DP-0008','Payroll & Secretary','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0071','DP-0008','Personel Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0072','DP-0004','Powder Mixer Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0073','DP-0009','PPIC Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0074','DP-0009','PPIC Junior Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0075','DP-0009','PPIC Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0076','DP-0010','President Director','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0077','DP-0005','Preventive Maintenance Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0078','DP-0004','Process & Drier  Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0079','DP-0004','Processing Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0080','DP-0004','Production Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0081','DP-0004','Production Admin 1','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0082','DP-0004','Production Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0083','DP-0004','Production Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0084','DP-0004','Production Store Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0085','DP-0004','Production Store Keeper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0086','DP-0003','Purchasing Administration','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0087','DP-0003','Purchasing Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0088','DP-0003','Purchasing, Legal & Regulator Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0089','DP-0007','QA Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0090','DP-0007','QA Laboratory Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0091','DP-0007','QA Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0092','DP-0007','QC Chemphys Group Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0093','DP-0007','QC In Line Analyst','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0094','DP-0007','QC In Line Field','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0095','DP-0007','QC In Line Group Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0096','DP-0007','QC In Line Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0097','DP-0007','QC Incoming Analyst','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0098','DP-0007','QC Microbiology Analyst','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0099','DP-0007','QC Microbiology Field','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0100','DP-0007','Quality Assurance Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0101','DP-0008','Receptionist','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0102','DP-0008','Recruitment & Learning Development Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0103','DP-0004','Sachet Filling Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0104','DP-0004','Sachet Packing Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0105','DP-0004','Sachet Packing Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0106','DP-0008','Security','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0107','DP-0008','Serikat Pekerja','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0108','DP-0005','Sparepart Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0109','DP-0005','Store Keeper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0110','DP-0002','System Inspector','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0111','DP-0002','System Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0112','DP-0002','System Management Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0113','DP-0001','Technical Advisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0114','DP-0004','Tipping Forklift Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0115','DP-0004','Tipping Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0116','DP-0004','Tote Bin Washing Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0117','DP-0002','TPM Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0118','DP-0002','TPM Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0119','DP-0005','Utility Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0120','DP-0005','Utility Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0121','DP-0006','Warehouse Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0122','DP-0006','Warehouse Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0123','DP-0006','Warehouse FG Assistant','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0124','DP-0006','Warehouse FG Checker','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0125','DP-0006','Warehouse FG Forklift Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0126','DP-0006','Warehouse FG Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0127','DP-0006','Warehouse PM Assistant','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0128','DP-0006','Warehouse PM Checker','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0129','DP-0006','Warehouse PM Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0130','DP-0006','Warehouse RM Major Checker','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0131','DP-0006','Warehouse RM Major Forklift Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0132','DP-0006','Warehouse RM Major Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0133','DP-0006','Warehouse RM Major Preparator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0134','DP-0006','Warehouse RM Major Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0135','DP-0006','Warehouse RM Minor Assistant','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0136','DP-0006','Warehouse RM Minor Helper','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0137','DP-0006','Warehouse RM Minor Preparator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0138','DP-0006','Warehouse RM Minor Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0139','DP-0004','Wet Canning Circle Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0140','DP-0004','Wet Canning Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0141','DP-0004','Wet Canning Group Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0142','DP-0004','Wet Sachet Circle Admin','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0143','DP-0004','Wet Sachet Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0144','DP-0004','Wet Sachet Group Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0145','DP-0005','WWTP Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0146','DP-0005','Admin Utility','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0147','DP-0004','Bin Washing, Fat Blend & Mixing Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0148','DP-0004','Blending & Dumping Circle Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0149','DP-0003','Business Development & Analysis Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0150','DP-0008','Cleaning Service Leader','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0151','DP-0001','Deputy Manufacturing Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0152','DP-0004','Dry Sachet Tipping Operator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0153','DP-0008','HRD Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0154','DP-0009','Manufacturing Development & Planing Administation','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0155','DP-0009','Manufacturing Development & Planing Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0156','DP-0005','Mechanical Analyst','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0157','DP-0005','PM Technician','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0158','DP-0004','Process & Drier Coordinator','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0159','DP-0004','Production Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0160','DP-0007','QA In Line Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0161','DP-0007','QA Junior Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0162','DP-0003','Secretary & Management System','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0163','DP-0002','TPM & Focus Improvement Supervisor','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0164','DP-0005','Utility Analyst','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('JT-0165','DP-0012','Paramedik','2021-06-18 06:07:51','2021-06-18 06:07:51');

/*Table structure for table `level` */

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` char(8) NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `level` */

insert  into `level`(`id_level`,`nama_level`,`created_at`,`updated_at`) values 
('LV-0001','Director','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0002','Division Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0003','Dept Head','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0004','SPV','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0005','Staff','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0006','Coordinator Covid','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0007','Security','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0008','GA','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('LV-0009','Admin','2020-10-03 15:45:07','2020-10-03 15:45:07'),
('LV-0010','Gudang','2020-10-26 10:20:10','2020-10-27 03:39:26'),
('LV-0011','Dokter','2020-11-04 15:29:48','2020-11-04 15:29:48'),
('LV-0012','Super Admin','2020-11-23 14:51:58','2020-11-23 14:52:08');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(3,'2014_10_12_000000_create_users_table',1),
(4,'2019_08_19_000000_create_failed_jobs_table',1);

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id_role` char(2) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `role` */

insert  into `role`(`id_role`,`role`) values 
('1','Admin'),
('2','CG Leader');

/*Table structure for table `skill_category` */

DROP TABLE IF EXISTS `skill_category`;

CREATE TABLE `skill_category` (
  `id_skill_category` int(11) NOT NULL AUTO_INCREMENT,
  `skill_category` varchar(100) NOT NULL,
  PRIMARY KEY (`id_skill_category`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

/*Data for the table `skill_category` */

insert  into `skill_category`(`id_skill_category`,`skill_category`) values 
(1,'Technical Skills'),
(2,'General Skills');

/*Table structure for table `sub_department` */

DROP TABLE IF EXISTS `sub_department`;

CREATE TABLE `sub_department` (
  `id_subdepartment` char(8) NOT NULL,
  `id_department` char(8) NOT NULL,
  `nama_subdepartment` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_ad` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_subdepartment`),
  KEY `id_department` (`id_department`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `sub_department` */

insert  into `sub_department`(`id_subdepartment`,`id_department`,`nama_subdepartment`,`created_at`,`updated_ad`) values 
('SDP-0001','DP-0001','MNF subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0002','DP-0002','IOS subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0003','DP-0002','IOS-SYS subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0004','DP-0002','IOS-IMP subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0008','DP-0004','PRD subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0009','DP-0004','PRD-P&D subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0010','DP-0004','PRD-F&P subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0011','DP-0005','MM subdept','0000-00-00 00:00:00','2021-02-09 03:12:11'),
('SDP-0012','DP-0005','MM-OPM subdept','0000-00-00 00:00:00','2021-02-09 03:12:25'),
('SDP-0013','DP-0005','MM-MTS subdept','0000-00-00 00:00:00','2021-02-09 03:12:37'),
('SDP-0014','DP-0006','WHS subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0015','DP-0006','WHS-RM subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0016','DP-0006','WHS-PM subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0017','DP-0006','WHS-FG subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0018','DP-0007','QA subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0019','DP-0007','QA-QC subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0020','DP-0007','QA-MCO subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0021','DP-0008','HC subdept','0000-00-00 00:00:00','2021-02-22 01:44:49'),
('SDP-0022','DP-0008','HC-GA subdept','0000-00-00 00:00:00','2021-02-22 01:45:01'),
('SDP-0023','DP-0008','HC-HRD subdept','0000-00-00 00:00:00','2021-02-22 01:45:15'),
('SDP-0025','DP-0009','MDP subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0026','DP-0009','MDP-PPIC subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0027','DP-0010','BOD subdept','0000-00-00 00:00:00','0000-00-00 00:00:00'),
('SDP-0028','DP-0012','Klinik subdept','2020-11-05 03:43:49','2020-11-05 03:43:49'),
('SDP-0029','DP-0003','BDA subdept','2021-01-27 04:32:37','2021-01-27 04:32:37'),
('SDP-0030','DP-0003','BDA-PRC','2021-01-27 04:40:45','2021-01-27 04:40:45'),
('SDP-0031','DP-0003','BDA-FA','2021-01-27 04:41:13','2021-01-27 04:41:13'),
('SDP-0032','DP-0009','MDP-IT subdept','2021-01-27 06:33:33','2021-01-27 06:33:33');

/*Table structure for table `taging_reason` */

DROP TABLE IF EXISTS `taging_reason`;

CREATE TABLE `taging_reason` (
  `id_taging_reason` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `id_white_tag` varchar(15) DEFAULT NULL,
  `no_taging` varchar(25) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `period` varchar(20) DEFAULT NULL,
  `date_open` date DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `learning_method` enum('0','1','2','3','4') DEFAULT NULL COMMENT '0:internal 1:external 2:inhouse 3:online 4:readbook',
  `trainer` varchar(50) DEFAULT NULL,
  `date_plan_implementation` date DEFAULT NULL,
  `notes_learning_implementation` text DEFAULT NULL,
  `date_closed` date DEFAULT NULL,
  `start` time DEFAULT NULL,
  `finish` time DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `date_verified` date DEFAULT NULL,
  `id_verified_by` int(255) unsigned DEFAULT NULL,
  `result_score` double DEFAULT NULL,
  `notes_for_result` text DEFAULT NULL,
  PRIMARY KEY (`id_taging_reason`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;

/*Data for the table `taging_reason` */

insert  into `taging_reason`(`id_taging_reason`,`id_white_tag`,`no_taging`,`year`,`period`,`date_open`,`due_date`,`learning_method`,`trainer`,`date_plan_implementation`,`notes_learning_implementation`,`date_closed`,`start`,`finish`,`duration`,`date_verified`,`id_verified_by`,`result_score`,`notes_for_result`) values 
(15,'SWrxk1649384942','00001',2022,'April','2022-04-08','2022-04-08','0','Example','2022-04-09',NULL,'2022-04-10','16:03:00','04:03:00','12 Jam : 0 Menit','2022-04-08',1,5,NULL),
(16,'jWCpk1650251559','00002',2022,'April','2022-04-18','2022-04-19','1','Example Pelatih','2022-04-19','Example Note','2022-04-17','11:23:00','02:22:00','9 Jam : 1 Menit','2022-04-18',1,3,'Example Note Reason');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengguna` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peran_pengguna` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_masuk` date NOT NULL,
  `id_job_title` char(8) CHARACTER SET utf8mb4 NOT NULL,
  `id_divisi` char(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `id_cg` char(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `id_department` char(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `id_sub_department` char(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `id_level` char(8) CHARACTER SET utf8mb4 DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=485 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`nik`,`nama_pengguna`,`peran_pengguna`,`email`,`email_verified_at`,`password`,`tgl_masuk`,`id_job_title`,`id_divisi`,`id_cg`,`id_department`,`id_sub_department`,`id_level`,`status`,`gambar`,`remember_token`,`created_at`,`updated_at`) values 
(1,'K210300063','Rezki Ramadhan','1','rramadhan1818@gmail.com','2022-03-01 16:58:33','$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','2020-03-01','JT-0049','DV_0002','CG_0011','DP-0008','SDP-0023','LV-0009',1,'',NULL,'2022-03-05 16:58:33','2022-03-05 16:58:33'),
(2,'K200900257','Chandra Prawira','1','chandra@gmail.com','2022-03-01 16:58:33','$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','2019-03-11','JT-0049','DV_0002','CG_0011','DP-0008','SDP-0023','LV-0009',1,'',NULL,'2022-03-11 08:46:24','2022-03-11 08:46:24'),
(3,'050700014','DIDIK BUDIARTO',NULL,'didik.budiarto@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0149',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(4,'051000017','I GEDE PUTU EKA PUTRA',NULL,'igedeputu.ekaputra@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0076',NULL,NULL,'DP-0010',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(5,'060500014','YUDHA AGUS TRI BASUKI',NULL,'yud.agus@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0062',NULL,NULL,'DP-0001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(6,'060500015','APOLONIA LAURENSIA LUNAWATI. N',NULL,'laurensia.lunawati2007@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0067',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(7,'060700017','SRI REJEKI',NULL,'jeckie78@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0163',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(8,'060800020','YUNIARTO',NULL,'yuniartorasian72@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0068',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(9,'060800022','YAYAN',NULL,'yayan.jan123@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0109',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(10,'060900024','NURHASAN',NULL,'bungzoe83@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0020',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(11,'060900025','DENY MUHAMAD MULYADI',NULL,'muhamadmulyadi80@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0119',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(12,'061000028','SUHATMAN',NULL,'suhatman7@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0144',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(13,'061100030','AFRIAN CHANDRA IDRIS',NULL,'afrian81@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0066',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(14,'061100031','DARYONO',NULL,'daryono7706@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0003',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(15,'061100032','MUHAMAD EFENDI',NULL,'efendimuhamad7608@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0018',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(16,'061100033','USEP JAYADI',NULL,'jayadiusep3@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0025',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(17,'061100034','TIWIK SUYANTI',NULL,'tiwik.suyanti@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0160',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(18,'061100035','MAMAN SULAEMAN',NULL,'kang.maman24@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0164',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(19,'061200036','ADE SAPRUDIN',NULL,'adesfadil123@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0015',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(20,'061200037','ASEP CAHYAN',NULL,'asepcahyan9@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0114',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(21,'061200038','SAMIDI',NULL,'samidiasemo@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0020',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(22,'061200039','SUNGATNO',NULL,'sungatnohadi76@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0096',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(23,'061200040','ZAINI',NULL,'zaeniaja66@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0040',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(24,'061200041','MUNADIH',NULL,'munadihmumun@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0140',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(25,'061200042','NANDANG SUTISNA',NULL,'nsanandangsutisna@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0020',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(26,'061200043','YUNUS JOHN BILORO',NULL,'yunusjohn50@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0024',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(27,'061200045','KUSNADI RUDI',NULL,'k.rudikri@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(28,'070100001','ADI SETIAHADI',NULL,'this1s4di@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0159',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(29,'070100004','AGUS TURANTO',NULL,'aturanto2007@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0078',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(30,'070100007','EKO WAHYUDI',NULL,'echowahyudi32@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0156',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(31,'070100012','EDI WIBOWO JOKO PRASETYO',NULL,'ofalputra30@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0158',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(32,'070100013','AGUS RIYANTO',NULL,'aroryoto@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0088',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(33,'070100015','RADEN ABBAS FAUZI',NULL,'fauzibbas@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(34,'070100024','YUSUF HAMDANI',NULL,'yusufarfan030284@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0036',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(35,'070200028','JAKARIA (SK)',NULL,'skjakaria027@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0147',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(36,'070200029','RAHMAT NURHIDAYAT',NULL,'rahmatar315@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0013',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(37,'070200030','ARDIAN',NULL,'ardian.kmi.wh@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0133',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(38,'070200031','YULIANTO',NULL,'bombersolokrajan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0138',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(39,'070300033','ASEP HAEDAR',NULL,'haedar0210@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0036',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(40,'070300036','JOJON DARSONO YOGA JAYA',NULL,'jojondarsono11@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(41,'070400065','MARLENY PATANDUNG',NULL,'mpatandung@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0122',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(42,'070400068','DWI ISDARYANTO',NULL,'dwi2.isdaryanto@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0134',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(43,'070500078','NAFIS SURACHMAN',NULL,'nafis_lopon@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0066',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(44,'070600083','HENDI ISKANDAR',NULL,'hendi.iskandar.umb12@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0090',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(45,'080900029','ADE NANDAR',NULL,'adenandar78@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0025',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(46,'080900030','BUGI NOVRIYANTO',NULL,'bubugigi17@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0041',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(47,'080900031','DWI KURNIAWAN',NULL,'dwi_kmi@yahoo.co.id',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0161',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(48,'080900032','FEBI DIANA',NULL,'febidiana3@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0042',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(49,'080900033','LINDA LABORA',NULL,'ndalabora1@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0141',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(50,'081000037','DIAWAN',NULL,'diawan.only86@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0129',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(51,'081000038','AGUS FIRMANSYAH',NULL,'agus_k99@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0100',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(52,'090593002','HALILY SOFYAN AL HASAN',NULL,'halleymalmsteen@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0111',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(53,'100192702','AGUNG HARTANTO',NULL,'agunghartanto83@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(54,'100192704','IKA OKTAFIANTI',NULL,'okta.arisandy01@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0087',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(55,'100192705','SAEPULLAH',NULL,'saepullahsaepullah8@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0013',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(56,'100200007','BURHANUDIN',NULL,'pay.burhan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0068',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(57,'100300009','NAZARUDIN RACHMAN SIDIK',NULL,'fiasco.missing@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0061',NULL,NULL,'DP-0001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(58,'100492706','SEPTIAN EKO PRIATNA',NULL,'septian.gates@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0095',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(59,'100692707','IWAN HERMAWAN',NULL,'iwan.hermawan963@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(60,'100892708','DEDE DODI GINANJAR',NULL,'d2ginanjar@yahoo.co.id',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0083',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(61,'100892709','RAHMAT KURNIAWAN',NULL,'zikrikurniawan08@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0025',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(62,'100892710','SOLEHUDIN',NULL,'solehudinkmi1@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0025',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(63,'100992711','SITI RIZKIANA NURANNISA',NULL,'nurannisarizkiana@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(64,'110191206','AGA WALESSA',NULL,'walessaaga@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0118',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(65,'110191207','MAULANA ABDUL SALIM',NULL,'muhammadkarim354@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0008',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(66,'110191208','UUM UMBARA',NULL,'umbarathea722@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0009',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(67,'110191209','YERI KUSNADI',NULL,'yerikusnadi888@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0079',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(68,'110891211','ADE HUMAENI',NULL,'leaderpacking40@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0144',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(69,'110891212','MARKUS',NULL,'markusmuji8179@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0004',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(70,'110900055','HERMANSYAH',NULL,'h3rm4n21@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0053',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(71,'111200086','SADHU PUTRI SUSANTI',NULL,'sadhuputri0405@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0044',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(72,'120192502','ADRI FIRMANSYAH',NULL,'adrifirmansyah16@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0148',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(73,'120192503','ARDISON',NULL,'ardison0984@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0005',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(74,'120192504','EKO ARIES SANTOSO',NULL,'arieseko98@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0109',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(75,'120192505','JAJANG ABDUL ROHMAN',NULL,'zikrakhalida28@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0031',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(76,'120192506','NURJANAH',NULL,'noerjhen@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0152',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(77,'120192507','SAEPUDIN',NULL,'saepudina631@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0072',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(78,'120192508','TARMAN SUTISNA',NULL,'tarman.sutisna84@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0012',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(79,'120192509','USEP YUSEPA',NULL,'usepyusepa66@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0114',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(80,'120192510','YAYAT HIDAYAT',NULL,'yayat2836@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0024',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(81,'120200010','AGUNG JOKO SUPRIHANTO',NULL,'agung.joko.tin42@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0112',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(82,'120292511','AHMAD SAHRONI',NULL,'assahroni78@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0083',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(83,'120292512','DENY SUPRAPTO',NULL,'dhenysoeprapto@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0097',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(84,'120292513','DIAN SANJAYA',NULL,'diansanjaya1984@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0072',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(85,'120292514','HERMAWAN',NULL,'hermawan2231@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0013',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(86,'120292515','RUDI SUGIARTO',NULL,'tabotie88@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0052',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(87,'120292516','YAYAT NURHIDAYAT',NULL,'ynurhidayat321@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0036',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(88,'120292517','YUANITA JOHAN',NULL,'yuanita.johan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0075',NULL,NULL,'DP-0001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(89,'120292518','ZAINI ARDHIANSYAH',NULL,'zainiardhiansyah@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0042',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(90,'120500031','AKHMAD MAKHALI',NULL,'ommak82@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0056',NULL,NULL,'DP-0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(91,'120692519','DINA MUSTIKA WENI',NULL,'dina.desu@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(92,'120692521','WEMPI NUR HIDAYAT',NULL,'wempinur@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0133',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(93,'120892522','KARYA SETIAWAN',NULL,'karyastiawan07@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0015',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(94,'120892523','MUKTI WIBOWO',NULL,'wibowomukti26@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0121',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(95,'120892524','VICKRY JANI HARIYANTO',NULL,'vickryjani@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0032',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(96,'120992525','ARDIKA FAUDIN',NULL,'ardika.f.89@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0080',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(97,'120992526','BAYU SEPTO PRASETYO',NULL,'bayusepto16@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0137',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(98,'121092527','BUDI MAULANA NUGRAHA',NULL,'budimaulananugraha@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0066',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(99,'121092528','DODI ISKANDAR',NULL,'reisyhafebkiranicuakep@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0098',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(100,'121092529','SUSANTO RONNI',NULL,'daffasusanto20@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0003',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(101,'121192530','DEDE KUSNANDAR',NULL,'dedekusnandarinsun@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(102,'121192531','GUMILAR INDRA FEBRIANSYAH',NULL,'gumilarif@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0029',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(103,'121192532','KARNAEN',NULL,'karnaen1976@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(104,'121192533','MUHAMMAD SHANDI SUMANTRI',NULL,'shand.milano@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(105,'121192534','ONDI NUGROHO',NULL,'ondix.lau@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0098',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(106,'121192535','RISNAWATI',NULL,'wrisna97@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0115',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(107,'121192536','RUDI RAHMAN',NULL,'rudirahman0879@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(108,'121192537','SUGIANTO',NULL,'zhie46@yahoo.co.id',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0114',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(109,'121192538','SULISWANTO',NULL,'suliswanto1503@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(110,'121192539','YUSUP SYAHRONI',NULL,'yusufsyahroni4787@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0072',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(111,'121192540','ZENAL MULYANA',NULL,'zenal.kenil83@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(112,'121192541','RIESTA SHASYA FAUZIAH',NULL,'riestashasya@ymail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0093',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(113,'130100005','AMBAR KUSUMO NUGROHO',NULL,'aknugroho@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0082',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(114,'130193003','ADE NANA SUMARNA',NULL,'andealova77@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0005',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(115,'130193004','AGUS AKBAR',NULL,'agus.akbar1986@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0131',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(116,'130193005','AGUS PRASETIYO',NULL,'prast.we@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0145',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(117,'130193006','APANDI',NULL,'apandialfathar34@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0004',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(118,'130193007','ASMI LASARI',NULL,'asmilasari23@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0115',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(119,'130193008','DANI PURWANEGARA',NULL,'danipurwanegara7@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0128',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(120,'130193009','DEDEN SETIA JAYA SOMANTRI',NULL,'dedensetiajaya09747@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0031',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(121,'130193010','DEVI SAFITRI SUNDARI',NULL,'devisafitri798@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0115',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(122,'130193011','DIDI SUPRIADI',NULL,'didi_supriadi@live.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0007',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(123,'130193012','DWIKI ARIA DARMAWAN',NULL,'wickyarya17@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(124,'130193013','ERFAN KIMA BAHTERA',NULL,'bahteraerfan87@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(125,'130193014','ERIS MOCHAMAD FIRDAUS',NULL,'erisfirdaus@yahoo.co.id',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0097',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(126,'130193015','FARIZ FAUZI PRATAMA',NULL,'farizfauzipratama@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0095',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(127,'130193016','FEBRIANGGONO DANNY SETIYADI',NULL,'dannyarieanti@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(128,'130193017','HADI',NULL,'hadi180286@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0125',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(129,'130193018','HERU AHMAD SAPRUDIN',NULL,'ureh.rafael46@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(130,'130193019','JAKARIA (CK)',NULL,'zakariyahck@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0079',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(131,'130193020','KANDA',NULL,'kandadoank69@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0124',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(132,'130193021','KUSNADI',NULL,'koesdoank77@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0131',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(133,'130193022','MADA',NULL,'madamoza39@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(134,'130193023','MUHAMAD SYAIFUL ANWAR',NULL,'evfuel@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0031',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(135,'130193024','NUR FAJRI',NULL,'nurf99732@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0004',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(136,'130193025','PRIYANTO',NULL,'priyanto2687@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(137,'130193026','RIDWAN',NULL,'kiansantang934@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0017',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(138,'130193027','RUDI SETIAWAN',NULL,'rudisuhu3@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0115',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(139,'130193028','SAMSIANTO',NULL,'antohukl@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(140,'130193029','SHANDY ASMARA',NULL,'asmarashandy@ymail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0005',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(141,'130193030','SUDARWANTO',NULL,'sudarwantobapakebilqis@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0139',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(142,'130193031','SUHERI',NULL,'suheri89.sh@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0137',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(143,'130193033','SYAHRUL HIDAYAT',NULL,'syahrulhidayat92@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0011',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(144,'130193034','WARDI SAEPUDIN',NULL,'wardisaepudin007@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(145,'130393035','BOBBY FAHMI FARHANUDIN',NULL,'farhan.bobbyfahmi@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0093',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(146,'130793036','ADNAN SAMSULEH',NULL,'adnan.holic@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0110',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(147,'130793037','AEP SAEPUDIN',NULL,'aep198509@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0007',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(148,'130793038','AJAT JAPAR',NULL,'jattz87lfr@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0DP-0',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(149,'130793039','ALI ROHMAN',NULL,'alirohman5728@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0137',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(150,'130793040','AMRIH PANUNTUN',NULL,'amrihpanuntun@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(151,'130793041','ANDI KUSUMA',NULL,'kandi5625@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0008',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(152,'130793042','ANGGA CHRISTIAN YONATHAN',NULL,'angga.christian08@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0128',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(153,'130793043','ASEP ROBAN',NULL,'roben765@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(154,'130793044','DAIKIN PURNA YUDHA',NULL,'daikinvina21@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0029',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(155,'130793045','DARMA ARDHI',NULL,'darmaardhi69@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(156,'130793046','DIDIK PURWANTO',NULL,'didikpurwantojowo81@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0027',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(157,'130793047','HERI KURNIAWAN',NULL,'kurniawanheri449@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(158,'130793048','HERIYANA',NULL,'boyzheriyana@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0098',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(159,'130793049','IKMAL MAULANA',NULL,'ikmalmaulana708@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(160,'130793050','IRFAN HIMAWAN',NULL,'himawanirfan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0093',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(161,'130793051','JOHAN KERTIONO',NULL,'johanbismillah99@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0012',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(162,'130793052','MOHAMMAD DWI ADHITYA',NULL,'dwiadityamail@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0125',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(163,'130793053','SAMROJI',NULL,'samroji118@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0015',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(164,'130793055','JUJUN SIROJUDIN',NULL,'jujunsirojudin1502@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0003',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(165,'130793056','NOVAN TRIANTO',NULL,'vanstryan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(166,'130793058','SANNI SUTIADI',NULL,'sannisutiadi@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0114',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(167,'130900125','INSANI GUSTRIANJAR MUHAROM',NULL,'insanianjar@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(168,'130900126','KASTOLANI',NULL,'kastolanikmi86@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0077',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(169,'140192908','JEPRI HAERUDIN',NULL,'haerudin24@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0074',NULL,NULL,'DP-0001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(170,'140292909','TRI AGUSTIARTY WARDHANY',NULL,'triagustiarty@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0093',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(171,'140700131','PUTRI PUSPITA SARI',NULL,'putripuspitasari55@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0043',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(172,'140792910','AGUS NUGROHO',NULL,'nugrohofaiz14@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0012',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(173,'140792911','ARIYANTO',NULL,'ariyanto88974@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0011',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(174,'140792913','BAHRUDIN',NULL,'abahudin83@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0145',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(175,'140792914','BENI SETIYAWAN',NULL,'benn.john.bj@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(176,'140792915','CECEP SUPRIADI',NULL,'mibnu298@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0029',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(177,'140792916','IRPAN HIDAYAT PAMIL',NULL,'irpanhidayatpamil.ip@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(178,'140792918','MOKHAMAD MUSLIH',NULL,'musliehneutron53@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(179,'140792919','R HAERUL SEJATI',NULL,'haerulsintauna@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0095',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(180,'140792920','TAUFIK FARIDZAL',NULL,'faridzal83@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0039',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(181,'140792921','ZAENUDDIN',NULL,'zaenuddintan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(182,'141092923','FITRIYANI',NULL,'hi.fitriyani@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0162',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(183,'141092924','PANDU WIJAYADI',NULL,'telurpanda@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0065',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(184,'150191702','MOEHAMMAD FADJAR FADHILAH',NULL,'fadjar.crotcrew@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0032',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(185,'150291703','ALI NURDIN',NULL,'ali.nurdin.hidayat@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0137',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(186,'150291704','BAGUS SANTOSO',NULL,'santosobagus809@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0128',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(187,'150291705','HERI HENDRIANA',NULL,'herry.hendriana@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0124',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(188,'150491706','SUMARNA',NULL,'sumarna926@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0073',NULL,NULL,'DP-0001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(189,'150600127','YOPPY SUKMANDAR',NULL,'sukmandar.yoppy@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0035',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(190,'150791707','ADI AMRAN SUKARYA',NULL,'adiamran88@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(191,'150791708','BAMBANG RISTYANTO',NULL,'mbengristyan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0021',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(192,'150791709','HAPPY SUGESTIE PRAHARA',NULL,'happysugestie@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0046',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(193,'150791710','RIRIS PURWANTO',NULL,'ririspurwanto33@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0021',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(194,'150800189','BAHRUDIN DWI NURYANTO',NULL,'dwinuryantob@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0032',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(195,'160192705','AHMAD SAEPUDIN',NULL,'asaepudin511@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0066',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(196,'160192706','YUNIAR TRI PRAKOSO',NULL,'triprakoso777@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0093',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(197,'160200097','ALIT PRADANA',NULL,'alitpradana52@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0041',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(198,'160792707','ADI SOPANA',NULL,'sopanaadi25@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0007',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(199,'170122440','FAJAR MAULANA',NULL,'fajarmaulana638@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0137',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(200,'170122441','MUHAMMAD IQBAL FAUZY',NULL,'iqbalfauzysinkas@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0120',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(201,'170122442','SAIFUL BAHRI',NULL,'sbahriel198@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0137',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(202,'170700031','ARIS SUPARLI',NULL,'arissuparli9@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(203,'170700032','HERU HAERUDIN',NULL,'heruhaerudin11@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(204,'170700033','PEBI',NULL,'pebipebi52@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(205,'171122509','MOCHAMAD FADDLY ADI',NULL,'mochfaddly@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0021',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(206,'180100012','RUDI ROSIDIN',NULL,'rudirosidin1@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0059',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(207,'180100013','SIDIK TRIPAMBUDI',NULL,'sidiktrii@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0066',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(208,'180100014','DERI INDRIANI',NULL,'indrianiderry@yahoo.co.id',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0042',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(209,'180100015','RIO ANGGARA',NULL,'ri.ironpeg@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0009',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(210,'180100016','ABDUL MUJIB MUSTOPA',NULL,'abdulmujib4994@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(211,'180100017','SANIP KOMARUDIN',NULL,'sanip.komarudin@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0011',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(212,'180100018','EDI SAPUTRA',NULL,'94edisaputra@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(213,'180100019','DANIS SENO PRABOWO',NULL,'danissenoprabowo@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0103',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(214,'180100020','HERMAN RESTU FAUZI',NULL,'herman.ybgi@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0105',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(215,'180100021','WULAN NUR FATIMAH',NULL,'nurfatimahwulan1@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0142',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(216,'180100022','FATONI',NULL,'fatoniad4661ep@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0131',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(217,'180300062','BAGUS AJIE WICAKSONO',NULL,'baguswicaksono.ajie@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0047',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(218,'180500114','EUIS DIAN ANGGRAENI',NULL,'diandie20@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0093',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(219,'180500115','RIDWAN NUGRAHA',NULL,'iniridwan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0089',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(220,'180500116','MUHAMAD ALFIAN',NULL,'alfianneivi@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0029',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(221,'180600122','BERNADHETA RISMISARI HANDAYANI',NULL,'chalierismisari8870@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0048',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(222,'180700142','SANITA',NULL,'asanita100@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0079',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(223,'180700143','AKHMAD YUNUS YULIANTO',NULL,'yunusrasta.ay@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0131',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(224,'190100054','TATA TAOFIK QUROHMAN',NULL,'tatataofik77@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0098',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(225,'190700187','MAHMUD FAUJI TANJUNG',NULL,'mochi191191@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0040',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(226,'200100017','TEGUH SEJATI',NULL,'blinyob@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(227,'200100031','WINDY ADRIANY KACARIBU',NULL,'windykacaribu23@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0102',NULL,'CG_0011','DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(228,'200100042','MUSTAGHBIRIN',NULL,'mustaghbirin@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0125',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(229,'200200053','MUHAMAD MISBAH',NULL,'muhamadmisbah96@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0098',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(230,'200300076','MARIA KURNIATI GEDI RAYA',NULL,'maria.kurniati04@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0069',NULL,'CG_0011','DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(231,'200500092','IRVAN HASAN',NULL,'irvanhasan18@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0068',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(232,'200700143','TENDI SOBARNANSYAH',NULL,'sobarnansyah@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0064',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(233,'200700144','MUHAMAD RIDWAN',NULL,'muhamadridwan133@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0130',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(234,'201200194','DENLEI DIYOROSSI',NULL,'diyorossi@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0009',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(361,'210100004','SETYO DEWI UTARI',NULL,'setyod@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','2022-04-06','JT-0153',NULL,'CG_0011','DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(362,'210100024','SARI DIYAH PALUPY',NULL,'saridpha@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0016',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(363,'211200171','TOSHIHITO  ABE',NULL,'abe@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0113',NULL,NULL,'DP-0001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(364,'220100111','KUKUH GUMILANG',NULL,'kukuh_gumilDP-0001@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0033',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(365,'220100112','HENDY CAHYA SUWANDI',NULL,'hendy.cahya18@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0098',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(366,'K180700223','NATALIA SUMANTO SIHOMBING',NULL,'natalie.magdalena@ymail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0071',NULL,'CG_0011','DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(367,'K190100004','DIANTO',NULL,'diantoasgar@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0019',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(368,'K190400185','BASUKI',NULL,'masuki843@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0030',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(369,'K190600252','AHMAD LUKMAN HATAMI',NULL,'ahmadlkm24@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0030',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(370,'K190800327','MUHAMMAD RIZQY FIRDAUS',NULL,'m.rizqyfirdaus23@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0050',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(371,'K190900331','RAKHA ADI PUTRA',NULL,'adiputrarakha@yahoo.co.id',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0086',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(372,'K191000365','SAIDIN IMRON WIJAYA',NULL,'saidinimronwijaya1213@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0135',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(373,'K191100391','ANJAR SUDRAJAT',NULL,'anjar.sudrajat378@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0123',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(374,'K191100397','BIMA DWI ATMAJA',NULL,'bimaatmaja699@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0030',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(375,'K200200052','DANANG PRASETIYO',NULL,'danangpras2105@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(376,'K200300084','DANIEL ABRAHAM SINAMBELA',NULL,'danielabraham0880@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0019',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(377,'K200300085','NUR AHMAD BUKHORI AINUL YAQIN AL FAIZ',NULL,'faizbukhori82@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0127',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(378,'K200300088','ANGGA SAEPUL HAJAN',NULL,'wawankurnia869@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0006',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(379,'K200300089','DEDEN JAELANI',NULL,'dedenjaelani95@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(380,'K200400107','ILHAM COKRO BASKORO',NULL,'ilhamcokrobaskoro@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0136',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(381,'K200400108','ZAENUDIN',NULL,'zaenudinzae86@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(382,'K200500146','DIKA LESMANA',NULL,'dikalesmana1402@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0127',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(383,'K200600145','DIAN HADIAN',NULL,'dhadian08@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0136',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(384,'K200600151','NUKMANUL ANWAR',NULL,'nukman02pai@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0123',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(385,'K200600153','TODO ARDO SINAGA',NULL,'todoardosinaga@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(386,'K200600174','DENI HIMAWAN SUTANTO',NULL,'dhenny.hiimawan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(387,'K200600176','RINO',NULL,'rinoreva2@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(388,'K200700207','ADE RAHMAN',NULL,'aderahman690@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0109',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(389,'K200700231','BUDI UTOYO',NULL,'budi.utoyo29@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0151',NULL,NULL,'DP-0001',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(390,'K200800227','M. ALDI LA MUCHTAR',NULL,'utiahafajar21@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0009',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(391,'K200800232','ADIKA TRYPUTRANTO',NULL,'adikatry74@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(392,'K200800233','DEDE ISKANDAR',NULL,'iskandardede400@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(393,'K200800240','GUSTINA LASMAYANTI',NULL,'gustinalasmayanti@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(394,'K200800241','AJI APRIALDI',NULL,'aji98sarah97@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0064',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(395,'K200900258','DIKI MAULANA',NULL,'dikim2331@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(396,'K200900259','MOHAMAD YUDI PERMANA',NULL,'mohamadyudipermana97@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(397,'K200900262','AHMAD MUDDAI',NULL,'ahmadmuddai.am@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0123',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(398,'K201000279','EKKY MUHAMMAD RIZKULLAH',NULL,'ekkymuhammad1@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0094',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(399,'K201000285','DAVIDS',NULL,'davidssiburian25@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0019',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(400,'K201000286','IQBAL SYAHRINDRA MUSTOPA',NULL,'iqbalsyahrindra00@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(401,'K201000287','DWI KARTIKA',NULL,'dwikartika165@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0101',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(402,'K201000295','ANGGRI PRIWANDA',NULL,'crossanggri@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(403,'K201000296','AHMAD KHAERUL FIKRI',NULL,'ahmadkhaerulfikri@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(404,'K201000297','DENDI PRIMADI',NULL,'dendiprimadi94@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(405,'K201100303','AGUS WIDIYANTO',NULL,'widiyantoagus0@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0030',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(406,'K201100306','SARAH SANUBARI',NULL,'sanubarisarah85@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0094',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(407,'K201100308','MASTANI',NULL,'mastani925@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0136',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(408,'K201100309','MUHAMAD AKMAL AZIIZ',NULL,'m.akmal11a@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(409,'K201100311','ARI DESAR PAMUNGKAS',NULL,'aridesar1995@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0028',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(410,'K201200336','HERU TRI MARDIAN',NULL,'heruezt3@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0135',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(411,'K210100001','ZAKARIA',NULL,'zakariabrebes@yahoo.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0127',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(412,'K210100003','DINA OKTAVIA PUTRI',NULL,'dinaoktaviaputri@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0117',NULL,NULL,'DP-0002',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(413,'K210100026','GITA SYEMA DEWI',NULL,'gitasyemad@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0093',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(414,'K210200048','SETIA MAULANA',NULL,'setiamaulana81@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(415,'K210200049','ABI YOGA ASMARA',NULL,'abiyogaasmara4@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(416,'K210200050','HISAR DESMON SINAGA',NULL,'hisardesmonsinaga@yahoo.co.id',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0019',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(417,'K210200054','AHMAD',NULL,'ahmaddoang912@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0030',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(418,'K210200062','DEDEN RUHDIANTO',NULL,'dedenruhdianto07@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0030',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(419,'K210300077','KHONSA',NULL,'khonsa.sasa@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0139',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(420,'K210300079','RUSTA RUSDIANTO',NULL,'rustarusdianto295@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(421,'K210300080','ABDUL KHARIS',NULL,'abdulkharis994@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(422,'K210300086','ENJAY ZARKASIH',NULL,'enjayzarkasih100@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(423,'K210300098','LUKMAN NULHAKIM',NULL,'lukmann275@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(424,'K210300099','SAUD SIHOMBING',NULL,'joshuasniky24@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0006',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(425,'K210400104','ODI NANDANG SOMANTRI',NULL,'odinandang43@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0006',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(426,'K210400107','ALI RAMDANI',NULL,'aramdani312@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0030',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(427,'K210400108','MUHAMAD ADE SUJAI',NULL,'muhamadadesujai12@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0094',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(428,'K210500153','DIKA SUHARTA',NULL,'dika.suharta@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(429,'K210500154','IMAN SANDI',NULL,'imansandi97@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0136',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(430,'K210500161','ANGGI IRWANSYAH',NULL,'anggiirwansyah86@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0136',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(431,'K210600175','UBAIDILAH ALI MURTADHO',NULL,'ubaidilahalimurtadho@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0084',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(432,'K210600177','TAUFIK HIDAYAT TUMARUF',NULL,'taufikhidayatumaruf92@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0136',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(433,'K210700205','DANI ENDAR MULYANA',NULL,'daniendar12@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0132',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(434,'K210700211','MUHAMMAD ALFIN BASYAR',NULL,'alvinbasyar1@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0094',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(435,'K210900224','IRFAN SUHEGAR',NULL,'irfansiregar220518@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(436,'K210900227','YOSA NIZAR FERNANTA',NULL,'yosanizar06@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0006',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(437,'K211000233','ANDI MUNTAHA',NULL,'andimuntaha26@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0123',NULL,NULL,'DP-0006',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(438,'K211100249','ALI DAVIT',NULL,'alidavit85@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0049',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(439,'K211200252','NASRULLOH',NULL,'nasrulloh580@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0099',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(440,'K220200009','DEDE HERIYANTO',NULL,'deheriyanto01@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0094',NULL,NULL,'DP-0007',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(441,'K220200017','MULYANA',NULL,'akewcsipittea@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(442,'K220200018','HENDI',NULL,'hendisuhendix@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(443,'K220200025','ROBI SUPRIADI',NULL,'robisupriadi185@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(444,'K220200026','ASEP JAMALUDIN',NULL,'asepjamaludin454@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0104',NULL,NULL,'DP-0004',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(445,'K220300040','ASEP SETIAWAN',NULL,'im.asepsetiawan@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0086',NULL,NULL,'DP-0003',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(446,'O180500043','LILIS SUMARNI',NULL,'081585350021lis@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(447,'O181200144','CAHYADI',NULL,'cahyadiyadi1981@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0022',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(448,'O190400060','RIO ACHMAD ROSADI',NULL,'rioachmad32@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(449,'O190600102','TATANG MEINSYAHYAR',NULL,'tatangmeinsyahyar@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0022',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(450,'O190900163','AEP SAEPULLOH',NULL,'aefsaefullohsaefulloh93@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(451,'O191000171','ADE RENALDI',NULL,'aderenaldi1717@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(452,'O191100184','MOHAMAD ZEIN',NULL,'mohamadzein027@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(453,'O200200008','MULYONO',NULL,'alexmulyono04@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0010',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(454,'O200200010','AMSIR',NULL,'gustina.lasmayanti@kalbenutritionals.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0010',NULL,NULL,'DP-0005',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(455,'O200200014','ANDRI',NULL,'andri288171@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(456,'O200600032','IYAN ARISANDI',NULL,'iasandy83@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(457,'O200600033','IFQI DJUL FAHMI',NULL,'ifqidjulfahmi99@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(458,'O200600034','ILHAM GULTOM',NULL,'iamilhamgultom@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(459,'O200900056','DEA ROBIANTA',NULL,'dearobian97@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(460,'O201000061','TIAS OKTAVIAN',NULL,'tiasoktafian054@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(461,'O210200013','AI AAY LESTARI',NULL,'aiaaylestari19@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(462,'O210200014','JAELANI',NULL,'jaymage789@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(463,'O210500039','NOFITA SARI NURAINI',NULL,'nofitas281@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(464,'O220100005','AHMAD AFIF FUDIN',NULL,'fipsundanis@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(465,'O220100006','ASEP TEGUH',NULL,'asepteguh027@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(466,'O220100007','BUDI SANTOSO',NULL,'budinopianti0203@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(467,'O220100008','DEDI NURYANA',NULL,'dedipredator99@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(468,'O220100009','FITRI SURTINAWATI',NULL,'fsurtinawati@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(469,'O220100010','JENGEL ABDI DARMA FAU',NULL,'jengelabdidarmafau83@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(470,'O220100011','JENI',NULL,'jeni200484@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(471,'O220100012','JUHANA',NULL,'juhana12467@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(472,'O220100013','LEMAN',NULL,'lheman061286@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(473,'O220100014','MUHAMAD SAHRONI',NULL,'ronr8981@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(474,'O220100015','SAEFUL ANWAR',NULL,'saeful.anwar1986@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(475,'O220100016','SAMSUDIN',NULL,'samsamsoel0@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(476,'O220100017','SURYANTO',NULL,'suryanto1677@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(477,'O220100018','UMAR WIRANATA KUSUMA',NULL,'umarwiranata88@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(478,'O220100019','ZULWISAL',NULL,'zulwisal@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(479,'O220100020','TAUFIK HIDAYAT',NULL,'taufikbaron6279@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(480,'O220100021','NUNUNG',NULL,'noe.gatorz46@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0106',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(481,'O220100022','ASEP MUSDIONO',NULL,'musdionoasep@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0057',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(482,'O220100023','EKA AMSORIH',NULL,'ekaamsorih94@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(483,'O220200030','WASCA',NULL,'rasyairma9@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL),
(484,'O220200031','MUHAMAD NURHIDAYAT',NULL,'muhamadnurhidayat1598@gmail.com',NULL,'$2a$10$kQdT1DPvsC6WLFqc7gLOd.VNmc1bKPkhoL0.f97x13qzaaw3R8/VC','0000-00-00','JT-0014',NULL,NULL,'DP-0008',NULL,NULL,NULL,NULL,NULL,NULL,NULL);

/*Table structure for table `white_tag` */

DROP TABLE IF EXISTS `white_tag`;

CREATE TABLE `white_tag` (
  `id_white_tag` varchar(15) NOT NULL,
  `id_directory` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `start` tinyint(2) NOT NULL,
  `actual` tinyint(2) NOT NULL,
  PRIMARY KEY (`id_white_tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `white_tag` */

insert  into `white_tag`(`id_white_tag`,`id_directory`,`id_user`,`start`,`actual`) values 
('7eeXy1649145212',134,1,0,1),
('jWCpk1650251559',201,2,0,3),
('p2co41649145212',152,1,0,1),
('SWrxk1649384942',200,1,0,5);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
