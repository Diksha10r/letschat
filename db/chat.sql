-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2021 at 06:28 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chatid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `chatroomid` int(11) NOT NULL,
  `message` varchar(200) NOT NULL,
  `chat_date` datetime NOT NULL,
  PRIMARY KEY (`chatid`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chatid`, `userid`, `chatroomid`, `message`, `chat_date`) VALUES
(1, 1, 4, 'hello everyone', '2021-03-12 13:03:18'),
(2, 1, 4, 'nice to meet you all', '2021-03-12 13:03:46'),
(4, 3, 4, 'hey how you doing!', '2021-03-12 13:07:27'),
(5, 3, 4, 'long time no see', '2021-03-12 13:07:36'),
(6, 3, 4, 'hehe', '2021-03-12 13:08:34'),
(7, 3, 5, 'hey everyone', '2021-03-12 13:09:53'),
(8, 3, 5, 'long time ha', '2021-03-12 13:10:06'),
(9, 4, 6, 'hello akatsuki!!!', '2021-03-12 16:43:09'),
(10, 4, 4, 'hello', '2021-03-12 16:43:52'),
(12, 1, 6, 'HEY', '2021-03-12 17:20:20'),
(13, 1, 6, 'HOW YOU DOING!!!!', '2021-03-12 17:20:34'),
(14, 1, 6, ':)', '2021-03-12 17:21:13'),
(15, 4, 6, 'I am good what about you?', '2021-03-12 17:40:13'),
(16, 4, 5, 'Hey!! how are you?', '2021-03-12 17:48:34'),
(17, 4, 5, 'what about this party plan?', '2021-03-12 17:48:52'),
(18, 5, 6, 'hey everyone!!!', '2021-03-13 00:11:22');

-- --------------------------------------------------------

--
-- Table structure for table `chatroom`
--

DROP TABLE IF EXISTS `chatroom`;
CREATE TABLE IF NOT EXISTS `chatroom` (
  `chatroomid` int(11) NOT NULL AUTO_INCREMENT,
  `chat_name` varchar(60) NOT NULL,
  `date_created` datetime NOT NULL,
  `chat_password` varchar(30) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`chatroomid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatroom`
--

INSERT INTO `chatroom` (`chatroomid`, `chat_name`, `date_created`, `chat_password`, `userid`) VALUES
(4, 'avengers', '2021-03-12 13:02:32', 'avengers', 1),
(5, 'party plan', '2021-03-12 13:09:11', 'partyplan', 3),
(6, 'akatsuki', '2021-03-12 16:42:57', '', 4);

-- --------------------------------------------------------

--
-- Table structure for table `chat_member`
--

DROP TABLE IF EXISTS `chat_member`;
CREATE TABLE IF NOT EXISTS `chat_member` (
  `chat_memberid` int(11) NOT NULL AUTO_INCREMENT,
  `chatroomid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`chat_memberid`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat_member`
--

INSERT INTO `chat_member` (`chat_memberid`, `chatroomid`, `userid`) VALUES
(4, 4, 1),
(5, 4, 2),
(6, 4, 3),
(7, 5, 3),
(8, 5, 1),
(9, 5, 2),
(10, 6, 4),
(11, 6, 2),
(12, 4, 4),
(14, 6, 3),
(15, 6, 1),
(16, 5, 4),
(17, 6, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `uname` varchar(60) NOT NULL,
  `Photo` blob,
  `access` int(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `uname`, `Photo`, `access`) VALUES
(1, 'admin', 'admin', 'Admin', 0x75706c6f61642f64696b736861315f313631353535303234382e706e67, 1),
(3, 'barkha', 'barkha', 'Barkha', NULL, 2),
(4, 'diksha', 'dik', 'Diksha', 0x75706c6f61642f64696b7368615f313631353535303938312e706e67, 2),
(5, 'riya', 'riya', 'Riya', 0x75706c6f61642f726979615f313631353537343338362e6a7067, 2),
(6, 'raj', 'raj', 'Raj', NULL, 2),
(7, 'riya', 'riya', 'Riya', NULL, 2),
(8, 'riya', 'riya', 'Riya', NULL, 2),
(9, '', '', '', NULL, 2),
(10, 'riya', 'riya', 'Riya', NULL, 2),
(11, 'fdf fd', 'ff', 'ff', NULL, 2),
(12, 'riya', 'Riya@1999', 'Riya', NULL, 2),
(14, 'riya', 'Riya@123', 'Riya', NULL, 2),
(21, 'riya', 'Riya@123', 'Riya', NULL, 2),
(22, 'riya', 'Riya@123', 'Riya', NULL, 2),
(23, 'diya', 'Diya@2007', 'Diya', NULL, 2),
(24, 'divya', 'Divya@2017', 'Divya', NULL, 2),
(25, 'ram', 'Rram@000', 'Ram', NULL, 2),
(26, 'nick', 'Nick@1996', 'Nick', NULL, 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
