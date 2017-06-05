-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-06-05 12:14:38
-- 服务器版本： 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '',
  `sex` enum('男','女','保密','') NOT NULL DEFAULT '保密',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `reg_time` int(10) NOT NULL DEFAULT '0',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0',
  `last_login_time` int(10) NOT NULL DEFAULT '0',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `phone`, `sex`, `birthday`, `qq`, `reg_time`, `reg_ip`, `last_login_time`, `last_login_ip`, `status`) VALUES
(1, 'admin', '96e79218965eb72c92a549dd5a330112', '1@qq.com', '13888888881', '保密', '0000-00-00', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE `message` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `notice`
--

CREATE TABLE `notice` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `notice`
--

INSERT INTO `notice` (`id`, `title`, `content`, `admin_id`) VALUES
(94, 'å…¬å‘Š01-æ ‡é¢˜', '&lt;p&gt;å•Šæ‰‹åŠ¨é˜€æ‰‹åŠ¨é˜€&lt;/p&gt;', 1),
(95, 'å…¬å‘Š02-æ ‡é¢˜', '&lt;p&gt;å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-å…¬å‘Š02-&lt;/p&gt;', 1);

-- --------------------------------------------------------

--
-- 表的结构 `station`
--

CREATE TABLE `station` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `station`
--

INSERT INTO `station` (`id`, `title`) VALUES
(1, 'Java工程师'),
(2, 'C工程师'),
(3, 'C++工程师'),
(4, 'C#工程师'),
(5, 'Python工程师'),
(6, 'Visual Basic工程师'),
(7, 'PHP工程师'),
(8, 'Javascript工程师'),
(9, 'Swift');

-- --------------------------------------------------------

--
-- 表的结构 `theme`
--

CREATE TABLE `theme` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `admin_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `titem`
--

CREATE TABLE `titem` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT '0',
  `tid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `phone` varchar(11) NOT NULL DEFAULT '',
  `sex` enum('男','女','保密') NOT NULL DEFAULT '保密',
  `occupation` varchar(30) NOT NULL DEFAULT '',
  `birthday` date NOT NULL DEFAULT '0000-00-00',
  `qq` varchar(20) NOT NULL DEFAULT '',
  `reg_time` int(10) NOT NULL DEFAULT '0',
  `reg_ip` bigint(20) NOT NULL DEFAULT '0',
  `last_login_time` int(10) NOT NULL DEFAULT '0',
  `last_login_ip` bigint(20) NOT NULL DEFAULT '0',
  `status` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `phone`, `sex`, `occupation`, `birthday`, `qq`, `reg_time`, `reg_ip`, `last_login_time`, `last_login_ip`, `status`) VALUES
(13, 'yyh1', '96e79218965eb72c92a549dd5a330112', '1@qq.com', '13888888881', '保密', '1', '0000-00-00', '', 1496388107, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `votelist`
--

CREATE TABLE `votelist` (
  `tid` int(10) UNSIGNED NOT NULL,
  `iid` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `titem`
--
ALTER TABLE `titem`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `votelist`
--
ALTER TABLE `votelist`
  ADD KEY `tid` (`tid`),
  ADD KEY `iid` (`iid`),
  ADD KEY `user_id` (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- 使用表AUTO_INCREMENT `message`
--
ALTER TABLE `message`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
--
-- 使用表AUTO_INCREMENT `station`
--
ALTER TABLE `station`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- 使用表AUTO_INCREMENT `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `titem`
--
ALTER TABLE `titem`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- 限制导出的表
--

--
-- 限制表 `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE;

--
-- 限制表 `notice`
--
ALTER TABLE `notice`
  ADD CONSTRAINT `notice_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`) ON UPDATE CASCADE;

--
-- 限制表 `theme`
--
ALTER TABLE `theme`
  ADD CONSTRAINT `theme_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`id`);

--
-- 限制表 `titem`
--
ALTER TABLE `titem`
  ADD CONSTRAINT `titem_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `votelist`
--
ALTER TABLE `votelist`
  ADD CONSTRAINT `votelist_ibfk_1` FOREIGN KEY (`tid`) REFERENCES `theme` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votelist_ibfk_2` FOREIGN KEY (`iid`) REFERENCES `titem` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `votelist_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
