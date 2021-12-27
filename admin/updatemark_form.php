<?php
session_start();

if (isset($_SESSION['uid'])) {
  echo "";
} else {
  header('location: ../login.php');
}

?>
<?php
include('../dbcon.php');
$rollno = $_GET['sid'];


$sql = "SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($run);

$class = $row['u_class'];

$sql2 = "SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2 = mysqli_query($con, $sql2);
$data = mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>

<head>
  <title>Update Mark Detail</title>
  <link rel="stylesheet" href="../csss/updatemark_form.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->

</head>

<body>
  <header>
    <nav>
      <div class="row clearfix">
        <ul class="main-nav" animate slideInDown>
          <li><a href="admindash.php"><b>DASHBOARD</b></a></li>
          <li><a href="../index.php"><b>HOME</b></a></li>
          <li><a href="aboutus.php"><b>ABOUT</b></a></li>
          <li><a href="contactus.php"><b>CONTACT</b></a></li>
        </ul>
      </div>
    </nav>
    <div class="main-content-header">

      <form method="post" action="update_mark_data.php">
        <table style="margin-top: 100px; margin-left: 680px; color: white; font-size: 26px;">
          <h4>
            <tr>
              <th>Name: </th>
              <td><span class="span"><?php echo $row['u_name']; ?></span></td>
            </tr>
          </h4>
          <h4>
            <tr>
              <th>Class: </th>
              <td><span class="span"><?php echo $row['u_class']; ?></span></td>
            </tr>
          </h4>
          <h4>
            <tr>
              <th>Rollno: </th>
              <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
            </tr>
          </h4>
        </table>

        <div style="margin-left:150px;">
          <table class="table1">
            <span>
              <h4 class="h_3" style="margin-left: 200px;">CIE</h4>
            </span>
            <tr>
              <th>OS</th>
              <th> DBMS </th>
              <th>EM</th>
              <th>JAVA</th>
              <th>WEB</th>
            </tr>
            <tr>
              <td>
                <input type='text' name='os1' value="<?php echo $data['u_os1']; ?>" class="th" required />
              </td>
              <td><input type='text' name='dbms1' value="<?php echo $data['u_dbms1']; ?>" class="th" /></td>
              <td><input type='text' name='em1' value="<?php echo $data['u_em1']; ?> " class="th" required /></td>
              <td><input type='text' name='java1' value="<?php echo $data['u_java1']; ?> " class="th" required /></td>
              <td><input type='text' name='web1' value="<?php echo $data['u_web1']; ?> " class="th" required /></td>

            </tr>
          </table>

          <span>
            <h4 class="h3" style="margin-left: 200px;">SEE</h4>
          </span>
          <table class="table4">
            <tr>
              <th>OS</th>
              <th> DBMS </th>
              <th>EM</th>
              <th>JAVA</th>
              <th>WEB</th>
            </tr>
            <tr>
              <td><input type='text' name='os2' value="<?php echo $data['u_os2']; ?> " class="th" required /></td>
              <td><input type='text' name='dbms2' value="<?php echo $data['u_dbms2']; ?> " class="th" required /></td>
              <td><input type='text' name='em2' value="<?php echo $data['u_em2']; ?> " class="th" required /></td>
              <td><input type='text' name='java2' value="<?php echo $data['u_java2']; ?> " class="th" required /></td>
              <td><input type='text' name='web' value="<?php echo $data['u_web']; ?> " class="th" required /></td>
            </tr>
          </table>
          <table class="table2">

            <tr>
              <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>" /></td>
            </tr>
            <tr>
              <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit" /></td>
            </tr>

          </table>
        </div>


      </form>
    </div>
  </header>

</body>

</html>