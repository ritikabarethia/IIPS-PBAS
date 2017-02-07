<?php
	session_start();
	include('DBConnect.php');
	include('form_process/otherActivityProcess.php');
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

<body>
<?php 
	if(isset($_SESSION['username'])){
	    echo '<div id="wrap">';
		include('header.php');
		$year=$_SESSION['pbasYear'];
?>
   <div class="container">
		<div class="row" style="margin-top:40px;">
		    <div class="col-sm-1">
			</div>
			<div class="col-sm-7">

				<div style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" class="text-primary">
					<center><h4><b>Please give details of any other credential, significant contribution, 
                                        awards recieved etc., not mentioned earlier.<span class="text-danger"><?php echo $_SESSION['pbasYear']; ?></span></b></h4></center>
				</div>	

				<br/><br/>
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
					
					<ul class="nav nav-tabs" id="myTab">
						
  		 				<li class="active"><a href="#otherAct"><b>Other Activity</b></a></li>
 	     				<li><a href="#enclosures"><b>Enclosures</b></a></li>
	 	 			</ul>
					<div class="tab-content">
		   				<div class="tab-pane active"  id="otherAct">
						    <div class="panel-heading">
				 				 <h3 align="center" class="panel-title" align="center"><b>Other Relevant Activity</b></h3>
							</div><!--end of panel heading-->
						     <br>
			   					<form role="form" name="other" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="otherActivityForm">
			   					 <div class="form-group">
								   <div id="oth">
		          					 <label>Details</label> 
				    					<textarea type="text" class="form-control required" name="actDetails" title="Please Enter The Details" required="required"></textarea><br>
			 					   </div>
			 				     </div>
							       <input class="btn btn-primary" type="submit" value="Save" name="otherSave" />
									<select name="oth" style="width: 220px" onChange="showUser(this.value, this.name)">
										<option>--Activity--</option>
										<?php 
											include('DBConnect.php');
											$userId = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from orie WHERE User_Id = '$userId'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Details']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="otherDelete" />
		    					</form>
	         
		 				</div><!--End of curricular id -->
						<div class="tab-pane"  id="enclosures">
		     			  	<div class="panel-heading">
				 				 <h3 align="center" class="panel-title" align="center"><b><b>Contribution To Corporate Life And Management Of The Institution</b></b></h3>
							</div><!--end of panel heading-->
						     <br>
			   					<form role="form" name="enclosures" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="enclosureForm">
			   					  <div class="form-group">
								    <div id="enc">
		          					  <label>Enclosures</label> 
				    					 <input type="text" class="form-control required" name="encDetails" title="Please Enter The Enclosures" required="required"><br>				
			 					    </div>
			 				     </div>
							      <input class="btn btn-primary" type="submit" value="Save" name="enclosureSave" />
									<select name="enc" style="width: 220px" onChange="showUser(this.value, this.name)">
										<option>--Activity--</option>
										<?php 
											include('DBConnect.php');
											$userId = $_SESSION['username'];
											$query = mysqli_query($con,"SELECT * from enclosures WHERE User_Id = '$userId'");
											while($row = mysqli_fetch_assoc($query)){
										?>		<option><?php echo $row['Enclosure']; ?></option>
										<?php } ?>
									</select>
									<input type="submit" class="btn btn-primary"  value="Delete" name="enclosureDelete" />
		    					</form>
	         
		 				</div><!--End of contribution id -->
						
						
						</div><!--End of tab-content class -->
					</div>
			</div>
			<div class="col-sm-3">
					<div class="panel panel-primary"  class="quicklinks">
      		 			<div class="panel-heading">
         					<h3 class="panel-title"><i class=" icon-list">  QuickLinks</i></h3>
 	  			 		</div>
 	   					<div class="panel-body">
						 	<a href="general_Information.php"><i class="icon-hand-right" >  Profile</i></a><br><br>	
						 	<a href="academicActivity.php"><i class="icon-hand-right" > Academic Activity</i></a><br><br>	 
							<a href="teachingLearningActivitiesaddnew.php"><i class="icon-hand-right" >  Teaching Learning and Evalution Related Activities</i></a> <br><br>
							<a href="professionalDevelopmentActivity.php"><i class="icon-hand-right" >  Co-Curricular, Extension,Professional Development Related Activity</i></a><br><br>
							<a href="ppij.php"><i class="icon-hand-right" >  Research, publication And Academic Contribution</i></a><br><br>
   			 				<a href="API_Summary.php"><i class="icon-hand-right" >  API Summary</i></a><br><br>
							
  	  					</div>	
   		 			</div>
			</div>
			<div class="col-sm-1">
			</div>
		</div><!--end of row class -->
	</div><!--end of container class -->
  </div><!--end of Wrap id -->
<?php
 	include('footer.php');
 	include('jsLinks.php');
 ?>
    <!--JQuery Code For Form Validation -->
	<!-- <script>
		$(document).ready(function() {
 			$('#otherActivityForm').validate();
			$('#enclosureForm').validate();
		}); // end ready()
	</script>
	-->
	<script>
		function showUser(value, name)
		{
			if (value=="")
  			{
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
					if(name == "oth"){
        			    document.getElementById("oth").innerHTML=xmlhttp.responseText;	
					}
					if(name == "enc"){
						document.getElementById("enc").innerHTML=xmlhttp.responseText;
					}
    			}
  			}
			xmlhttp.open("GET","form_process/otherActivityShow.php?val="+value+"&name="+name,true);
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
