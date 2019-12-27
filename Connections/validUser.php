<?php

$connect = mysqli_connect('localhost','root','','training_devel');

$user = $_POST['user'];
$secret = $_POST['secret'];

$admin = mysqli_query("SELECT * FROM login WHERE user= '$user' AND secret= '$secret'");
$user =  mysqli_query("SELECT * FROM login WHERE user= '$user' AND secret= '$secret'");


if(mysql_num_row($admin) > 0) {

    session_start();

    $_SESSION['admin']="$user";

    header("location: admin.php");

    exit();
}else if(mysql_num_row($user) > 0) {
    session_start();

    $_SESSION['user']="$user";

    header("location: user.php");

    exit();
}

