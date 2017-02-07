<?php
	session_start();
	ob_start();
	include('DBConnect.php');
	include('form_process/academicProcess.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Academic Activity</title>
        <?php
			include('cssLinks.php');
		?>
		<!--  javascript for disabling the textfields on click of 'No' radio button -->
		<script type="text/javascript">
		window.onload = function() {
document.getElementById('optionsRadios2').checked = true;
//document.getElementById('optionsRadios2').onchange = disablefield();
document.getElementById('nametxt').disabled='Click on the Yes above';
		 	document.getElementById('nametxt').placeholder='Click on the Yes above';
		 		document.getElementById('placetxt').disabled='Click on the Yes above';
		 		document.getElementById('placetxt').placeholder='Click on the Yes above';
		 		document.getElementById('durationtxt').disabled='Click on the Yes above';
		 		document.getElementById('durationtxt').placeholder='Click on the Yes above';
		 		document.getElementById('satxt').disabled='Click on the Yes above';
		 		document.getElementById('satxt').placeholder='Click on the Yes above';
		      document.getElementById('yeartxt').disabled='Click on the Yes above to enter';
		      document.getElementById('yeartxt').placeholder='Click on the Yes above'; 
}</script>

</head>

<body>
	<?php 
		if(isset($_SESSION['username']) and isset($_SESSION['pbasYear'])){
		echo '<div id="wrap">';
		include('header.php');
		$year=$_SESSION['pbasYear'];
	?>
		<div class="container" style="background-color:#FFFFFF;">
		<div class="row">
			<div class="col-sm-12">
		   		<div  style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" >
			<h3 align="center" class="text-primary"> Academic Activity <span class="text-danger"><?php echo $_SESSION['pbasYear']; ?></span> </h3>
			</div></div></div>
			<div class="row">
				<div class="col-sm-1">
				</div><br>
				<div class="col-md-1"></div>
				<div class="col-sm-7">
					<form role="form" name="academic" class="panel panel-primary" style="padding:3px 3px 3px 3px; " action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="acadActivity">
			    		<div class="form-group" >
			    		<button class="btn btn-primary icon-save" type="submit" name="activitySave"> Save</button>
							<select name="activity" style="width:200px;" onChange="showUser(this.value, this.name)">
								<option>--Courses--</option>
								<?php 
									#include('DBConnect.php');
									$user_id = $_SESSION['username'];
									$year=$_SESSION['pbasYear'];
									$query = mysqli_query($con,"SELECT * from acad_act WHERE User_Id='$user_id' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?>
										<option><?php echo $row['Gen_Info_Noc']; ?></option>
								<?php } ?>
							</select>
							<button class="btn btn-primary icon-trash" type="submit" name="activityDelete"> Delete</button>
							<button type="reset" class="btn btn-primary icon-reset" value="Reset" name="reset" >Reset</button>
						   <div id="academic">
		          			
							<label>Academic Staff College Orientation / Refresher
Course Attended During The Year : </label> 
				    			Yes  <input type="radio" name="course" id="optionsRadios1" onChange="disablefield();"  value="yes">
								No  <input type="radio" name="course" id="optionsRadios2" onChange="disablefield();" value="no"><br><br>
                  			<br /><label>Name Of Course</label>
				    			<input type="text" id="nametxt" data- class="form-control required"  name="nameOfCourse" title="Please Enter Course Name" required="required"/>
		          			<br /><label>Place</label>
				   		   		<input type="text" id="placetxt" data- class="form-control required" name="Place" title="Please Enter Place" required="required"/>
		      	  			<br /><label>Duration</label>
				    			<input type="text" id="durationtxt" class="form-control required" name="duration" title="Please Enter Duration" required="required"/>
							<br /><label>Sponsoring Agency</label>
				    	    	<input type="text" id="satxt" class="form-control required" name="sponsor" title="Please Enter Name of Sponsoring Agency" required="required"/>
		          			<br /><label>Year</label><br>
		          			<input type="text" id="yeartxt" class="form-control required date" name="Year" title="Please Enter The Date" maxlength="4" required="required"/>
				    	    	
								<label>Whether acquired any degree or fresh academic
 qualification during the year : </label> 
				    			Yes<input type="radio" name="degree" id="optionsRadios1" value="yes" required="required">
								No<input type="radio" name="degree" id="optionsRadios2" value="no"><br>
							</div><!--End of id academic for ajax -->
			      			<button class="btn btn-primary icon-save" type="submit" name="activitySave"> Save</button>
							<select name="activity" style="width:200px;" onChange="showUser(this.value, this.name)">
								<option>--Courses--</option>
								<?php 
									#include('DBConnect.php');
									$user_id = $_SESSION['username'];
									$year=$_SESSION['pbasYear'];
									$query = mysqli_query($con,"SELECT * from acad_act WHERE User_Id='$user_id' and year='$year'");
									while($row = mysqli_fetch_assoc($query)){
								?>
										<option><?php echo $row['Gen_Info_Noc']; ?></option>
								<?php } ?>
							</select>
							<button class="btn btn-primary icon-trash" type="submit" name="activityDelete"> Delete</button>
							<button type="reset" class="btn btn-primary icon-reset" value="Reset" name="reset" >Reset</button>
			  			</div>
			  		</form>
				 </div><!--End of col-sm6 class -->
			 
			 	<div class="col-sm-3">
					<div class="panel panel-primary"  class="quicklinks">
      		 			<div class="panel-heading">
         					<h3 class="panel-title"><i class=" icon-list">  QuickLinks</i></h3>
 	  			 		</div>
 	   					<div class="panel-body">
						 	<a href="general_Information.php"><i class="icon-hand-right" >  Profile</i></a><br><br>		 
							<a href="teachingLearningActivities.php"><i class="icon-hand-right" >  Teaching Learning and Evalution Related Activities</i></a> <br><br>
							<a href="professionalDevelopmentActivity.php"><i class="icon-hand-right" >  Co-Curricular, Extension,Professional Development Related Activity</i></a><br><br>
							<a href="ppij.php"><i class="icon-hand-right" >  Research, publication And Academic Contribution</i></a><br><br>
   			 				<a href="API_Summary.php"><i class="icon-hand-right" >  API Summary</i></a><br><br>
							<a href="otherInfo.php"><i class="icon-hand-right" >  Other Relevent Information<br> And Closures</i></a><br><br>
  	  					</div>	
   		 			</div>
			 	</div>
				<div class="col-sm-1">
				</div>
			</div> <!--End of row class -->
		</div><!--End of container class -->
	</div><!--end of wrap id -->

	
	<?php
 		include('footer.php');
 		include('jsLinks.php');
 	?>
	<script>
		$(document).ready(function() {
 			$('#acadActivity').validate();
 		}); // end ready()
	</script>
	<script type="text/javascript">

		 function disablefield()
		 { if (document.getElementById('optionsRadios2').checked == 1){ 
		 	document.getElementById('nametxt').disabled='Click on the Yes above';
		 	document.getElementById('nametxt').placeholder='Click on the Yes above';
		 		document.getElementById('placetxt').disabled='Click on the Yes above';
		 		document.getElementById('placetxt').placeholder='Click on the Yes above';
		 		document.getElementById('durationtxt').disabled='Click on the Yes above';
		 		document.getElementById('durationtxt').placeholder='Click on the Yes above';
		 		document.getElementById('satxt').disabled='Click on the Yes above';
		 		document.getElementById('satxt').placeholder='Click on the Yes above';
		      document.getElementById('yeartxt').disabled='Click on the Yes above to enter';
		      document.getElementById('yeartxt').placeholder='Click on the Yes above'; }
		      else{ 
		      	document.getElementById('nametxt').disabled='';
		       document.getElementById('nametxt').placeholder='Name of Course';
		       document.getElementById('placetxt').disabled=''
		       document.getElementById('placetxt').placeholder='Place';
		       document.getElementById('durationtxt').disabled=''
		       document.getElementById('durationtxt').placeholder='Duration';
		       document.getElementById('satxt').disabled=''
		       document.getElementById('satxt').placeholder='Sponsoring Agency';
		       document.getElementById('yeartxt').disabled=''
		       document.getElementById('yeartxt').placeholder='Year'; } 
		   } 
		        </script> 
	<script><!--Ajax script for showing information on the basis of combobox value -->
		function showUser(value, name)
		{
			if (value=="")
  			{
  				document.getElementById("academic").innerHTML="";
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
        			document.getElementById("academic").innerHTML=xmlhttp.responseText;	
    			}
  			}
			xmlhttp.open("GET","form_process/academicShow.php?val="+value+"&name="+name,true);
			xmlhttp.send();
		}
</script>
<script type="text/javascript">
	$(document).ready(function () {

    $('#academic').validate({
        rules: {
            nametxt: {
                minlength: 2,
                required: true
            },
            
            
        },
        highlight: function (element) {
            $(element).closest('.form-group').removeClass('success').addClass('error');
        },
        success: function (element) {
            element.text('OK!').addClass('valid')
                .closest('.form-group').removeClass('error').addClass('success');
        }
    });

});
</script>
	<?php
		}
		else{
		header('location: index.php');
		}
	?>
</body>
 <script src="js/jquery-1.7.2.min.js"></script>
 
<!-- Validate Plugin -->
  <script src="js/jquery.validate.min.js"></script>
</html>
