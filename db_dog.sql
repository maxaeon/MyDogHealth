CREATE TABLE `db_dog`.`tbl_dog` (`DogId` INT(15) NOT NULL AUTO_INCREMENT , `flddogName` VARCHAR(50) NOT NULL , `flddogDOB` DATE NOT NULL, `flddogAgeInYears` INT (3) NOT NULL , `flddogBreed` VARCHAR(50) NOT NULL , `flddogSex`VARCHAR(10) NOT NULL , `flddogWeightInPounds`, `flddogSterilized`, `flddogMicrochip`, `flddogFood` VARCHAR(50) NOT NULL , `flddogMedication`, `flddogCondition` VARCHAR(50) NOT NULL , PRIMARY KEY (`DogId`)) ENGINE = InnoDB;

SELECT * FROM `tbl_dog` WHERE 1

SELECT `DogId`, `flddogName`, `flddogDOB`, `flddogAgeInYears`, `flddogBreed`, `flddogSex`, `flddogWeightInPounds`, `flddogSterilized`, `flddogMicrochip`, `flddogFood`, `flddogMedication`, `flddogCondition` FROM `tbl_dog` WHERE 1

INSERT INTO `tbl_dog`(`DogId`, `flddogName`, `flddogDOB`, `flddogAgeInYears`, `flddogBreed`, `flddogSex`, `flddogWeightInPounds`, `flddogSterilized`, `flddogMicrochip`, `flddogFood`, `flddogMedication`, `flddogCondition`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]')

UPDATE `tbl_dog` SET `DogId`='[value-1]',`flddogName`='[value-2]',`flddogDOB`='[value-3]',`flddogAgeInYears`='[value-4]',`flddogBreed`='[value-5]',`flddogSex`='[value-6]',`flddogWeightInPounds`='[value-7]',`flddogSterilized`='[value-8]',`flddogMicrochip`='[value-9]',`flddogFood`='[value-10]',`flddogMedication`='[value-11]',`flddogCondition`='[value-12]' WHERE 1

DELETE FROM `tbl_dog` WHERE 0



