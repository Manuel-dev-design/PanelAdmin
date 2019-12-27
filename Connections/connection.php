
<?php

/**Class connection */

class connect{
    private $server = "localhost";
    private $user = "root";
    private $data_base = "training_devel";
    private $password = "";

    /**Executing all the elements from the class */
    public function connection() {
        $connection = mysqli_connect($this->server, $this->user, $this->password, $this->data_base);

        /**Returning the connection */
        return $connection;
    }


}

/**Calling the class */
$obj = new connect();
if($obj->connection()) {
   // echo "the file is connected";
}else{
    echo "failed connection";
}




?>
