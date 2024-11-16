<?php
session_start();
include 'connect.php';

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM user_table WHERE username=? AND password=? ");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();
        $_SESSION['username'] = $row['username'];
        $_SESSION['firstname'] = $row['firstname'];
        header("Location: mainpage.php");
        exit();
    } 
    else {
        echo"wrong user or paswsword";
    }

    $stmt->close();
    $conn->close();
}
?>