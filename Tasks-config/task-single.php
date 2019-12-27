
<?php

$connect = mysqli_connect('localhost','root','','training_devel');

$id= $_POST['id'];
if(!empty($id)) {
    $query = "SELECT * FROM task WHERE id = $id";
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

    $jsonstring = json_encode($json[0]);
    echo $jsonstring;
}

?>

