
    <?php
require ("includes/common.php");

$email=$_POST['email'];
$email= mysqli_real_escape_string($con,$_POST['email']);
$passwd= mysqli_real_escape_string($con,$_POST['passwd']);
//Converting password into encrypted form using md5 function
$passwd=md5($passwd);

//query to check email and password from database
$query="SELECT id,email FROM users WHERE users.email='$email' AND users.passwd='$passwd'";

//query will return 0 if email id and password not found in the data base
$result=mysqli_query($con,$query)or die(mysqli_error($con));
$num=mysqli_num_rows($result);
//echo "$num";
if($num==0){
$error="<span class='red'>Please enter correct email and password</span>";
header("location:login.php?A='$error'");
}else
{
    $row=mysqli_fetch_array($result);
    session_start();
    $_SESSION['email']=$row['email'];
    $_SESSION['user_id']=$row['id'];
    if(isset($_SESSION['email'])) header('location:product.php');
}
?>
