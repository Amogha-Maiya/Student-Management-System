<?php
session_start();
if (isset($_POST['submit'])) {

    include('dbcon.php');

    $standerd = $_POST['std'];
    $rollno = $_POST['rollno'];
    $sql = "SELECT * FROM `student_data` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
    $sql2 = "SELECT * FROM `user_mark` WHERE `u_class`='$standerd' AND `u_rollno`='$rollno'";
    $run = mysqli_query($con, $sql);
    $run2 = mysqli_query($con, $sql2);
    $row = mysqli_num_rows($run2);
    $data2 = mysqli_fetch_assoc($run2);

    if (mysqli_num_rows($run) > 0) {
        $data = mysqli_fetch_assoc($run);
?>

        <html>

        <head>
            <title>Result</title>
            <link rel="stylesheet" href="css/result.css" type="text/css">
            <!-- <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet"> -->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap" rel="stylesheet">
            <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css"> -->

        </head>

        <body>
            <header>
                <nav style="font-size: 30px; font: weight 100px;padding-bottom:15px;padding-right:10px;">
                    <div class="row clearfix">
                        <ul class="main-nav" animate slideInDown>
                            <li><a href="index.php"><b>HOME</b></a></li>
                            <li><a href="admin/aboutus.php"><b>ABOUT</b></a></li>
                            <li><a href="admin/contactus.php"><b>CONTACT</b></a></li>
                            <li><a href="login.php"><b>ADMIN</b></a></li>
                        </ul>
                    </div>
                </nav>
                <div class="main-content-header">
                    <form method="post" action="result2.php">
                        <table class="table" style="margin-top: 140px;">
                            <!-- <img src="dataimg/ <?php // echo $data['u_image']; 
                                                    ?>" class="image2" />  -->
                            <tr>
                                <th style="font-size:28px;">Name :</th>
                                <td style="font-size:28px;"><?php echo $data['u_name'] ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:28px;">Class :</th>
                                <td style="font-size:28px;"><?php echo $data2['u_class']; ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:28px;">Roll No :</th>
                                <td style="font-size:28px;"><?php echo $data['u_rollno']; ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:28px;">Father Name :</th>
                                <td style="font-size:28px;"><?php echo $data['u_father']; ?></td>
                            </tr>
                            <tr>
                                <th style="font-size:28px;">City Name :</th>
                                <td style="font-size: 28px;"><?php echo $data['u_village']; ?></td>
                            </tr>
                        </table>
                        <?php
                        $_SESSION['usn'] = $data['u_rollno'];
                        $_SESSION['std'] = $data2['u_class'];
                        ?>
                        <input style="margin-left: 740px; margin-top: 40px; padding:5px;" type="submit" name="submit" value="view result">

                    </form>
                </div>
            </header>

        </body>

        </html>
    <?php
    } else {
    ?>
        <script>
            alert('Record Not found');
            window.open('index.php', '_self');
        </script>
<?php
    }
}

?>