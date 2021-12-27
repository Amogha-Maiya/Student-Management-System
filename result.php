<?php
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
            <link rel="stylesheet" href="csss/result.css" type="text/css">
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
                    <form method="post" action="result.php">
                        <table class="table">
                            <!-- <img src="dataimg/ <?php // echo $data['u_image']; 
                                                    ?>" class="image2" />  -->
                            <tr>
                                <th>Name :</th>
                                <td><?php echo $data['u_name'] ?></td>
                            </tr>
                            <tr>
                                <th>Class :</th>
                                <td><?php echo $data2['u_class']; ?></td>
                            </tr>
                            <tr>
                                <th>Roll No :</th>
                                <td><?php echo $data['u_rollno']; ?></td>
                            </tr>
                            <tr>
                                <th>Father Name :</th>
                                <td><?php echo $data['u_father']; ?></td>
                            </tr>
                            <tr>
                                <th>City Name :</th>
                                <td><?php echo $data['u_village']; ?></td>
                            </tr>
                        </table>
                        <table class="table2">
                            <tr>
                                <th>Suject</th>
                                <th>CIE</th>
                                <th>SEE</th>
                                <th>Total</th>
                                <th>Max. Marks</th>
                            </tr>
                            <tr>

                                <th>OS</th>
                                <th><?php echo $data2['u_os1']; ?></th>
                                <th><?php echo $data2['u_os2']; ?></th>
                                <th><?php echo $total1 = $data2['u_os1'] + $data2['u_os2']; ?> </th>
                                <th>100</th>
                            </tr>
                            <tr>
                                <th>DBMS</th>
                                <th><?php echo $data2['u_dbms1']; ?></th>
                                <th><?php echo $data2['u_dbms2']; ?></th>
                                <th><?php echo $total2 = $data2['u_dbms1'] + $data2['u_dbms2']; ?> </th>
                                <th>100</th>
                            </tr>
                            <tr>
                                <th>EM</th>
                                <th><?php echo $data2['u_em1']; ?></th>
                                <th><?php echo $data2['u_em2']; ?></th>
                                <th><?php echo $total3 = $data2['u_em1'] + $data2['u_em2']; ?> </th>
                                <th>100</th>
                            </tr>
                            <tr>
                                <th>JAVA</th>
                                <th><?php echo $data2['u_java1']; ?></th>
                                <th><?php echo $data2['u_java2']; ?></th>
                                <th><?php echo $total4 = $data2['u_java1'] + $data2['u_java2']; ?></th>
                                <th>100</th>
                            </tr>
                            <tr>
                                <th>WEB</th>
                                <th><?php echo $data2['u_web1']; ?></th>
                                <th><?php echo $data2['u_web']; ?></th>
                                <th><?php echo $total5 = $data2['u_web1'] + $data2['u_web']; ?></th>
                                <th>100</th>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <th>
                                    <?php echo $data2['u_os1'] + $data2['u_dbms1'] + $data2['u_em1'] + $data2['u_java1'] + $data2['u_web1']; ?>
                                </th>
                                <th>
                                    <?php echo $data2['u_os2'] + $data2['u_dbms2'] + $data2['u_em2'] + $data2['u_java2'] + $data2['u_web']; ?>
                                </th>

                                <th><span class="colorchange"><?php echo $all = $total1 + $total2 + $total3 + $total3 + $total4 + $total5; ?></span></th>

                                <th>500</th>

                            </tr>

                        </table>
                        <h2 style="margin-left: 710px; margin-top: 40px;"><span class="colorchange1"><?php
                                                                                                        if ($data2['u_os1'] < 20 || $data2['u_os2'] < 20 || $data2['u_dbms1'] < 20 || $data2['u_dbms2'] < 20 || $data2['u_em1'] < 20 || $data2['u_em2'] < 20 || $data2['u_java1'] < 20 || $data2['u_java2'] < 20 || $data2['u_web1'] < 20 || $data2['u_web'] < 20) {
                                                                                                            echo "FAIL";
                                                                                                        } else {
                                                                                                            echo "PASS";
                                                                                                        }
                                                                                                        ?></span></h2>
                        <!-- <marquee scrollamount="5"><p>Your Result is Declared. Kindly check your marks and in case of any discrepany contact the admin. </p> -->
                        </marquee>
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