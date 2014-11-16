-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 16, 2014 at 11:02 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `VC_Fund`
--

-- --------------------------------------------------------

--
-- Table structure for table `UCLA`
--

CREATE TABLE `UCLA` (
  `Name` varchar(500) NOT NULL,
  `ID` int(10) NOT NULL,
  `Bio` varchar(5000) NOT NULL,
  `Followers` int(20) NOT NULL,
  `AngelList_URL` varchar(500) NOT NULL,
  `Image` varchar(700) NOT NULL,
  `Blog_URL` varchar(500) NOT NULL,
  `Online_Bio_URL` varchar(500) NOT NULL,
  `Twitter_URL` varchar(500) NOT NULL,
  `Facebook_URL` varchar(500) NOT NULL,
  `LinkedIn_URL` varchar(500) NOT NULL,
  `AboutMe_URL` varchar(500) NOT NULL,
  `GitHub_URL` varchar(500) NOT NULL,
  `Dribbble_URL` varchar(500) NOT NULL,
  `Behance_URL` varchar(500) NOT NULL,
  `Resume_URL` varchar(500) NOT NULL,
  `What_Ive_built` varchar(10000) NOT NULL,
  `What_I_do` varchar(5000) CHARACTER SET utf8 NOT NULL,
  `Criteria` varchar(5000) NOT NULL,
  `Locations` varchar(5000) NOT NULL,
  `Roles` varchar(5000) NOT NULL,
  `Skills` varchar(5000) NOT NULL,
  `Investor` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `UCLA`
--
ALTER TABLE `UCLA`
 ADD PRIMARY KEY (`ID`);
