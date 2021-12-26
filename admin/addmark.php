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
    <title>Add Marks</title>
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix" style="margin-left:850px; margin-bottom:10px" >
            <ul class="main-nav" animate slideInDown>
                <li class="logout"><a href="admindash.php">Dashboard</a></li>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About</a></li>
                <li><a href="contactus.php">Contact</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2 style="margin-left:640px;">Enter Student Details</h2>



          <form class="row g-3" method="post" enctype="multipart/form-data" action="secondstep.php">
            <div class="col-md-6">
                <label  class="form-label" >Name </label>
                <input type="text" name='name' class="form-control" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">Class</label>
                <input type="text" name='class' class="form-control" required>
            </div>
            <div class="col-md-3">
                <label class="form-label">Rollno</label>
                <input type="text" name='rollno' class="form-control" required>
            </div>
            <div class="col-6">
                <label class="form-label">Father's Name</label>
                <input type="text" class="form-control" name='father' placeholder="xxxx" required>
            </div>
            <div class="col-6">
                <label  class="form-label">Mother's Name</label>
                <input type="text" class="form-control" name='mother' placeholder="yyyy" required>
            </div>
            <div class="col-md-6">
                <label class="form-label">Mobile No.</label>
                <input type="text" class="form-control" name='mobile' required>
            </div>
            <div class="col-md-6">
                <label for="inputCity" class="form-label">City</label>
                <input type="text" class="form-control" name='village' id="inputCity" required>
            </div>
            <input type="submit" name="submit1" value="Next" class="next_Step table4" style="margin-left:540px; width: 100px; height: 50px;font-size: 28px"/></td>  

            </form>




<!-- 
        <form method="post" enctype="multipart/form-data" action="secondstep.php">
            <table class="table1">
             <tr>
                <th>Name </th>   <th> Class</th> <th>Roll No</th>
             </tr>
             <tr>
                 <td><input type='text' name='name' placeholder='Enter Full Name' required class="box"/></td>
                 <td><input type='text' name='class' placeholder='Class' required class="box"/></td>
                 <td><input type='text' name='rollno' placeholder='Rollno' required class="box"/></td>
                
             </tr>
             </table>
             <table class="table2">
             <tr>
                <th>father Name </th>   <th> Mother Name</th> <th>Mobile No</th><th>Your City</th>
             </tr>
                 <tr>
                 <td><input type='text' name='father' placeholder="Father's Name" required class="box"/></td>
                 <td><input type='text' name='mother' placeholder="Mother's Name" required class="box"/></td>
                 <td><input type='text' name='mobile' placeholder='Mobile No' required class="box"/></td>
                 <td><input type='text' name='village' placeholder='City' required class="box"/></td>
             </tr>
             
         </table> -->
         <!-- <table class="table3">
           <tr>
               <th>Choose Image -</th>
               <td><input type="file" name="img" required/></td>
           </tr> 
         </table> -->
<!--            
        </table>
       </form> -->
      </div>
    </header>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html> 
