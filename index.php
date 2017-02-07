<?php
	session_start();
	ob_start();
	if(!empty($_POST['username']) and !empty($_POST['password'])){
		//If the user just tried to log in
		$user = $_POST['username'];
		$pass = $_POST['password'];
		include('DBConnect.php');
		$result = mysqli_query($con,"Select * from userinfo where User_Id ='".$user."' and Pwd = '".$pass."'");
		$row = mysqli_fetch_array($result);
		if($row['User_Id']==$user and $row['Pwd']==$pass){
			$_SESSION['username'] = $user;
		}
		else
			echo "<script>alert('Username or Password doesnt match')</script>";
		mysqli_close($con);
	}
	if(isset($_POST['signUp'])){
		unset($_POST['signUp']);
		include('DBConnect.php');
		$userID = $_POST['userID'];
		$regPass = $_POST['regPass'];
		$confirmPass = $_POST['confirmPass'];
		if($regPass == $confirmPass)
		{	
			$signUpQuery = mysqli_query($con, "SELECT * FROM userinfo WHERE User_Id = '$userID'");
			$row = mysqli_fetch_array($signUpQuery);
			if($row['User_Id'] == $userID){	
				echo "<h5 class='alert alert-danger' align='center'><strong>OOPS !!</strong> Please Enter Valid Information !!</h5>";
				header('location:index.php');
			}
			else{
				$regPass = md5($regPass);
				$query = mysqli_query($con, "INSERT INTO userinfo values('$userID','$regPass')") or die("Error : ".mysqli_error()); 
				$_SESSION['success'] = "<h5 class='alert alert-success' align='center'>Registration Successfull !!</h5>";
				header('location:index.php');
			}
		}
		else
			echo "<h5 class='alert alert-danger' align='center'><strong>OOPS !!</strong> Your Password Does Not match !!</h5>";	
	}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">
    <link rel="stylesheet" href="/path/to/dist/css/bootstrapValidator.min.css"/>
    
	<title>Performance Based Appraisal System</title>
		<?php
			include('cssLinks.php');
		?>
		<link rel="stylesheet" href="css/signin.css">
		<style>

		</style>
	</head>
	<body>
		<?php
			if(isset($_SESSION['username'])){
			
			header('Location:yearModalScript.php');
		}
		else{
		?>
	   <div class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">PBAS</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            
          </ul>
          <form class="navbar-form navbar-right" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" name="signIn" id="signIn" method="post">
            <div class="form-group" >
              <input type="text" placeholder="UserName" class="form-control required" name="username" id="username" title="Please Enter Your Username" autofocus>
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control required" name="password" id="password" title="Please Enter Your Password">
            </div>
            <button type="submit" class="btn btn-success" name="signIn">Sign in</button>
			<a data-toggle="modal" href="#myModald">Forgot Password ?</a>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
	   <div id="wrap">
		  <div class="container">
		  
		  <div class="row">
		    <div class="col-sm-2">
			<img class="img-responsive" src="images/iipslogo.jpg" align="middle">
			</div>
			
		    <div class="col-sm-9" style="background:#FFFFFF; font-size:17px; ">
				<div class="jumbotron">
        			<h2 align="center" style="color:#0099FF; font-weight:bolder;"> Performance Based Appraisal System </h2><br>
        			
					<p style="font-family:Verdana; color:#000000; font-size:14px">Performance Based Appraisal system (PBAS) - This is a system used by UTD to measure the performance and progress of a teacher during the   regular intervals preferably at the end of the semester. The teachers are requested to fill the form provided by the university. Its mandatory for a teacher to fill the form. The teacher fills the form and gives score(API) against each point to himself/herself using some protocols. The protocols are listed in different document. Further more, the teacher needs to present the proof in the form of documents (physically) against each point for the same. The API score indicates the progress of the teacher. More is the API and more good is the teacher.</p>
        		<p class="pull-right"><button class="btn btn-primary" data-toggle="modal" href="#myModal">Sign Up Now!</button></p>
      </div>
			</div>
				
			<div class="col-sm-1">
			</div>
			
				<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
   				 <div class="modal-dialog">
      				<div class="modal-content">
        				<div class="modal-header text-center">
          					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
         					 <h4 class="modal-title">Sign-Up</h4>
        				</div>
        				<div class="modal-body ">
           					<form class="form-horizontal" role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" id="signUp">
  								<div class="form-group">
    								<label for="inputEmail1" class="col-lg-3 control-label">User ID</label>
   						 			<div class="col-lg-8">
      									<input type="text" required="required" class="form-control" placeholder="User ID" name="userID" >
    								</div>
 					    		</div>
 								<div class="form-group">
    								<label for="inputPassword1" class="col-lg-3 control-label">Password</label>
    								<div class="col-lg-8">
      									<input type="password" class="form-control" required="required" name="regPass" placeholder="Password" id="password">
    								</div>
  								</div>
								<div class="form-group">
    								<label for="inputPassword1" class="col-lg-3 control-label">Re-Type Password</label>
    								<div class="col-lg-8">
      									<input type="password" class="form-control" required="required" id="inputPassword1" placeholder="Password" name="confirmPass">
    								</div>
  								</div>
  								<div class="form-group">
   									 <div class="col-lg-offset-4 col-lg-8">
      									<button type="submit" name="signUp" class="btn btn-primary">Sign in</button>
      									<button type="button" class="btn btn-large btn-primary" data-dismiss="modal">Close</button>
    								</div>
  					    		</div>
							</form>
        			  </div>
     		       </div><!-- /.modal-content -->
    		   </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
			
		</div> <!-- /row -->
		
		<!-- Button trigger modal -->
		

		<!-- Modal -->
		<div class="modal fade" id="myModald" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
			  </div>
			  <div class="modal-body">
					<form class="form-horizontal" role="form">
					  <div class="form-group">
						<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
						  <input type="email" class="form-control" id="forgotEmail" data-toggle="popover" title="A Title" placeholder="Email" required="required">
						</div>
					  </div>
					  <div class="form-group">
						<div class="col-sm-offset-2 col-sm-10">
						  <button type="submit" class="btn btn-primary">Reset Password</button>
						  <label > OR </label>
						  <a href="">Login </a>
						</div>
					  </div>
					</form>
			  </div>
			  
			</div><!-- /.modal-content -->
		  </div><!-- /.modal-dialog -->
		</div><!-- /.modal -->

   	 </div> <!-- /container -->
  </div>
		<?php
		    include('footer.php');
			include('jsLinks.php');
			}
			
		?>
	<script>
		$(document).ready(function() {
 			$('#signIn').validate();
			$('#forgotPassword').popover(toggle);
 		}); // end ready()
	</script>

	</body>
</html>