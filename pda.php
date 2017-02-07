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
		if(isset($_SESSION['username']) and $_SESSION['pbasYear']){
			echo '<div id="wrap">';
			include('header.php');
     ?>
	 <div class="container" style="background-color:#FFFFFF;">
	 
		<div class="text-primary shadows">
			<h4 align="center"><b>Co-Curricular, Extension,Professional Development Related Activity <span class="text-danger"><?php echo $_SESSION['pbasYear']; ?></span></b></h4>
	 	</div> <br>
		
	  	<div class="row">
		   	<div class="col-md-4" id="myNav">
				<div class="panel panel-primary" >
					<ul class="nav nav-tabs nav-pills nav-stacked"  data-offset-top="190" style="width:100%;">
						<li><a href="professionalDevelopmentActivity.php">Extension, Co-curricular & Field based activities<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
						<li><a href="clmi.php">Contribution to Corporate Life and Management of the Institution<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
						<li class="active"><a href="pda.php">Professional Development Activities<div class="pull-right"><i class="icon-chevron-right" ></i></div></a></li>
					</ul>
				</div> 	
			</div>
				
		  	<div class="col-md-8">						
				<div class="panel panel-primary" style="padding:3px 3px 3px 3px;">
					<div class="panel-heading">   			  
						 <h4 align="center"><b>Professional Development Activities</b></h4>
					</div><br>
					<form role="form" name="development" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" id="developmentForm">
						<input class="btn btn-primary" type="submit" value="Save" name="developmentSave" />
						<select name="dev" style="width:200px" onChange="showUser(this.value, this.name)">
							<option>--Activity--</option>
							<?php 
								include('DBConnect.php');
								$userId = $_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$query = mysqli_query($con,"SELECT * from teach_pda WHERE User_Id = '$userId' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?>		<option><?php echo $row['Teach_PDA_TOA']; ?></option>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="developmentDelete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" onClick="clear()" />
						<div class="form-group">
						  <div id="dev"><br/>
							<label>Type of Activity</label> 
								<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="typeOfActivity" title="Please Enter Type of Activity" required="required"/>
							<br><label>Yearly/Semester wise responsibility</label>
								<input type="text" class="form-control required" onkeypress="return onlyAmpersand(event)" name="responsibility" title="Please Enter The Responsibility" required="required"/>
							<br><label>API Score</label>
								<input type="text" id="pd" class="form-control required" onkeypress="return onlyAmpersand(event)" name="devApi" title="Please Enter API Score" required="required"/><br>
						 </div><!--End dev Id for Ajax -->
						</div>
					   <input class="btn btn-primary" type="submit" value="Save" name="developmentSave" />
						<select name="dev" style="width:200px" onChange="showUser(this.value, this.name)">
							<option>--Activity--</option>
							<?php 
								include('DBConnect.php');
								$userId = $_SESSION['username'];
								$year=$_SESSION['pbasYear'];
								$query = mysqli_query($con,"SELECT * from teach_pda WHERE User_Id = '$userId' and year='$year'");
								while($row = mysqli_fetch_assoc($query)){
							?>		<option><?php echo $row['Teach_PDA_TOA']; ?></option>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="developmentDelete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset"/>
					</form>
	         	</div><!--end of panel-->					
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
 			//$('#curricularForm').validate();
			//$('#contributionForm').validate();
			//$('#developmentForm').validate();
			
			//javascript code for clearing inputbox
			$('form').on('reset', function (evt) {
				evt.preventDefault();
				$(this).find('input, select, textarea').each(function () {
					if ($(this).is('input[type="radio"], input[type="checkbox"]')) {
						if ($(this).is(':checked') !== $(this)[0].defaultChecked) {
							$(this).val($(this)[0].defaultChecked);
							$(this).trigger('click');
							$(this).trigger('change');
						}
					} else {
						if ($(this).val() !== $(this)[0].defaultValue) {
							$(this).val($(this)[0].defaultValue);
							$(this).change();
						}
					}
				});
			});//End for clearing inputbox code
		}); // end ready()


	</script>
	
	<script>
		function clearInput(){
				document.getElementById("pd").value="";
		}	
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
