<?php

/*
 * SETTINGS!
 */
$databaseName = 'perfecthome';
$databaseUser = 'root';
$databasePassword = '';

/*
 * CREATE THE DATABASE
 */
$pdoDatabase = new PDO('mysql:host=localhost', 'root', $databasePassword);
$pdoDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDatabase->exec('CREATE DATABASE IF NOT EXISTS perfecthome');

/*
 * CREATE THE TABLE
 */
$pdo = new PDO('mysql:host=localhost;dbname='.$databaseName, 'root', $databasePassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// initialize the tables

$pdo->exec('DROP TABLE IF EXISTS name;');

$pdo->exec('CREATE TABLE `name` (
	 `id` int(11) NOT NULL AUTO_INCREMENT,
	 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

// *********mad lib questionaire 1 *******

$pdo->exec('DROP TABLE IF EXISTS madlib1;');

$pdo->exec('CREATE TABLE `madlib1` (
 	`id` int(11) NOT NULL AUTO_INCREMENT,
 	`adj1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`favCountry` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`bestie` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`adj2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
 	`noun1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`noun2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`favCartoon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`prez` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`gem` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`basement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`tree` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`artist` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`water` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`num1` int(100) NOT NULL,
 	`favAnimal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	`verb1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

// *********mad lib questionaire 2 *******

$pdo->exec('DROP TABLE IF EXISTS madlib2;');

$pdo->exec('CREATE TABLE `madlib2` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`num5` int(100) NOT NULL,
	`adj3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`num2` int(100) NOT NULL,
	`num3` int(100) NOT NULL,
	`num4` int(100) NOT NULL,
	`emotion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`direction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`room` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`adj4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`pubInst` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`favCity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
	`landmark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

// *********mad lib questionaire 3 *******

$pdo->exec('DROP TABLE IF EXISTS madlib3;');

$pdo->exec('CREATE TABLE `madlib3` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`num6` int(100) NOT NULL,
	`num7` int(100) NOT NULL,
	`disaster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`clothing` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`mood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`adj6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`urban` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`verb2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`pluAnimals` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`room2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`adj7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 
	`verb3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL, 	
	PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

echo 'Ding!';






/*
 * INSERT SOME DATA!
 */
// $pdo->exec('INSERT INTO ship
//     (name, weapon_power, jedi_factor, strength, is_under_repair) VALUES
//     ("Jedi Starfighter", 5, 15, 30, 0)'
// );
// $pdo->exec('INSERT INTO ship
//     (name, weapon_power, jedi_factor, strength, is_under_repair) VALUES
//     ("CloakShape Fighter", 2, 2, 70, 0)'
// );
// $pdo->exec('INSERT INTO ship
//     (name, weapon_power, jedi_factor, strength, is_under_repair) VALUES
//     ("Super Star Destroyer", 70, 0, 500, 0)'
// );
// $pdo->exec('INSERT INTO ship
//     (name, weapon_power, jedi_factor, strength, is_under_repair) VALUES
//     ("RZ-1 A-wing interceptor", 4, 4, 50, 0)'
// );

// echo 'Ding!';
