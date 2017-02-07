<?php
	session_start();
	ob_start();
	include('DBConnect.php');
	include('form_process/genInfoProcess.php');
	
	#Query for grabbing user's general informations in the varables.
	
	$sql="SELECT * FROM gen_info WHERE User_Id = '".$_SESSION['username']."'";
		$result = mysqli_query($con,$sql) or die('Error'.mysqli_error($con));
		$row = mysqli_fetch_array($result);
 		$uname = $row['Gen_Info_Name'];
	    $fatherName = $row['Gen_Info_Fname'];
		$motherName = $row['Gen_Info_Mname'];
		$department = $row['Gen_Info_Department'];
		$designation = $row['Gen_Info_CD'];
		$gradePay = $row['Gen_Info_GP'];
		$promotionDate = $row['Gen_Info_DLP'];
		$correspAddress = $row['Gen_Info_AFC'];
		$permnantAddress = $row['Gen_Info_PA'];
		$telephone = $row['Gen_Info_TNO'];
		$email = $row['Gen_Info_Email'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>General Information</title>
   <?php
			include('cssLinks.php');
   ?>
</head>
<body>
   <?php 
	  if(isset($_SESSION['username'])){
	  include('header.php');
	?>
  <div id="wrap">
	<div class="container" style="background-color:#FFFFFF;">
		<div class="row">
			<div class="col-sm-12">
		   		<div  style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" >
				  	<h4 align="center" class="text-primary"><b>Welcome <?php  echo $_SESSION['username']."";?>, This is your profile </b></h4>
				</div>
			</div>
		</div>
	<div>
	    <?php
			if(isset($_SESSION['infoUpdated'])){
				echo $_SESSION['infoUpdated'];
			}

		?>
	</div>
	<br/>
		<div class="row">	
			<div class="col-sm-1">
			
			</div>
			<div class="col-sm-7">
				<form id="genInfo" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" class="panel panel-primary" style="padding:3px 3px 3px 3px; ">
						
					<div id="userInfo">

						<button  type="button" class="btn btn-md btn-primary" name="infoEdit" onClick="showInfo(this.name)" value="show"/>Edit</button>
						<br/><br/>
						<table border="0" class="table" cellpadding="3" cellspacing="3">
							<tr>
								<td>Name</td>
								<td><?php echo $uname;?></td>
							</tr>
							<tr>
								<td>Father's Name</td>
								<td><?php echo $fatherName;?></td>
							</tr>
							<tr>
								<td>Mother's Name</td>
								<td><?php echo $motherName;?></td>
							</tr>
							<tr>
								<td>Department</td>
								<td><?php echo $department;?></td>
							</tr>
							<tr>
								<td>Current Designation</td>
								<td><?php echo $designation;?></td>
							</tr>
							<tr>
								<td>Date Of Last Promotion</td>
								<td><?php echo $promotionDate;?></td>
							</tr>
							<tr>
								<td>Address For Correspondence</td>
								<td><?php echo $correspAddress;?></td>
							</tr>
							<tr>
								<td>Permanent Address</td>
								<td><?php echo $permnantAddress;?></td>
							</tr>
							<tr>
								<td>Telephone No.</td>
								<td><?php echo $telephone;?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td><?php echo $email;?></td>
							</tr>
						</table>

		          		<!--<label>Name(in Block Letters)</label> 
				    		<input type="text" class="form-control required" name="name" title="Please Enter Your Name<br>" autofocus>
                  		<br><label>Father's Name</label>
				    		<input type="text" class="form-control required" name="fatherName" title="Please Enter Your Father's Name "/>
		          		<br><label>Mother's Name</label>
				   		   <input type="text" class="form-control required" name="motherName" title="Please Enter Your Mother's Name<br>"/>
		   		  		<br><label>Department</label>
				    		<input type="text" class="form-control required" name="department" title="Please Enter Department's Name"/>
		      	  		<br><label>Current Designation</label>
				    		<input type="text" class="form-control required" name="designation" title="Please Enter Your Current Designation"/>
						<br><label>Grade Pay</label>
				    	    <input type="text" class="form-control required" name="gradePay" title="Please Enter You Grade Pay<br>"/>
		          		<br><label>Date Of Last Promotion</label>
				    	    <input type="text" class="form-control required" placeholder="yyyy-mm-dd" name="lastPromotion" title="Please Enter the Date in the - yyyy-mm-dd format<br>"/>
						<br><label>Address For Correspondence</label> 
				    		<input type="text" class="form-control required" name="addressCorrespondece" title="Please Enter Your Address<br>">
                  		<br><label>Permanent Address</label>
				    		<input type="text" class="form-control required" name="addressPermanant" title="Please Enter Your Permanant Address"/>
		          		<br><label>Telephone No.</label>
				   		   <input type="text" class="form-control required" name="telePhone" title="Please Enter Your Telephone No.>"/>
		   		  		<br><label>Email</label>
				    		<input type="email" class="form-control required" name="email" title="Please Enter Your Email"/><br>-->
					</div><!--End of id userInfo for ajax -->
					
			    </form>

			 </div><!--End of col-sm-7 class -->
			 
			 <div class="col-sm-3">
			 		<div class="panel panel-primary">
      		 			<div class="panel-heading">
         					<h3 class="panel-title">QuickLinks</h3>
 	  			 		</div>
 	   					<div class="panel-body">
						 	<a href="academicActivity.php">Academic Activity </a><br><br>		 
							<a href="teachingLearningActivities.php">Teaching Learning and Evalution Related Activities</a> <br><br>
							<a href="professionalDevelopmentActivity.php">Co-Curricular, Extension,Professional Development Related Activity</a><br><br>
							<a href="ppij.php">Research, publication And Academic Contribution</a><br><br>
   			 				<a href="API_Summary.php">API Summary</a><br><br>
							<a href="otherInfo.php">Other Relevent Information<br> And Closures</a><br><br>
  	  					</div>	
   		 			</div>
			 </div>
			 <div class="col-sm-1">
			 </div>
		</div> <!--End of container row class -->
	</div><!--End of container class -->
  </div><!--End of wrap id -->
	
	<?php
		include('footer.php');
 		include('jsLinks.php');
 		
    ?>
	<script>
		$(document).ready(function() {
 			$('#genInfo').validate();
 		}); // end ready()
	</script>
	<!-- Knockout Script for  -->
	<script>
		var viewModel = {
			year: ko.observable(),
			reportEnabled : ko.observable(false),
			yearEnabled : ko.observable(true),
			isClicked : function(){
				self = this;
				self.yearEnabled(false);
				self.reportEnabled(true);
			},
			changeYear : function(){
				self = this;
				self.yearEnabled(true);
				self.reportEnabled(false);
			}
			
		}
		ko.applyBindings(viewModel);
	</script>
	<script><!--Ajax script for showing information on the basis of combobox value -->
		function showInfo(name)
		{
			if (window.XMLHttpRequest)
  			{// code for IE7+, Firefox, Chrome, Opera, Safari
  				xmlhttp=new XMLHttpRequest();
  			}
			else
  			{// code for IE6, IE5
  				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  			}
			xmlhttp.onreadystatechange=function()
  			{
 				 if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{  
        			document.getElementById("userInfo").innerHTML=xmlhttp.responseText;	
    			}
  			}
			xmlhttp.open("GET","form_process/genInfoShow.php?name="+name,true);
			xmlhttp.send();
		}
  </script>
    <?php
	  }
	  else{
		header('location: index.php');
	  }
    ?>
</body>
</html>
