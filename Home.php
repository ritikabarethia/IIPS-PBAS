<?php
	session_start();
	include('DBConnect.php');
	$user = $_SESSION['username'];
	
	//Condition or checking if year is submitted
	if(isset($_POST['yearButton'])){
		$pbasYear = $_POST['pbasYear'];
		$_SESSION['pbasYear'] = $pbasYear;
		header('location: Home.php');
	}
	
	$result = mysqli_query($con,"Select * from gen_info where User_Id ='".$user."'") or die("Error : ".mysqli_error($con));
	$rw = mysqli_fetch_array($result);
	?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>PBAS | HOME</title>
        <?php
			include('cssLinks.php');
		?>


</head>

<body >
<?php 
	if(isset($_SESSION['username'])){
	    echo '<div id="wrap">';
		include('header.php');
		include('yearModal.php');
?>
	<!-- condition for showing modal window only when year is not set. -->
	<?php if(!isset($_SESSION['pbasYear'])){ ?>
		
	<?php }?>
	 
    <div class="container" style="background-color:#FFFFFF;" >
   	   <div class="row">
			<div class="col-sm-12">
		   		<div  style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" >
		   				<div class="pull-left" > <img src="images/iipslogo.jpg" class="img-polaroid" style="height:100px"></div>.
		  					<center><b>
		  					<div class="text-primary" ><h4>Welcome <?php echo $rw['Gen_Info_Name']; ?></h4>
		  					</div>
		  					 Manage Your PBAS Account</b><br>
		  					
						<div class="text-danger"><b>PBAS Year - <?php if(isset($_SESSION['pbasYear'])){ echo $_SESSION['pbasYear']; } ?> &nbsp <a data-toggle="modal" href="#yearModal"  class="text-alert"><b>Change</a><br></div>
						</center>
						
					
				</div>
			</div>
		</div><!-- end of row class. -->
		<br>
		<div class="row">	
			<div class="col-md-4">
				<div class="panel panel-primary" >
					<div class="panel-heading">
						<h3 class="panel-title" ><i class="icon-pushpin" >   Part-A : General Information   </i></h3>
					</div>
					<div class="panel-body">
						<a class="btn btn-default btn-md" style="color:#428bca; width:100%;" href="general_Information.php"><i class="icon-user" >  Profile</i></a><br><br>
						 <a class="btn btn-default btn-md" style="color:#428bca; width:100%;" href="academicActivity.php"><i class="icon-pencil" >  Academic Activity</i></a></br>
					</div>
				</div><!-- End of panel-primary class. -->
				
				<!-- Panel for other activities starts -->
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title"><i class="icon-pushpin" >  Other Activitis</i></h3>
					</div>
					<div class="panel-body">
						<a href="otherInfo.php" class="btn btn-default btn-md" style="color:#428bca; width:100%;" ><i class="icon-briefcase" > Other Relevent Information <br>And Closures</i></a></br></br>
						<a href="dompdf/pdf1.php" class="btn btn-default btn-md" style="color:#428bca; width:100%;" ><i class="icon-download-alt" > Click here to see the report</i></a></br>
					</div>
				</div>
				<!-- End of panel-primary class for "Other Activities". -->
			</div><!-- End of col-md-4 class. -->

				 
			<div class="col-md-5">	
				<div class="panel panel-primary">
					<div class="panel-heading">
						 <h3 class="panel-title"><i class="icon-pushpin" >  Part-B : Academic Performance Indicator</i></h3>
					</div>
					<div class="panel-body">
						<a class="btn btn-default btn-md" style="color:#428bca; width:100%;" href="teachingLearningActivities.php"><i class="icon-book" >  Teaching Learning & Evalution Related<br> Activities</i></a></br></br>
						<a class="btn btn-default btn-md" style="color:#428bca; width:100%;" href="professionalDevelopmentActivity.php"><i class="icon-briefcase" > Co-Curricular, Extension,Professional <br>Development Related Activity</i></a></br></br>
						<a class="btn btn-default btn-md" style="color:#428bca; width:100%;" href="ppij.php"><i class="icon-pencil" > Research Publication & Academic<br> Contribution</i></a> </br></br>
						<a class="btn btn-default btn-md" style="color:#428bca; width:100%;" href="API_Summary.php"><i class="icon-check" > Summary Of API Score</i></a></br>
					</div> 
				</div>
			</div>
			<!-- End of col-md-4 class for "PART-B". -->
			
			<div class="col-md-3">
					<div class="panel panel-primary"  class="quicklinks">
      		 			<div class="panel-heading">
         					<h3 class="panel-title"><i class=" icon-list" >  QuickLinks</i></h3>
 	  			 		</div>
 	   					<div class="panel-body">
						 	<a href="teachingLearningActivities.php"><i class="icon-hand-right" >  Lectures, Seminar,Tutorial, Practical, Contact Hours</i></a><br><br>		 
							<a href="rimc.php"><i class="icon-hand-right" >  Resources proveded to students</i></a> <br><br>
							<a href="edap.php"><i class="icon-hand-right" >  Examination duties</i></a><br><br>
							<a href="opc.php"><i class="icon-hand-right" >  Projects</i></a><br><br>
   			 				<a href="ppc.php"><i class="icon-hand-right" >  Papers presented in conference,workshop etc.</i></a><br><br>
							
  	  					</div>	
   		 			</div>
			</div>
		</div>
	</div><!-- End of container Class. -->
</div><!-- End of wrap ID. -->

 <?php
 	include('footer.php');
 	include('jsLinks.php');
 ?>
  <script src="js/knockout-2.3.0.js"></script>
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
<?php
	}
	else{
		header('location: index.php');
	}
?>
</body>
</html>
