<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"library");
$query = "UPDATE `admin` SET `Email-Id`='$_POST[email]',`Contact`='$_POST[contact]' WHERE `Name`='$_SESSION[Name]'";
$query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Updated successfully....");
    window.location.herf = "index.php";
</script>