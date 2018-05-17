-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 23, 2016 at 08:02 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cascades_clinic_uno`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zip` int(100) NOT NULL,
  `address_two` varchar(100) NOT NULL,
  `city_two` varchar(100) NOT NULL,
  `state_two` varchar(100) NOT NULL,
  `zip_two` int(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `contact` varchar(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `employer` varchar(100) NOT NULL,
  `employer_address` varchar(100) NOT NULL,
  `employer_address_two` varchar(100) NOT NULL,
  `work_phone` varchar(100) NOT NULL,
  `contact_work` varchar(100) NOT NULL,
  `spouse_first_name` varchar(100) NOT NULL,
  `spouse_last_name` varchar(100) NOT NULL,
  `spouse_age` int(11) NOT NULL,
  `spouse_dob` date NOT NULL,
  `spouse_occupation` varchar(100) NOT NULL,
  `spouse_employer` varchar(100) NOT NULL,
  `spouse_phone` varchar(100) NOT NULL,
  `relative_dob` date NOT NULL,
  `relative_first_name` varchar(100) NOT NULL,
  `relative_last_name` varchar(100) NOT NULL,
  `relative_age` int(11) NOT NULL,
  `ec_first_name` varchar(100) NOT NULL,
  `ec_last_name` varchar(100) NOT NULL,
  `ec_address` varchar(100) NOT NULL,
  `ec_phone` varchar(100) NOT NULL,
  `primary_physician` varchar(100) NOT NULL,
  `primary_physician_phone` varchar(100) NOT NULL,
  `meds` varchar(100) NOT NULL,
  `history` varchar(100) NOT NULL,
  `previous_counselor` varchar(100) NOT NULL,
  `reason` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `first_name`, `last_name`, `age`, `dob`, `address`, `city`, `state`, `zip`, `address_two`, `city_two`, `state_two`, `zip_two`, `phone`, `contact`, `email`, `occupation`, `employer`, `employer_address`, `employer_address_two`, `work_phone`, `contact_work`, `spouse_first_name`, `spouse_last_name`, `spouse_age`, `spouse_dob`, `spouse_occupation`, `spouse_employer`, `spouse_phone`, `relative_dob`, `relative_first_name`, `relative_last_name`, `relative_age`, `ec_first_name`, `ec_last_name`, `ec_address`, `ec_phone`, `primary_physician`, `primary_physician_phone`, `meds`, `history`, `previous_counselor`, `reason`) VALUES
(1, 'Tyler', 'Radabaugh', 0, '0000-00-00', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(2, 'lksdjfl', 'ljsfoiwe', 0, '0000-00-00', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(3, 'fsdfsl', 'fskefoko', 0, '0000-00-00', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', ''),
(4, 'billy', 'bob', 0, '0000-00-00', '', '', '', 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '0000-00-00', '', '', '', '0000-00-00', '', '', 0, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(9, 'asdasd'),
(2, 'Director');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `user_name`, `password`, `role_id`) VALUES
(1, 'Developer', 'Admin', 'admin', 'password', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
