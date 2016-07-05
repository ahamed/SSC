<?php 
$user = 'root';
$pass = 'lumas';
$host = 'localhost';
$db   = 'SSC';

$conn = mysql_connect($host, $user, $pass) or die('Connection failed');
$database = mysql_query('CREATE DATABASE IF NOT EXISTS SSC') or die('problem creating db');
$connect_db = mysql_select_db('SSC');
$info = "CREATE TABLE IF NOT EXISTS info(roll int, name varchar(200), fname varchar(200), mname varchar(200), session varchar(50), mobile varchar(20),section varchar(50), primary key(roll))";

mysql_query($info) or die("Table info not created, try again");

$science ="CREATE TABLE IF NOT EXISTS c22bscience(roll int,  banglawr int, banglaob int, englighwr int , englishob int, physicswr int , physicsob int, chemistrywr int, chemistryob int, mathwr int, mathob int, biologywr int, biologyob int, ictwr int, ictob int, optional varchar(200), primary key(roll))";

mysql_query($science) or die('failed to create scicence ');


$arts ="CREATE TABLE IF NOT EXISTS c22barts(roll int,  banglawr int, banglaob int, englighwr int , englishob int, civicswr int , civicsob int, sswr int, ssob int, ihwr int, ihob int, ghwr int, ghob int, ictwr int, ictob int,economicswr int, economicsob int,  optional varchar(200), primary key(roll))";

mysql_query($arts) or die('Failed to create arts');


