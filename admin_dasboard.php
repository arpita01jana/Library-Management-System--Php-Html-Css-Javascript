<?php
   require('function.php');
   session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin Dashboard</title>
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
                <a href="logout.php" style="font-size:20px;color:black;text-decoration:none;"> Logout</a>
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
                        <a href="issue_book.php" style="padding:3px;color:black;text-decoration:none"> Issue Book </a>
                    </nav>
                </left>
                <div class="detail">
                <div class="card">
                  <h4 align="center"> Registered User </h4>
                  <div class="container">
                    <p>Total number of User: <?php echo get_user_count(); ?> </p>
                    <a href="reguser.php" style="padding:3px;color:blueviolet;text-decoration:none"> View Registered User </a>
                  </div>
                </div>
                <div class="card">
                  <h4 align="center">Available Books</h4>
                  <div class="container">
                    <p>Total number of Books: <?php echo get_book_count(); ?> </p>
                    <a href="book.php" style="padding:3px;color:blueviolet;text-decoration:none" align="center"> View Books </a>
                  </div>
                </div>
                <div class="card">
                  <h4 align="center"> Issued Book </h4>
                  <div class="container">
                    <p>Number of Issued Book: <?php echo get_issued_book_count(); ?> </p>
                    <a href="issued.php" style="padding:3px;color:blueviolet;text-decoration:none" align="center"> View Book Issued </a>
                  </div>
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
