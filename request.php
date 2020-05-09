<?php
include 'connect.php';
    $id = $_POST['id'];
    if (isset($id)){
           $insert = "SELECT * FROM `ticket` WHERE id = $id";
           $cl = mysqli_query($conn,$insert);
           $row = mysqli_fetch_assoc($cl);
           echo $row['name'];
    }
     
?>
<html>
<form method="POST">
id : <input type="text" name="id"><br>
<button type="sumbit" >sumbit</button>
</form>
</html>