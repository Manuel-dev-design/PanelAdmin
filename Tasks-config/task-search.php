<?php

$connect = mysqli_connect('localhost','root','','training_devel');

$search = $_POST['search'];
if(!empty($search)) {
    $query = "SELECT * FROM task WHERE name LIKE '$search%'";
    $result = mysqli_query($connect, $query);

    if(!$result) {
        die('Query error' . mysqli_error($connect));
    }

    $json = array();
    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'name' => $row['name'],
            'description' => $row['description'],
            'id' => $row['id']
        );
    }

    $jsonstring = json_encode($json);
    echo $jsonstring;
}

?>