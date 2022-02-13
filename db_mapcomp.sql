-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2022 at 03:08 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mapcomp`
--

-- --------------------------------------------------------

--
-- Table structure for table `cg`
--

CREATE TABLE `cg` (
  `id_cg` char(8) NOT NULL,
  `nama_cg` varchar(255) NOT NULL,
  `id_department` char(8) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_ad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id_department` char(8) NOT NULL,
  `id_divisi` char(8) NOT NULL,
  `nama_department` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id_department`, `id_divisi`, `nama_department`, `created_at`, `updated_at`) VALUES
('DP-0001', 'DV-0001', 'MNF', '0000-00-00 00:00:00', '2020-10-20 09:21:23'),
('DP-0002', 'DV-0001', 'IOS', '0000-00-00 00:00:00', '2020-10-20 09:21:30'),
('DP-0003', 'DV-0002', 'BDA', '0000-00-00 00:00:00', '2021-01-26 21:23:26'),
('DP-0004', 'DV-0001', 'PRD', '0000-00-00 00:00:00', '2020-10-20 09:21:32'),
('DP-0005', 'DV-0001', 'ENG', '0000-00-00 00:00:00', '2021-06-17 23:09:29'),
('DP-0006', 'DV-0001', 'WHS', '0000-00-00 00:00:00', '2020-10-20 09:21:36'),
('DP-0007', 'DV-0001', 'QA', '0000-00-00 00:00:00', '2020-10-20 09:21:38'),
('DP-0008', 'DV-0002', 'HC', '0000-00-00 00:00:00', '2021-01-26 21:24:33'),
('DP-0009', 'DV-0001', 'MDP', '0000-00-00 00:00:00', '2020-10-20 09:21:41'),
('DP-0010', 'DV-0003', 'BOD', '0000-00-00 00:00:00', '2020-10-20 09:21:48');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` char(8) NOT NULL,
  `nama_divisi` varchar(55) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nama_divisi`, `created_at`, `updated_at`) VALUES
('DV_0001', 'Manufacturing', '2022-01-31 02:15:13', '2022-01-31 02:15:13'),
('DV_0002', 'Supporting', '2022-01-31 02:15:13', '2022-01-31 02:15:13'),
('DV_0003', 'BOD', '2022-01-31 02:15:13', '2022-01-31 02:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `job_title`
--

CREATE TABLE `job_title` (
  `id_job_title` char(8) NOT NULL,
  `id_department` char(8) NOT NULL,
  `nama_job_title` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_title`
--

