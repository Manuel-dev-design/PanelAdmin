
<?php include_once 'Connections/connection.php'?>
<?php
session_start();
if(empty($_SESSION['user'])){
    header ('location: index.html');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport", content="width=device-width, initial-scale=1.0, shrink-to-fit=no" >
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="stylesheet" href="CSS/others.css">
    <link rel="stylesheet" href="CSS/gt.css">
    

    <title>Tasks</title>
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
            alertify.success("Tasks admin")
        })
    </script>

    <!--Bootstrap styles-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!--Basic styles-->
    <style>
    a{
        color:#000000;
    }
    .navbar-end{
            float:right;
            display: block;
            padding: 1.5rem 1rem;
            color:#fff;
        }
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
            td{
                text-align: center;
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
            <!--Input and buttom search-->
            <div class="navbar-end">
    <ul class="navbar-nav ml-auto">
           <form class="form-inline my-2 my-lg-0">
               <input type="search" id="search" class="form-control mr-ms-2" placeholder="search your task" required autofocus>
               <button class="btn btn-success my-2 my-sm-0" type="submit">Search</button>
           </form>
       </ul>
       </div> 


        <input type="checkbox" id="check">
        <label for="check">
            <i class="fas fa-bars" id="btn"></i>
            <i class="fas fa-times" id="cancel"></i>
        </label>

             
    <div class="sidebar">

        <ul>
            <img class="center" src="img/sc-logo.png" width="70" height="70">
            <li><a href="admin.php"><i class="fas fa-home"></i>Home</a></li>
            <li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li>
            <li><a href="products.php"><i class="fas fa-link"></i>Products</a></li>
            <li><a href="#"><i class="fas fa-stream"></i>Overvew</a></li>
            <li><a href="events.php"><i class="fas fa-calendar-week"></i>Events</a></li>
            <li><a href="#"><i class="fas fa-question-circle"></i>About</a></li>
            <li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
            <li><a href="#"><i class="fas fa-envelope"></i>Contact Us</a></li>
        </ul>
    </div>
    </header>

    <div class="container p-4">
       <div class="row">
           <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                        <input type="hidden" id="taskId">
                            <div class="form-group">
                                <input type="text" id="name" placeholder="task name" class="form-control" required autofocus>
                            </div>
                            <div class="form-group">
                                <textarea id="description" cols="30" rows="10" class="form-control" placeholder="task description" require autofocus></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block text-center">Save task</button>
                        </form>
                    </div>
                </div>
           </div>

           <div class="col-md-7 my-4">

                <div class="card my-4" id="task-result">
                    <div class="card-body">
                        <ul id="container"></ul>
                    </div>
                </div>

                <table>
                    <thead class="table table-bordered table-lg ">
                        <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Description</td>
                        <td>Function</td>
                        </tr>
                    </thead>
                    <tbody class="table table-bordered table-lg" id="body">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
           </div>

       </div>
   </div>
<!--Jquery file-->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" 
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="Js/app.js"></script>
</body>
</html>
  </body>
</html>