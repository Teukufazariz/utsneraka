<?php
require_once('db.php');

session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM datauser WHERE username = ?";

    $result = $db->prepare($sql);
    $result->execute([$username]);

    if ($result->rowCount() > 0) {
        $user = $result->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['role'] = $user['role'];

            if ($user['role'] === 'admin') {
                header('location: index.php');
            } else {
                header('location: pesan.php');
            }

            exit();
        } else {
            echo "Password salah!";
        }
    } else {
        echo "Username tidak ditemukan!";
    }
}
?>
