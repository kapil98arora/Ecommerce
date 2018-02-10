<?php 
include 'common.php'
?>

<?php
$first_name=$_GET['first_name'];
$user_id=$_SESSION['id'];
$update_name_query="UPDATE users SET first_name='$first_name' WHERE id='$user_id'";
$update_name_result=mysqli_query($con,$update_name_query) or die(mysqli_error($con));
echo "NAME UPDATED";
?>

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

