<?php
    require('function.php');
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library");
    $book_id="";
    $name="";
    $aut_id="";
    $book_no="";
    $price="";
    $query = "SELECT * FROM `books`";
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Books</title>
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
                    <h1 align="center">Available Books</h1>
                    <br>
                    <table align="center" class="table">
                        <tr>
                            <th>Book-Id</th>
                            <th>Book Name</th>
                            <th>Author-Id</th>
                            <th>Book-No</th>
                            <th>Price</th>
                        </tr>
                        <?php 
                          $query_run = mysqli_query($connection,$query);
                          while($row = mysqli_fetch_assoc($query_run)){
                            $book_id= $row['Book-Id'];
                            $name=$row['Name'];
                            $aut_id=$row['Author-Id'];
                            $book_no=$row['Book-No'];
                            $price=$row['Price'];
                            ?>
                            <tr>
                              <td><?php echo $book_id; ?></td>
                              <td><?php echo $name; ?></td>
                              <td><?php echo $aut_id; ?></td>
                              <td><?php echo $book_no; ?></td>
                              <td><?php echo $price; ?></td>
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
