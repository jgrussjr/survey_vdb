-- SQL File for survey project in Visual Database Programming Fall 2015
-- James Gruss, Jr. 
-- Host: localhost

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_gruss001`
--

-- --------------------------------------------------------
-- CREATE DATABASE IF NOT EXISTS db_gruss001;
USE db_gruss001;
--
-- Table structure for table `survey_tbl`
--

DROP TABLE survey_tbl;
CREATE TABLE IF NOT EXISTS `survey_tbl` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `user_id` varchar(30) NOT NULL,
  `first_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `major` varchar(30) DEFAULT NULL,
  `course` varchar(30) DEFAULT NULL,
  `advisor` varchar(30) DEFAULT NULL,
  `range_value` varchar(11) DEFAULT NULL,
  `date_field` varchar(30) DEFAULT NULL,
  
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `survey_tbl`
--

INSERT INTO `survey_tbl` (`user_name`, `user_id`, `first_name`, `last_name`, `email`, `major`, `course`, `advisor`, `range_value`, `date_field`) VALUES
('dennyb', '111', 'Denny', 'Bubbleton', 'denny@mightygumball.net', 'computer science', 'Visual Database Programming', 'Steve Frezza', '5', ''),
('irmaw', '112', 'Irma', 'Werlitz', 'iwer@aliensabductedme.com', 'computer science', 'Comparative Languages', 'Dr. Brinkman', '6', ''),
('elbertK', '113', 'Elbert','Kreslee','elbert@kresleesprockets.biz', 'software engineering', 'Comparative Languages', 'Dr. Brinkman', '10', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
