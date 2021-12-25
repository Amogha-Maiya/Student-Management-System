
<html>
<head>
    <title>Student Management System</title>
<link rel="stylesheet" href="csss/style.css" type="text/css">
<link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&family=Ubuntu+Mono&display=swap" rel="stylesheet">
</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="index.php">HOME</a></li>
                <li><a href="admin/aboutus.php">ABOUT</a></li>
                <li><a href="admin/contactus.php">CONTACT</a></li>
                <li><a href="login.php">ADMIN</a></li>
          </ul>
        </div>
      </nav>
      <!-- <br> -->
      <div class="main-content-header">
        <form method="post" action="result.php" style="padding-bottom:300px;margin-left: 325px;">
          <table class="table">
              <br>
              <h2 class="search" style="margin-left:375px; padding-bottom:50px; ">LOGIN</h2>
              
            <tr >
                <th class="name1"style="padding-top:0px;">Rollno</th>
                <td class="name2"><input type="text" name="rollno" required class="box1"/></td>
            </tr>
            <tr>
                <th class="standered1">Semester</th>
                <td class="standered2"><input type="text" name="std" required class="box2"/></td>
            </tr> 
            <tr>
            <td align="center" colspan="2">
              <input type="submit" name="submit" value="SUBMIT" class="submit" />
              
              
            </td>
            </tr>
          </table>
         
       </form>
      </div>

    </header>

</body>

</html>
