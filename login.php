<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="icon" href="img/sc-logo.png">

    <meta name="viewport", content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">

    <!--Plugins-->
    <link rel="stylesheet" href="plugins/animate.css/animate.css">

    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/others.css">
    
    <!--Bootstrap styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <!--Icons styles from fontawesome.com-->
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
          $('#execute').click(function(){
                alertify.error("The login form is empty")
          });
      })

  </script>

    <style>
    .answer{
        width:auto;
        display: block;
        color: red;
        text-align: center;
    }
    .msj{
        background: red;
        color: #ffffff;
        padding: 5px;
        display: block;
    }
    header {
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
    .center{
            margin-top: 1px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
                <div class="card-body">
                    <header><h1>User login</h1></header>
                    <form action="#" class="text-center" id="formlg">
                        <img class="center" src="img/sc-logo.png" width="100" height="100">
                        <div class="form-label-group">
                            <input type="text" name="user" id="inputUser" class="form-control" placeholder=" &#129333; User name" required autofocus>
                        </div>
                        <div class="answer"></div>
                        <br>
                        <div class="form-label-group">
                            <input type="password" name="secret" id="inputPassword" class="form-control" placeholder=" &#128273; Password" required autofocus>
                        </div>

                        <div class="custom-control custom-checkbox mb-3">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label">Remember password</label>
                        </div>
                        <button class="btn btn-lg btn-primary btn-block text-uppercase" id="execute" type="submit">Start</button>
                        <a href="SignUp.php">Sign up</a>
                        <a href="index.html"><i class="fas fa-home"></i>Home</a>
                    </form>              
                </div>
            </div>
        </div>
    </div>
</div>
<!--Java script user autentication with ajax-->
    <script type="text/javascript" src="Js/main.js"></script>

</body>
</html>