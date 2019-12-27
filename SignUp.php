<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sing up</title>
    <link rel="icon" href="img/sc-logo.png">
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/others.css">
    <!--Bootstrap styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
          $('#add').click(function(){
                alertify.error("The signup form is empty")
          });
      })

  </script>

    <style>
        .center{
            margin-top: 1px;
        }
        .mb-5, .my-5 {
            margin-bottom: -3rem!important;
        }
        .card-signin .card-body {
            padding: 2rem;
            box-shadow: 2px 2px 8px 0px #adb5bd;
        }
        header{
            height: 97px;
        }

        .h1, h1{
            line-height: 2.2;
            }
            @media (min-width: 1200px){
            .container, .container-lg, .container-md, .container-sm, .container-xl {
            max-width: 963px;
            }   
        }
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <header><h1>Please sign up</h1></header>
                    <form class="text-center" action="Connections/insert.php" method="POST">
                        <img class="center" src="img/sc-logo.png" width="100" height="100">
                        <div class="form-label-group">
                            <input type="email" name="email" class="form-control" placeholder=" &#128231; Email address" required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="full_name"  class="form-control" placeholder=" &#129333; Full name" required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="text" name="user" class="form-control" placeholder=" &#128272; User name" required autofocus>
                        </div>

                        <div class="form-label-group">
                            <input type="password" name="secret"  class="form-control" placeholder=" &#128273; Password" required autofocus>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" id="add"  type="submit" >Sign Up</button>
                        <a href="login.php">Login</a>

                        <a href="index.html"><i class="fas fa-home"></i>Home</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>