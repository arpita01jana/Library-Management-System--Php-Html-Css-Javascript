<?php
    require('function.php');
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $book_name="";
    $sname="";
    $stu_id="";
    $date="";
    $query = "SELECT * FROM `issue_book`";
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Issued Book</title>
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
                               <a href="" style="font-size:13px;">Add Book </a>
                            </div>
                        </div>
                        <a href="issue_book.php" style="padding:3px;color:black;text-decoration:none"> Issue Book </a>
                    </nav>
                    <h1 align="center">Issued Book</h1>
                    <br>
                    <table align="center" class="table">
                        <tr>
                            <th>Book Name</th>
                            <th>User Name</th>
                            <th>Student Id</th>
                            <th>Issued Date</th>
                        </tr>
                        <?php 
                          $query_run = mysqli_query($connection,$query);
                          while($row = mysqli_fetch_assoc($query_run)){
                            $book_name= $row['Book-name'];
                            $sname= $row['Student-name'];
                            $stu_id= $row['Student-Id'];
                            $date= $row['Issued-Date'];
                            ?>
                            <tr>
                              <td><?php echo $book_name; ?></td>
                              <td><?php echo $sname; ?></td>
                              <td><?php echo $stu_id; ?></td>
                              <td><?php echo $date; ?></td>
                            </tr>
                            <?php
                          }
                        ?>
                    </table>
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
