<?php


/**require 'Connections/connection.php';

$users =  $connection->query("SELECT name, type FROM login
WHERE user = '".$_POST['user']."' AND secret = '".$_POST['secret']."'");

if($users->num_rows == 1){
    $data = $users->fetch_assoc();
    echo json_encode(array ('error' => false, 'type_user' => $data['type']));
}else{
    echo json_encode(array('error' => true));
}
   
$connection->close();*/

session_start();
error_reporting(0);


$user = $_POST['user'];
$secret = $_POST['secret'];
$_SESSION['user'] = "$user";



$connection = mysqli_connect("localhost","root","","training_devel");
$query = "SELECT * FROM login WHERE user = '$user' and secret = '$secret'";
$execute = mysqli_query($connection,$query);

$row = mysqli_num_rows($execute);
if ($row > 0){
   // header("location:admin.php");
   echo 'ok';
}else{
    echo '<div class="msj">user name or password are wrong</div>';
}


mysqli_free_result($execute);
mysqli_close($connection);