INSERT INTO `job_title` (`id_job_title`, `id_department`, `nama_job_title`, `created_at`, `updated_at`) VALUES
('JT-0001', 'DP-0005', 'Advisor Engineering', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0002', 'DP-0009', 'Application & Development Support Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0003', 'DP-0004', 'Bin Filling Forklift Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0004', 'DP-0004', 'Bin Filling Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0005', 'DP-0004', 'Bin Washing Forklift Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0006', 'DP-0004', 'Bin Washing Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0007', 'DP-0004', 'Bin Washing Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0008', 'DP-0004', 'Blending Forklift Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0009', 'DP-0004', 'Blending Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0010', 'DP-0005', 'Building Maintenance', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0011', 'DP-0004', 'Can Filling Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0012', 'DP-0004', 'Can Packing Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0013', 'DP-0004', 'CIP Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0014', 'DP-0008', 'Cleaning Service', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0015', 'DP-0004', 'Compounding Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0016', 'DP-0002', 'Document Controller', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0017', 'DP-0004', 'Drier Circle Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0018', 'DP-0004', 'Drier Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0019', 'DP-0004', 'Drier Continous Cleaner', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0020', 'DP-0004', 'Drier Group Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0021', 'DP-0004', 'Drier Roving Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0022', 'DP-0008', 'Driver', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0023', 'DP-0004', 'Dry Sachet Circle Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0024', 'DP-0004', 'Dry Sachet Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0025', 'DP-0004', 'Dry Sachet Group Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0026', 'DP-0004', 'Dry Sachet Packing Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0027', 'DP-0004', 'Dumping Forklift Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0028', 'DP-0004', 'Dumping Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0029', 'DP-0004', 'Dumping Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0030', 'DP-0004', 'Eductor Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0031', 'DP-0004', 'Eductor Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0032', 'DP-0005', 'Electrical Technician', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0033', 'DP-0005', 'Engineering Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0034', 'DP-0005', 'Engineering Analyst', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0035', 'DP-0005', 'Engineering Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0036', 'DP-0004', 'Evaporator Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0037', 'DP-0003', 'FA & IT Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0038', 'DP-0004', 'Fat Blend & Mixing Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0039', 'DP-0004', 'Fat Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0040', 'DP-0004', 'Filling & Packing Coordinator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0041', 'DP-0004', 'Filling & Packing Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0042', 'DP-0003', 'Finance & Accounting Junior Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0043', 'DP-0003', 'Finance & Accounting Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0044', 'DP-0003', 'Finance & Accounting Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0045', 'DP-0005', 'Forklift Technician', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0046', 'DP-0008', 'General Affair Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0047', 'DP-0008', 'General Affair Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0048', 'DP-0008', 'Human Capital Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0049', 'DP-0008', 'HRD Administration', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0050', 'DP-0005', 'HVAC Technician', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0051', 'DP-0002', 'Improvement Facilitator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0052', 'DP-0002', 'Improvement Junior Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0053', 'DP-0002', 'Integrated Operation System Dept. Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0054', 'DP-0008', 'IR & GA Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0055', 'DP-0009', 'IT Infrastructure & Security Management', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0056', 'DP-0009', 'Information Technology Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0057', 'DP-0008', 'Komandan', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0058', 'DP-0005', 'Maintenance Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0059', 'DP-0005', 'Maintenance Planner', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0060', 'DP-0005', 'Maintenance System Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0061', 'DP-0009', 'Manufacturing Development & Planning Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0062', 'DP-0001', 'Manufacturing Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0063', 'DP-0001', 'Manufacturing Junior Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0064', 'DP-0005', 'Mechanic Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0065', 'DP-0005', 'Mechanical Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0066', 'DP-0005', 'Mechanical Technician', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0067', 'DP-0008', 'Mnf Human Capital Dev Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0068', 'DP-0005', 'Operational Maintenance Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0069', 'DP-0008', 'Payroll & Personnel Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0070', 'DP-0008', 'Payroll & Secretary', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0071', 'DP-0008', 'Personel Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0072', 'DP-0004', 'Powder Mixer Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0073', 'DP-0009', 'PPIC Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0074', 'DP-0009', 'PPIC Junior Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0075', 'DP-0009', 'PPIC Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0076', 'DP-0010', 'President Director', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0077', 'DP-0005', 'Preventive Maintenance Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0078', 'DP-0004', 'Process & Drier  Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0079', 'DP-0004', 'Processing Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0080', 'DP-0004', 'Production Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0081', 'DP-0004', 'Production Admin 1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0082', 'DP-0004', 'Production Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0083', 'DP-0004', 'Production Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0084', 'DP-0004', 'Production Store Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0085', 'DP-0004', 'Production Store Keeper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0086', 'DP-0003', 'Purchasing Administration', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0087', 'DP-0003', 'Purchasing Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0088', 'DP-0003', 'Purchasing, Legal & Regulator Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0089', 'DP-0007', 'QA Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0090', 'DP-0007', 'QA Laboratory Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0091', 'DP-0007', 'QA Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0092', 'DP-0007', 'QC Chemphys Group Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0093', 'DP-0007', 'QC In Line Analyst', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0094', 'DP-0007', 'QC In Line Field', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0095', 'DP-0007', 'QC In Line Group Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0096', 'DP-0007', 'QC In Line Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0097', 'DP-0007', 'QC Incoming Analyst', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0098', 'DP-0007', 'QC Microbiology Analyst', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0099', 'DP-0007', 'QC Microbiology Field', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0100', 'DP-0007', 'Quality Assurance Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0101', 'DP-0008', 'Receptionist', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0102', 'DP-0008', 'Recruitment & Learning Development Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0103', 'DP-0004', 'Sachet Filling Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0104', 'DP-0004', 'Sachet Packing Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0105', 'DP-0004', 'Sachet Packing Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0106', 'DP-0008', 'Security', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0107', 'DP-0008', 'Serikat Pekerja', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0108', 'DP-0005', 'Sparepart Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0109', 'DP-0005', 'Store Keeper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0110', 'DP-0002', 'System Inspector', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0111', 'DP-0002', 'System Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0112', 'DP-0002', 'System Management Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0113', 'DP-0001', 'Technical Advisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0114', 'DP-0004', 'Tipping Forklift Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0115', 'DP-0004', 'Tipping Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0116', 'DP-0004', 'Tote Bin Washing Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0117', 'DP-0002', 'TPM Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0118', 'DP-0002', 'TPM Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0119', 'DP-0005', 'Utility Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0120', 'DP-0005', 'Utility Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0121', 'DP-0006', 'Warehouse Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0122', 'DP-0006', 'Warehouse Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0123', 'DP-0006', 'Warehouse FG Assistant', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0124', 'DP-0006', 'Warehouse FG Checker', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0125', 'DP-0006', 'Warehouse FG Forklift Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0126', 'DP-0006', 'Warehouse FG Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0127', 'DP-0006', 'Warehouse PM Assistant', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0128', 'DP-0006', 'Warehouse PM Checker', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0129', 'DP-0006', 'Warehouse PM Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0130', 'DP-0006', 'Warehouse RM Major Checker', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0131', 'DP-0006', 'Warehouse RM Major Forklift Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0132', 'DP-0006', 'Warehouse RM Major Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0133', 'DP-0006', 'Warehouse RM Major Preparator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0134', 'DP-0006', 'Warehouse RM Major Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0135', 'DP-0006', 'Warehouse RM Minor Assistant', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0136', 'DP-0006', 'Warehouse RM Minor Helper', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0137', 'DP-0006', 'Warehouse RM Minor Preparator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0138', 'DP-0006', 'Warehouse RM Minor Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0139', 'DP-0004', 'Wet Canning Circle Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0140', 'DP-0004', 'Wet Canning Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0141', 'DP-0004', 'Wet Canning Group Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0142', 'DP-0004', 'Wet Sachet Circle Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0143', 'DP-0004', 'Wet Sachet Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0144', 'DP-0004', 'Wet Sachet Group Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0145', 'DP-0005', 'WWTP Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0146', 'DP-0005', 'Admin Utility', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0147', 'DP-0004', 'Bin Washing, Fat Blend & Mixing Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0148', 'DP-0004', 'Blending & Dumping Circle Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0149', 'DP-0003', 'Business Development & Analysis Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0150', 'DP-0008', 'Cleaning Service Leader', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0151', 'DP-0001', 'Deputy Manufacturing Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0152', 'DP-0004', 'Dry Sachet Tipping Operator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0153', 'DP-0008', 'HRD Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0154', 'DP-0009', 'Manufacturing Development & Planing Administation', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0155', 'DP-0009', 'Manufacturing Development & Planing Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0156', 'DP-0005', 'Mechanical Analyst', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0157', 'DP-0005', 'PM Technician', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0158', 'DP-0004', 'Process & Drier Coordinator', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0159', 'DP-0004', 'Production Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0160', 'DP-0007', 'QA In Line Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0161', 'DP-0007', 'QA Junior Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0162', 'DP-0003', 'Secretary & Management System', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0163', 'DP-0002', 'TPM & Focus Improvement Supervisor', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0164', 'DP-0005', 'Utility Analyst', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('JT-0165', 'DP-0012', 'Paramedik', '2021-06-17 23:07:51', '2021-06-17 23:07:51');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` char(8) NOT NULL,
  `nama_level` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`, `created_at`, `updated_at`) VALUES
