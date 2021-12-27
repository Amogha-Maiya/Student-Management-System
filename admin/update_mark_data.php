<?php
if (isset($_POST['submit'])) {
    include('../dbcon.php');
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

    $sql = "UPDATE `user_mark` SET  `u_os1` = '$os1', `u_dbms1` = '$dbms1', `u_em1` = '$em1', `u_java1` = '$java1', `u_web1` = '$web1', `u_os2` = '$os2', `u_dbms2` = '$dbms2', `u_em2` = '$em2', `u_java2` = '$java2', `u_web` = '$web' WHERE `u_rollno` = '$rollno'";

    $run = mysqli_query($con, $sql);
    if ($run) {
?>
        <script>
            alert('Data Updated  Succesfully');
            window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
        </script>


<?php
    } else {
        echo "Error";
    }
}
?>