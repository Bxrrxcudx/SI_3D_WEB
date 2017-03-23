<?php
require_once "back/connect.php";
session_start();
$sql = "
	UPDATE `profils` 
	SET `design`= :design 
	WHERE id = :id 
	LIMIT 1;";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":id", $_SESSION['id']);
$stmt->bindValue(":design", $_POST['data']);
$stmt->execute();
