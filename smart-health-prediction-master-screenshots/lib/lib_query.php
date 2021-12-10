<?php
// Here is the MySql Query to be run during install
 $sql = array();
 $sql[] = "DROP DATABASE ".$_db->database.";";
 $sql[] = "CREATE DATABASE IF NOT EXISTS ".$_db->database.";";
 $sql[] = "USE ".$_db->database.";";
 $sql[] = "CREATE TABLE muser (
 			UserID VARCHAR(10) NOT NULL,
 			Name VARCHAR(50) NOT NULL,
 			Email VARCHAR(40) NOT NULL UNIQUE,
 			Pass VARCHAR(40) NOT NULL,
 			Gender VARCHAR(2) NOT NULL,
 			Phone VARCHAR(16) NOT NULL,
 			Age INT NOT NULL,
 			Date_Of_Reg DATETIME NOT NULL,
 			 CONSTRAINT scuser_pk PRIMARY KEY(UserID)
 		 ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.symptons ( Disease VARCHAR(30) NOT NULL , J INT NOT NULL , N INT NOT NULL , LA INT NOT NULL , A INT NOT NULL , EL INT NOT NULL , S INT NOT NULL , I INT NOT NULL , V INT NOT NULL , E INT NOT NULL , WL INT NOT NULL , BE INT NOT NULL , F INT NOT NULL , VA INT NOT NULL , BU INT NOT NULL , ET INT NOT NULL , HS INT NOT NULL , LH INT NOT NULL , VB INT NOT NULL , PH INT NOT NULL , FU INT NOT NULL , EH INT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.history ( Disease VARCHAR(30) NOT NULL , AA INT NOT NULL , WD INT NOT NULL , HM INT NOT NULL , ID INT NOT NULL , HV INT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.lab ( Disease VARCHAR(30) NOT NULL , TB INT NOT NULL , AL INT NOT NULL , GGT INT NOT NULL , PT INT NOT NULL , GOT INT NOT NULL , GPT INT NOT NULL , LDH INT NOT NULL , BUN INT NOT NULL , MCV INT NOT NULL , MCH INT NOT NULL , CRT INT NOT NULL , AR INT NOT NULL , HBS INT NOT NULL , HBE INT NOT NULL , AHC INT NOT NULL , AHB INT NOT NULL , A2M INT NOT NULL , HG INT NOT NULL , PC INT NOT NULL , APP INT NOT NULL , MT INT NOT NULL , LN INT NOT NULL , HA INT NOT NULL , UC INT NOT NULL , C INT NOT NULL , AFP INT NOT NULL , TS INT NOT NULL , SF INT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.Physical_Exm ( Disease VARCHAR(30) NOT NULL , LT INT NOT NULL , SD INT NOT NULL , ED INT NOT NULL , RP INT NOT NULL , SL INT NOT NULL , P INT NOT NULL , SM INT NOT NULL , HL INT NOT NULL , SJ INT NOT NULL , SC INT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.physiological ( Disease VARCHAR(30) NOT NULL , FA INT NOT NULL , D INT NOT NULL , FM INT NOT NULL , SE INT NOT NULL , AN INT NOT NULL , AG INT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.cognitive ( Disease VARCHAR(30) NOT NULL , DC INT NOT NULL , PF INT NOT NULL , MC INT NOT NULL , IM INT NOT NULL , IA INT NOT NULL , IJ INT NOT NULL , AC INT NOT NULL , H INT NOT NULL , HE INT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.final ( Disease VARCHAR(30) NOT NULL , symptons FLOAT NOT NULL , history FLOAT NOT NULL , lab FLOAT NOT NULL , cognitive FLOAT NOT NULL , physical_exm FLOAT NOT NULL , physiological FLOAT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.finalOutput ( Disease VARCHAR(30) NOT NULL , Hepatitis FLOAT NOT NULL , Alcoholic_liver FLOAT NOT NULL , Primary_biliary_cirrhosis FLOAT NOT NULL , Liver_fibrosis FLOAT NOT NULL , Liver_cirrhosis FLOAT NOT NULL , Liver_cancer FLOAT NOT NULL , Hemrochromatis FLOAT NOT NULL, hj FLOAT NOT NULL ) ENGINE = InnoDB;";

 $sql[] = "CREATE TABLE medical.userRecord ( UserId VARCHAR(30) NOT NULL , symptons FLOAT DEFAULT 0 , history FLOAT DEFAULT 0 , lab FLOAT DEFAULT 0 , cognitive FLOAT DEFAULT 0 , physical_exm FLOAT DEFAULT 0 , physiological FLOAT DEFAULT 0, result VARCHAR(80) DEFAULT 'Not Calculated', CONSTRAINT user_id PRIMARY KEY(UserId) ) ENGINE = InnoDB;";

?>