('LV-0001', 'Director', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0002', 'Division Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0003', 'Dept Head', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0004', 'SPV', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0005', 'Staff', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0006', 'Coordinator Covid', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0007', 'Security', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0008', 'GA', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('LV-0009', 'Admin', '2020-10-03 08:45:07', '2020-10-03 08:45:07'),
('LV-0010', 'Gudang', '2020-10-26 03:20:10', '2020-10-26 20:39:26'),
('LV-0011', 'Dokter', '2020-11-04 08:29:48', '2020-11-04 08:29:48'),
('LV-0012', 'Super Admin', '2020-11-23 07:51:58', '2020-11-23 07:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` char(2) NOT NULL,
  `role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
('1', 'Admin'),
('2', 'CG Leader');

-- --------------------------------------------------------

--
-- Table structure for table `sub_departemen`
--

CREATE TABLE `sub_departemen` (
  `id_subdepartment` char(8) NOT NULL,
  `id_department` char(8) NOT NULL,
  `nama_subdepartemen` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_ad` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_departemen`
--

INSERT INTO `sub_departemen` (`id_subdepartment`, `id_department`, `nama_subdepartemen`, `created_at`, `updated_ad`) VALUES
('SDP-0001', 'DP-0001', 'MNF subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0002', 'DP-0002', 'IOS subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0003', 'DP-0002', 'IOS-SYS subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0004', 'DP-0002', 'IOS-IMP subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0008', 'DP-0004', 'PRD subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0009', 'DP-0004', 'PRD-P&D subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0010', 'DP-0004', 'PRD-F&P subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0011', 'DP-0005', 'MM subdept', '0000-00-00 00:00:00', '2021-02-08 20:12:11'),
('SDP-0012', 'DP-0005', 'MM-OPM subdept', '0000-00-00 00:00:00', '2021-02-08 20:12:25'),
('SDP-0013', 'DP-0005', 'MM-MTS subdept', '0000-00-00 00:00:00', '2021-02-08 20:12:37'),
('SDP-0014', 'DP-0006', 'WHS subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0015', 'DP-0006', 'WHS-RM subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0016', 'DP-0006', 'WHS-PM subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0017', 'DP-0006', 'WHS-FG subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0018', 'DP-0007', 'QA subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0019', 'DP-0007', 'QA-QC subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0020', 'DP-0007', 'QA-MCO subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0021', 'DP-0008', 'HC subdept', '0000-00-00 00:00:00', '2021-02-21 18:44:49'),
('SDP-0022', 'DP-0008', 'HC-GA subdept', '0000-00-00 00:00:00', '2021-02-21 18:45:01'),
('SDP-0023', 'DP-0008', 'HC-HRD subdept', '0000-00-00 00:00:00', '2021-02-21 18:45:15'),
('SDP-0025', 'DP-0009', 'MDP subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0026', 'DP-0009', 'MDP-PPIC subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0027', 'DP-0010', 'BOD subdept', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('SDP-0028', 'DP-0012', 'Klinik subdept', '2020-11-04 20:43:49', '2020-11-04 20:43:49'),
('SDP-0029', 'DP-0003', 'BDA subdept', '2021-01-26 21:32:37', '2021-01-26 21:32:37'),
('SDP-0030', 'DP-0003', 'BDA-PRC', '2021-01-26 21:40:45', '2021-01-26 21:40:45'),
('SDP-0031', 'DP-0003', 'BDA-FA', '2021-01-26 21:41:13', '2021-01-26 21:41:13'),
('SDP-0032', 'DP-0009', 'MDP-IT subdept', '2021-01-26 23:33:33', '2021-01-26 23:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` char(8) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `id_job_title` char(8) NOT NULL,
  `id_divisi` char(8) NOT NULL,
  `id_cg` char(8) NOT NULL,
  `id_department` char(8) NOT NULL,
  `id_subdepartment` char(8) NOT NULL,
  `id_level` char(8) NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'unknown.jpg',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nik`, `nama_user`, `email`, `password`, `tgl_masuk`, `id_job_title`, `id_divisi`, `id_cg`, `id_department`, `id_subdepartment`, `id_level`, `gambar`, `created_at`, `updated_at`) VALUES
('KMI_1', 'K210300063', 'Rezki Ramadhan', 'rezki.ramadhan@kalbenutritionals.com', '123\r\n', '2021-03-07', 'JT_1', 'DV_1', 'CG_1', 'DP_1', 'SDP_1', 'LV_1', 'unknown.jpg', '2022-01-28 17:00:00', '2022-02-02 08:42:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cg`
--
ALTER TABLE `cg`
  ADD PRIMARY KEY (`id_cg`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id_department`),
  ADD KEY `id_divisi` (`id_divisi`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `job_title`
--
ALTER TABLE `job_title`
  ADD PRIMARY KEY (`id_job_title`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `sub_departemen`
--
ALTER TABLE `sub_departemen`
  ADD PRIMARY KEY (`id_subdepartment`),
  ADD KEY `id_department` (`id_department`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_job_title` (`id_job_title`),
  ADD KEY `id_divisi` (`id_divisi`),
  ADD KEY `id_cg` (`id_cg`),
  ADD KEY `id_department` (`id_department`),
  ADD KEY `id_subdepartment` (`id_subdepartment`),
  ADD KEY `id_level` (`id_level`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
