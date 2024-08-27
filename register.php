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
session_start();
include 'connection.php';

  if(isset($_POST['done']))
  {
    $email  = $_POST['email'];
    $password = $_POST['password'];
    $name_first = ucfirst($_POST['name_first']);
    $name_last = ucfirst($_POST['name_last']);
    $address = $_POST['address'];
    $state_name = $_POST['state_name'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];
    $studentId = $_POST['studentId'];

    $q = "INSERT INTO `students` (`email`, `password`, `name_first`, `name_last`, `address`, `state_name`, `zip`, `phone`, `studentId`) VALUES ('$email','$password','$name_first','$name_last','$address','$state_name','$zip','$phone','$studentId')";

    $query = mysqli_query($conn,$q);
  }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
    <meta charset="utf-8">
    <meta email="viewport" content="width=device-width, initial-scale=1">
    <title>Class Registration Portal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
      body{
        background-image:linear-gradient(rgba(71,71,71,0.8),rgba(71,71,71,0.8)),url("img/main.jpg");
        background-size: cover;
        background-name_last: center;
        height: 100vh;
        }
      label{
        color: white;
        }
      h2{
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
            <a class="nav-link" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="register.php">Sign-up</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navigation -->

      <h2 class="text-white">
        <center><font size="10">New Student Registration</font></center>
      </h2>
    </div><br>
    <div class="container">
    <p class="col-lg-6 m-auto text-white">To register, please create an account below.</p><br><br>

    <div class="col-md-6 m-auto">
      <form class="row g-3">
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" class="form-control" id="inputEmail4" placeholder="email@example.com" required>
        </div>
        <div class="col-md-6">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" id="inputPassword4" placeholder="Create a password" required>
        </div>
        <div class="col-md-6">
          <label for="emailFirst" class="form-label">First Name</label>
          <input type="text" class="form-control" id="" placeholder="First name" required>
        </div>
        <div class="col-md-6">
          <label for="emailLast" class="form-label">Last name</label>
          <input type="text" class="form-control" id="" placeholder="Last name" required>
        </div>

        <div class="col-12">
          <label for="inputAddress" class="form-label">Street Address</label>
          <input type="text" class="form-control" id="inputAddress" placeholder="Sreet Address" required>
        </div>

        <div class="col-md-6">
          <label for="city" class="form-label">City</label>
          <input type="text" class="form-control" id="" placeholder="City" required>
        </div>
        
        <div class="col-md-4">
          <label for="inputState" class="form-label">State</label>
          <select id="inputState" class="form-select" required>
            <option selected>Choose...</option>
            <option>CA</option>
            <option>FL</option>
            <option>NY</option>
            <option>...</option>
          </select>
        </div>
        
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Zip</label>
          <input type="number" class="form-control" id="" pattern="[0-9]{5}" maxlength="5" placeholder="00000" required>
        </div>
        
          <div class="col-md-6">
          <label for="phone" class="form-label">Phone</label>
          <input type="tel" class="form-control" id="" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="10" placeholder="(000) 000-0000" required>
        </div>
        
        <div class="col-md-6">
          <label for="studentId" class="form-label">Student ID</label>
          <input type="number" class="form-control" id="" maxlength="9" placeholder="00000" required>
        </div>

        <a href="insert.php" class="col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end">
          <button type="submit" class="btn btn-success">Create Account</button>
        </a>
      </form>
    </div>
  </body>
</html>
