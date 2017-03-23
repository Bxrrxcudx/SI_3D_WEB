<?php 
try {
	$pdo = new PDO("mysql:dbname=connection;host=localhost","root","root");
} catch(PDOException $e) {
	die($e->getMessage());
}
$pdo->exec("SET NAMES UTF8");
