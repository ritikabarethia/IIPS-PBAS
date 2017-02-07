<?php
	include('DBConnect.php');
	if($_GET['code'])
	{
		$get_username = $GET['username'];
		$get_code = $GET['code'];
		$query = mysql_query("SELECT * FROM userinfo WHERE username='$get_username' ");
		while ($row = mysql_fetch_assoc($query)) {
			$db_code = $row['PasswordReset'];
			$db_username = $row['User_Id'];
		}
		if($get_username == $db_username && $get_code == $db_code)
		{
			echo "
				<form action='pass_reset_complete.php?code=$get_code' method='POST'>
					Enter a new Password<br>
					<input type='password' name='newpass'><br>
					Reenter your password<br>
					<input type='password' name='newpass1'><br>
					<input type='hidden' name='username' value='$db_username'>
					<input type='submit' value='update password'>
				</form>
			";
		}
	}
	if(!$_GET['code']){
		echo "
			<form action='forgot_pass.php' method='POST'>
				Enter your username<br>
				<input type='text' name='username'><p>
				Enter your email<br>
				<input type='email' name='email'><p>
				<input type='submit' value='Submit' name='submit'>
			</form>
		";
		if(isset($_POST['submit']))
		{
			$username = $_POST['username'];
			$email = $_POST['email'];
			$query = mysql_query("SELECT * FROM userinfo WHERE username='$username'");
			$numrow = mysql_num_rows($query);
			if($numrow!=0)
			{
				while ($row = mysql_fetch_assoc($query)) {
					$db_email = $row['User_Id'];
				}
				if($email == $db_email)
				{
					$code = rand(1000,100000);
					$to = $db_email;
					$subject = "Password Reset";
					$body = "
						this is an automated email please do not reply to this email
						click the link below or paste it into your get_browser
						link of this page eg. http://forgot_pass.php
				   	" ;
					mysql_query("UPDATE userinfo SET PasswordReset = '$code' WHERE username = '$username' ");
					mail($to,$subject,$body);
					echo "Check your Email";
				}
				else
				{
					echo "Email is incorrect";
				}
			}
			else
			{
				echo "That username doesn't exist";
			}
		}
	}
?>