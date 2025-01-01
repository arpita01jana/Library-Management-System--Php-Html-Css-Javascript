<?php
   require('function.php');
   session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Issue Book</title>
        <link rel="stylesheet" href="astyle.css">
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="logo">
                    <img src="logo.jpg">
                    <h1 id="name">Magic World Library</h1>
                </div>
                <p align="center" style="font-size:30px;"><strong>Hello  <?php echo $_SESSION['Name'];?>!</strong></p>
                <p align="center" style="font-size:15px;"><strong>Email-id: <?php echo $_SESSION['Email'];?></strong></p>
                <nav class="g">
                <div class="dropdown">
                   <button class="dropbtn">My Profile</button>
                   <div class="dropdown-content">
                      <a href="v_profile.php" style="font-size:15px;">View Profile</a>
                      <a href="edit_p.php" style="font-size:15px;">Edit Profile</a>
                   </div>
                </div>
                <a href="logout.php" style="font-size:20px;color:black;text-decoration:none"> Logout</a>
                </nav>
            </header>
            <section>
                <p id="m"><marquee>!!   Welcome To Magic World Libaray   !! </marquee></p>
                <left>
                    <nav>
                        <a href="admin_dasboard.php" style="padding:3px;color:black;text-decoration:none"> Dashboard </a>
                        <div class="dropdown" style="padding:8px;">
                         <button class="dropbtn"> Book </button>
                            <div class="dropdown-content">
                               <a href="add_book.php" style="font-size:13px;">Add Book </a>
                            </div>
                        </div>
                        <a href="issued.php" style="padding:3px;color:black;text-decoration:none"> Issue Book </a>
                    </nav>
                </left>
                <center>
                    <form action="" method="post">
                        <br>
                        Book Name<br>
                        <select name="bname">
                            <option>Select Book</option>
                            <?php
                            $connection = mysqli_connect("localhost","root","");
                            $db = mysqli_select_db($connection,"library");
                            $query = "SELECT * from `books`";
                            $query_run= mysqli_query($connection,$query);
                            while($row= mysqli_fetch_assoc($query_run)){
                                ?>
                                <option><?php echo $row['Name'];?></option>
                                <?php
                            }
                            ?>
                        </select><br><br>
                        Student Name<br><input type="text" name="aut_no" required><br><br>
                        Student Id<br><input type="number" name="bookno" required><br><br>
                        Issue Date<br><input type="text" name="issue_date" value="<?php echo date("yy-m-d"); ?>" required><br><br>
                        <input type="submit" name="submit" value="Issue Book">
                    </form>
                </center>
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
<?php
if(isset($_POST['submit'])){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $query = "INSERT INTO `issue_book` VALUES('$_POST[bname]','$_POST[aut_no]','$_POST[bookno]','$_POST[issue_date]')";
    $query_run = mysqli_query($connection,$query);
}
?>