-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2023 at 10:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

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
  `fldappointmentDog` varchar(150) NOT NULL,
  `fldappointmentLocation` varchar(150) NOT NULL,
  `fldappointmentContact` date NOT NULL,
  `fldappointmentTime` time NOT NULL,
  `fldappointmentRequiredDocs` varchar(150) NOT NULL,
  `fldappointmentCost` varchar(50) NOT NULL,
  `fldappointmentVaccination` varchar(150) NOT NULL,
  `fldappointmentNotes` varchar(150) NOT NULL,
  `fldappointmentHandler` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`AppointmentId`, `fldappointmentTitle`, `fldappointmentDog`, `fldappointmentLocation`, `fldappointmentContact`, `fldappointmentTime`, `fldappointmentRequiredDocs`, `fldappointmentCost`, `fldappointmentVaccination`, `fldappointmentNotes`, `fldappointmentHandler`) VALUES
(6, 'Yearly Checkup and Vaccinations', 'Sophia and Buddy', 'Reese Veterinary Clinic', '2023-06-01', '12:30:00', '', '$50 each', '', 'Sophia may need to be sedated to get her nails trimmed, so she needs to fast for 12 hours before the appointment', '');

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
(6, 'Diabetes', '2022-01-01', 'Dr. Childs', 'Insulin 2x daily and no added sugars in food or snacks. Extra water', 'Life span may be shortened, but with proper diet and medication and lifestyle, he will be healthy and happy for a long time', '', 'Buddy');

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
(26, '', 'Sophia', '2020-03-01', 4, 'Rottweiler', 'Female', 85, 'No', 0, 'Sophia is a good dog'),
(34, ' ', 'Buddy', '2021-11-01', 0, 'Rottweiler', 'Male', 130, 'No', 0, '');

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
(3, 'Dog Chow', 'Purina', '1 cup', '2x daily in mornings', 'Sophia likes this more than Buddy does', 'Sophia, sometimes Buddy');

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
(18, 'myUser', 'LastName', 'email@email.com', 'myPasswd', 'myPasswd', '123-456-6789', '0123 Doggie Lane', 'Flint MI, 48507', '', '');

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
(4, 'Novalin N Insulin', '2022-01-01', '0000-00-00', '10 units ', '2x daily', 'Inject with syringe into back of neck', 'Dr. Childs', '', ' Buddy');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_veterinarian`
--

CREATE TABLE `tbl_veterinarian` (
  `VeterinarianId` int(15) NOT NULL,
  `fldvetClinic` varchar(50) NOT NULL,
  `fldvetAddress` varchar(150) NOT NULL,
  `fldvetAddress2` varchar(150) NOT NULL,
  `fldvetAddress3` varchar(150) NOT NULL,
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

INSERT INTO `tbl_veterinarian` (`VeterinarianId`, `fldvetClinic`, `fldvetAddress`, `fldvetAddress2`, `fldvetAddress3`, `fldvetPhone`, `fldvetEmail`, `fldvetDoctor`, `fldvetDog`, `fldvetNotes`, `fldvetHandler`) VALUES
(5, 'Reese Veterinary Clinic', '1234 Doggie Lane', 'Flint MI, 48507', '', '(123)456-7890', 'abc123@gmail.com', 'Dr. Childs', 'Sophia and Buddy', '', '');

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
  MODIFY `AppointmentId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_condition`
--
ALTER TABLE `tbl_condition`
  MODIFY `ConditionId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_dog`
--
ALTER TABLE `tbl_dog`
  MODIFY `DogId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `FoodId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_handler`
--
ALTER TABLE `tbl_handler`
  MODIFY `HandlerId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_medication`
--
ALTER TABLE `tbl_medication`
  MODIFY `MedicationId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_veterinarian`
--
ALTER TABLE `tbl_veterinarian`
  MODIFY `VeterinarianId` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
