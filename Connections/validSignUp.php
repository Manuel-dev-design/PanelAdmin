<?php
/**Directioning to the login table */
$sql_read = 'SELECT * FROM login';

$bring = $pdo->prepare($sql_read);
$bring->execute();

$return2 = $bring->fetchAll();

#var_dump($return);

#Add new user
if($_POST){
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];
    $user = $_POST['user'];
    $secret = $_POST['secret'];

    
    $sql_add = 'INSERT INTO login (email,full_name,user,secret) VALUES (?,?,?,?)';
    $add_customer = $pdo->prepare($sql_add);
    $add_customer->execute(array($email,$full_name,$user,$secret));


   
}


