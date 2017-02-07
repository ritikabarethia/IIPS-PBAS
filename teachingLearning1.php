<?php
	session_start();
	include('DBConnect.php');
	include('form_process/teachingProcess.php');
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
	 		<h3 align="center">Teaching Learning And Evaluation Related Activities</h3>
			 <div class="row" style=" margin-bottom:50px;">
	   		 	<div class="col-sm-9">
         			<ul class="nav nav-tabs" id="myTab">
  		 				<li class="active"><a href="#lectures">Lectures/Seminars</a></li>
 	     				<li><a href="#resources">Resources Provided</a></li>
  		 				<li><a href="#innovation">Innovation</a></li>
 		 				<li><a href="#duties">Examination Duties</a></li>
	 	 			</ul>
					<div class="tab-content">
		   				<div class="tab-pane active"  id="lectures">
						     <h5 align="center">  Lectures, Seminar,Tutorial, Practical, Contact Hours</h5>
			   					<form role="form" name="lectures" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="lectureForm">
			   				   <div class="form-group">
								  <div id="lect"><br />
		          				    <label>Course / Paper</label> 
				    					<input type="text" class="form-control required" name="course" title="Please Enter Course Name">
                  					<br /><label>Level</label>
				    					<input type="text" class="form-control required" name="level" title="Please Enter The Level"/>
		          					<br /><label>Mode Of Teaching</label>
				    					<input type="text" class="form-control required" name="teachingModes" title="Please Enter Teaching Mode"/>
		   		  					<br /><label> No. of Classes/per Week Allocated</label>
				    					<input type="text" class="form-control required" name="classAllocated" title="Please Enter No. Of Class Allocated"/>
		      	  					<br /><label>Total Number of Classes Conducted</label>
				    					<input type="text" class="form-control required" name="classConducted" title="Please Enter Total No. of Conducted Classes"/>
				  					<br /><label>Practicals</label> 
				    					<input type="text" class="form-control required" name="practicals" title="Please Enter Practicles">
                  					<br /><label>% of Classes Taken AS Per Documented Record</label>
				    					<input type="text" class="form-control required" name="classTakenRecord" title="Please Enter the % value"/>
		          					<br /><label>Classes Taken (max 50 for 100% Performance and Proportionate Score upto 80% Performance, below which no Score may be given)</label>
				    					<input type="text" class="form-control required" name="classTaken" title="Please Enter Classes Taken"/>
		   		 					<br /><label>Teaching Load in Excess of UGC norm(max score : 10)</label>
				    					<input type="text" class="form-control required" name="teachingLoads" title="Please Enter Teaching Load"/>
			 					 </div><!--End of lect id -->
			 				
							       <br><input class="btn btn-primary" type="submit" value="Save" name="lectSave" />
									<select name="lect" onChange="showUser(this.value, this.name)">
										<option>--Title--</option>
										<?php 
											include('DBConnect.php');
											$user_id = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from Teach_LSTP WHERE User_Id='$user_id'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_LSTP_Course']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="lectDelete" />
								</div><!--End of form-group class -->
		    				</form>
	         
		 				</div><!--End of lecture id -->
						<div class="tab-pane"  id="resources">
						     <h5 align="center">Reading/Instructional material consulted and additional 
                                                knowledge resources provided to students</h5><br>
			   					<form role="form" name="resources" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="resourceForm">
			   					<div class="form-group">
								   <div id="res"><br />
		          					<label>Course / Paper</label>
				    					<input type="text" class="form-control required" name="readingCourse" title="Please Enter Course Name">
                  					 <br><label>Consulted</label>
				    					<input type="text" class="form-control required" name="consulted" title="Please Enter value"/>
		          					 <br><label>Prescribed</label>
				    					<input type="text" class="form-control required" name="prescribed" title="Please Fill this information"/>
		   		  					 <br><label>Additional Resources Provided : </label>
				    					Yes<input type="radio" name="addiResources" value="Yes"/>
										No<input type="radio" name="addiResources" value="No"/>	
									  <input type="text" class="form-control required" name="resrc" title="Please Fill this information"/>  					
			 					 </div><!--End if id res for Ajax -->
			 				  </div>
							<input class="btn btn-primary" type="submit" value="Save" name="resourceSave" />
									<select name="course" onChange="showUser(this.value, this.name)">
										<option>--Course--</option>
										<?php 
											include('DBConnect.php');
											$user_id = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from Teach_RIMC WHERE User_Id='$user_id'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_RIMC_Course']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="resourceDelete" />
		    					</form>
	         
		 				</div><!--End of resource id -->
						
				  <div class="tab-pane"  id="innovation">
						 <h5 align="center">Use of participatory and innovative Teaching-Learning 
                                                 Methodologies, Updating of subject contents</h5><br>
			   		    <form role="form" method="post" name="innovation" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" id="innovationForm">
			   			    <div class="form-group">
								 <div id="inno"><br />
		          					<label>Short Description </label> 
				    					<input type="text" class="form-control required" name="description" title="Please Enter Description">
                  					<br><label>API Score</label>
				    					<input type="text" class="form-control required" name="api" title="Please Enter API Score"/>
			 					 </div>
			 				</div>
							       <input class="btn btn-primary" type="submit" value="Save" name="innovationSave" />
									<select name="desc" onChange="showUser(this.value, this.name)">
										<option>--Description--</option>
										<?php 
											include('DBConnect.php');
											$user_id = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from Teach_TLM WHERE User_Id='$user_id'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_TLM_SD']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="innovationDelete" />
		    					</form>
	         
		 				</div><!--End of innovation id -->
						<div class="tab-pane"  id="duties">
						     <h5 align="center">Examination Duties Assigned and Performed</h5><br>
			   					<form role="form" name="duties" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="dutiesForm">
			   					<div class="form-group">
								  <div id="duty">
		          					<label>Type of Examination Duties</label> 
				    					<input type="text" class="form-control required" name="typeDuties" title="Please Enter The Type">
                  					<br><label>Duties Assigned</label>
				    					<input type="text" class="form-control required" name="assignedDuties" title="Please Enter Assigned Duties"/>
									<br><label>Extent to which carried out(%)</label> 
				    					<input type="text" class="form-control required" name="extent" title="Please Enter % Value">
                  					<br><label>API Score</label>
				    					<input type="text" class="form-control required" name="api" title="Please Enter API Score"/>
			 					 </div>
			 				  </div>
							       <input class="btn btn-primary" type="submit" value="Save" name="dutiesSave" />
									<select name="dut" onChange="showUser(this.value, this.name)">
										<option>--Duties--</option>
										<?php 
											include('DBConnect.php');
											$user_id = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from Teach_EDAP WHERE User_Id='$user_id'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_EDAP_TED']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="dutiesDelete" />
		    					</form>
	         
		 				</div><!--End of innovation id -->
					</div><!--End of tab-content class -->
				</div><!--End of col-sm-9 class -->
				<div class="col-sm-3">
					<div class="panel panel-primary">
      		 			<div class="panel-heading">
         					<h3 class="panel-title">QuickLinks</h3>
 	  			 		</div>
 	   					<div class="panel-body">
							<a href="general_Information.php">General Category</a><br><br>
						 	<a href="academicActivity.php">Academic Activity </a><br><br>
							<a href="curricularActivities.php">Co-Curricular, Extension,Professional Development Related Activity</a><br><br>		 
							<a href="researchPublication.php">Research, publication And Academic Contribution</a><br><br>
   			 				<a href="API_Summary.php">API Summary</a><br><br>
							<a href="otherInfo.php">Other Relevent Information<br> And Closures</a><br><br>
  	  					</div>	
   		 			</div>
				</div><!--End of col-sm-3 class -->
			</div><!--End of row class -->
	 	 </div><!--End of container class -->
	</div><!--end of wrap id -->
	 <?php
	      	include('footer.php');
	        include('jsLinks.php');
	?>
<script>
		$(document).ready(function() {
 			$('#lectureForm').validate();
			$('#resourceForm').validate();
			$('#innovationForm').validate();
			$('#dutiesForm').validate();
			
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
					if(name == "lect"){
        			    document.getElementById("lect").innerHTML=xmlhttp.responseText;	
					}
					if(name == "course"){
						document.getElementById("res").innerHTML=xmlhttp.responseText;
					}
					if(name == "desc"){
        			    document.getElementById("inno").innerHTML=xmlhttp.responseText;	
					}
					if(name == "dut"){
        			    document.getElementById("duty").innerHTML=xmlhttp.responseText;	
					}
    			}
  			}
			xmlhttp.open("GET","form_process/teachingShow.php?val="+value+"&name="+name,true);
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
