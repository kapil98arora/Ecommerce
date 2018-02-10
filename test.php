<!doctype html>
<html>
    <head><title>Learn Php</title></head>
    <body>
<?php
$con=mysqli_connect("localhost","root","","ecommerce") or
        die(mysqli_error($con));
$select_query="SELECT id,email,first_name FROM users";

$select_query_result=mysqli_query($con,$select_query)or
        die(mysqli_error($con));
$row=mysqli_fetch_array($select_query_result);
echo $row[0]. "<br/>";
echo $row['email']."<br/>";
echo $row[2]."<br/>";
//there is internal counter as we write it again it takes next row 
$row=mysqli_fetch_array($select_query_result);
echo $row['id']."<br/>";
echo $row['email']."<br/>";
echo $row['first_name']."<br/>";
?>
/*md5($variable) is md5 digest algorithm which takes text as input and encrpt the output*/
    <?php
$str="kapil";
echo md5($str);
?>

    </body>
</html>