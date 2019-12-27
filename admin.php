<?php $connect = mysqli_connect('localhost','root','','training_devel');?>

<?php
session_start();
if(isset($_SESSION['user'])){
    if($_SESSION["type"] == 1){

    }else{
        header("Location: admin.php");
    }

     }else{
     header("Location: index.php");
     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Plugins-->
    <link rel="stylesheet" href="plugins/animate.css/animate.css">

    
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/others.css">
    <title>VitalPBX</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    

     <!--Jquery file-->
  <script type="text/javascript" src="Js/jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" type="text/css" href="Js/alertifyjs/css/alertify.css">
  <link rel="stylesheet" type="text/css" href="Js/alertifyjs/css/themes/default.css">

  <!--Alertify script-->
  <script src="Js/alertifyjs/alertify.js"></script>

  <!--Jquery test-->
 <script type="text/javascript">
     $(document).ready(function() {
                alertify.success("Welcome to the prime page!")
      })

  </script>


    <!--Bootstrap styles
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    
    <style>
        .nav-link {
            display: block;
            padding: 1.5rem 1rem;
            float:right; 
        }
        .circle {
    margin-top: -5px;
    border-radius: 50%;
    margin: 10px auto;
    margin-top: -12px;
            }
        .navbar-end{
            float:right;
            display: block;
            padding: 1.5rem 1rem;
            color:#fff;
        }
        header{
            margin-left: 0px;
        }
        .center{
            margin-top: 7px;
        }
        
        body{
            line-height: 0.5;
        }
        


    </style>
</head>
<body>
    <header>
            <a class="nav-link" href="logout.php">Logout</a>

            <div class="navbar-end">
                <a class="navbar-item">
                    <?php echo $_SESSION['user']?>
                </a>
            </div>
            <div class="navbar-end">
            <img class="circle" src="img/user.jfif" width="50" height="50">
            </div>

           

        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>
             
    <div class="sidebar">

        <ul>
            <img class="center" src="img/sc-logo.png" width="70" height="70">
            <li><a href="tasks.php"><i class="fas fa-qrcode"></i>Tasks</a></li>
            <li><a href="products.php"><i class="fas fa-link"></i>Products</a></li>
            <li><a href="events.php"><i class="fas fa-calendar-week"></i>Events</a></li>
            <li><a href="#"><i class="fas fa-stream"></i>Overvew</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i>About</a></li>
            <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i>Contact Us</a></li>
        </ul>
    </div>
    </header>

    
    </div>
    </div>


</body>
</html>