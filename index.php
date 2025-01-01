<!DOCTYPE html>
<html>
    <head>
        <title>Admin Register</title>
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
            <section >
                <div class="h">
                <br><br><br>
                <div class="r">
                    <br><br>
                    <h1 style="text-align:center; font-size:30px;">Admin Registration Form </h1>
                    <center>
                    <form action="" onsubmit="verifyPassword()" method="post">
                        Full Name<br><input type="text" name="name" required><br>
                        Email-id<br><input type="email" name="eid" required><br>
                        Password<br><input type="password" name="pass"  id ="pswd" required>
                        <span id = "message" style="color:red"> </span> <br><br>
                        Confirm Password<br><input type="password" name="pass" id ="pswd2" required><br>
                        Contact<br><input type="number" name="contact" id="contact" required>
                        <span id = "lblError" style="color:red"> </span> <br><br>
                        <input type="submit" name="submit" value="Register" href="login.php"><br>
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
        <script>
            function verifyPassword() {  
                    var pw = document.getElementById("pswd").value;   
                   //minimum password length validation  
                    if(pw.length < 6) {  
                        confirm("**Password length must be atleast 6 characters");  
                         return false;  
                    }  
                    //checking the password
                      var password=document.getElementById("pswd").value;
                      var confirmpassword=document.getElementById("pswd2").value;
                      if(password!=confirmpassword)
                      {
                          alert("Your password doesn&#39;t match")
                          return false;
                      }
                      return true;
                    //checking the phone number
                    var mobileNumber = document.getElementById("contact").value;
                    var lblError = document.getElementById("lblError");
                    lblError.innerHTML = "";
                    var expr = /^(0|91)?[6-9][0-9]{9}$/;
                    if (!expr.test(mobileNumber)) {
                        window.alert(  "Invalid Mobile Number. ");
                    }
                    return true;  
                } 
        </script>

    </body>
</html>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"library");
$query = "INSERT INTO `admin`(`Name`, `Email-Id`, `Password`, `Contact`) VALUES('$_POST[name]','$_POST[eid]','$_POST[pass]','$_POST[contact]')";
$query_run = mysqli_query($connection,$query);
?>
<script>
    window.location.href("login.php");
</script>
