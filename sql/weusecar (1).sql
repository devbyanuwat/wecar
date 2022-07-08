-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2022 at 09:40 AM
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
(1, 'Mitsubishi'),
(2, 'Toyota'),
(3, 'HONDA');

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

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_brand_symbol`
--

CREATE TABLE `chk_car_brand_symbol` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_brand_symbol_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_door`
--

CREATE TABLE `chk_car_door` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_door_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_floor`
--

CREATE TABLE `chk_car_floor` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_floor_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_frame`
--

CREATE TABLE `chk_car_frame` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_frame_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_lights`
--

CREATE TABLE `chk_car_lights` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_lights_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_car_roof`
--

CREATE TABLE `chk_car_roof` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_car_roof_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_ceiling`
--

CREATE TABLE `chk_ceiling` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ceiling_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_ceiling_light`
--

CREATE TABLE `chk_ceiling_light` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_ceiling_light_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_cooling_system`
--

CREATE TABLE `chk_cooling_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_cooling_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_engine_and_gear`
--

CREATE TABLE `chk_engine_and_gear` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_engine_and_gear_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_engine_compartment_wall`
--

CREATE TABLE `chk_engine_compartment_wall` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_engine_compartment_wall_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_entertainment_control_system`
--

CREATE TABLE `chk_entertainment_control_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_entertainment_control_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_front_beam`
--

CREATE TABLE `chk_front_beam` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_beam_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_front_fender`
--

CREATE TABLE `chk_front_fender` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_front_fender_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 1, 2),
(2, 1, 1),
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chk_handbrake`
--

CREATE TABLE `chk_handbrake` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_handbrake_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_handrail`
--

CREATE TABLE `chk_handrail` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_handrail_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_instrument_panel`
--

CREATE TABLE `chk_instrument_panel` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_instrument_panel_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_lock_system`
--

CREATE TABLE `chk_lock_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_lock_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_multimedia_system`
--

