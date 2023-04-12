-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2023 at 03:14 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myschema`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `AppointmentId` int(15) NOT NULL,
  `fldappointmentTitle` varchar(50) NOT NULL,
  `fldappointmentLocation` varchar(150) NOT NULL,
  `fldappointmentContact` date NOT NULL,
  `fldappointmentTime` time NOT NULL,
  `fldappointmentRequiredDocs` varchar(150) NOT NULL,
  `fldappointmentCost` varchar(50) NOT NULL,
  `fldappointmentNotes` varchar(150) NOT NULL,
  `fldappointmentHandler` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`AppointmentId`, `fldappointmentTitle`, `fldappointmentLocation`, `fldappointmentContact`, `fldappointmentTime`, `fldappointmentRequiredDocs`, `fldappointmentCost`, `fldappointmentNotes`, `fldappointmentHandler`) VALUES
(6, '', '', '0000-00-00', '00:00:00', '', '', '', ''),
(7, '', '', '0000-00-00', '00:00:00', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_condition`
--

CREATE TABLE `tbl_condition` (
  `ConditionId` int(15) NOT NULL,
  `fldconditionName` varchar(50) NOT NULL,
  `fldconditionDateDiagnosed` date NOT NULL,
  `fldconditionDoctor` varchar(50) NOT NULL,
  `fldconditionTreatment` varchar(150) NOT NULL,
  `fldconditionPrognosis` varchar(150) NOT NULL,
  `fldconditionNotes` varchar(150) NOT NULL,
  `fldconditionDog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_condition`
--

INSERT INTO `tbl_condition` (`ConditionId`, `fldconditionName`, `fldconditionDateDiagnosed`, `fldconditionDoctor`, `fldconditionTreatment`, `fldconditionPrognosis`, `fldconditionNotes`, `fldconditionDog`) VALUES
(6, '', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dog`
--

CREATE TABLE `tbl_dog` (
  `DogId` int(15) NOT NULL,
  `flddogHandler` varchar(50) NOT NULL,
  `flddogName` varchar(50) NOT NULL,
  `flddogDOB` date NOT NULL,
  `flddogAgeInYears` decimal(4,0) NOT NULL,
  `flddogBreed` varchar(50) NOT NULL,
  `flddogSex` varchar(10) NOT NULL,
  `flddogWeightInPounds` int(6) NOT NULL,
  `flddogSterilized` varchar(10) NOT NULL,
  `flddogMicrochip` int(25) NOT NULL,
  `flddogNotes` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_dog`
--

INSERT INTO `tbl_dog` (`DogId`, `flddogHandler`, `flddogName`, `flddogDOB`, `flddogAgeInYears`, `flddogBreed`, `flddogSex`, `flddogWeightInPounds`, `flddogSterilized`, `flddogMicrochip`, `flddogNotes`) VALUES
(26, '', 'Sophia', '2020-03-01', '4', 'Rottweiler', 'Female', 85, 'No', 0, 'Sophia is a good dog');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `FoodId` int(15) NOT NULL,
  `fldfoodName` varchar(50) NOT NULL,
  `fldfoodBrand` varchar(50) NOT NULL,
  `fldfoodAmount` varchar(20) NOT NULL,
  `fldfoodFrequency` varchar(20) NOT NULL,
  `fldfoodNotes` varchar(150) NOT NULL,
  `fldfoodDog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`FoodId`, `fldfoodName`, `fldfoodBrand`, `fldfoodAmount`, `fldfoodFrequency`, `fldfoodNotes`, `fldfoodDog`) VALUES
(3, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_handler`
--

CREATE TABLE `tbl_handler` (
  `HandlerId` int(15) NOT NULL,
  `fldhandlerFirstName` varchar(25) NOT NULL,
  `fldhandlerLastName` varchar(25) NOT NULL,
  `fldhandlerEmail` varchar(50) NOT NULL,
  `fldhandlerPassword` varchar(25) NOT NULL,
  `fldhandlerPasswordConfirm` varchar(150) NOT NULL,
  `fldhandlerPhone` varchar(15) NOT NULL,
  `fldhandlerAddress1` varchar(50) NOT NULL,
  `fldhandlerAddress2` varchar(150) NOT NULL,
  `fldhandlerAddress3` varchar(150) NOT NULL,
  `fldhandlerNotes` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_handler`
--

INSERT INTO `tbl_handler` (`HandlerId`, `fldhandlerFirstName`, `fldhandlerLastName`, `fldhandlerEmail`, `fldhandlerPassword`, `fldhandlerPasswordConfirm`, `fldhandlerPhone`, `fldhandlerAddress1`, `fldhandlerAddress2`, `fldhandlerAddress3`, `fldhandlerNotes`) VALUES
(16, '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_medication`
--

CREATE TABLE `tbl_medication` (
  `MedicationId` int(15) NOT NULL,
  `fldmedicationName` varchar(50) NOT NULL,
  `fldmedicationStartDate` date NOT NULL,
  `fldmedicationEndDate` date NOT NULL,
  `fldmedicationDose` varchar(50) NOT NULL,
  `fldmedicationFrequency` varchar(50) NOT NULL,
  `fldmedicationMethod` varchar(50) NOT NULL,
  `fldmedicationDoctor` varchar(50) NOT NULL,
  `fldmedicationNotes` varchar(150) NOT NULL,
  `fldmedicationDog` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_medication`
--

INSERT INTO `tbl_medication` (`MedicationId`, `fldmedicationName`, `fldmedicationStartDate`, `fldmedicationEndDate`, `fldmedicationDose`, `fldmedicationFrequency`, `fldmedicationMethod`, `fldmedicationDoctor`, `fldmedicationNotes`, `fldmedicationDog`) VALUES
(4, '', '0000-00-00', '0000-00-00', '', '', '', '', '', ' '),
(5, '', '0000-00-00', '0000-00-00', '', '', '', '', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_veterinarian`
--

CREATE TABLE `tbl_veterinarian` (
  `VeterinarianId` int(15) NOT NULL,
  `fldvetClinic` varchar(50) NOT NULL,
  `fldvetAddress` varchar(150) NOT NULL,
  `fldvetPhone` varchar(15) NOT NULL,
  `fldvetEmail` varchar(50) NOT NULL,
  `fldvetDoctor` varchar(50) NOT NULL,
  `fldvetDog` varchar(50) NOT NULL,
  `fldvetNotes` varchar(150) NOT NULL,
  `fldvetHandler` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_veterinarian`
--

INSERT INTO `tbl_veterinarian` (`VeterinarianId`, `fldvetClinic`, `fldvetAddress`, `fldvetPhone`, `fldvetEmail`, `fldvetDoctor`, `fldvetDog`, `fldvetNotes`, `fldvetHandler`) VALUES
(5, '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`AppointmentId`);

--
-- Indexes for table `tbl_condition`
--
ALTER TABLE `tbl_condition`
  ADD PRIMARY KEY (`ConditionId`);

--
-- Indexes for table `tbl_dog`
--
ALTER TABLE `tbl_dog`
  ADD PRIMARY KEY (`DogId`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`FoodId`);

--
-- Indexes for table `tbl_handler`
--
ALTER TABLE `tbl_handler`
  ADD PRIMARY KEY (`HandlerId`);

--
-- Indexes for table `tbl_medication`
--
ALTER TABLE `tbl_medication`
  ADD PRIMARY KEY (`MedicationId`);

--
-- Indexes for table `tbl_veterinarian`
--
ALTER TABLE `tbl_veterinarian`
  ADD PRIMARY KEY (`VeterinarianId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `AppointmentId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_condition`
--
ALTER TABLE `tbl_condition`
  MODIFY `ConditionId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_dog`
--
ALTER TABLE `tbl_dog`
  MODIFY `DogId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `FoodId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_handler`
--
ALTER TABLE `tbl_handler`
  MODIFY `HandlerId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_medication`
--
ALTER TABLE `tbl_medication`
  MODIFY `MedicationId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_veterinarian`
--
ALTER TABLE `tbl_veterinarian`
  MODIFY `VeterinarianId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
