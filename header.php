<?php

if(isset($_POST['save'])){
    unset($_POST['save']);
    include('DBConnect.php');
    $user=$_SESSION['username'];
    $old_pass = $_POST['old_pass'];
    $new_pass = $_POST['new_pass'];
    $retype_pass = $_POST['retype_pass'];

    $Query = mysqli_query($con, "Select * FROM userinfo WHERE User_Id = '$user' and Pwd='$old_pass'");
    $row = mysqli_fetch_array($Query);
    if($row>0){ 

      if ($new_pass==$retype_pass)
      {
          $updateQuery = "update userinfo set Pwd='$retype_pass' WHERE User_Id = '$user'" ;
          $result = mysqli_query($con,$updateQuery);

          if($result){
        
            //header('location:home.php');
            }
            else{
            die("error : ".mysqli_error($con));
          }
      }    
      else
      {
        echo '<div class="alert">';
        echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
        echo '<strong>Password not matched.</strong>'; 
        echo '</div>';
      }

    }
    else{
      echo "<h5 class='alert alert-danger' align='center'><strong>OOPS !!</strong> Please Enter Current Password. !!</h5>";
    }
  }

 	if(isset($_SESSION['username'])){
		include('DBConnect.php');
		$sql = "SELECT DISTINCT path FROM image WHERE name = 'Default'";
		$result = mysqli_query($con,$sql);
		if(!$result){
			echo "Error : ".mysqli_error($con);
		}
		$row = mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);
		
		
?>
    <!--<div class="row text-center">
		<div class="col-sm-2">
			<img class="logop" src="images/logo.jpg" width="150"/><br /><br />
			<b style="color:#FFFFFF">Welcome : <?php #echo $_SESSION['username'];?></b>
		</div>
	    <div id="headerName" class="col-sm-8" href="#" data-toggle="tooltip" title="Go to PBAS HomePage"><a href="Home.php"><h1 style="color:#0066FF;">Performance Based Appraisal System </h1></a></div>
	    <div class="col-sm-2 text-right"><?php #echo "<img class ='propic' src='images/".$row['path']."' width='113' height='150'/>"; ?>  
		    <a class="dropdown-toggle btn btn-primary btn-sm" href="#" data-toggle="dropdown">Setting Options<b class="caret"></b></a>
			<ul class="dropdown-menu text-center">
                <li><a href="#">Change Passoward</a></li>
                <li><a href="#">Delete Account</a></li>
				<li role="presentation" class="divider"></li>
                <li><a href="logout.php">LogOut</a></li>
              </ul>
        </div>
	</div> -->
	
	<div class="navbar navbar-inverse">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="Home.php"><span class="icon-home"></span> Performance Based Appraisal System</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
			  <li><a class="icon-user" href="#">  <?php echo $_SESSION['username'];?></a></li>
              <li class="dropdown active">
                <a href="#" class="dropdown-toggle icon-wrench" data-toggle="dropdown"> Settings <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a class="icon-pencil" href="#changePasswordModal" role="button" class="btn" data-toggle="modal">  Change Password</a></li>
                  
                  <li><a class="icon-trash" href="#">  Delete Account</a></li>
                  <li class="divider"></li>
                  <li><a  class="icon-signout" href="logout.php"> LogOut</a></li>
                </ul>
              </li>
            </ul>
            
          </div><!--/.nav-collapse -->
        </div>
      </div>

      <!-- Modal -->
  <div class="modal fade" id="changePasswordModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title"><center>Change Password </center></h4>
        </div>
        <div class="modal-body">
          <form class="form-horizontal" role="form" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="post" id="changePassword">
                  <div class="form-group">
                    <label for="inputpassword1" class="col-lg-4 control-label">Current Password</label>
                    <div class="col-lg-7">
                        <input type="password" class="form-control" placeholder="Current Password" name="old_pass" autofocus required="required">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputPassword1" class="col-lg-4 control-label">New Password</label>
                    <div class="col-lg-7">
                        <input type="password" class="form-control" id="inputPassword1" name="new_pass" placeholder="New Password" id="password" required="required">
                    </div>
                  </div>
                <div class="form-group">
                    <label for="inputPassword1" class="col-lg-4 control-label">Re-Type Password</label>
                    <div class="col-lg-7">
                        <input type="password" class="form-control" id="inputPassword1" placeholder="Re-Type Password" name="retype_pass" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                     <div class="col-lg-offset-4 col-lg-8">
                        <button type="submit" name="save" class="btn btn-large btn-primary">Save</button>
                        <button type="button" class="btn btn-large btn-primary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
              </form>
        </div>
        
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

<?php
	}
	else{
		header('location:index.php');
	}
?>
