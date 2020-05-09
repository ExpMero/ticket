<?php
include 'connect.php';
$name = $_POST['name'];
$text = $_POST['text'];
if (isset($name) && isset($text)){
    $insert = "INSERT INTO `ticket`(`name`, `text`) VALUES ('$name', '$text')";
    mysqli_query($conn,$insert);
}

?>
<html>
<form method="POST">
Name : <input type="text" name="name"><br>
text : <input type="text" name="text"><br> 
<button type="sumbit" >sumbit</button>
</form>
</html>