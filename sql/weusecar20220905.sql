-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 03, 2022 at 06:51 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weusecar`
--

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_name`) VALUES
(1, 'Toyota'),
(2, 'HONDA'),
(3, 'MITSUBISHI'),
(4, 'FORD'),
(5, 'MAZDA'),
(6, 'MG'),
(7, 'ISUZU'),
(8, 'Hyundai'),
(9, 'NISSAN');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `car_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `car_ver` varchar(50) NOT NULL,
  `car_years` varchar(10) NOT NULL,
  `car_price` varchar(50) NOT NULL,
  `car_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`car_id`, `brand_id`, `car_ver`, `car_years`, `car_price`, `car_detail`) VALUES
(1, 1, 'Mitsubishi Pajero-Sport', '2018', '840000', '2018 Mitsubishi Pajero-Sport 2.4 Gls Limited  เกียร์อัตโนมัติ 54,773 กม.  ดีเซล');

-- --------------------------------------------------------

--
-- Table structure for table `chk_alloy`
--

CREATE TABLE `chk_alloy` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_alloy_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_alloy`
--

INSERT INTO `chk_alloy` (`goods_id`, `goods_chk_alloy_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_brand_symbol`
--

CREATE TABLE `chk_car_brand_symbol` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_brand_symbol_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_car_brand_symbol`
--

