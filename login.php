<!DOCTYPE html>
<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="astyle.css">
        
    </head>
    <body>
        <div class="wrapper">
            <header>
                <div class="logo">
                    <img src="logo.jpg">
                    <h1 id="name">Magic World Library</h1>
                </div>
                    <nav class="g">
                        <ul>
                            <li><a href="login.php">Admin_Login</a></li>
                            <li><a href="index.php">Admin_Register</a></li>
                        </ul>
                    </nav>
            </header>
            <section>
                <div class="h">
                <br><br><br>
                    <div class="r">
                       <br><br>
                       <h1 style="text-align:center; font-size:30px;">Admin Login Form </h1>
                       <center>
                       <form action="" method="post">
                           Full Name<br><input type="text" name="name" required><br><br>
                           Email-id<br><input type="email" name="eid" required><br><br>
                           Password<br><input type="password" name="pass" required><br><br>
                           <input type="submit" name="login" value="Login" href="book.php" required><br>
                        </form>
                        </center>
                        <?php
                        session_start();
                        if(isset($_POST['login'])){
                           $connection = mysqli_connect("localhost","root","");
                           $db = mysqli_select_db($connection,"library");
                           $query = "SELECT * FROM `admin` WHERE name='$_POST[name]'";
                           $query_run = mysqli_query($connection,$query);
                           while($row = mysqli_fetch_assoc($query_run)){
                               if($row['Name'] == $_POST['name']){
                                    if($row['Email-Id'] == $_POST['eid']){
                                        if($row['Password'] == $_POST['pass']){
                                           $_SESSION['Name']=$row['Name'];
                                           $_SESSION['Email']=$row['Email-Id'];
                                           header("Location:admin_dasboard.php");
                                        }
                                        else{
                                           ?>
                                           <br><br><center><span style="color:red;"> Wrong Password</span></center>
                                           <?php
                                        }
                                    } 
                                }
                            }
                        }
                        ?>
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
