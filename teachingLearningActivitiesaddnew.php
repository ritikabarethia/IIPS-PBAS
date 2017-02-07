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
			 		
			 	<div class="col-sm-3" style="box-shadow:5px 5px 5px #888888; padding-bottom:55px;">
			 		<br><br><br><br>

			 		<li class="active"><a href="teachingLearningActivities.php">Lectures, Seminar,Tutorial, Practical, Contact Hours</a><br><br></li>
					<a href="rimc.php">Reading/Instructional material consulted and additional knowledge resources provided to students</a><br><br>
	   			 	<a href="tlm.php">Use of participatory and innovative Teaching-Learning Methodologies, Updating of subject contents</a><br><br>
					<a href="edap.php">Examination Duties Assigned and Performed</a><br><br>
				 		
			 	</div>

			 	<div class="col-sm-1"></div>
	   		 	<div class="col-sm-8">
	   		 		<br>
					
					<h5 align="center">  Lectures, Seminar,Tutorial, Practical, Contact Hours</h5>
			   		<form role="form" name="lectures" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="lectureForm">
			   			<div class="form-group">
							<div id="lect"><br />
		          				<label>Course / Paper </label>
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
											//echo $year=$_SESSION['myear'];
											$query = mysqli_query($con,"SELECT * from Teach_LSTP WHERE User_Id='$user_id' ");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_LSTP_Course']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="lectDelete" />
									<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
								</div><!--End of form-group class -->
		    				</form>	     
	         
				</div><!--End of col-sm-9 class -->
				<!--End of col-sm-3 class -->
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
