<?php 

$connect = mysqli_connect('localhost','root','','training_devel');

if(isset($_POST['name'])) {
   $name = $_POST['name'];
   $description = $_POST['description'];

   $query = "INSERT INTO task (name, description) VALUES('$name', 
   '$description')";

   $result = mysqli_query($connect, $query);
   if(!$result) {
       http_response_code(400);
       echo json_encode( (object) [
        'status' => 'error',
        'msg' => "MySQL Error: {$connect->error}"
    ]);
    exit ;
   }
   
   http_response_code(200);
   echo json_encode( (object) [
       'status' => 'success',
       'msg' => 'Data Added'
   ]);
   exit ;
}