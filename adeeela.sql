-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2018 at 02:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adeeela`
--

-- --------------------------------------------------------

--
-- Table structure for table `agencies`
--

CREATE TABLE `agencies` (
  `agency_id` int(11) NOT NULL,
  `agency_name_english` varchar(100) NOT NULL,
  `agency_name_arabic` varchar(100) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `owner_ar` varchar(50) NOT NULL,
  `ownphone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `agencies`
--

INSERT INTO `agencies` (`agency_id`, `agency_name_english`, `agency_name_arabic`, `owner`, `owner_ar`, `ownphone`) VALUES
(24, '', '2242bf9890e14f4630d2772697f9e8b2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(11) NOT NULL,
  `passenger_name` varchar(100) DEFAULT NULL,
  `passenger_phone` varchar(50) DEFAULT NULL,
  `set_num` int(11) DEFAULT NULL,
  `trip_id` int(11) NOT NULL,
  `trip_des` varchar(100) NOT NULL,
  `booking_date` varchar(100) NOT NULL,
  `booking_time` varchar(50) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_reserved` date NOT NULL,
  `time_res` time NOT NULL,
  `t_price` varchar(50) NOT NULL,
  `payment_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_id`, `passenger_name`, `passenger_phone`, `set_num`, `trip_id`, `trip_des`, `booking_date`, `booking_time`, `agency_id`, `user_id`, `date_reserved`, `time_res`, `t_price`, `payment_status`) VALUES
(22, 'ahmed ishag mohamed alobaid', '0962266964', 19, 12, '11', '24 September, 2018', '12:00', 23, 12, '2018-09-22', '10:47:33', '522', 1),
(23, 'ahmed ishag mohamed alobaid', '0962266964', 19, 12, '11', '24 September, 2018', '12:00', 23, 12, '2018-09-22', '16:38:02', '522', 0),
(24, 'ahmed ishag mohamed alobaid', '0962266964', 16, 12, '11', '24 September, 2018', '12:00', 23, 12, '2018-09-29', '09:30:58', '522', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buss`
--

CREATE TABLE `buss` (
  `bus_id` int(11) NOT NULL,
  `Agency_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `bus_seat_num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buss`
--

INSERT INTO `buss` (`bus_id`, `Agency_id`, `photo`, `bus_seat_num`) VALUES
(1, 17, 'Capture001.png', 42),
(2, 18, 'Capture001.png', 45),
(3, 23, 'WIN_20180828_09_10_36_Pro.jpg', 56);

-- --------------------------------------------------------

--
-- Table structure for table `bus_set`
--

CREATE TABLE `bus_set` (
  `trip_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `set_1` int(11) NOT NULL,
  `set_2` int(11) NOT NULL,
  `set_3` int(11) NOT NULL,
  `set_4` int(11) NOT NULL,
  `set_5` int(11) NOT NULL,
  `set_6` int(11) NOT NULL,
  `set_7` int(11) NOT NULL,
  `set_8` int(11) NOT NULL,
  `set_9` int(11) NOT NULL,
  `set_10` int(11) NOT NULL,
  `set_11` int(11) NOT NULL,
  `set_12` int(11) NOT NULL,
  `set_13` int(11) NOT NULL,
  `set_14` int(11) NOT NULL,
  `set_15` int(11) NOT NULL,
  `set_16` int(11) NOT NULL,
  `set_17` int(11) NOT NULL,
  `set_18` int(11) NOT NULL,
  `set_19` int(11) NOT NULL,
  `set_20` int(11) NOT NULL,
  `set_21` int(11) NOT NULL,
  `set_22` int(11) NOT NULL,
  `set_23` int(11) NOT NULL,
  `set_24` int(11) NOT NULL,
  `set_25` int(11) NOT NULL,
  `set_26` int(11) NOT NULL,
  `set_27` int(11) NOT NULL,
  `set_28` int(11) NOT NULL,
  `set_29` int(11) NOT NULL,
  `set_30` int(11) NOT NULL,
  `set_31` int(11) NOT NULL,
  `set_32` int(11) NOT NULL,
  `set_33` int(11) NOT NULL,
  `set_34` int(11) NOT NULL,
  `set_35` int(11) NOT NULL,
  `set_36` int(11) NOT NULL,
  `set_37` int(11) NOT NULL,
  `set_38` int(11) NOT NULL,
  `set_39` int(11) NOT NULL,
  `set_40` int(11) NOT NULL,
  `set_41` int(11) NOT NULL,
  `set_42` int(11) NOT NULL,
  `set_43` int(11) NOT NULL,
  `set_44` int(11) NOT NULL,
  `set_45` int(11) NOT NULL,
  `set_46` int(11) NOT NULL,
  `set_47` int(11) NOT NULL,
  `set_48` int(11) NOT NULL,
  `set_49` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bus_set`
--

INSERT INTO `bus_set` (`trip_id`, `bus_id`, `set_1`, `set_2`, `set_3`, `set_4`, `set_5`, `set_6`, `set_7`, `set_8`, `set_9`, `set_10`, `set_11`, `set_12`, `set_13`, `set_14`, `set_15`, `set_16`, `set_17`, `set_18`, `set_19`, `set_20`, `set_21`, `set_22`, `set_23`, `set_24`, `set_25`, `set_26`, `set_27`, `set_28`, `set_29`, `set_30`, `set_31`, `set_32`, `set_33`, `set_34`, `set_35`, `set_36`, `set_37`, `set_38`, `set_39`, `set_40`, `set_41`, `set_42`, `set_43`, `set_44`, `set_45`, `set_46`, `set_47`, `set_48`, `set_49`) VALUES
(12, 3, 3, 3, 3, 3, 3, 3, 3, 2, 3, 4, 3, 3, 3, 3, 3, 3, 1, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(10, 1, 3, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 3, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4),
(10, 1, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `city_id` int(11) NOT NULL,
  `name_arabic` varchar(100) NOT NULL,
  `name_english` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `name_arabic`, `name_english`) VALUES
(8, 'الخرطوم', 'khartom'),
(9, 'Ø§Ù…Ø¯Ø±Ù…Ø§Ù†', 'omderman'),
(10, 'الخرطوم', 'khartom');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(26) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_gender` varchar(20) NOT NULL,
  `customer_password` varchar(255) NOT NULL,
  `customer_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_phone`, `customer_email`, `customer_gender`, `customer_password`, `customer_picture`) VALUES
(12, 'ahmed ishag mohamed alobiad', '0962266964', 'ahmedptishag@gmail.com', 'M', '202cb962ac59075b964b07152d234b70', 'IMG_0067.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `day_id` int(11) NOT NULL,
  `day_arabic` varchar(50) NOT NULL,
  `day_english` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`day_id`, `day_arabic`, `day_english`) VALUES
(1, 'السبت', 'saturday'),
(2, 'الأحد', 'sunday'),
(3, 'الإثنين', 'monday'),
(4, 'الثلاثاء', 'tuesday'),
(5, 'الإربعاء', 'wednesday'),
(6, 'الخميس', 'thrusday'),
(7, 'الجمعة', 'Friday');

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `desitination_id` int(11) NOT NULL,
  `from` varchar(100) NOT NULL,
  `to` varchar(100) NOT NULL,
  `from_ar` varchar(100) NOT NULL,
  `to_ar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`desitination_id`, `from`, `to`, `from_ar`, `to_ar`) VALUES
(10, 'omderman', 'omderman', 'امدرمان', 'امدرمان'),
(11, 'khartom', 'omderman', '???????', 'امدرمان'),
(12, 'omderman', 'omderman', 'امدرمان', 'امدرمان');

-- --------------------------------------------------------

--
-- Table structure for table `salepoint`
--

CREATE TABLE `salepoint` (
  `sp_id` int(11) NOT NULL,
  `name_eng` varchar(50) NOT NULL,
  `name_ar` varchar(50) NOT NULL,
  `address_eng` varchar(100) NOT NULL,
  `address_ar` varchar(100) NOT NULL,
  `phone_num` varchar(100) NOT NULL,
  `salep_respons_en` varchar(50) NOT NULL,
  `salep_respons_ar` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salepoint`
--

INSERT INTO `salepoint` (`sp_id`, `name_eng`, `name_ar`, `address_eng`, `address_ar`, `phone_num`, `salep_respons_en`, `salep_respons_ar`) VALUES
(1, 'uni of kh', 'جامعة الخرطوم', 'uni of kh street', 'شارع جامعة الخرطوم', '0962266968', 'Ahmed Mohmaed Ahmed', 'احمد محمد احكد'),
(2, 'alnile', 'النيل', 'khartoum', 'الخرطوم', '0962266964', 'Ahmed Mohmaed Ahmed', 'احكد محمد احكد');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `time_id` int(11) NOT NULL,
  `trip_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `trip_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `time_id` varchar(100) NOT NULL,
  `day_id` int(11) NOT NULL,
  `trip_date` varchar(100) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `trip_price` int(11) NOT NULL,
  `destination_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `agency_id`, `time_id`, `day_id`, `trip_date`, `bus_id`, `trip_price`, `destination_id`) VALUES
(9, 21, '12:15', 1, '17,09,2018', 1, 10010, 10),
(10, 23, '', 1, '30 September, 2018', 1, 150, 10),
(11, 0, '12:00', 1, '30 September, 2018', 3, 200, 11),
(12, 23, '12:00', 3, '24 September, 2018', 3, 522, 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `usertype` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `profile_image` varchar(100) NOT NULL,
  `agency_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `usertype`, `username`, `phone`, `pass`, `email`, `f_name`, `l_name`, `profile_image`, `agency_id`) VALUES