CREATE TABLE `chk_multimedia_system` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_multimedia_system_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 1, 1),
(2, 1, 1),
(3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `chk_powertrain`
--

CREATE TABLE `chk_powertrain` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_powertrain_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_rear_fender`
--

CREATE TABLE `chk_rear_fender` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_rear_fender_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(3, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `chk_seat`
--

CREATE TABLE `chk_seat` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_seat_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_shock_absorber`
--

CREATE TABLE `chk_shock_absorber` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_shock_absorber_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_side_mirror`
--

CREATE TABLE `chk_side_mirror` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_side_mirror_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_speed_meter`
--

CREATE TABLE `chk_speed_meter` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_speed_meter_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_tire`
--

CREATE TABLE `chk_tire` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_tire_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_window_film`
--

CREATE TABLE `chk_window_film` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_window_film_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_window_glass`
--

CREATE TABLE `chk_window_glass` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_window_glass_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chk_windshield`
--

CREATE TABLE `chk_windshield` (
  `goods_id` int(11) NOT NULL,
  `goods_chk_windshield_id` int(11) NOT NULL,
  `goods_chk_status_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `goods_id` int(11) NOT NULL,
  `goods_name` varchar(50) NOT NULL,
  `goods_machine` varchar(50) NOT NULL,
  `goods_gear` varchar(50) NOT NULL,
  `goods_mileage` varchar(50) NOT NULL,
  `goods_petroleum` varchar(50) NOT NULL,
  `goods_price` varchar(50) NOT NULL,
  `goods_img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`goods_id`, `goods_name`, `goods_machine`, `goods_gear`, `goods_mileage`, `goods_petroleum`, `goods_price`, `goods_img`) VALUES
(1, '2018 Mitsubishi Pajero-Sport', '2.4 Gls Limited', 'เกียร์อัตโนมัติ', '54,773 ', 'ดีเซล', '841,100 บาท', 'Pajero_sport.png');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_alloy`
--

CREATE TABLE `goods_chk_alloy` (
  `goods_chk_alloy_id` int(11) NOT NULL,
  `goods_chk_alloy_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_brand_symbol`
--

CREATE TABLE `goods_chk_car_brand_symbol` (
  `goods_chk_car_brand_symbol_id` int(11) NOT NULL,
  `goods_chk_car_brand_symbol_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_door`
--

CREATE TABLE `goods_chk_car_door` (
  `goods_chk_car_door_id` int(11) NOT NULL,
  `goods_chk_car_door_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_floor`
--

CREATE TABLE `goods_chk_car_floor` (
  `goods_chk_car_floor_id` int(11) NOT NULL,
  `goods_chk_car_floor_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_frame`
--

CREATE TABLE `goods_chk_car_frame` (
  `goods_chk_car_frame_id` int(11) NOT NULL,
  `goods_chk_car_frame_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_lights`
--

CREATE TABLE `goods_chk_car_lights` (
  `goods_chk_car_lights_id` int(11) NOT NULL,
  `goods_chk_car_lights_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_car_roof`
--

CREATE TABLE `goods_chk_car_roof` (
  `goods_chk_car_roof_id` int(11) NOT NULL,
  `goods_chk_car_roof_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ceiling`
--

CREATE TABLE `goods_chk_ceiling` (
  `goods_chk_ceiling_id` int(11) NOT NULL,
  `goods_chk_ceiling_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_ceiling_light`
--

CREATE TABLE `goods_chk_ceiling_light` (
  `goods_chk_ceiling_light_id` int(11) NOT NULL,
  `goods_chk_ceiling_light_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_cooling_system`
--

CREATE TABLE `goods_chk_cooling_system` (
  `goods_chk_cooling_system_id` int(11) NOT NULL,
  `goods_chk_cooling_system_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_engine_and_gear`
--

CREATE TABLE `goods_chk_engine_and_gear` (
  `goods_chk_engine_and_gear_id` int(11) NOT NULL,
  `goods_chk_engine_and_gear_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_engine_compartment_wall`
--

CREATE TABLE `goods_chk_engine_compartment_wall` (
  `goods_chk_engine_compartment_wall_id` int(11) NOT NULL,
  `goods_chk_engine_compartment_wall_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_entertainment_control_system`
--

CREATE TABLE `goods_chk_entertainment_control_system` (
  `goods_chk_entertainment_control_system_id` int(11) NOT NULL,
  `goods_chk_entertainment_control_system_name` varchar(255) NOT NULL
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
-- Table structure for table `goods_chk_front_beam`
--

CREATE TABLE `goods_chk_front_beam` (
  `goods_chk_front_beam_id` int(11) NOT NULL,
  `goods_chk_front_beam_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_front_fender`
--

CREATE TABLE `goods_chk_front_fender` (
  `goods_chk_front_fender_id` int(11) NOT NULL,
  `goods_chk_front_fender_name` varchar(255) NOT NULL
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
-- Table structure for table `goods_chk_handbrake`
--

CREATE TABLE `goods_chk_handbrake` (
  `goods_chk_handbrake_id` int(11) NOT NULL,
  `goods_chk_handbrake_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_handrail`
--

CREATE TABLE `goods_chk_handrail` (
  `goods_chk_handrail_id` int(11) NOT NULL,
  `goods_chk_handrail_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_instrument_panel`
--

CREATE TABLE `goods_chk_instrument_panel` (
  `goods_chk_instrument_panel_id` int(11) NOT NULL,
  `goods_chk_instrument_panel_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_lock_system`
--

CREATE TABLE `goods_chk_lock_system` (
  `goods_chk_lock_system_id` int(11) NOT NULL,
  `goods_chk_lock_system_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_multimedia_system`
--

CREATE TABLE `goods_chk_multimedia_system` (
  `goods_chk_multimedia_system_id` int(11) NOT NULL,
  `goods_chk_multimedia_system_name` varchar(255) NOT NULL
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
(1, 'กันชน'),
(2, 'ด้านหน้า'),
(3, 'ด้านหลัง'),
(4, 'ตะแกรงหน้า');

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_powertrain`
--

CREATE TABLE `goods_chk_powertrain` (
  `goods_chk_powertrain_id` int(11) NOT NULL,
  `goods_chk_powertrain_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_rear_fender`
--

CREATE TABLE `goods_chk_rear_fender` (
  `goods_chk_rear_fender_id` int(11) NOT NULL,
  `goods_chk_rear_fender_name` varchar(255) NOT NULL
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
-- Table structure for table `goods_chk_seat`
--

CREATE TABLE `goods_chk_seat` (
  `goods_chk_seat_id` int(11) NOT NULL,
  `goods_chk_seat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_shock_absorber`
--

CREATE TABLE `goods_chk_shock_absorber` (
  `goods_chk_shock_absorber_id` int(11) NOT NULL,
  `goods_chk_shock_absorber_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_side_mirror`
--

CREATE TABLE `goods_chk_side_mirror` (
  `goods_chk_side_mirror_id` int(11) NOT NULL,
  `goods_chk_side_mirror_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_speed_meter`
--

CREATE TABLE `goods_chk_speed_meter` (
  `goods_chk_speed_meter_id` int(11) NOT NULL,
  `goods_chk_speed_meter_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_tire`
--

CREATE TABLE `goods_chk_tire` (
  `goods_chk_tire_id` int(11) NOT NULL,
  `goods_chk_tire_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_window_film`
--

CREATE TABLE `goods_chk_window_film` (
  `goods_chk_window_film_id` int(11) NOT NULL,
  `goods_chk_window_film_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_window_glass`
--

CREATE TABLE `goods_chk_window_glass` (
  `goods_chk_window_glass_id` int(11) NOT NULL,
  `goods_chk_window_glass_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods_chk_windshield`
--

CREATE TABLE `goods_chk_windshield` (
  `goods_chk_windshield_id` int(11) NOT NULL,
  `goods_chk_windshield_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `img`
--

CREATE TABLE `img` (
  `img_id` int(11) NOT NULL,
  `img_directory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `chk_alloy`
--
ALTER TABLE `chk_alloy`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_car_brand_symbol`
--
ALTER TABLE `chk_car_brand_symbol`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_car_door`
--
ALTER TABLE `chk_car_door`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_car_floor`
--
ALTER TABLE `chk_car_floor`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_car_frame`
--
ALTER TABLE `chk_car_frame`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_car_lights`
--
ALTER TABLE `chk_car_lights`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_car_roof`
--
ALTER TABLE `chk_car_roof`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_ceiling`
--
ALTER TABLE `chk_ceiling`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_ceiling_light`
--
ALTER TABLE `chk_ceiling_light`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_cooling_system`
--
ALTER TABLE `chk_cooling_system`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_engine_and_gear`
--
ALTER TABLE `chk_engine_and_gear`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_engine_compartment_wall`
--
ALTER TABLE `chk_engine_compartment_wall`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_entertainment_control_system`
--
ALTER TABLE `chk_entertainment_control_system`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_fog_lamp`
--
ALTER TABLE `chk_fog_lamp`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_front_beam`
--
ALTER TABLE `chk_front_beam`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_front_fender`
--
ALTER TABLE `chk_front_fender`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_front_light`
--
ALTER TABLE `chk_front_light`
  ADD PRIMARY KEY (`goods_id`),
  ADD UNIQUE KEY `goods_id` (`goods_id`);

--
-- Indexes for table `chk_handbrake`
--
ALTER TABLE `chk_handbrake`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_handrail`
--
ALTER TABLE `chk_handrail`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_instrument_panel`
--
ALTER TABLE `chk_instrument_panel`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_lock_system`
--
ALTER TABLE `chk_lock_system`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_multimedia_system`
--
ALTER TABLE `chk_multimedia_system`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_outside`
--
ALTER TABLE `chk_outside`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_powertrain`
--
ALTER TABLE `chk_powertrain`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_rear_fender`
--
ALTER TABLE `chk_rear_fender`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_ruby_bumper`
--
ALTER TABLE `chk_ruby_bumper`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_seat`
--
ALTER TABLE `chk_seat`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_shock_absorber`
--
ALTER TABLE `chk_shock_absorber`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_side_mirror`
--
ALTER TABLE `chk_side_mirror`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_speed_meter`
--
ALTER TABLE `chk_speed_meter`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_tire`
--
ALTER TABLE `chk_tire`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_window_film`
--
ALTER TABLE `chk_window_film`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_window_glass`
--
ALTER TABLE `chk_window_glass`
  ADD PRIMARY KEY (`goods_id`);

--
-- Indexes for table `chk_windshield`
--
ALTER TABLE `chk_windshield`
  ADD PRIMARY KEY (`goods_id`);

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
-- Indexes for table `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `goods_chk_alloy`
--
ALTER TABLE `goods_chk_alloy`
  MODIFY `goods_chk_alloy_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_car_brand_symbol`
--
ALTER TABLE `goods_chk_car_brand_symbol`
  MODIFY `goods_chk_car_brand_symbol_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_car_door`
--
ALTER TABLE `goods_chk_car_door`
  MODIFY `goods_chk_car_door_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_car_floor`
--
ALTER TABLE `goods_chk_car_floor`
  MODIFY `goods_chk_car_floor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_car_frame`
--
ALTER TABLE `goods_chk_car_frame`
  MODIFY `goods_chk_car_frame_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_car_lights`
--
ALTER TABLE `goods_chk_car_lights`
  MODIFY `goods_chk_car_lights_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_car_roof`
--
ALTER TABLE `goods_chk_car_roof`
  MODIFY `goods_chk_car_roof_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_ceiling`
--
ALTER TABLE `goods_chk_ceiling`
  MODIFY `goods_chk_ceiling_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_ceiling_light`
--
ALTER TABLE `goods_chk_ceiling_light`
  MODIFY `goods_chk_ceiling_light_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_cooling_system`
--
ALTER TABLE `goods_chk_cooling_system`
  MODIFY `goods_chk_cooling_system_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_engine_and_gear`
--
ALTER TABLE `goods_chk_engine_and_gear`
  MODIFY `goods_chk_engine_and_gear_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_engine_compartment_wall`
--
ALTER TABLE `goods_chk_engine_compartment_wall`
  MODIFY `goods_chk_engine_compartment_wall_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_entertainment_control_system`
--
ALTER TABLE `goods_chk_entertainment_control_system`
  MODIFY `goods_chk_entertainment_control_system_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_fog_lamp`
--
ALTER TABLE `goods_chk_fog_lamp`
  MODIFY `goods_chk_fog_lamp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_front_beam`
--
ALTER TABLE `goods_chk_front_beam`
  MODIFY `goods_chk_front_beam_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_front_fender`
--
ALTER TABLE `goods_chk_front_fender`
  MODIFY `goods_chk_front_fender_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_front_light`
--
ALTER TABLE `goods_chk_front_light`
  MODIFY `goods_chk_front_light_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `goods_chk_handbrake`
--
ALTER TABLE `goods_chk_handbrake`
  MODIFY `goods_chk_handbrake_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_handrail`
--
ALTER TABLE `goods_chk_handrail`
  MODIFY `goods_chk_handrail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_instrument_panel`
--
ALTER TABLE `goods_chk_instrument_panel`
  MODIFY `goods_chk_instrument_panel_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_lock_system`
--
ALTER TABLE `goods_chk_lock_system`
  MODIFY `goods_chk_lock_system_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_multimedia_system`
--
ALTER TABLE `goods_chk_multimedia_system`
  MODIFY `goods_chk_multimedia_system_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_outside`
--
ALTER TABLE `goods_chk_outside`
  MODIFY `goods_chk_outside_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `goods_chk_powertrain`
--
ALTER TABLE `goods_chk_powertrain`
  MODIFY `goods_chk_powertrain_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_rear_fender`
--
ALTER TABLE `goods_chk_rear_fender`
  MODIFY `goods_chk_rear_fender_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_ruby_bumper`
--
ALTER TABLE `goods_chk_ruby_bumper`
  MODIFY `goods_chk_ruby_bumper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `goods_chk_seat`
--
ALTER TABLE `goods_chk_seat`
  MODIFY `goods_chk_seat_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_shock_absorber`
--
ALTER TABLE `goods_chk_shock_absorber`
  MODIFY `goods_chk_shock_absorber_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_side_mirror`
--
ALTER TABLE `goods_chk_side_mirror`
  MODIFY `goods_chk_side_mirror_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_speed_meter`
--
ALTER TABLE `goods_chk_speed_meter`
  MODIFY `goods_chk_speed_meter_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_tire`
--
ALTER TABLE `goods_chk_tire`
  MODIFY `goods_chk_tire_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_window_film`
--
ALTER TABLE `goods_chk_window_film`
  MODIFY `goods_chk_window_film_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_window_glass`
--
ALTER TABLE `goods_chk_window_glass`
  MODIFY `goods_chk_window_glass_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `goods_chk_windshield`
--
ALTER TABLE `goods_chk_windshield`
  MODIFY `goods_chk_windshield_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
