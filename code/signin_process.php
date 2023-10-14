<?php
require_once('db.php');

$namadepan = $_POST['namadepan'];
$namabelakang = $_POST['namabelakang'];
$username = $_POST['username'];
$password = $_POST['password'];
$tanggal = $_POST['tanggal'];
$gender = $_POST['gender'];
$role = $_POST['role'];

$en_pass = password_hash($password, PASSWORD_BCRYPT);

$sql = "INSERT INTO datauser (namadepan, namabelakang, username, password, tanggal, gender, role)
        VALUES(?,?,?,?,?,?,?)";

$result = $db->prepare($sql);
$result->execute([$namadepan, $namabelakang, $username, $en_pass, $tanggal, $gender, $role]);

header('location: login.php');
?>