INSERT INTO `chk_car_brand_symbol` (`goods_id`, `goods_chk_car_brand_symbol_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_door`
--

CREATE TABLE `chk_car_door` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_door_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_car_door`
--

INSERT INTO `chk_car_door` (`goods_id`, `goods_chk_car_door_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_floor`
--

CREATE TABLE `chk_car_floor` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_floor_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_car_floor`
--

INSERT INTO `chk_car_floor` (`goods_id`, `goods_chk_car_floor_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_frame`
--

CREATE TABLE `chk_car_frame` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_frame_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_car_frame`
--

INSERT INTO `chk_car_frame` (`goods_id`, `goods_chk_car_frame_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1),
(44, 5, 1),
(44, 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_lights`
--

CREATE TABLE `chk_car_lights` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_lights_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_car_lights`
--

INSERT INTO `chk_car_lights` (`goods_id`, `goods_chk_car_lights_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_roof`
--

CREATE TABLE `chk_car_roof` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_roof_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_car_roof`
--

INSERT INTO `chk_car_roof` (`goods_id`, `goods_chk_car_roof_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_ceiling`
--

CREATE TABLE `chk_ceiling` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ceiling_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_ceiling`
--

INSERT INTO `chk_ceiling` (`goods_id`, `goods_chk_ceiling_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_ceiling_light`
--

CREATE TABLE `chk_ceiling_light` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ceiling_light_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_ceiling_light`
--

INSERT INTO `chk_ceiling_light` (`goods_id`, `goods_chk_ceiling_light_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_cooling_system`
--

CREATE TABLE `chk_cooling_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_cooling_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_cooling_system`
--

INSERT INTO `chk_cooling_system` (`goods_id`, `goods_chk_cooling_system_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_engine_and_gear`
--

CREATE TABLE `chk_engine_and_gear` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_engine_and_gear_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_engine_and_gear`
--

INSERT INTO `chk_engine_and_gear` (`goods_id`, `goods_chk_engine_and_gear_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_engine_compartment_wall`
--

CREATE TABLE `chk_engine_compartment_wall` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_engine_compartment_wall_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_engine_compartment_wall`
--

INSERT INTO `chk_engine_compartment_wall` (`goods_id`, `goods_chk_engine_compartment_wall_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_entertainment_control_system`
--

CREATE TABLE `chk_entertainment_control_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_entertainment_control_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_entertainment_control_system`
--

INSERT INTO `chk_entertainment_control_system` (`goods_id`, `goods_chk_entertainment_control_system_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_fog_lamp`
--

CREATE TABLE `chk_fog_lamp` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_fog_lamp_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_fog_lamp`
--

INSERT INTO `chk_fog_lamp` (`goods_id`, `goods_chk_fog_lamp_id`, `goods_chk_status_id`) VALUES
(0, 1, 1),
(0, 2, 1),
(21, 1, 1),
(21, 2, 1),
(22, 1, 1),
(22, 2, 1),
(23, 1, 1),
(23, 2, 1),
(24, 1, 1),
(24, 2, 1),
(25, 1, 1),
(25, 2, 1),
(26, 1, 1),
(26, 2, 1),
(27, 1, 1),
(27, 2, 1),
(28, 1, 1),
(28, 2, 1),
(40, 1, 1),
(40, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_front_beam`
--

CREATE TABLE `chk_front_beam` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_beam_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_front_beam`
--

INSERT INTO `chk_front_beam` (`goods_id`, `goods_chk_front_beam_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_front_fender`
--

CREATE TABLE `chk_front_fender` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_fender_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_front_fender`
--

INSERT INTO `chk_front_fender` (`goods_id`, `goods_chk_front_fender_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_front_light`
--

CREATE TABLE `chk_front_light` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_light_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_front_light`
--

INSERT INTO `chk_front_light` (`goods_id`, `goods_chk_front_light_id`, `goods_chk_status_id`) VALUES
(0, 1, 1),
(0, 2, 1),
(21, 1, 1),
(21, 2, 1),
(22, 1, 1),
(22, 2, 1),
(23, 1, 1),
(23, 2, 1),
(24, 1, 1),
(24, 2, 1),
(25, 1, 1),
(25, 2, 1),
(26, 1, 1),
(26, 2, 1),
(27, 1, 1),
(27, 2, 1),
(28, 1, 1),
(28, 2, 1),
(40, 1, 1),
(40, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(41, 1, 1),
(41, 2, 1),
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_handbrake`
--

CREATE TABLE `chk_handbrake` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_handbrake_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_handbrake`
--

INSERT INTO `chk_handbrake` (`goods_id`, `goods_chk_handbrake_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_handrail`
--

CREATE TABLE `chk_handrail` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_handrail_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_handrail`
--

INSERT INTO `chk_handrail` (`goods_id`, `goods_chk_handrail_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_instrument_panel`
--

CREATE TABLE `chk_instrument_panel` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_instrument_panel_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_instrument_panel`
--

INSERT INTO `chk_instrument_panel` (`goods_id`, `goods_chk_instrument_panel_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_lock_system`
--

CREATE TABLE `chk_lock_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_lock_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_lock_system`
--

INSERT INTO `chk_lock_system` (`goods_id`, `goods_chk_lock_system_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_multimedia_system`
--

CREATE TABLE `chk_multimedia_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_multimedia_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_multimedia_system`
--

INSERT INTO `chk_multimedia_system` (`goods_id`, `goods_chk_multimedia_system_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_outside`
--

CREATE TABLE `chk_outside` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_outside_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_outside`
--

INSERT INTO `chk_outside` (`goods_id`, `goods_chk_outside_id`, `goods_chk_status_id`) VALUES
(0, 1, 1),
(0, 2, 1),
(0, 3, 1),
(0, 4, 1),
(21, 1, 1),
(21, 2, 1),
(21, 3, 1),
(21, 4, 1),
(22, 1, 1),
(22, 2, 2),
(22, 3, 1),
(22, 4, 1),
(23, 1, 1),
(23, 2, 2),
(23, 3, 1),
(23, 4, 1),
(24, 1, 1),
(24, 2, 2),
(24, 3, 1),
(24, 4, 1),
(25, 1, 1),
(25, 2, 2),
(25, 3, 1),
(25, 4, 1),
(26, 1, 1),
(26, 2, 2),
(26, 3, 1),
(26, 4, 1),
(27, 1, 1),
(27, 2, 2),
(27, 3, 1),
(27, 4, 1),
(28, 1, 1),
(28, 2, 2),
(28, 3, 1),
(28, 4, 1),
(40, 1, 1),
(40, 2, 1),
(40, 3, 1),
(40, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_powertrain`
--

CREATE TABLE `chk_powertrain` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_powertrain_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_powertrain`
--

INSERT INTO `chk_powertrain` (`goods_id`, `goods_chk_powertrain_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1),
(44, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_rear_fender`
--

CREATE TABLE `chk_rear_fender` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_rear_fender_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_rear_fender`
--

INSERT INTO `chk_rear_fender` (`goods_id`, `goods_chk_rear_fender_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_ruby_bumper`
--

CREATE TABLE `chk_ruby_bumper` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ruby_bumper_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_ruby_bumper`
--

INSERT INTO `chk_ruby_bumper` (`goods_id`, `goods_chk_ruby_bumper_id`, `goods_chk_status_id`) VALUES
(0, 1, 1),
(0, 2, 1),
(0, 3, 1),
(21, 1, 1),
(21, 2, 1),
(21, 3, 1),
(22, 1, 1),
(22, 2, 1),
(22, 3, 1),
(23, 1, 1),
(23, 2, 1),
(23, 3, 1),
(24, 1, 1),
(24, 2, 1),
(24, 3, 1),
(25, 1, 1),
(25, 2, 1),
(25, 3, 1),
(26, 1, 1),
(26, 2, 1),
(26, 3, 1),
(27, 1, 1),
(27, 2, 1),
(27, 3, 1),
(28, 1, 1),
(28, 2, 1),
(28, 3, 1),
(40, 1, 1),
(40, 2, 1),
(40, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(44, 1, 1),
(44, 2, 1),
(44, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_seat`
--

CREATE TABLE `chk_seat` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_seat_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_seat`
--

INSERT INTO `chk_seat` (`goods_id`, `goods_chk_seat_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_shock_absorber`
--

CREATE TABLE `chk_shock_absorber` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_shock_absorber_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_shock_absorber`
--

INSERT INTO `chk_shock_absorber` (`goods_id`, `goods_chk_shock_absorber_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_side_mirror`
--

CREATE TABLE `chk_side_mirror` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_side_mirror_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_side_mirror`
--

INSERT INTO `chk_side_mirror` (`goods_id`, `goods_chk_side_mirror_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_spec`
--

CREATE TABLE `chk_spec` (
  `goods_id` int(11) NOT NULL,
  `chk_spec_id` int(11) NOT NULL,
  `chk_spec_status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_spec`
--

INSERT INTO `chk_spec` (`goods_id`, `chk_spec_id`, `chk_spec_status`) VALUES
(0, 1, 2),
(20, 0, 1),
(20, 1, 1),
(20, 2, 1),
(20, 3, 1),
(20, 4, 1),
(20, 5, 1),
(20, 6, 1),
(20, 7, 1),
(20, 8, 1),
(20, 9, 1),
(20, 10, 1),
(20, 11, 1),
(20, 12, 1),
(20, 13, 1),
(20, 14, 1),
(20, 15, 1),
(20, 16, 1),
(20, 17, 1),
(20, 18, 1),
(20, 19, 1),
(20, 20, 2),
(20, 21, 2),
(20, 22, 2),
(20, 23, 2),
(20, 24, 2),
(20, 25, 2),
(20, 26, 2),
(20, 27, 2),
(20, 28, 2),
(20, 29, 2),
(20, 30, 2),
(20, 31, 2),
(20, 32, 2),
(20, 33, 2),
(20, 34, 2),
(20, 35, 2),
(20, 36, 2),
(20, 37, 2),
(20, 38, 2),
(20, 39, 2),
(21, 0, 1),
(21, 1, 1),
(21, 2, 1),
(21, 3, 1),
(21, 4, 1),
(21, 5, 1),
(21, 6, 1),
(21, 7, 1),
(21, 8, 1),
(21, 9, 1),
(21, 10, 1),
(21, 11, 1),
(21, 12, 1),
(21, 13, 1),
(21, 14, 1),
(21, 15, 1),
(21, 16, 1),
(21, 17, 1),
(21, 18, 1),
(21, 19, 1),
(21, 20, 2),
(21, 21, 2),
(21, 22, 2),
(21, 23, 2),
(21, 24, 2),
(21, 25, 2),
(21, 26, 2),
(21, 27, 2),
(21, 28, 2),
(21, 29, 2),
(21, 30, 2),
(21, 31, 2),
(21, 32, 2),
(21, 33, 2),
(21, 34, 2),
(21, 35, 2),
(21, 36, 2),
(21, 37, 2),
(21, 38, 2),
(21, 39, 2),
(22, 0, 1),
(22, 1, 1),
(22, 2, 1),
(22, 3, 1),
(22, 4, 1),
(22, 5, 1),
(22, 6, 1),
(22, 7, 1),
(22, 8, 1),
(22, 9, 1),
(22, 10, 1),
(22, 11, 1),
(22, 12, 1),
(22, 13, 1),
(22, 14, 1),
(22, 15, 1),
(22, 16, 1),
(22, 17, 1),
(22, 18, 1),
(22, 19, 1),
(22, 20, 2),
(22, 21, 2),
(22, 22, 2),
(22, 23, 2),
(22, 24, 2),
(22, 25, 2),
(22, 26, 2),
(22, 27, 2),
(22, 28, 2),
(22, 29, 2),
(22, 30, 2),
(22, 31, 2),
(22, 32, 2),
(22, 33, 2),
(22, 34, 2),
(22, 35, 2),
(22, 36, 2),
(22, 37, 2),
(22, 38, 2),
(22, 39, 2),
(23, 0, 1),
(23, 1, 1),
(23, 2, 1),
(23, 3, 1),
(23, 4, 1),
(23, 5, 1),
(23, 6, 1),
(23, 7, 1),
(23, 8, 1),
(23, 9, 1),
(23, 10, 1),
(23, 11, 1),
(23, 12, 1),
(23, 13, 1),
(23, 14, 1),
(23, 15, 1),
(23, 16, 1),
(23, 17, 1),
(23, 18, 1),
(23, 19, 1),
(23, 20, 2),
(23, 21, 2),
(23, 22, 2),
(23, 23, 2),
(23, 24, 2),
(23, 25, 2),
(23, 26, 2),
(23, 27, 2),
(23, 28, 2),
(23, 29, 2),
(23, 30, 2),
(23, 31, 2),
(23, 32, 2),
(23, 33, 2),
(23, 34, 2),
(23, 35, 2),
(23, 36, 2),
(23, 37, 2),
(23, 38, 2),
(23, 39, 2),
(24, 0, 1),
(24, 1, 1),
(24, 2, 1),
(24, 3, 1),
(24, 4, 1),
(24, 5, 1),
(24, 6, 1),
(24, 7, 1),
(24, 8, 1),
(24, 9, 1),
(24, 10, 1),
(24, 11, 1),
(24, 12, 1),
(24, 13, 1),
(24, 14, 1),
(24, 15, 1),
(24, 16, 1),
(24, 17, 1),
(24, 18, 1),
(24, 19, 1),
(24, 20, 2),
(24, 21, 2),
(24, 22, 2),
(24, 23, 2),
(24, 24, 2),
(24, 25, 2),
(24, 26, 2),
(24, 27, 2),
(24, 28, 2),
(24, 29, 2),
(24, 30, 2),
(24, 31, 2),
(24, 32, 2),
(24, 33, 2),
(24, 34, 2),
(24, 35, 2),
(24, 36, 2),
(24, 37, 2),
(24, 38, 2),
(24, 39, 2),
(25, 0, 1),
(25, 1, 1),
(25, 2, 1),
(25, 3, 1),
(25, 4, 1),
(25, 5, 1),
(25, 6, 1),
(25, 7, 1),
(25, 8, 1),
(25, 9, 1),
(25, 10, 1),
(25, 11, 1),
(25, 12, 1),
(25, 13, 1),
(25, 14, 1),
(25, 15, 1),
(25, 16, 1),
(25, 17, 1),
(25, 18, 1),
(25, 19, 1),
(25, 20, 2),
(25, 21, 2),
(25, 22, 2),
(25, 23, 2),
(25, 24, 2),
(25, 25, 2),
(25, 26, 2),
(25, 27, 2),
(25, 28, 2),
(25, 29, 2),
(25, 30, 2),
(25, 31, 2),
(25, 32, 2),
(25, 33, 2),
(25, 34, 2),
(25, 35, 2),
(25, 36, 2),
(25, 37, 2),
(25, 38, 2),
(25, 39, 2),
(26, 0, 1),
(26, 1, 1),
(26, 2, 1),
(26, 3, 1),
(26, 4, 1),
(26, 5, 1),
(26, 6, 1),
(26, 7, 1),
(26, 8, 1),
(26, 9, 1),
(26, 10, 1),
(26, 11, 1),
(26, 12, 1),
(26, 13, 1),
(26, 14, 1),
(26, 15, 1),
(26, 16, 1),
(26, 17, 1),
(26, 18, 1),
(26, 19, 1),
(26, 20, 2),
(26, 21, 2),
(26, 22, 2),
(26, 23, 2),
(26, 24, 2),
(26, 25, 2),
(26, 26, 2),
(26, 27, 2),
(26, 28, 2),
(26, 29, 2),
(26, 30, 2),
(26, 31, 2),
(26, 32, 2),
(26, 33, 2),
(26, 34, 2),
(26, 35, 2),
(26, 36, 2),
(26, 37, 2),
(26, 38, 2),
(26, 39, 2),
(27, 0, 1),
(27, 1, 1),
(27, 2, 1),
(27, 3, 1),
(27, 4, 1),
(27, 5, 1),
(27, 6, 1),
(27, 7, 1),
(27, 8, 1),
(27, 9, 1),
(27, 10, 1),
(27, 11, 1),
(27, 12, 1),
(27, 13, 1),
(27, 14, 1),
(27, 15, 1),
(27, 16, 1),
(27, 17, 1),
(27, 18, 1),
(27, 19, 1),
(27, 20, 2),
(27, 21, 2),
(27, 22, 2),
(27, 23, 2),
(27, 24, 2),
(27, 25, 2),
(27, 26, 2),
(27, 27, 2),
(27, 28, 2),
(27, 29, 2),
(27, 30, 2),
(27, 31, 2),
(27, 32, 2),
(27, 33, 2),
(27, 34, 2),
(27, 35, 2),
(27, 36, 2),
(27, 37, 2),
(27, 38, 2),
(27, 39, 2),
(28, 0, 1),
(28, 1, 1),
(28, 2, 1),
(28, 3, 1),
(28, 4, 1),
(28, 5, 1),
(28, 6, 1),
(28, 7, 1),
(28, 8, 1),
(28, 9, 1),
(28, 10, 1),
(28, 11, 1),
(28, 12, 1),
(28, 13, 1),
(28, 14, 1),
(28, 15, 1),
(28, 16, 1),
(28, 17, 1),
(28, 18, 1),
(28, 19, 1),
(28, 20, 2),
(28, 21, 2),
(28, 22, 2),
(28, 23, 2),
(28, 24, 2),
(28, 25, 2),
(28, 26, 2),
(28, 27, 2),
(28, 28, 2),
(28, 29, 2),
(28, 30, 2),
(28, 31, 2),
(28, 32, 2),
(28, 33, 2),
(28, 34, 2),
(28, 35, 2),
(28, 36, 2),
(28, 37, 2),
(28, 38, 2),
(28, 39, 2),
(40, 0, 1),
(40, 1, 1),
(40, 2, 1),
(40, 3, 1),
(40, 4, 1),
(40, 5, 1),
(40, 6, 1),
(40, 7, 1),
(40, 8, 1),
(40, 9, 1),
(40, 10, 1),
(40, 11, 1),
(40, 12, 1),
(40, 13, 1),
(40, 14, 1),
(40, 15, 1),
(40, 16, 1),
(40, 17, 1),
(40, 18, 1),
(40, 19, 1),
(40, 20, 2),
(40, 21, 2),
(40, 22, 2),
(40, 23, 2),
(40, 24, 2),
(40, 25, 2),
(40, 26, 2),
(40, 27, 2),
(40, 28, 2),
(40, 29, 2),
(40, 30, 2),
(40, 31, 2),
(40, 32, 2),
(40, 33, 2),
(40, 34, 2),
(40, 35, 2),
(40, 36, 2),
(40, 37, 2),
(40, 38, 2),
(40, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 2),
(41, 0, 1),
(41, 1, 1),
(41, 2, 1),
(41, 3, 1),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 1),
(41, 0, 1),
(41, 1, 1),
(41, 2, 2),
(41, 3, 2),
(41, 4, 1),
(41, 5, 1),
(41, 6, 1),
(41, 7, 1),
(41, 8, 1),
(41, 9, 1),
(41, 10, 1),
(41, 11, 1),
(41, 12, 1),
(41, 13, 1),
(41, 14, 1),
(41, 15, 1),
(41, 16, 1),
(41, 17, 1),
(41, 18, 1),
(41, 19, 1),
(41, 20, 2),
(41, 21, 2),
(41, 22, 2),
(41, 23, 2),
(41, 24, 2),
(41, 25, 2),
(41, 26, 2),
(41, 27, 2),
(41, 28, 2),
(41, 29, 2),
(41, 30, 2),
(41, 31, 2),
(41, 32, 2),
(41, 33, 2),
(41, 34, 2),
(41, 35, 2),
(41, 36, 2),
(41, 37, 2),
(41, 38, 2),
(41, 39, 1),
(41, 0, 2),
(44, 0, 2),
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1),
(44, 5, 1),
(44, 6, 1),
(44, 7, 1),
(44, 8, 1),
(44, 9, 1),
(44, 10, 1),
(44, 11, 1),
(44, 12, 1),
(44, 13, 1),
(44, 14, 1),
(44, 15, 1),
(44, 16, 1),
(44, 17, 1),
(44, 18, 1),
(44, 19, 1),
(44, 20, 2),
(44, 21, 2),
(44, 22, 2),
(44, 23, 2),
(44, 24, 2),
(44, 25, 2),
(44, 26, 2),
(44, 27, 2),
(44, 28, 2),
(44, 29, 2),
(44, 30, 2),
(44, 31, 2),
(44, 32, 2),
(44, 33, 2),
(44, 34, 2),
(44, 35, 2),
(44, 36, 2),
(44, 37, 2),
(44, 38, 2),
(44, 39, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chk_speed_meter`
--

CREATE TABLE `chk_speed_meter` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_speed_meter_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_speed_meter`
--

INSERT INTO `chk_speed_meter` (`goods_id`, `goods_chk_speed_meter_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_tire`
--

CREATE TABLE `chk_tire` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_tire_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_tire`
--

INSERT INTO `chk_tire` (`goods_id`, `goods_chk_tire_id`, `goods_chk_status_id`) VALUES
(44, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_window_film`
--

CREATE TABLE `chk_window_film` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_window_film_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_window_film`
--

INSERT INTO `chk_window_film` (`goods_id`, `goods_chk_window_film_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_window_glass`
--

CREATE TABLE `chk_window_glass` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_window_glass_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_window_glass`
--

INSERT INTO `chk_window_glass` (`goods_id`, `goods_chk_window_glass_id`, `goods_chk_status_id`) VALUES
(44, 1, 1),
(44, 2, 1),
(44, 3, 1),
(44, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_windshield`
--

CREATE TABLE `chk_windshield` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_windshield_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chk_windshield`
--

INSERT INTO `chk_windshield` (`goods_id`, `goods_chk_windshield_id`, `goods_chk_status_id`) VALUES
(0, 1, 1),
(0, 2, 1),
(21, 1, 1),
(21, 2, 1),
(22, 1, 1),
(22, 2, 1),
(23, 1, 1),
(23, 2, 1),
(24, 1, 1),
(24, 2, 1),
(25, 1, 1),
(25, 2, 1),
(26, 1, 1),
(26, 2, 1),
(27, 1, 1),
(27, 2, 1),
(28, 1, 1),
(28, 2, 1),
(40, 1, 1),
(40, 2, 2),
(41, 1, 1),
(41, 2, 2),
(41, 1, 1),
(41, 2, 2),
(41, 1, 1),
(41, 2, 2),
(41, 1, 2),
(41, 2, 2),
(41, 1, 2),
(41, 2, 2),
(41, 1, 2),
(41, 2, 2),
(41, 1, 2),
(41, 2, 2),
(41, 1, 2),
(41, 2, 2),
(41, 1, 2),
(41, 2, 2),
(41, 1, 2),
(41, 2, 2),
(44, 1, 1),
(44, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `goods_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `goods_name` varchar(50) NOT NULL,
  `goods_year` int(11) NOT NULL,
  `goods_price` varchar(50) NOT NULL,
  `goods_detail` varchar(255) NOT NULL,
  `goods_advert` varchar(255) NOT NULL,
  `goods_status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`goods_id`, `brand_id`, `goods_name`, `goods_year`, `goods_price`, `goods_detail`, `goods_advert`, `goods_status`) VALUES
(1, 0, '2018 Mitsubishi Pajero-Sport', 0, '841,100 บาท', '', '', 2),
(5, 1, 'CAMRY', 0, '999', '', '', 0),
(6, 0, 'CAMRY', 0, '999', '', '', 0),
(7, 0, 'CAMRY', 0, '999', '', '', 0),
(8, 0, 'CAMRY', 0, '999', '', '', 0),
(9, 0, 'ACCORD', 0, '999', '', '', 0),
(10, 0, 'ACCORD', 0, '999', '', '', 0),
(11, 0, 'CIVIC', 0, '1212', '', '', 0),
(12, 0, 'CIVIC', 0, '1212', '', '', 0),
(13, 0, 'CIVIC', 0, '1212', '', '', 0),
(14, 0, 'CIVIC', 0, '1212', '', '', 0),
(15, 0, 'CIVIC', 0, '1212', '', '', 0),
(16, 0, 'CIVIC', 0, '1212', '', '', 0),
(17, 0, 'CIVIC', 0, '1212', '', '', 0),
(18, 0, 'CIVIC', 0, '1212', '', '', 2),
(19, 0, 'CIVIC', 0, '1212', '', '', 0),
(20, 0, 'CITY', 0, '123', '', '', 0),
(22, 0, '', 0, '123', '', '', 0),
(23, 0, 'test1', 0, '123', '', '', 1),
(36, 0, 'test1', 0, '123', '', '', 1),
(40, 0, 'JUKE', 2017, '8999999', 'detail', 'advert', 1),
(41, 3, 'MITSUBISHI', 2000, '900000', 'detail_up', 'advert_up', 1),
(42, 0, 'JUKE', 2017, '8999999', 'detail', 'advert', 1),
(43, 9, 'SUNNY NEO', 2017, '8999999', 'detail', 'advert', 1),
(44, 7, 'DMAX', 2022, '9999999', 'รายละเอียด', 'โฆษณา', 1);

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_alloy`
--

CREATE TABLE `goods_chk_alloy` (
  `goods_chk_alloy_id` int(11) NOT NULL,
  `goods_chk_alloy_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_alloy`
--

INSERT INTO `goods_chk_alloy` (`goods_chk_alloy_id`, `goods_chk_alloy_name`) VALUES
(1, 'ด้านหน้าขวา'),
(2, 'ด้านหลังขวา'),
(3, 'ด้านหน้าซ้าย'),
(4, 'ด้านหลังซ้าย');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_alloy_comment`
--

CREATE TABLE `goods_chk_alloy_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_alloy_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_brand_symbol`
--

CREATE TABLE `goods_chk_car_brand_symbol` (
  `goods_chk_car_brand_symbol_id` int(11) NOT NULL,
  `goods_chk_car_brand_symbol_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_car_brand_symbol`
--

INSERT INTO `goods_chk_car_brand_symbol` (`goods_chk_car_brand_symbol_id`, `goods_chk_car_brand_symbol_name`) VALUES
(1, 'ด้านหน้า'),
(2, 'ด้านหลัง');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_brand_symbol_comment`
--

CREATE TABLE `goods_chk_car_brand_symbol_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_brand_symbol_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_door`
--

CREATE TABLE `goods_chk_car_door` (
  `goods_chk_car_door_id` int(11) NOT NULL,
  `goods_chk_car_door_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_car_door`
--

INSERT INTO `goods_chk_car_door` (`goods_chk_car_door_id`, `goods_chk_car_door_name`) VALUES
(1, 'ด้านหน้าขวา'),
(2, 'ด้านหลังขวา'),
(3, 'ด้านหน้าซ้าย'),
(4, 'ด้านหลังซ้าย');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_door_comment`
--

CREATE TABLE `goods_chk_car_door_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_door_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_floor`
--

CREATE TABLE `goods_chk_car_floor` (
  `goods_chk_car_floor_id` int(11) NOT NULL,
  `goods_chk_car_floor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_car_floor`
--

INSERT INTO `goods_chk_car_floor` (`goods_chk_car_floor_id`, `goods_chk_car_floor_name`) VALUES
(1, 'พื้นรถ');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_floor_comment`
--

CREATE TABLE `goods_chk_car_floor_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_floor_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_frame`
--

CREATE TABLE `goods_chk_car_frame` (
  `goods_chk_car_frame_id` int(11) NOT NULL,
  `goods_chk_car_frame_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_car_frame`
--

INSERT INTO `goods_chk_car_frame` (`goods_chk_car_frame_id`, `goods_chk_car_frame_name`) VALUES
(1, 'เสา A ซ้าย'),
(2, 'เสา B ซ้าย'),
(3, 'เสา C ซ้าย'),
(4, 'เสา A ขวา'),
(5, 'เสา B ขวา'),
(6, 'เสา C ขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_frame_comment`
--

CREATE TABLE `goods_chk_car_frame_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_frame_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_lights`
--

CREATE TABLE `goods_chk_car_lights` (
  `goods_chk_car_lights_id` int(11) NOT NULL,
  `goods_chk_car_lights_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_car_lights`
--

INSERT INTO `goods_chk_car_lights` (`goods_chk_car_lights_id`, `goods_chk_car_lights_name`) VALUES
(1, 'ไฟในรถ');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_lights_comment`
--

CREATE TABLE `goods_chk_car_lights_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_lights_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_roof`
--

CREATE TABLE `goods_chk_car_roof` (
  `goods_chk_car_roof_id` int(11) NOT NULL,
  `goods_chk_car_roof_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_car_roof`
--

INSERT INTO `goods_chk_car_roof` (`goods_chk_car_roof_id`, `goods_chk_car_roof_name`) VALUES
(1, 'หลังคารถ');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_roof_comment`
--

CREATE TABLE `goods_chk_car_roof_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_roof_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ceiling`
--

CREATE TABLE `goods_chk_ceiling` (
  `goods_chk_ceiling_id` int(11) NOT NULL,
  `goods_chk_ceiling_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_ceiling`
--

INSERT INTO `goods_chk_ceiling` (`goods_chk_ceiling_id`, `goods_chk_ceiling_name`) VALUES
(1, 'เพดาน');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ceiling_comment`
--

CREATE TABLE `goods_chk_ceiling_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ceiling_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ceiling_light`
--

CREATE TABLE `goods_chk_ceiling_light` (
  `goods_chk_ceiling_light_id` int(11) NOT NULL,
  `goods_chk_ceiling_light_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_ceiling_light`
--

INSERT INTO `goods_chk_ceiling_light` (`goods_chk_ceiling_light_id`, `goods_chk_ceiling_light_name`) VALUES
(1, 'ไฟเพดาน');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ceiling_light_comment`
--

CREATE TABLE `goods_chk_ceiling_light_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ceiling_light_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_cooling_system`
--

CREATE TABLE `goods_chk_cooling_system` (
  `goods_chk_cooling_system_id` int(11) NOT NULL,
  `goods_chk_cooling_system_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_cooling_system`
--

INSERT INTO `goods_chk_cooling_system` (`goods_chk_cooling_system_id`, `goods_chk_cooling_system_name`) VALUES
(1, 'ระบบทำความเย็น');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_cooling_system_comment`
--

CREATE TABLE `goods_chk_cooling_system_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_cooling_system_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_engine_and_gear`
--

CREATE TABLE `goods_chk_engine_and_gear` (
  `goods_chk_engine_and_gear_id` int(11) NOT NULL,
  `goods_chk_engine_and_gear_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_engine_and_gear`
--

INSERT INTO `goods_chk_engine_and_gear` (`goods_chk_engine_and_gear_id`, `goods_chk_engine_and_gear_name`) VALUES
(1, 'การเผาไหม้ของเครื่องยนต์'),
(2, 'เครื่องกำเนินไฟฟ้า ไดชาร์ท');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_engine_and_gear_comment`
--

CREATE TABLE `goods_chk_engine_and_gear_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_engine_and_gear_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_engine_compartment_wall`
--

CREATE TABLE `goods_chk_engine_compartment_wall` (
  `goods_chk_engine_compartment_wall_id` int(11) NOT NULL,
  `goods_chk_engine_compartment_wall_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_engine_compartment_wall`
--

INSERT INTO `goods_chk_engine_compartment_wall` (`goods_chk_engine_compartment_wall_id`, `goods_chk_engine_compartment_wall_name`) VALUES
(1, 'ผนังของห้องเครื่อง');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_engine_compartment_wall_comment`
--

CREATE TABLE `goods_chk_engine_compartment_wall_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_engine_compartment_wall_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_entertainment_control_system`
--

CREATE TABLE `goods_chk_entertainment_control_system` (
  `goods_chk_entertainment_control_system_id` int(11) NOT NULL,
  `goods_chk_entertainment_control_system_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_entertainment_control_system`
--

INSERT INTO `goods_chk_entertainment_control_system` (`goods_chk_entertainment_control_system_id`, `goods_chk_entertainment_control_system_name`) VALUES
(1, 'ระบบควบคุมสาระบันเทิง');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_entertainment_control_system_comment`
--

CREATE TABLE `goods_chk_entertainment_control_system_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_entertainment_control_system_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_fog_lamp`
--

CREATE TABLE `goods_chk_fog_lamp` (
  `goods_chk_fog_lamp_id` int(11) NOT NULL,
  `goods_chk_fog_lamp_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_fog_lamp`
--

INSERT INTO `goods_chk_fog_lamp` (`goods_chk_fog_lamp_id`, `goods_chk_fog_lamp_name`) VALUES
(1, 'ด้านหน้าซ้าย'),
(2, 'ด้านหน้าขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_fog_lamp_comment`
--

CREATE TABLE `goods_chk_fog_lamp_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_fog_lamp_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_front_beam`
--

CREATE TABLE `goods_chk_front_beam` (
  `goods_chk_front_beam_id` int(11) NOT NULL,
  `goods_chk_front_beam_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_front_beam`
--

INSERT INTO `goods_chk_front_beam` (`goods_chk_front_beam_id`, `goods_chk_front_beam_name`) VALUES
(1, 'คานหน้ารถ');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_front_beam_comment`
--

CREATE TABLE `goods_chk_front_beam_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_beam_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_front_fender`
--

CREATE TABLE `goods_chk_front_fender` (
  `goods_chk_front_fender_id` int(11) NOT NULL,
  `goods_chk_front_fender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_front_fender`
--

INSERT INTO `goods_chk_front_fender` (`goods_chk_front_fender_id`, `goods_chk_front_fender_name`) VALUES
(1, 'ข้างซ้าย'),
(2, 'ข้างขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_front_fender_comment`
--

CREATE TABLE `goods_chk_front_fender_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_fender_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_front_light`
--

CREATE TABLE `goods_chk_front_light` (
  `goods_chk_front_light_id` int(11) NOT NULL,
  `goods_chk_front_light_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_front_light`
--

INSERT INTO `goods_chk_front_light` (`goods_chk_front_light_id`, `goods_chk_front_light_name`) VALUES
(1, 'หน้าซ้าย'),
(2, 'หน้าขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_front_light_comment`
--

CREATE TABLE `goods_chk_front_light_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_light_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_front_light_comment`
--

INSERT INTO `goods_chk_front_light_comment` (`goods_id`, `goods_chk_front_light_id`, `goods_chk_comment`) VALUES
(41, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(0, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก'),
(41, 2, 'กระจกขวาแตก');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_handbrake`
--

CREATE TABLE `goods_chk_handbrake` (
  `goods_chk_handbrake_id` int(11) NOT NULL,
  `goods_chk_handbrake_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_handbrake`
--

INSERT INTO `goods_chk_handbrake` (`goods_chk_handbrake_id`, `goods_chk_handbrake_name`) VALUES
(1, 'เบรกมือ');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_handbrake_comment`
--

CREATE TABLE `goods_chk_handbrake_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_handbrake_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_handrail`
--

CREATE TABLE `goods_chk_handrail` (
  `goods_chk_handrail_id` int(11) NOT NULL,
  `goods_chk_handrail_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_handrail`
--

INSERT INTO `goods_chk_handrail` (`goods_chk_handrail_id`, `goods_chk_handrail_name`) VALUES
(1, 'ข้างซ้าย'),
(2, 'ข้างขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_handrail_comment`
--

CREATE TABLE `goods_chk_handrail_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_handrail_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_instrument_panel`
--

CREATE TABLE `goods_chk_instrument_panel` (
  `goods_chk_instrument_panel_id` int(11) NOT NULL,
  `goods_chk_instrument_panel_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_instrument_panel`
--

INSERT INTO `goods_chk_instrument_panel` (`goods_chk_instrument_panel_id`, `goods_chk_instrument_panel_name`) VALUES
(1, 'แผงหน้าปัด');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_instrument_panel_comment`
--

CREATE TABLE `goods_chk_instrument_panel_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_instrument_panel_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_lock_system`
--

CREATE TABLE `goods_chk_lock_system` (
  `goods_chk_lock_system_id` int(11) NOT NULL,
  `goods_chk_lock_system_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_lock_system`
--

INSERT INTO `goods_chk_lock_system` (`goods_chk_lock_system_id`, `goods_chk_lock_system_name`) VALUES
(1, 'ระบบล็อค');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_lock_system_comment`
--

CREATE TABLE `goods_chk_lock_system_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_lock_system_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_multimedia_system`
--

CREATE TABLE `goods_chk_multimedia_system` (
  `goods_chk_multimedia_system_id` int(11) NOT NULL,
  `goods_chk_multimedia_system_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_multimedia_system`
--

INSERT INTO `goods_chk_multimedia_system` (`goods_chk_multimedia_system_id`, `goods_chk_multimedia_system_name`) VALUES
(1, 'ระบบมัลติมีเดีย');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_multimedia_system_comment`
--

CREATE TABLE `goods_chk_multimedia_system_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_multimedia_system_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_outside`
--

CREATE TABLE `goods_chk_outside` (
  `goods_chk_outside_id` int(11) NOT NULL,
  `goods_chk_outside_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_outside`
--

INSERT INTO `goods_chk_outside` (`goods_chk_outside_id`, `goods_chk_outside_name`) VALUES
(1, 'กันชน\r\n'),
(2, 'ด้านหน้า'),
(3, 'ด้านหลัง'),
(4, 'ตะแกรงหน้า');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_outside_comment`
--

CREATE TABLE `goods_chk_outside_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_outside_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_outside_comment`
--

INSERT INTO `goods_chk_outside_comment` (`goods_id`, `goods_chk_outside_id`, `goods_chk_comment`) VALUES
(1, 1, 'crack'),
(0, 1, 'กันชนพังจ้า'),
(21, 1, 'กันชนพังจ้า'),
(40, 2, 'กระจกหน้ารถไม่มี'),
(41, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(0, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'ล่าสุด'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack'),
(41, 1, 'crack');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_powertrain`
--

CREATE TABLE `goods_chk_powertrain` (
  `goods_chk_powertrain_id` int(11) NOT NULL,
  `goods_chk_powertrain_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_powertrain`
--

INSERT INTO `goods_chk_powertrain` (`goods_chk_powertrain_id`, `goods_chk_powertrain_name`) VALUES
(1, 'ระบบบังคับเลี้ยว'),
(2, 'เพลารถ'),
(3, 'โครงรับหม้อน้ำ'),
(4, 'ถุงลมนิรภัย'),
(5, 'ระบบเบรก');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_powertrain_comment`
--

CREATE TABLE `goods_chk_powertrain_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_powertrain_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_rear_fender`
--

CREATE TABLE `goods_chk_rear_fender` (
  `goods_chk_rear_fender_id` int(11) NOT NULL,
  `goods_chk_rear_fender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_rear_fender`
--

INSERT INTO `goods_chk_rear_fender` (`goods_chk_rear_fender_id`, `goods_chk_rear_fender_name`) VALUES
(1, 'ข้างซ้าย'),
(2, 'ข้างขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_rear_fender_comment`
--

CREATE TABLE `goods_chk_rear_fender_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_rear_fender_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ruby_bumper`
--

CREATE TABLE `goods_chk_ruby_bumper` (
  `goods_chk_ruby_bumper_id` int(11) NOT NULL,
  `goods_chk_ruby_bumper_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_ruby_bumper`
--

INSERT INTO `goods_chk_ruby_bumper` (`goods_chk_ruby_bumper_id`, `goods_chk_ruby_bumper_name`) VALUES
(1, 'ด้านหลังซ้าย'),
(2, 'ด้านหลังขวา'),
(3, 'ฝากระโปรง');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ruby_bumper_comment`
--

CREATE TABLE `goods_chk_ruby_bumper_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ruby_bumper_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_seat`
--

CREATE TABLE `goods_chk_seat` (
  `goods_chk_seat_id` int(11) NOT NULL,
  `goods_chk_seat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_seat`
--

INSERT INTO `goods_chk_seat` (`goods_chk_seat_id`, `goods_chk_seat_name`) VALUES
(1, 'ด้านหน้าขวา'),
(2, 'ด้านหน้าซ้าย'),
(3, 'แถวสองข้างขวา'),
(4, 'แถวสองข้างซ้าย');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_seat_comment`
--

CREATE TABLE `goods_chk_seat_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_seat_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_shock_absorber`
--

CREATE TABLE `goods_chk_shock_absorber` (
  `goods_chk_shock_absorber_id` int(11) NOT NULL,
  `goods_chk_shock_absorber_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_shock_absorber`
--

INSERT INTO `goods_chk_shock_absorber` (`goods_chk_shock_absorber_id`, `goods_chk_shock_absorber_name`) VALUES
(1, 'ข้างซ้าย'),
(2, 'ข้างขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_shock_absorber_comment`
--

CREATE TABLE `goods_chk_shock_absorber_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_shock_absorber_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_side_mirror`
--

CREATE TABLE `goods_chk_side_mirror` (
  `goods_chk_side_mirror_id` int(11) NOT NULL,
  `goods_chk_side_mirror_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_side_mirror`
--

INSERT INTO `goods_chk_side_mirror` (`goods_chk_side_mirror_id`, `goods_chk_side_mirror_name`) VALUES
(1, 'ข้างซ้าย'),
(2, 'ข้างขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_side_mirror_comment`
--

CREATE TABLE `goods_chk_side_mirror_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_side_mirror_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_speed_meter`
--

CREATE TABLE `goods_chk_speed_meter` (
  `goods_chk_speed_meter_id` int(11) NOT NULL,
  `goods_chk_speed_meter_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_speed_meter`
--

INSERT INTO `goods_chk_speed_meter` (`goods_chk_speed_meter_id`, `goods_chk_speed_meter_name`) VALUES
(1, 'เรือนไมล์');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_speed_meter_comment`
--

CREATE TABLE `goods_chk_speed_meter_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_speed_meter_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_status`
--

CREATE TABLE `goods_chk_status` (
  `goods_chk_status_id` int(11) NOT NULL,
  `goods_chk_status_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_status`
--

INSERT INTO `goods_chk_status` (`goods_chk_status_id`, `goods_chk_status_name`) VALUES
(1, 'ผ่าน'),
(2, 'ไม่ผ่าน'),
(3, 'เย็น'),
(4, 'ไม่เย็น'),
(5, 'เดิทโรงงาน'),
(6, 'มีร่องรอยซ่อม'),
(7, 'มากกว่า 70%'),
(8, '50 - 70%'),
(9, 'น้อยกว่า  50%');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_tire`
--

CREATE TABLE `goods_chk_tire` (
  `goods_chk_tire_id` int(11) NOT NULL,
  `goods_chk_tire_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_tire`
--

INSERT INTO `goods_chk_tire` (`goods_chk_tire_id`, `goods_chk_tire_name`) VALUES
(1, 'ยาง');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_tire_comment`
--

CREATE TABLE `goods_chk_tire_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_tire_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_window_film`
--

CREATE TABLE `goods_chk_window_film` (
  `goods_chk_window_film_id` int(11) NOT NULL,
  `goods_chk_window_film_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_window_film`
--

INSERT INTO `goods_chk_window_film` (`goods_chk_window_film_id`, `goods_chk_window_film_name`) VALUES
(1, 'ด้านหน้าขวา'),
(2, 'ด้านหลังขวา'),
(3, 'ด้านหน้าซ้าย'),
(4, 'ด้านหลังขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_window_film_comment`
--

CREATE TABLE `goods_chk_window_film_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_window_film_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_window_glass`
--

CREATE TABLE `goods_chk_window_glass` (
  `goods_chk_window_glass_id` int(11) NOT NULL,
  `goods_chk_window_glass_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_window_glass`
--

INSERT INTO `goods_chk_window_glass` (`goods_chk_window_glass_id`, `goods_chk_window_glass_name`) VALUES
(1, 'ด้านหน้าขวา'),
(2, 'ด้านหลังขวา'),
(3, 'ด้านหน้าซ้าย'),
(4, 'ด้านหลังซ้าย');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_window_glass_comment`
--

CREATE TABLE `goods_chk_window_glass_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_window_glass_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_windshield`
--

CREATE TABLE `goods_chk_windshield` (
  `goods_chk_windshield_id` int(11) NOT NULL,
  `goods_chk_windshield_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_windshield`
--

INSERT INTO `goods_chk_windshield` (`goods_chk_windshield_id`, `goods_chk_windshield_name`) VALUES
(1, 'ด้านหน้าซ้าย'),
(2, 'ด้านหน้าขวา');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_windshield_comment`
--

CREATE TABLE `goods_chk_windshield_comment` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_windshield_id` int(11) NOT NULL,
  `goods_chk_comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_chk_windshield_comment`
--

INSERT INTO `goods_chk_windshield_comment` (`goods_id`, `goods_chk_windshield_id`, `goods_chk_comment`) VALUES
(41, 2, 'windshield_comment_2'),
(41, 2, 'windshield_comment_2 last comment'),
(41, 2, 'windshield_comment_2 last comment'),
(41, 2, 'windshield_comment_2 last comment');

-- --------------------------------------------------------

--
-- Table structure for table `goods_img`
--

CREATE TABLE `goods_img` (
  `goods_img_id` int(11) NOT NULL,
  `goods_id` int(11) NOT NULL,
  `goods_img_src` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods_img`
--

INSERT INTO `goods_img` (`goods_img_id`, `goods_id`, `goods_img_src`) VALUES
(8, 20, 'ezgif-7-cb850d03008c.gif'),
(9, 20, 'GUI.PNG'),
(10, 20, 'malong.png'),
(11, 21, 'ezgif-7-cb850d03008c.gif'),
(12, 21, 'GUI.PNG'),
(13, 21, 'malong.png'),
(14, 22, 'ezgif-7-cb850d03008c.gif'),
(15, 22, 'GUI.PNG'),
(16, 22, 'malong.png'),
(17, 23, 'ezgif-7-cb850d03008c.gif'),
(18, 23, 'GUI.PNG'),
(19, 23, 'malong.png'),
(20, 24, 'ezgif-7-cb850d03008c.gif'),
(21, 24, 'GUI.PNG'),
(22, 24, 'malong.png'),
(23, 25, 'ezgif-7-cb850d03008c.gif'),
(24, 25, 'GUI.PNG'),
(25, 25, 'malong.png'),
(26, 26, 'ezgif-7-cb850d03008c.gif'),
(27, 26, 'GUI.PNG'),
(28, 26, 'malong.png'),
(29, 27, 'ezgif-7-cb850d03008c.gif'),
(30, 27, 'GUI.PNG'),
(31, 27, 'malong.png'),
(32, 28, 'ezgif-7-cb850d03008c.gif'),
(33, 28, 'GUI.PNG'),
(34, 28, 'malong.png'),
(35, 40, 'malong.png'),
(36, 40, 'corona_bg2.jpg'),
(37, 40, 'Sketchpad.png'),
(38, 41, 'corona_bg2.jpg'),
(39, 41, 'malong.png'),
(40, 41, 'Sketchpad.png'),
(41, 44, 'Picture1.jpg'),
(42, 44, 'Picture2.png'),
(43, 44, 'Picture4.png'),
(44, 44, 'Picture5.png');

-- --------------------------------------------------------

--
-- Table structure for table `spec_comment`
--

CREATE TABLE `spec_comment` (
  `goods_id` int(11) NOT NULL,
  `chk_spec_id` int(11) NOT NULL,
  `spec_comment_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `spec_comment`
--

INSERT INTO `spec_comment` (`goods_id`, `chk_spec_id`, `spec_comment_detail`) VALUES
(0, 14, 'comment 14'),
(0, 14, 'comment 14'),
(0, 1, 'ระบบควบคุมการทรงตัว มีปัญหา'),
(21, 1, 'ระบบควบคุมการทรงตัว มีปัญหา'),
(40, 0, 'ถุงลมคอมเมนต์'),
(40, 19, 'หน้าต่างไฟฟ้า'),
(40, 39, 'แผงหน้าปัด'),
(41, 0, 'ถุงลมคอมเมนต์'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์ ล่าสุด'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์'),
(41, 1, 'something'),
(41, 0, 'ถุงลมคอมเมนต์ ล่าสุด'),
(41, 1, 'something'),
(41, 39, 'last'),
(41, 0, 'ถุงลมคอมเมนต์ ล่าสุด'),
(41, 1, 'something'),
(41, 39, 'last'),
(44, 0, 'ถุงลมนิรภัย คอมเมนต์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`car_id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `goods_chk_alloy`
--
ALTER TABLE `goods_chk_alloy`
  ADD PRIMARY KEY (`goods_chk_alloy_id`);

--
-- Indexes for table `goods_chk_car_brand_symbol`
--
ALTER TABLE `goods_chk_car_brand_symbol`
  ADD PRIMARY KEY (`goods_chk_car_brand_symbol_id`);

--
-- Indexes for table `goods_chk_car_door`
--
ALTER TABLE `goods_chk_car_door`
  ADD PRIMARY KEY (`goods_chk_car_door_id`);

--
-- Indexes for table `goods_chk_car_floor`
--
ALTER TABLE `goods_chk_car_floor`
  ADD PRIMARY KEY (`goods_chk_car_floor_id`);

--
-- Indexes for table `goods_chk_car_frame`
--
ALTER TABLE `goods_chk_car_frame`
  ADD PRIMARY KEY (`goods_chk_car_frame_id`);

--
-- Indexes for table `goods_chk_car_lights`
--
ALTER TABLE `goods_chk_car_lights`
  ADD PRIMARY KEY (`goods_chk_car_lights_id`);

--
-- Indexes for table `goods_chk_car_roof`
--
ALTER TABLE `goods_chk_car_roof`
  ADD PRIMARY KEY (`goods_chk_car_roof_id`);

--
-- Indexes for table `goods_chk_ceiling`
--
ALTER TABLE `goods_chk_ceiling`
  ADD PRIMARY KEY (`goods_chk_ceiling_id`);

--
-- Indexes for table `goods_chk_ceiling_light`
--
ALTER TABLE `goods_chk_ceiling_light`
  ADD PRIMARY KEY (`goods_chk_ceiling_light_id`);

--
-- Indexes for table `goods_chk_cooling_system`
--
ALTER TABLE `goods_chk_cooling_system`
  ADD PRIMARY KEY (`goods_chk_cooling_system_id`);

--
-- Indexes for table `goods_chk_engine_and_gear`
--
ALTER TABLE `goods_chk_engine_and_gear`
  ADD PRIMARY KEY (`goods_chk_engine_and_gear_id`);

--
-- Indexes for table `goods_chk_engine_compartment_wall`
--
ALTER TABLE `goods_chk_engine_compartment_wall`
  ADD PRIMARY KEY (`goods_chk_engine_compartment_wall_id`);

--
-- Indexes for table `goods_chk_entertainment_control_system`
--
ALTER TABLE `goods_chk_entertainment_control_system`
  ADD PRIMARY KEY (`goods_chk_entertainment_control_system_id`);

--
-- Indexes for table `goods_chk_fog_lamp`
--
ALTER TABLE `goods_chk_fog_lamp`
  ADD PRIMARY KEY (`goods_chk_fog_lamp_id`);

--
-- Indexes for table `goods_chk_front_beam`
--
ALTER TABLE `goods_chk_front_beam`
  ADD PRIMARY KEY (`goods_chk_front_beam_id`);

--
-- Indexes for table `goods_chk_front_fender`
--
ALTER TABLE `goods_chk_front_fender`
  ADD PRIMARY KEY (`goods_chk_front_fender_id`);

--
-- Indexes for table `goods_chk_front_light`
--
ALTER TABLE `goods_chk_front_light`
  ADD PRIMARY KEY (`goods_chk_front_light_id`);

--
-- Indexes for table `goods_chk_handbrake`
--
ALTER TABLE `goods_chk_handbrake`
  ADD PRIMARY KEY (`goods_chk_handbrake_id`);

--
-- Indexes for table `goods_chk_handrail`
--
ALTER TABLE `goods_chk_handrail`
  ADD PRIMARY KEY (`goods_chk_handrail_id`);

--
-- Indexes for table `goods_chk_instrument_panel`
--
ALTER TABLE `goods_chk_instrument_panel`
  ADD PRIMARY KEY (`goods_chk_instrument_panel_id`);

--
-- Indexes for table `goods_chk_lock_system`
--
ALTER TABLE `goods_chk_lock_system`
  ADD PRIMARY KEY (`goods_chk_lock_system_id`);

--
-- Indexes for table `goods_chk_multimedia_system`
--
ALTER TABLE `goods_chk_multimedia_system`
  ADD PRIMARY KEY (`goods_chk_multimedia_system_id`);

--
-- Indexes for table `goods_chk_outside`
--
ALTER TABLE `goods_chk_outside`
  ADD PRIMARY KEY (`goods_chk_outside_id`);

--
-- Indexes for table `goods_chk_powertrain`
--
ALTER TABLE `goods_chk_powertrain`
  ADD PRIMARY KEY (`goods_chk_powertrain_id`);

--
-- Indexes for table `goods_chk_rear_fender`
--
ALTER TABLE `goods_chk_rear_fender`
  ADD PRIMARY KEY (`goods_chk_rear_fender_id`);

--
-- Indexes for table `goods_chk_ruby_bumper`
--
ALTER TABLE `goods_chk_ruby_bumper`
  ADD PRIMARY KEY (`goods_chk_ruby_bumper_id`);

--
-- Indexes for table `goods_chk_seat`
--
ALTER TABLE `goods_chk_seat`
  ADD PRIMARY KEY (`goods_chk_seat_id`);

--
-- Indexes for table `goods_chk_shock_absorber`
--
ALTER TABLE `goods_chk_shock_absorber`
  ADD PRIMARY KEY (`goods_chk_shock_absorber_id`);

--
-- Indexes for table `goods_chk_side_mirror`
--
ALTER TABLE `goods_chk_side_mirror`
  ADD PRIMARY KEY (`goods_chk_side_mirror_id`);

--
-- Indexes for table `goods_chk_speed_meter`
--
ALTER TABLE `goods_chk_speed_meter`
  ADD PRIMARY KEY (`goods_chk_speed_meter_id`);

--
-- Indexes for table `goods_chk_status`
--
ALTER TABLE `goods_chk_status`
  ADD PRIMARY KEY (`goods_chk_status_id`);

--
-- Indexes for table `goods_chk_tire`
--
ALTER TABLE `goods_chk_tire`
  ADD PRIMARY KEY (`goods_chk_tire_id`);

--
-- Indexes for table `goods_chk_window_film`
--
ALTER TABLE `goods_chk_window_film`
  ADD PRIMARY KEY (`goods_chk_window_film_id`);

--
-- Indexes for table `goods_chk_window_glass`
--
ALTER TABLE `goods_chk_window_glass`
  ADD PRIMARY KEY (`goods_chk_window_glass_id`);

--
-- Indexes for table `goods_chk_windshield`
--
ALTER TABLE `goods_chk_windshield`
  ADD PRIMARY KEY (`goods_chk_windshield_id`);

--
-- Indexes for table `goods_img`
--
ALTER TABLE `goods_img`
  ADD PRIMARY KEY (`goods_img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `goods_chk_alloy`
--
ALTER TABLE `goods_chk_alloy`
  MODIFY `goods_chk_alloy_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goods_chk_car_brand_symbol`
--
ALTER TABLE `goods_chk_car_brand_symbol`
  MODIFY `goods_chk_car_brand_symbol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_car_door`
--
ALTER TABLE `goods_chk_car_door`
  MODIFY `goods_chk_car_door_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goods_chk_car_floor`
--
ALTER TABLE `goods_chk_car_floor`
  MODIFY `goods_chk_car_floor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_car_frame`
--
ALTER TABLE `goods_chk_car_frame`
  MODIFY `goods_chk_car_frame_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `goods_chk_car_lights`
--
ALTER TABLE `goods_chk_car_lights`
  MODIFY `goods_chk_car_lights_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_car_roof`
--
ALTER TABLE `goods_chk_car_roof`
  MODIFY `goods_chk_car_roof_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_ceiling`
--
ALTER TABLE `goods_chk_ceiling`
  MODIFY `goods_chk_ceiling_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_ceiling_light`
--
ALTER TABLE `goods_chk_ceiling_light`
  MODIFY `goods_chk_ceiling_light_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_cooling_system`
--
ALTER TABLE `goods_chk_cooling_system`
  MODIFY `goods_chk_cooling_system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_engine_and_gear`
--
ALTER TABLE `goods_chk_engine_and_gear`
  MODIFY `goods_chk_engine_and_gear_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_engine_compartment_wall`
--
ALTER TABLE `goods_chk_engine_compartment_wall`
  MODIFY `goods_chk_engine_compartment_wall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_entertainment_control_system`
--
ALTER TABLE `goods_chk_entertainment_control_system`
  MODIFY `goods_chk_entertainment_control_system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_fog_lamp`
--
ALTER TABLE `goods_chk_fog_lamp`
  MODIFY `goods_chk_fog_lamp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_front_beam`
--
ALTER TABLE `goods_chk_front_beam`
  MODIFY `goods_chk_front_beam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_front_fender`
--
ALTER TABLE `goods_chk_front_fender`
  MODIFY `goods_chk_front_fender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_front_light`
--
ALTER TABLE `goods_chk_front_light`
  MODIFY `goods_chk_front_light_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_handbrake`
--
ALTER TABLE `goods_chk_handbrake`
  MODIFY `goods_chk_handbrake_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_handrail`
--
ALTER TABLE `goods_chk_handrail`
  MODIFY `goods_chk_handrail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_instrument_panel`
--
ALTER TABLE `goods_chk_instrument_panel`
  MODIFY `goods_chk_instrument_panel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_lock_system`
--
ALTER TABLE `goods_chk_lock_system`
  MODIFY `goods_chk_lock_system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_multimedia_system`
--
ALTER TABLE `goods_chk_multimedia_system`
  MODIFY `goods_chk_multimedia_system_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_outside`
--
ALTER TABLE `goods_chk_outside`
  MODIFY `goods_chk_outside_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goods_chk_powertrain`
--
ALTER TABLE `goods_chk_powertrain`
  MODIFY `goods_chk_powertrain_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `goods_chk_rear_fender`
--
ALTER TABLE `goods_chk_rear_fender`
  MODIFY `goods_chk_rear_fender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_ruby_bumper`
--
ALTER TABLE `goods_chk_ruby_bumper`
  MODIFY `goods_chk_ruby_bumper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goods_chk_seat`
--
ALTER TABLE `goods_chk_seat`
  MODIFY `goods_chk_seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goods_chk_shock_absorber`
--
ALTER TABLE `goods_chk_shock_absorber`
  MODIFY `goods_chk_shock_absorber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_side_mirror`
--
ALTER TABLE `goods_chk_side_mirror`
  MODIFY `goods_chk_side_mirror_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_speed_meter`
--
ALTER TABLE `goods_chk_speed_meter`
  MODIFY `goods_chk_speed_meter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_status`
--
ALTER TABLE `goods_chk_status`
  MODIFY `goods_chk_status_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `goods_chk_tire`
--
ALTER TABLE `goods_chk_tire`
  MODIFY `goods_chk_tire_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_window_film`
--
ALTER TABLE `goods_chk_window_film`
  MODIFY `goods_chk_window_film_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goods_chk_window_glass`
--
ALTER TABLE `goods_chk_window_glass`
  MODIFY `goods_chk_window_glass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goods_chk_windshield`
--
ALTER TABLE `goods_chk_windshield`
  MODIFY `goods_chk_windshield_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_img`
--
ALTER TABLE `goods_img`
  MODIFY `goods_img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;