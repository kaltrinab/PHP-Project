drop database projektiphp;
create database projektiphp;
use projektiphp;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `feedback` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Gresa', 'gresa@hotmail.com', '01234567', 'Great!'),
(2, 'Nora', 'NIbrahimi12@gmail.com', '123456789', 'Awesome service!'),
(3, 'Mimoza', 'mimozaajetii@outlook.com', '987654321', 'Had the best time!'),
(4, 'Kaltrine', 'kaltrina.bulliqi@gmail.com', '1234512345', 'Impulse was the best choice!'),
(5, 'Oriola', 'Oriola@gmail.com', '81273645', 'I had a lot of fun!');



CREATE TABLE `reservations` (
  `ID` int(11) NOT NULL,
  `Username` varchar(10) NOT NULL,
  `Emri` varchar(45) NOT NULL,
  `Mbiemri` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Phonenumber` varchar(10) NOT NULL,
  `Country` varchar(45) NOT NULL,
  `Arrivaldate` date NOT NULL,
  `Untildate` date NOT NULL,
  `Adults` int(11) NOT NULL,
  `Children` int(11) NOT NULL,
  `Roomtype` varchar(45) NOT NULL,
  `Meals` varchar(45) NOT NULL,
  `Balcony` varchar(45) NOT NULL,
  `Questions` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


INSERT INTO `reservations` (`ID`, `Username`, `Emri`, `Mbiemri`, `Email`, `Phonenumber`, `Country`, `Arrivaldate`, `Untildate`, `Adults`, `Children`, `Roomtype`, `Meals`, `Balcony`, `Questions`) VALUES
(1, 'Rreza', 'Rreze', 'Belegu', 'rrezebelegu@gmail.com', '044444888', 'Kosovo', '2018-01-01', '2018-01-02', 1, 0, 'Suit', 'YES', 'NO', NULL),
(2, 'Loli', 'Lola', 'Ismajli', 'rrezebelegu@gmail.com', '044444888', 'Kosovo', '2018-01-01', '2018-01-02', 1, 0, 'Suit', 'YES', 'NO', NULL),
(8, 'Gresa', 'Gresa', 'Dodaj', 'gresa@hotmail.com', '1234567890', 'Kosovo', '2018-12-07', '2018-12-07', 1, 0, 'Double', 'Yes meals', 'Yes', '');


CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `rooms` (`id`, `title`, `size`, `price`) VALUES
(2, 'Double', '25', '200'),
(3, 'Deluxe', '30', '300');


CREATE TABLE `staff` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(45) NOT NULL,
  `Mbiemri` varchar(45) NOT NULL,
  `Pozita` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `staff` (`ID`, `Emri`, `Mbiemri`, `Pozita`) VALUES
(1, 'Jeta', 'Belegu', 'Recepsionist'),
(2, 'Hana', 'Hasku', 'Menaxhere'),
(3, 'Jeton', 'Belegu', 'Pastrues'),
(4, 'Vlora', 'Krasniqi', 'Sigurim');


ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `reservations`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `staff`
  ADD PRIMARY KEY (`ID`);


ALTER TABLE `reservations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;


ALTER TABLE `staff`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
