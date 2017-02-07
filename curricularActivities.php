<?php
	session_start();
	include('DBConnect.php');
	include('form_process/curricularProcess.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Research Publication </title>
  <?php
  		include('cssLinks.php');
  ?>
</head>

<body>
	<?php
		if(isset($_SESSION['username'])){
			echo '<div id="wrap">';
			include('header.php');
     ?>
	 <div class="container" style="background-color:#FFFFFF;">
	 	<h3 align="center">Co-Curricular, Extension,Professional Development Related Activity</h3>
	  	  <div class="row">
		   	    <div class="col-sm-1">
				</div>
		  		<div class="col-sm-7">
					  <ul class="nav nav-tabs" id="myTab">
  		 				<li class="active"><a href="#curricular">Co-Curricular</a></li>
 	     				<li><a href="#contribution">Contribution</a></li>
  		 				<li><a href="#development">Development</a></li>
	 	 			</ul>
					<div class="tab-content">
		   				<div class="tab-pane active"  id="curricular">
						     <h5 align="center">Co-Curricular,Extension,Professional Development Related Activities
</h5><br>
			   					<form role="form" name="curricular" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="curricularForm">
			   					 <div class="form-group">
								   <div id="curr">
		          					 <label>Type of Activity</label> 
				    					<input type="text" class="form-control required" name="typeOfActivity" title="Please Enter The Type of Activity">
                  					<br><label>Average Hrs/Week</label>
				    					<input type="text" class="form-control required" name="average" title="Please Enter Average Hrs/Week"/>
		          					<br><label>API Score</label>
				    					<input type="text" class="form-control required" name="api" title="Please Enter API Score"/><br>
			 					  </div><!--End Of curr id for Ajax -->
			 				    </div>
							   <input class="btn btn-primary" type="submit" value="Save" name="curricularSave" />
									<select name="curr" onChange="showUser(this.value, this.name)">
										<option>--Activity--</option>
										<?php 
											include('DBConnect.php');
											$userId = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from teach_ecfa WHERE User_Id = '$userId'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_ECFA_TOA']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="curricularDelete" />
		    					</form>
	         
		 				</div><!--End of curricular id -->
						<div class="tab-pane"  id="contribution">
						     <h5 align="center">Contribution To Corporate Life And Management Of The Institution
</h5><br>
			   					<form role="form" name="contribution" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="contributionForm">
			   					<div class="form-group">
								   <div id="cont">
		          					<label>Type of Activity</label> 
				    					<input type="text" class="form-control required" name="typeOfActivity" title="Please Enter Type of Activity">
                  					<br><label>Yearly/Semester wise responsibility</label>
				    					<input type="text" class="form-control required" name="responsibility" title="Please Enter Responsibility"/>
		          					<br><label>API Score</label>
				    					<input type="text" class="form-control required" name="contApi" title="Please Enter API Score"/><br>
		   		  					
			      					
			 					 </div><!--End of cont id for ajax -->
			 				</div>
							       <input class="btn btn-primary" type="submit" value="Save" name="contributionSave" />
									<select name="contr" onChange="showUser(this.value, this.name)">
										<option>--Activity--</option>
										<?php 
											include('DBConnect.php');
											$userId = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from teach_CLMI WHERE User_Id = '$userId'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_CLMI_TOA']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="contributionDelete" />
		    					</form>
	         
		 				</div><!--End of contribution id -->
						
						<div class="tab-pane"  id="development">
		     			  
						     <h5 align="center">Professional Development Activities</h5><br>
			   					<form role="form" name="development" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="developmentForm">
			   					<div class="form-group">
								  <div id="dev">
		          					<label>Type of Activity</label> 
				    					<input type="text" class="form-control required" name="typeOfActivity" title="Please Enter Type of Activity">
                  					<br><label>Yearly/Semester wise responsibility</label>
				    					<input type="text" class="form-control required" name="responsibility" title="Please Enter The Responsibility"/>
		          					<br><label>API Score</label>
				    					<input type="text" class="form-control required" name="devApi" title="Please Enter API Score"/><br>
			 					 </div><!--End dev Id for Ajax -->
			 				</div>
							       <input class="btn btn-primary" type="submit" value="Save" name="developmentSave" />
									<select name="dev" onChange="showUser(this.value, this.name)">
										<option>--Activity--</option>
										<?php 
											include('DBConnect.php');
											$userId = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from Teach_PDA WHERE User_Id = '$userId'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_PDA_TOA']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="developmentDelete" />
		    					</form>
	         
		 				</div><!--End of contribution id -->
					</div><!--End of tab-content class -->
	  			</div>
				<div class="col-sm-3">
					<div class="panel panel-primary">
      		 			<div class="panel-heading">
         					<h3 class="panel-title">QuickLinks</h3>
 	  			 		</div>
 	   					<div class="panel-body">
						 	<a href="general_Information.php">General Category</a><br><br>
						 	<a href="academicActivity.php">Academic Activity </a><br><br>		 
							<a href="teachingLearning.php">Teaching Learning and Evalution Related Activities</a> <br><br>
							<a href="researchPublication.php">Research, publication And Academic Contribution</a><br><br>
   			 				<a href="API_Summary.php">API Summary</a><br><br>
							<a href="otherInfo.php">Other Relevent Information<br> And Closures</a><br><br>
  	  					</div>	
   		 			</div>
				</div>
				<div class="col-sm-1">
				</div>
	 	  </div><!--end of row class -->
	 </div><!--end of container class -->
  </div><!--end of wrap id -->
	 <?php
	      	include('footer.php');
	        include('jsLinks.php');
	 ?>
	 <!--JQuery Code For Form Validation -->
	 <script>
		$(document).ready(function() {
 			$('#curricularForm').validate();
			$('#contributionForm').validate();
			$('#developmentForm').validate();
		}); // end ready()
	</script>
	
	<script>
		function showUser(value, name)
		{
			if (value=="")
  			{
  				document.getElementById("lect").innerHTML="";
  				return;
  			}
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
					if(name == "curr"){
        			    document.getElementById("curr").innerHTML=xmlhttp.responseText;	
					}
					if(name == "contr"){
						document.getElementById("cont").innerHTML=xmlhttp.responseText;
					}
					if(name == "dev"){
        			    document.getElementById("dev").innerHTML=xmlhttp.responseText;	
					}
    			}
  			}
			xmlhttp.open("GET","form_process/curricularShow.php?val="+value+"&name="+name,true);
			xmlhttp.send();
		}
	</script>
	 <?php 
	      }
		  else{
		     header('location:index.php');
	      }
     ?>
</body>
</html>
