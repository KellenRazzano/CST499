<!-- 
*************************************
*	KELLEN RAZZANO					          *
*								                  	*
*	CST 499	Capstone            	    *
*	Class Registration Portal 				*
*									                  *
*	 August 2024			              	*
*									                  *
*								                  	*
*************************************
-->
<?php
error_reporting(0);
session_start();
include "connection.php";

$name     = $_POST['name'];
$Password = $_POST['pass'];

if (isset($_POST['Login']))
 {
  $q    = "select * from login where name = '$name' and password = '$Password'";
  $res  = mysqli_query($conn, $q);
  $res1 = mysqli_num_rows($res);

  if ($res1 == 0)
   {
    header("location:login.php?user=Username or password is incorrect.");
   }
  while ($row = mysqli_fetch_array($res))
   {
    if ($row['name'] == $name && $row['password'] == $Password)
     {
      $_SESSION['name']     = $name;
      $_SESSION['password'] = $Password;
      
      if ($row['type'] == 'admin')
       {
        header("location:myclasses.php");
       }
      
      elseif ($row['type'] != 'admin')
       {
        header("location:myclasses.php");
       }
     }
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Class Registration Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body{
        background-image:linear-gradient(rgba(71,71,71,0.8),rgba(71,71,71,0.8)),url("img/login.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        }
      label{
        color: white;
        }
      h5{
        margin-top: 2rem;
        }
    </style>
	</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Sign-up</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navigation -->
    <div>
      <h2 class="text-white">
        <center><font size="10">Class Registration Portal</font></center>
      </h2>
    </div> <br>
    <div class="container">
      <form method="post">
        <div class="form-group col-lg-6 m-auto">
          <div class="container">
          <div class = "card-header mx-auto" style="width: 40%;">
            <img src="img/logo.png" class="card-img-top" alt="Site logo">
          </div><br>
            <h5 class="card-title text-white">Welcome, please sign in.</h5><br>
            <label><b>Username</b></label>
            <input type="text" name="name" class="form-control" required><br>
            <label><b>Password</b></label>
            <input type="password" name="pass" class="form-control" required><br>
            <div class="text-right">
              <button name="Login" class="btn btn-success">Login</button>
            </div><br>
            <div>
              <p class="text-danger"><?php echo $_GET['user']; ?></p>
              <br> 
              <p><?php echo $_GET['password']; ?></p>
              <br>
              <p><?php echo $_GET['both']; ?></p>
            </div>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>