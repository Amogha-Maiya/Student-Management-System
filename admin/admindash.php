<?php
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>
<html>
<head>
    <title>Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../csss/admindash.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix" style="margin-left:850px; margin-bottom:10px">
          
            <ul class="main-nav" animate slideInDown >
                <li><a href="../index.php">HOME</a></li>
                <li><a href="aboutus.php">ABOUT</a></li>
                <li><a href="contactus.php">CONTACT</a></li>
                <li class="logout"><a href="logout.php">LOGOUT</a></li>
                
          </ul>
        </div>
      </nav>



      <div class="main-content-header">
        <h1>Admin's Dashboard</h1>
        
        <div class="btn-group me-2 btn-group-vertical" role="group" aria-label="Second group" style="margin-left:700px;">
          <button type="button" class="btn btn-secondary" ><a href="addmark.php">Add Marks</a></button>
          <button type="button" class="btn btn-secondary" ><a href="updatemark.php">Update Marks</a></button>
          <button type="button" class="btn btn-secondary" ><a href="deleteform.php">Delete Marks</a></button>
          <button type="button" class="btn btn-secondary" ><a href="allstudentdata.php">Display all students</a></button>
          <button type="button" class="btn btn-secondary" style="width:200px" ><a href="usermassage.php">Display all messages</a></button>
        </div>

      </div>
    </header>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    
</body>
</html>