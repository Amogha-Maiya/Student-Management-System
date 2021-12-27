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
    <link rel="stylesheet" href="../csss/addmark.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>

<body>
    <header>
        <nav>
            <div class="row clearfix">
                <img src="../image/logo_1.png" class="logo" />
                <ul class="main-nav" animate slideInDown>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                    <li><a href="contactus.php">Contact Us</a></li>
                </ul>
            </div>
        </nav>
        <!-- <div class="main-content-header">
            <h2>First Step- Student Details</h2>

        </div> -->
    </header>

</body>

</html>
<?php
if (isset($_POST['submit'])) {
    include('../dbcon.php');
    $class = $_POST['class'];
    $rollno = $_POST['rollno'];
    $os1 = $_POST['os1'];
    $dbms1 = $_POST['dbms1'];
    $em1 = $_POST['em1'];
    $java1 = $_POST['java1'];
    $web1 = $_POST['web1'];

    $os2 = $_POST['os2'];
    $dbms2 = $_POST['dbms2'];
    $em2 = $_POST['em2'];
    $java2 = $_POST['java2'];
    $web = $_POST['web'];

    $sql = "INSERT INTO `user_mark`(`u_rollno`,`u_class`,`u_os1`, `u_dbms1`, `u_em1`, `u_java1`, `u_web1`, `u_os2`, `u_dbms2`, `u_em2`, `u_java2`, `u_web`) VALUES ('$rollno','$class','$os1','$dbms1','$em1','$java1','$web1','$os2','$dbms2','$em2','$java2','$web')";

    $run = mysqli_query($con, $sql);
    if ($run) {
?>
        <script>
            alert('Data Inserted Succesfully');
            window.open('admindash.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
<?php
    }
}
?>