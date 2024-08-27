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
include 'connection.php';
session_start();

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
        background-image: url("img/main.jpg");
        background-size: cover;
        background-position: center;
        height: 100vh;
        }
      label{
        color: white;
        }
      th {
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        text-align: center;
        }
    </style>
	</head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="myclasses.php">My Classes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="courselist.php">Add Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navigation -->
    <div>
      <h2 class="text-white">
        <center><font size="10">Course Catalog</font></center>
      </h2>
    </div>
    <br>
    <div class="container">
      <div class="col-lg-12">
        <br>
        <div class="row">
          <h3 class="text-white">Select a semester and view available classes.</h3>
		  <a href="logout.php" class="col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end"><button class="btn btn-secondary col-md-2" name="logout">Logout</button></a>
        </div>
        <br><br>

      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Semester</button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Spring</a>
          <a class="dropdown-item" href="#">Summer</a>
          <a class="dropdown-item" href="#">Fall</a>
        </div>
      </div><br>
    
        <table class="table table-dark table-striped table-hover table-bordered">
          <tr class="text-white">
            <th>
              <h5>Course Code</h5>
            </th>
            <th>
              <h5>Course Name</h5>
            </th>
            <th>
              <h5>Course Capacity</h5>
            </th>
            <th>
              <h5>Students Registered</h5>
            </th>
            <th>
              <h5>Actions</h5>
            </th>
          </tr>
        <?php
          include 'connection.php';

          $q="select * from courses";
          $query = mysqli_query($conn,$q);

          while ($res = mysqli_fetch_array($query)) {
          ?>
        <tr class="text-white">
          <th><?php echo $res['courseCode'] ?></th>
          <th><?php echo $res['courseName'] ?></th>
          <th><?php echo $res['courseCapacity'] ?></th>
          <th><?php echo $res['courseOccupancy'] ?></th>
          <th><a href="" class="text-white"><button class="btn btn-success">Add Course</button></a></th>
        </tr>
        <?php }
          ?>
        </table>
		  <div class="row">
          <a href="courselist.php" class="col-lg-12 d-grid gap-2 d-md-flex justify-content-md-end"><button class="btn btn-secondary col-md-3">Join Wait List</button></a> 
		  </div>
      </div>
    </div>
  </body>
</html>