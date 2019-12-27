<?php

class methods{
    public function insertData($data) {
        $c = new connect();
        $connection = $c->connection();

        $sql = "INSERT INTO login (email, full_name, user, secret)
        VALUES ('$data[0]', '$data[1]', '$data[2]', '$data[3]')";

return  $result = mysqli_query($connection, $sql);

      
    }
}
?>