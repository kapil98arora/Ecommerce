<?php
include 'includes/common.php';
?>
<?php
$email=mysqli_real_escape_string($con,$_POST['email']);
$first_name=mysqli_real_escape_string($con,$_POST['first_name']);
$last_name=mysqli_real_escape_string($con,$_POST['last_name']);

$phone=$_POST['phone'];

$passwd=mysqli_real_escape_string($con,$_POST['passwd']);
$query="SELECT email from users WHERE users.email='$email'";
$query_result=mysqli_query($con,$query) or die(mysqli_error($con));
$row=mysqli_num_rows($query_result);

//check wheater duplicate email entry or not

if($row>0)
{
 echo "Email id Already registered user other to sign up";
}
else{
    $users_signup="insert into users(email,first_name,last_name,phone,passwd) values('$email','$first_name','$last_name','$phone',md5('$passwd'))";

$users_signup_submit=mysqli_query($con,$users_signup)
or die(mysqli_error($con));

echo "YEAH!!!!!  Welcome $first_name suceccfully inserted";
header('location:product.php');
}

$_SESSION['email']=$email;
$_SESSION['id']=mysqli_insert_id($con);
?>