(1, 1, 'ØªØ§ØªØ§ØªÙ†Ø§Ù†ØªØ§', '66685876876', 'd98d7ba88d397840c4365cbe52bb6709', 'ahmedptishag@gmail.com', 'لتالاتلتال', 'تالتلتاتن', '', 0),
(2, 1, 'ØªØ§ØªØ§ØªÙ†Ø§Ù†ØªØ§', '66685876876', 'd98d7ba88d397840c4365cbe52bb6709', 'ahmedptishag@gmail.com', 'لتالاتلتال', 'تالتلتاتن', 'IMG-20180914-WA0000.jpg', 0),
(3, 1, 'ahmed', '0962266964', '202cb962ac59075b964b07152d234b70', 'ahmedptishag@gmail.com', 'Ø§Ø­Ù…Ø¯', 'Ø§Ù„Ø¹Ø¨ÙŠØ¯', 'IMG_0396.JPG', 0),
(4, 1, 'mufasa', '0962266965', '202cb962ac59075b964b07152d234b70', 'adam@gmail.com', 'mostfa', 'admam', 'AXNN2075.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agencies`
--
ALTER TABLE `agencies`
  ADD PRIMARY KEY (`agency_id`),
  ADD UNIQUE KEY `agency_name_english` (`agency_name_english`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `buss`
--
ALTER TABLE `buss`
  ADD PRIMARY KEY (`bus_id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`day_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`desitination_id`);

--
-- Indexes for table `salepoint`
--
ALTER TABLE `salepoint`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`time_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agencies`
--
ALTER TABLE `agencies`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `buss`
--
ALTER TABLE `buss`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `day_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `desitination_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `salepoint`
--
ALTER TABLE `salepoint`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `time_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
