<?php

$connect = mysqli_connect('localhost','root','','training_devel');


$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];


$sql_update = "UPDATE task SET name = ?, description = ? WHERE
id = ?";
$statement_update = $connect->prepare($sql_update);
$statement_update->execute(array($name,$description,$id));

$result = mysqli_query($connect, $sql_update);
if(!$result) {
    die('Query error' . mysqli_error($connect));
}

echo "Task updated successfully";



?>