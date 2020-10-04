-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2018 at 11:48 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(80) UNSIGNED NOT NULL,
  `user_id` int(80) NOT NULL,
  `week` varchar(10) NOT NULL,
  `start_date` varchar(80) NOT NULL,
  `end_date` varchar(80) NOT NULL,
  `monday` text NOT NULL,
  `tuesday` text NOT NULL,
  `wednessday` text NOT NULL,
  `thursday` text NOT NULL,
  `friday` text NOT NULL,
  `saturday` text NOT NULL,
  `image` varchar(80) NOT NULL,
  `status1` varchar(80) NOT NULL,
  `status2` varchar(80) NOT NULL,
  `status3` varchar(80) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `user_id`, `week`, `start_date`, `end_date`, `monday`, `tuesday`, `wednessday`, `thursday`, `friday`, `saturday`, `image`, `status1`, `status2`, `status3`, `date`) VALUES
(1, 3, 'Week 1', '2018-05-10', '2018-05-20', 'sdsdsd', 'dsdsdsd', 'sdsdsds', 'sdsdss', 'sdsdsdsd', 'sdsdsdsd', '516140.png', '', '', 'approve', '2018-05-10 05:58:52'),
(2, 3, 'Week 2', '2018-05-14', '2018-05-31', 'sdsdsd', 'dsdsdsd', 'sdsdsds', 'sdsdss', 'sdsdsdsd', 'sdsdsdsd', '978446.png', '', '', 'disapprove', '2018-05-10 06:01:12'),
(3, 3, 'Week 3', '2018-05-07', '2018-05-13', 'erererfere', 'erferer', 'erfeere', 'erfererer', 'erferfrer', 'erferfererf', '143069.jpg', '', '', 'disapprove', '2018-05-11 14:31:04'),
(4, 3, 'Week 4', '2018-05-14', '2018-05-20', 'dsdsdshdiusg d sdsh d8s hdoh osh docsdh s dsyh dh shd ohsdh sh dch sdch sd igedohdeh soudgosh dohs odgcosgudo hsod s dohsdgigsd sgd isg dosg dsh doc sgdcoishdicg os dos dc gosdhc oishdo sodh oshd os yhod sjdo sohdcoihsod o sdo sod gsiydfs dcis gdcugsh;shi;dgu slhsd sdg ifqwgeohedhis odg osd sdhochs odgs ', 'dsdsdshdiusg d sdsh d8s hdoh osh docsdh s dsyh dh shd ohsdh sh dch sdch sd igedohdeh soudgosh dohs odgcosgudo hsod s dohsdgigsd sgd isg dosg dsh doc sgdcoishdicg os dos dc gosdhc oishdo sodh oshd os yhod sjdo sohdcoihsod o sdo sod gsiydfs dcis gdcugsh;shi;dgu slhsd sdg ifqwgeohedhis odg osd sdhochs odgs ', 'dsdsdshdiusg d sdsh d8s hdoh osh docsdh s dsyh dh shd ohsdh sh dch sdch sd igedohdeh soudgosh dohs odgcosgudo hsod s dohsdgigsd sgd isg dosg dsh doc sgdcoishdicg os dos dc gosdhc oishdo sodh oshd os yhod sjdo sohdcoihsod o sdo sod gsiydfs dcis gdcugsh;shi;dgu slhsd sdg ifqwgeohedhis odg osd sdhochs odgs ', 'dsdsdshdiusg d sdsh d8s hdoh osh docsdh s dsyh dh shd ohsdh sh dch sdch sd igedohdeh soudgosh dohs odgcosgudo hsod s dohsdgigsd sgd isg dosg dsh doc sgdcoishdicg os dos dc gosdhc oishdo sodh oshd os yhod sjdo sohdcoihsod o sdo sod gsiydfs dcis gdcugsh;shi;dgu slhsd sdg ifqwgeohedhis odg osd sdhochs odgs ', 'dsdsdshdiusg d sdsh d8s hdoh osh docsdh s dsyh dh shd ohsdh sh dch sdch sd igedohdeh soudgosh dohs odgcosgudo hsod s dohsdgigsd sgd isg dosg dsh doc sgdcoishdicg os dos dc gosdhc oishdo sodh oshd os yhod sjdo sohdcoihsod o sdo sod gsiydfs dcis gdcugsh;shi;dgu slhsd sdg ifqwgeohedhis odg osd sdhochs odgs ', 'dsdsdshdiusg d sdsh d8s hdoh osh docsdh s dsyh dh shd ohsdh sh dch sdch sd igedohdeh soudgosh dohs odgcosgudo hsod s dohsdgigsd sgd isg dosg dsh doc sgdcoishdicg os dos dc gosdhc oishdo sodh oshd os yhod sjdo sohdcoihsod o sdo sod gsiydfs dcis gdcugsh;shi;dgu slhsd sdg ifqwgeohedhis odg osd sdhochs odgs ', '869729.jpg', '', '', 'approve', '2018-05-13 01:25:16'),
(5, 12, 'Week 1', '2018-05-14', '2018-05-20', 'i went to the field to study some organisms ', 'i went to the field to study some organisms ', 'i went to the field to study some organisms ', 'i went to the field to study some organisms ', 'i went to the field to study some organisms ', 'i went to the field to study some organisms ', '710007.jpg', '', 'disapprove', 'approve', '2018-05-14 13:38:38'),
(6, 11, 'Week 1', '2018-05-21', '2018-05-27', 'I did some outing', 'I did some outingI did some outing', 'I did some outing', 'I did some outingI did some outing', 'I did some outing', 'I did some outing', '380869.jpg', 'approve', '', 'disapprove', '2018-05-19 23:15:11'),
(7, 3, 'Week 5', '2018-05-21', '2018-05-27', 'kkuku hoiho hohy phy lh lh lhli hlih li', 'kkuku hoiho hohy phy lh lh lhli hlih li', 'kkuku hoiho hohy phy lh lh lhli hlih li', 'kkuku hoiho hohy phy lh lh lhli hlih li', 'kkuku hoiho hohy phy lh lh lhli hlih li', 'kkuku hoiho hohy phy lh lh lhli hlih li', '623637.jpg', '', '', 'disapprove', '2018-05-21 21:58:22'),
(8, 9, 'Week 1', '2018-05-21', '2018-05-27', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', '419862.jpg', 'disapprove', 'pending', 'pending', '2018-05-22 10:40:41'),
(9, 9, 'Week 2', '2018-05-21', '2018-05-27', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', '934667.jpg', 'approve', 'pending', 'pending', '2018-05-22 10:41:27'),
(10, 9, 'Week 3', '2018-05-21', '2018-05-27', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', 'hkcyk lih iy ly k.gliy.ltv g.liy l k.gk. u tgkli kugk.ug ', '12920.jpg', 'approve', 'pending', 'pending', '2018-05-22 10:42:00'),
(11, 13, 'Week 1', '2018-05-21', '2018-05-27', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', '894607.jpg', 'approve', 'approve', 'approve', '2018-05-22 12:03:45'),
(12, 13, 'Week 2', '2018-05-21', '2018-05-27', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', '714489.jpg', 'approve', 'disapprove', 'disapprove', '2018-05-22 12:04:09'),
(13, 13, 'Week 3', '2018-05-21', '2018-05-27', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', 'ydfhmtmngvj jkgjyf jfjyfy ff kyfkyfk fudydhf, kgj.yf utd fguy fudu f', '951983.jpg', 'approve', 'disapprove', 'approve', '2018-05-22 12:05:20'),
(14, 19, 'Week 1', '2018-05-28', '2018-06-03', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', '291023.jpg', 'pending', 'pending', 'approve', '2018-05-22 16:45:17'),
(15, 19, 'Week 2', '2018-05-28', '2018-06-03', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', '6304.jpg', 'pending', 'pending', 'pending', '2018-05-22 16:46:03'),
(16, 19, 'Week 3', '2018-05-28', '2018-06-03', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', 'djrf jygjf jyfig kug k.ug.kug .iuk.jf . .kfudkf.kf .yf ud.u fg kug .f.jyf .j gku', '77949.jpg', 'pending', 'pending', 'approve', '2018-05-22 16:46:31');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(80) UNSIGNED NOT NULL,
  `level` int(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `pnum` int(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `company_school` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `level`, `name`, `pnum`, `email`, `company_school`, `password`, `date`) VALUES
(2, 2, 'Afolabi Bello', 2147483647, 'bello@gmail.com', 'Crawford', 'bello', '2018-05-22 16:02:14'),
(3, 2, 'Dr Amire', 2147483647, 'amire@gmail.com', 'Crawford', 'amire', '2018-05-22 16:03:51'),
(4, 2, 'Adekunle Bunmi Arinola ', 2147483647, 'nalefashionhouse@gmail.com', 'Nestel', 'bunmi', '2018-05-25 09:27:01'),
(5, 0, 'Oluwatobi Samuel Kilani', 2147483647, 'tamaradoubrah@gmail.com', 'Nestel', 'samuel', '2018-05-25 09:28:19'),
(6, 0, 'Ogunnuku Tuemi', 2147483647, 'tamaradoubrah@gmail.com', 'Cowbel', 'tuemi', '2018-05-25 09:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(80) UNSIGNED NOT NULL,
  `user_level` int(80) NOT NULL,
  `name` varchar(100) NOT NULL,
  `matric` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pnum` int(80) NOT NULL,
  `start_date` varchar(80) NOT NULL,
  `end_date` varchar(80) NOT NULL,
  `school` varchar(80) NOT NULL,
  `supervisor` varchar(100) NOT NULL,
  `ind_supervisor` varchar(80) NOT NULL,
  `company` varchar(100) NOT NULL,
  `image` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_level`, `name`, `matric`, `email`, `pnum`, `start_date`, `end_date`, `school`, `supervisor`, `ind_supervisor`, `company`, `image`, `password`, `date`) VALUES
(2, 3, 'Logbook Admin', 'admin', 'admin@email.com', 0, '', '', '', '', '', '', 'admin.jpg', 'admin123', '2018-05-09 09:06:11'),
(3, 0, 'Abimbolu Oluyemi', 'yemi', 'yemi@email.com', 0, '', '', '', '', '', '', 'yemi.jpg', 'yemi', '2018-05-09 09:07:26'),
(4, 1, 'Abimbolu Olugbenga', '150203018', 'gbenga@email.com', 0, '', '', '', '', '', '', 'gbenga.jpg', 'olugbenga', '2018-05-09 09:08:01'),
(5, 1, 'Ogunloye Lekan', '150203019', 'Lekan@email.com', 0, '', '', '', '', '', '', 'Lekan.jpg', 'Lekan', '2018-05-09 09:08:52'),
(9, 1, 'Uche Ogologo', '140203037', 'uche@gmail.com', 0, '2018-06-01', '2018-07-31', 'Crawford University', 'Dr Afolabi', '', 'President Paint International', '967776.jpg', 'uche1A', '2018-05-09 15:06:59'),
(10, 2, 'Dr Afolabi', '343434', '4dsdsd@gmail.com', 3434343, '2018-05-11', '2018-05-20', 'dfvdfdfd', '', '', 'dfvdfvddfv', '957044.jpg', 'afolabi', '2018-05-10 00:10:34'),
(11, 1, 'Adepoju Rowland', '150203020', '4dsdsd@gmail.com', 3434343, '2018-05-11', '2018-05-20', 'dfvdfdfd', 'Dr Amire', '', 'dfvdfvddfv', '258890.png', 'rowland', '2018-05-10 00:32:20'),
(12, 1, 'seyi balogun', '150203012', 'seyi@gmail.com', 0, '2018-05-01', '2018-07-31', 'Crawfor University', 'any name', 'Abimbolu Oluyemi', 'texas', '212732.jpg', 'seyi', '2018-05-11 14:27:53'),
(13, 1, 'Obasa Kehinde', '140203030', 'obasa@gamil.com', 2147483647, '2018-05-01', '2018-05-31', 'Acoed', 'Dr Afolabi', 'Abimbolu Oluyemi', 'Unileva', '850644.jpg', 'obasa', '2018-05-22 11:56:15'),
(14, 1, 'Obasa Taiwo', '140203031', 'obasa@gamil.com', 2147483647, '2018-05-01', '2018-05-31', 'Acoed', 'Dr Afolabi', 'Abimbolu Oluyemi', 'Unileva', '368887.png', 'obasa', '2018-05-22 11:57:33'),
(15, 1, 'Obasa Afolabi', '140203032', 'obasa@gamil.com', 2147483647, '2018-05-01', '2018-05-31', 'Acoed', 'Dr Afolabi', 'Abimbolu Oluyemi', 'Unileva', '809700.jpg', 'obasa', '2018-05-22 12:00:29'),
(17, 2, 'Afolabi Bello', 'bello@gmail.com', 'bello@gmail.com', 2147483647, '', '', '', '', '', 'Crawford', '', 'bello', '2018-05-22 16:02:13'),
(18, 2, 'Dr Amire', 'amire@gmail.com', 'amire@gmail.com', 2147483647, '', '', '', '', '', 'Crawford', '', 'amire', '2018-05-22 16:03:47'),
(19, 1, 'Ogunnuku Tuemi', '140203020', 'tuemi@gmail.com', 2147483647, '2018-05-21', '2018-05-27', 'ACOED', 'Dr Amire', '', 'Unileva', '651838.jpg', 'tuemi', '2018-05-22 16:29:44'),
(20, 1, 'Aluko Bimpe', '140203017', 'bimpe@gmail.com', 2147483647, '2018-05-21', '2018-05-27', 'Laspotech', 'Dr Amire', 'Abimbolu Oluyemi', 'VIJU', '896100.jpg', 'bimpe', '2018-05-22 16:40:35'),
(21, 2, 'Adekunle Bunmi Arinola ', 'nalefashionhouse@gmail.com', 'nalefashionhouse@gmail.com', 2147483647, '', '', '', '', '', 'Nestel', '', 'bunmi', '2018-05-25 09:27:00'),
(22, 0, 'Oluwatobi Samuel Kilani', 'tamaradoubrah@gmail.com', 'tamaradoubrah@gmail.com', 2147483647, '', '', '', '', '', 'Nestel', '', 'samuel', '2018-05-25 09:28:18'),
(23, 0, 'Ogunnuku Tuemi', 'tamaradoubrah@gmail.com', 'tamaradoubrah@gmail.com', 2147483647, '', '', '', '', '', 'Cowbel', '', 'tuemi', '2018-05-25 09:28:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(80) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(80) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(80) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
