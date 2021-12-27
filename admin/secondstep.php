<?php
session_start();

if (isset($_SESSION['uid'])) {
    echo "";
} else {
    header('location: ../login.php');
}

?>

<html>

<head>
    <title>Homepage</title>
    <link rel="stylesheet" href="../css/secondstep.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->

</head>

<body>
    <header>
        <nav>
            <div class="row clearfix">
                <ul class="main-nav" animate slideInDown>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <div class="main-content-header">

            <form method="post" action="thirdstep.php">
                <h2>Add Marks</h2>

                <td><input type="hidden" name="class" class="class" value="<?php echo $_POST['class']; ?>" required /></td>

                <td><input type="hidden" name="rollno" class="rollno" value="<?php echo $_POST['rollno']; ?>" required /></td>



                <table class="table1">
                    <span>
                        <h4 class="h_3" style="padding-top: 100px; margin-bottom:-100px">CIE</h4>
                    </span>
                    <tr>
                        <th>OS</th>
                        <th> DBMS </th>
                        <th>EM</th>
                        <th>JAVA</th>
                        <th>WEB</th>
                    </tr>
                    <tr>
                        <td><input type='text' name='os1' placeholder='OS' required /></td>
                        <td><input type='text' name='dbms1' placeholder='DBMS' required /></td>
                        <td><input type='text' name='em1' placeholder='EM' required /></td>
                        <td><input type='text' name='java1' placeholder='JAVA' required /></td>
                        <td><input type='text' name='web1' placeholder='WEB' required /></td>
                    </tr>
                </table>

                <span>
                    <h4 class="h3">SEE</h4>
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
                        <td><input type='text' name='os2' placeholder='OS' required /></td>
                        <td><input type='text' name='dbms2' placeholder='DBMS' required /></td>
                        <td><input type='text' name='em2' placeholder='EM' required /></td>
                        <td><input type='text' name='java2' placeholder='JAVA' required /></td>
                        <td><input type='text' name='web' placeholder='WEB' required /></td>
                    </tr>

                    <tr>
                        <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit" /></td>
                    </tr>

                </table>


            </form>
        </div>
    </header>

</body>

</html>
<?php
if (isset($_POST['submit1'])) {
    include('../dbcon.php');
    $username = $_POST['name'];
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];
    $father = $_POST['father'];
    $mother = $_POST['mother'];
    $mobile = $_POST['mobile'];
    $village = $_POST['village'];

    // $imagename=$_FILES['img']['name'];
    // $tempname=$_FILES['img']['tmp_name'];
    // move_uploaded_file($tempname,"../dataimg/$imagename");

    $sql = "INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_father`, `u_mother`, `u_mobile`, `u_village`) VALUES ('$username','$class','$rollno','$father','$mother','$mobile','$village')";
    $run = mysqli_query($con, $sql);
    if ($run) {
?>
        <script>
            alert('data inserted successfully');
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Failed');
        </script>
<?php
    }
}

?>