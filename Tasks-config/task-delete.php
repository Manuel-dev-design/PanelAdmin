<?php

$connect = mysqli_connect('localhost','root','','training_devel');


if(isset($_POST['id'])) {

    $id = $_POST['id'];

        $query = "DELETE  FROM task WHERE id = $id";
        $result = mysqli_query($connect, $query);
        if(!$result) {
            die('Query failed');
        }


        echo "Task deleted successfully";

}

?>

