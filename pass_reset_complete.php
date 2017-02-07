<?php
	include('DBConnect.php');
	$newpass=$_POST['newpass'];
	$newpass1=$_POST['newpass1'];
	$post_username=$_POST['username'];
	$code=$_GET['code'];

	if($newpass == $newpass1)
	{
		$enc_pass=md5($newpass);
		mysql_query("UPDATE userinfo SET Pwd='$enc_pass' WHERE username='$post_username' ");
		mysql_query("UPDATE userinfo SET PasswordReset='0' WHERE username='$post_username' ");
		echo "Your Password has been Updated<p><a href='index.php'>Click here to login</a>";
	}
	else
	{
		echo "Password must match <a href='forgot_pass.php?code=$code&username=$post_username'>Click here to go back</a>";
	}
?>