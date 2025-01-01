<?php
   session_start();
   $connection = mysqli_connect("localhost","root","");
   $db = mysqli_select_db($connection,"library");
   $name="";
   $email="";
   $mobile="";
   $query = "SELECT * FROM `admin` WHERE name='$_SESSION[Name]'";
   $query_run = mysqli_query($connection,$query);
   while($row = mysqli_fetch_assoc($query_run)){
    $name =$row['Name'];
    $email=$row['Email-Id'];
    $mobile=$row['Contact'];
   }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>View Profile</title>
        <link rel="stylesheet" href="astyle.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="logo">
                    <img src="logo.jpg">
                    <h1 id="name" >Magic World Library</h1>
                </div>
                <p align="center" style="font-size:30px;"><strong>Welcome <?php echo $_SESSION['Name'];?>!</strong></p>
                <p align="center" style="font-size:15px;"><strong>Email-id: <?php echo $_SESSION['Email'];?></strong></p>
                <nav align="right">
                <div class="dropdown">
                   <button class="dropbtn"><a  href="admin_dasboard.php" style="font-size:13px;color:black;text-decoration:none"
                                                   id="mp">My Profile</a></button>
                   <div class="dropdown-content">
                      <a href="v_profil.php" style="font-size:15px;">View Profile</a>
                      <a href="edit_p.php" style="font-size:15px;">Edit Profile</a>
                   </div>
                </div>
                <a href="logout.php" style="font-size:20px;color:black;text-decoration:none"> Logout</a>
                </nav>
            </header>
            <section class="dash">
                <p id="m"><marquee>!!   Welcome To Magic World Libaray   !! </marquee></p>
            <div class="row">
                <div class="col-md-4">
                    <center>
                    <form>
                        Name<br><input type="text"  value="<?php echo $name; ?>" disabled><br><br><br>
                        Email-Id<br><input type="email"  value="<?php echo $email; ?>" disabled><br><br><br>
                        Contact number<br><input type="number"  value="<?php echo $mobile; ?>" disabled><br><br><br>
                    </form>
                    </center>
                </div>
            </div>
            </section>
            <footer>
                <p style="text-align:center;color:antiquewhite;font-size:medium">
                    <br><br>
                    Eamil:   magicworld@gamil.com<br><br>
                    Contact:     91+ 98646*****
                </p>
            </footer>
        </div>
    </body>
</html>
