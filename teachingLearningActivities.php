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
<script>
function onlyAmpersand(event)				
{
    	var e =event; 
   		var charCode = e.which || e.keyCode;
    		if (charCode == 38)
       			 return false;
			else
				 return true;

}
</script>
<body>
	<?php
		if(isset($_SESSION['username'])){
			echo '<div id="wrap">';
			include('header.php');
     ?>
	 	<div class="container" style="background-color:#FFFFFF;">

	 	<div style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" class="text-primary">
			<center><h4><b>Teaching Learning And Evaluation Related Activities <span class="text-danger"><?php echo $_SESSION['pbasYear']; ?></span> </b></h4></center>
		</div>
    	<div class="row-fluid">

    	<div class="col-md-4" id="myNav">
        <br><br>
          <div class="panel panel-primary" >
            <ul class="nav nav-tabs nav-pills"  data-offset-top="190" style="width:100%;">
                <li class="active"><a href="teachingLearningActivities.php">Lectures, Seminar,Tutorial, Practical, Contact Hours<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
                <li><a href="rimc.php">Reading/Instructional material consulted and additional knowledge resources provided to students<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
                <li><a href="tlm.php">Use of participatory and innovative Teaching-Learning Methodologies, Updating of subject contents<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
                <li><a href="edap.php">Examination Duties Assigned and Performed<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
                
            </ul>
           </div>
        </div>

        <br>
	   		<div class="col-sm-7">
	   		 		<br>
					<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
						
						
						<div class="panel-heading" >
				  			<h4 align="center" >Lectures, Seminar,Tutorial, Practical, Contact Hours</h4>			
						</div><br>
			   			<form role="form" name="lectures" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="lectureForm">
			   			
			   				<input class="btn btn-primary" type="submit" value="Save" name="lectSave" />
									<select name="lect" style="width: 220px" onChange="showUser(this.value, this.name)">
										<option>--Title--</option>
										<?php 
											include('DBConnect.php');
											$user_id = $_SESSION['username'];
											echo $year=$_SESSION['pbasYear'];
											$query = mysqli_query($con,"SELECT * from teach_lstp WHERE User_Id='$user_id' and Year='$year'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_LSTP_Course']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="lectDelete" />
									<input type="reset" class="btn btn-primary" value="Reset" name="reset" /><br/><br/>
									
			   			<div class="form-group">
							<div id="lect">
								
		          						<label>Course / Paper </label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="course" title="Please Enter Course Name" required="required"/>
                  					<br /><label>Level</label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="level" title="Please Enter The Level" required="required"/>
		          					<br /><label>Mode Of Teaching</label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="teachingModes" title="Please Enter Teaching Mode" required="required"/>
		   		  					<br /><label> No. of Classes/per Week Allocated</label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="classAllocated" title="Please Enter No. Of Class Allocated" required="required"/>
		      	  					<br /><label>Total Number of Classes Conducted</label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="classConducted"  title="Please Enter Total No. of Conducted Classes" required="required"/>
				  					<br /><label>Practicals</label> 
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="practicals" title="Please Enter Practicles" required="required">
                  					<br /><label>% of Classes Taken AS Per Documented Record</label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="classTakenRecord" title="Please Enter the % value" required="required"/>
		          					<br /><label>Classes Taken (max 50 for 100% Performance and Proportionate Score upto 80% Performance, below which no Score may be given)</label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="classTaken" title="Please Enter Classes Taken" required="required"/>
		   		 					<br /><label>Teaching Load in Excess of UGC norm(API Score)</label>
				    					<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="teachingLoads" id="lstptooltip" required="required"/>
			 					 </div><!--End of lect id -->
			 				
							       <br><input class="btn btn-primary" type="submit" value="Save" name="lectSave" />
									<select name="lect" style="width: 220px" onChange="showUser(this.value, this.name)">
										<option>--Title--</option>
										<?php 
											include('DBConnect.php');
											$user_id = $_SESSION['username'];
											echo $year=$_SESSION['pbasYear'];
											$query = mysqli_query($con,"SELECT * from teach_lstp WHERE User_Id='$user_id' and Year='$year'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Teach_LSTP_Course']; ?></option>
										<?php } ?>
									</select>	
									<input type="submit" class="btn btn-primary"  value="Delete" name="lectDelete" />
									<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
								</div><!--End of form-group class -->
		    				</form>	     
					</div>
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

		 	$(document).ready(function () {

   			 $('#lstptooltip').tooltip({'trigger':'focus', 'title': 'Maximum Score : 10'});
});

		 // end ready()
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
