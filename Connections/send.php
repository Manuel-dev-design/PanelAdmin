<?php 

/**This file doesn't send the message from the form */

require_once 'connection.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


/**Email data */
$send = "magnoriverar@gmail.com";
$matter = "contact web";

$mssg = "from: $name \n";
$mssg .= "email: $email \n";
$mssg .= "phone: $phone \n";
$mssg .= "message: $message";

/**Sedding message */

mail($send, $matter, $mssg);
header ('location: ../msg.html');

?>