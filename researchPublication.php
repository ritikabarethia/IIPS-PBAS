<?php
	session_start();
	include('DBConnect.php');
	include('form_process/rpacProcess.php');
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
	include('jsLinks.php');
?>
<style type="text/css">
    /* Custom Styles */
    ul.nav-tabs{
        width: 230px;
        margin-top: 20px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.067);
    }
    ul.nav-tabs li a{
        padding: 8px 16px;
    }
    ul.nav-tabs li.active a, ul.nav-tabs li.active a:hover{
        color: #fff;
        background: #0088cc;
        border: 1px solid #0088cc;
    }
    .nav-tabs.affix{
        top: 30px; /* Set the top position of pinned element */
    }
</style>
</head>
<body data-spy="scroll" data-target="#myNav">
<?php
	if(isset($_SESSION['username'])){
		include('header.php');
   ?>
<div class="container">
	
	<center><h3><b>Research Publication And Academic Contribution</b></h3></center>
    <div class="row-fluid">
        <div class="col-md-3" id="myNav">
            <ul class="nav nav-tabs nav-stacked affix" style="box-shadow:5px 5px 5px #888888" data-spy="affix" data-offset-top="190">
                <li class="active"><a href="#papers">Published Papers</a></li>
                <li><a href="#articles">Articles/Chapters</a></li>
                <li><a href="#fullPapers">Full Papers in Conference</a></li>
                <li><a href="#books">Books Published</a></li>
                <li><a href="#ongoing">Ongoing Projects</a></li>
				<li><a href="#completed">Completed Projects</a></li>
				<li><a href="#research">Research Guidance</a></li>
				<li><a href="#training">Training, Teaching & Learning</a></li>
				<li><a href="#papersPresented">Papers Presented</a></li>
				<li><a href="#invitedLectures">Invited Lectures</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <!--Published Papers Panel started -->
			<div class="panel panel-primary">
				<div class="panel-heading">
				  <h3  id="papers" class="panel-title">Published Papers in Journals</h3>
				</div>
				<div class="panel-body">
					  <form role="form" method="post" name="ppij" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<div id="ppij"><br />
							<div class="form-group">
								<label>Title With Page Numbers</label> 
								  <input type="text" class="form-control" name="PPIJ_TNO">
								<label>Journal</label>
								  <input type="text" class="form-control" name="PPIJ_Journal"/>
								<label>ISSN / ISBN No. </label>
								  <input type="text" class="form-control" name="PPIJ_ISBN"/>
								<label> Whether peer reviewed. IMpact factor, if any</label>
								  <input type="text" class="form-control" name="PPIJ_PR"/>
								<label>No. of Co-authors</label>
								  <input type="text" class="form-control" name="PPIJ_NCA"/>
								<label>Whether you are the main Author</label>
								  <input type="radio" value="Yes" name="PPIJ_YN" >Yes <input type="radio" value="No" name="PPIJ_YN">NO<br />
								<label>API Score</label>
								  <input type="text" class="form-control" name="PPIJ_API"/><br />
							</div>
						</div>
						<input class="btn btn-primary" type="submit" value="Save" name="ppij_save" />
						<select name="pp" onChange="showUser(this.value, this.name)">
							<option>--Title--</option>
							<?php 
								include('DBConnect.php');
								$query = mysqli_query($con,"SELECT * from teach_ppij");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_PPIJ_TNO']; ?></option>
							<?php } ?>
						</select>
						<input type="submit" class="btn btn-primary"  value="Delete" name="ppij_delete" />
						<input type="reset" class="btn btn-primary" value="Reset" name="reset" />
					</form>
				</div>
			</div>				
			
			<!--Articles/Chapters Section Started --><br>
			<div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="articles" class="panel-title">Articles / Chapters published in Books</h3>
				</div>
				<div class="panel-body">
				  <form role="form" method="post" name="apb" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
						<div id="apb">
							<div class="form-group">
								<label>Title With Page Numbers </label>
								  <input type="text" class="form-control" name="APB_TNO" />
								<label>Book Title, Editor And Publisher </label>
								  <input type="text" class="form-control" name="APB_BEP"/>
								<label>ISSN / ISBN No.</label> 
								   <input type="text" class="form-control" name="APB_ISSN"/>
								<label>Whether peer reviewed. IMpact factor, if any</label>
								  <input type="text" class="form-control" name="APB_WPR"/>
								<label>No. of Co-authors </label>
								   <input type="text" class="form-control" name="APB_NOC"/>
								<label>Whether you are the main Author</label> 
								  <input type="radio" name="ACPB_Yes" />Yes 
								  <input type="radio" name="ACPB_No" />No<br />
								<label>API Score</label> <input type="text" class="form-control" name="APB_API"/><br />
								
							</div>
						</div>
						<input class="btn btn-md btn-primary" type="submit" value="Send" name="acpb_save" />
						<select name="apb" onChange="showUser(this.value, this.name)">
						<option value="">Select Article:</option>
						 <?php
							 include('DBConnect.php');
							$sql2 = mysqli_query($con,"Select * from teach_apb");
							while($row = mysqli_fetch_assoc($sql2)){ ?>
							<option><?php echo $row['Teach_APB_TNO']; ?></option>		
						<?php } ?>
						</select>
				   </form>
				</div>
			</div>
			
		<!--"Full Papers in Conference" form started --><br>
			<div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="fullPapers" class="panel-title">Full Papers in Conference Proceedings</h3>
				</div>
				<div class="panel-body">
				  <form method="post" name="fpcp" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					  <div id="fullPapersConf">
						<label> Title With Page Numbers</label>
							<input class="form-control" type="text" name="FCP_TNO"> 
						<label>Details of Conference publications</label>  
							<input class="form-control" type="text" name="FCP_BEP" /> 
						<label>ISSN / ISBN No. </label>
							<input class="form-control" type="text" name="FCP_ISSN" /> 
						<label>No. of Co-authors </label>
							<input class="form-control" type="text" name="FCP_NOC" /> 
						 <label> Whether you are the main Author</label>
							<input type="radio" name="FPCP_Yes" />Yes <input type="radio" name="FPCP_No" />No<br /> 
						<label>API Score </label>
							<input class="form-control" type="text" name="FCP_API" /> 
					  </div>
						<br><input class="btn btn-md btn-primary" type="submit" value="Save" name="fpcp_save" />
						<select name="fp">
							<option>--Title--</option>
							<?php 
								$sql3 = mysqli_query($con,"SELECT * from teach_fcp");
								while($row = mysqli_fetch_assoc($sql3)){
									?><option><?php echo $row['Teach_FCP_TNO']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="button" value="Delete" /> 
					</form> 
				</div>
			</div>
			
			<!--"Books Published" Panel started --><br>
			<div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="books" class="panel-title">Books Published as Single Author or as a Editor</h3>
				</div>
				<div class="panel-body">
				  <form id="booksForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					 <div id="bookPublished">
						<label>Title With Page Numbers</label>
						  <input class="form-control" type="text" name="BPE_TPN"> 
						<label>Type of Book And Authorship</label>
						  <input class="form-control" type="text" name="BPE_TBA"> 
						<label>Publisher And ISSN / ISBN No</label>
						  <input class="form-control" type="text" name="BPE_PISSN" /> 
						<label> Whether Peer Reviewed</label>
						 <input class="form-control" type="text" name="PE_WPR" /> 
						<label>No. of Co-authors</label>
						  <input class="form-control" type="text" name="BPE_NOC" /> 
					   <label>Whether you are the main Author</label>
						 <input type="radio" name="BPSA_Yes" />Yes <input type="radio" name="BPSA_No"/>No<br /> 
					   <label>API Score</label>  <input class="form-control" type="text" name="BPE_API" /> 
					 </div><br />
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="bps_save" />
						<select name="bp">
							<option>--Title--</option>
							<?php 
								$sql4 = mysqli_query($con,"SELECT * from teach_bpe");
								while($row = mysqli_fetch_assoc($sql4)){
							?><option><?php echo $row['Teach_BPE_TPN']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="submit" value="Delete" />
				  </form>
				</div>
			 </div>
			 
			 <!--"Ongoing Projects" Panel started --><br>
			 <div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="ongoing" class="panel-title">Ongoing Projects / Consultancies</h3>
				</div>
				<div class="panel-body">
				  <form id="ongoingForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					  <div id="ongoingFields">
							<label>Title</label>
							  <input class="form-control" type="text" name="OPC_Title"> 
							<label>Agency</label>
							  <input class="form-control" type="text" name="OPC_Agency" /> 
							<label>Period</label>
							  <input class="form-control" type="text" name="OPC_Period" /> 
							<label>Grant / Amount Mobilized (Rs. Lakh)</label>
							  <input class="form-control" type="text" name="OPC_GAM" /> 
						   <label>API Score</label>  <input class="form-control" type="text" name="OPC_API" />
					  </div> <br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="opc_save" />
							<select name="op">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_opc");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_OPC_Title']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="opc_delete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
				  </form>
				</div>
			 </div>
			 
			  <!--"Completed Projects" Panel started --><br>
			 <div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="completed" class="panel-title">Completed Projects / Consultancies</h3>
				</div>
				<div class="panel-body">
				  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   <div id="completedFields">
						 <label>Title</label>
						   <input class="form-control" type="text" name="CPC_Title"> 
						 <label>Agency</label>
						   <input class="form-control" type="text" name="CPC_Agency" /> 
						 <label>Period</label>
						  <input class="form-control" type="text" name="CPC_Period" /> 
						 <label>Grant / Amount Mobilized (Rs. Lakh)</label>
						   <input class="form-control" type="text" name="CPC_GAM" /> 
						 <label>Whether policy document / Patent as outcome</label>
						   <input class="form-control" type="text" name="CPC_WPD" /> 
						 <label>API Score</label>
							 <input class="form-control" type="text" name="CPC_API" />
					   </div> 
						 <br />
						<input class="btn btn-md btn-primary" type="submit" value="Save" name="cpc_save" />
						<select name="cp">
							<option>--Title--</option>
							<?php 
								include('DBConnect.php');
								$query = mysqli_query($con,"SELECT * from teach_cpc");
								while($row = mysqli_fetch_assoc($query)){
							?><option><?php echo $row['Teach_CPC_Title']; ?></option>
							<?php } ?>
						</select>
						<input class="btn btn-md btn-primary" type="submit" value="Delete" name="cpc_delete" />
						<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
				  </form>
				</div>
			 </div>
			 
			 <!--"Research Guidance" Panel started --><br>
			 <div class="panel panel-primary">
				<div id="research" class="panel-heading">
				  <h3 class="panel-title">Research Guidance</h3>
				</div>
				<div class="panel-body">
				  <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   <div id="GuidanceFields">
						   <label>Number Enrolled</label>
							<input class="form-control" type="text" name="RG_NE"> 
						   <label>Thesis Submitted</label>
							<input class="form-control" type="text" name="RG_TS" /> 
						   <label>Degree Awarded</label>  
							 <input class="form-control" type="text" name="RG_DA" />  
						  <label>API Score </label> 
							 <input class="form-control" type="text" name="RG_API" />
					  </div> 
						 <br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="rg_save" />
							<select name="rg">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_rg");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_RG_NE']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="guidanceDelete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="guidanceReset" /> 
				  </form>
				</div>
			 </div>
			 
			 <!--"Training Courses , Teaching-Learning" Panel started --><br>
			 <div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="training" class="panel-title">Training Courses , Teaching-Learning-Evaluation Technology, Faculty Development Programmes</h3>
				</div>
				<div class="panel-body">
				  <form id="trainingForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   <div id="trainingFields">
							<label>Programme </label>
							 <input class="form-control" type="text" name="FDP_Programme"> 
						   <label> Duration </label>
							<input class="form-control" type="text" name="FDP_Duration" /> 
							<label>Organized By </label>
							 <input class="form-control" type="text" name="FDP_Organized" />  
							<label>API Score </label>
							 <input class="form-control" type="text" name="FDP_API" /> 
					   </div>
						 <br />
							<input  class="btn btn-md btn-primary" type="submit" value="Save" name="fdp_save" />
							<select name="pp">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_fdp");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_FDP_Programme']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="trainingDelete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="trainingReset" /> 
				  </form>
				</div>
			 </div>
			 
			 <!--"Papers Presented in Conferences" Panel started --><br>
			 <div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="papersPresented" class="panel-title">Papers Presented in Conferences, Seminars, Workshops, Symposia</h3>
				</div>
				<div class="panel-body">
				  <form id="presentedForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   <div id="presentedFields">
						   <label>Title of the Paper Presented</label>
							<input class="form-control"t type="text" name="PPC_TPP">  
						   <label>Title Conference / Seminar etc.</label> 
							 <input class="form-control" type="text" name="PPC_TCS" />  
						   <label>Date (s) of the Event </label>
							 <input class="form-control" type="text" name="PPC_DOE" />  
						   <label>Organized By</label>
							 <input class="form-control" type="text" name="PPC_Organized" />  
						   <label>Whether International / National / State</label>
							<input class="form-control" type="text" name="PPC_WINS" />   
						   <label>API Score</label>
							 <input class="form-control" type="text" name="PPC_API" /> 
						</div><br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="ppc_save" />
							<select name="pc">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ppc");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_PPC_TPP']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="presentedDelete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
					</form>
				</div>
			 </div>
			 
			 <!--"Invited Lectures and Chairmanship" Panel started --><br>
			 <div class="panel panel-primary">
				<div class="panel-heading">
				  <h3 id="invitedLectures" class="panel-title">Invited Lectures and Chairmanship at National or International Conference/ Seminar</h3>
				</div>
				<div class="panel-body">
				  <form id="invitedForm" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
					   <div id="invitedFields">
						   <label>Title of the Lecture / Academic Session</label>
							<input class="form-control" type="text" name="ILC_TOL"> 
						   <label>Title Conference / Seminar etc.</label>
							<input class="form-control" type="text" name="ILC_TCS" /> 
							<label>Date (s) of the Event</label>
							 <input class="form-control" type="text" name="ILC_DOE" /> 
						   <label>Organized By</label>
							 <input class="form-control" type="text" name="ILC_Organized" /> 
						  <label> Whether International / National / State</label>
							<input class="form-control" type="text" name="ILC_WINS" /> 
						   <label>API Score</label>
							 <input class="form-control" type="text" name="ILC_API" /> 
						</div> <br />
							<input class="btn btn-md btn-primary" type="submit" value="Save" name="ilc_save" />
							<select name="il">
								<option>--Title--</option>
								<?php 
									include('DBConnect.php');
									$query = mysqli_query($con,"SELECT * from teach_ilc");
									while($row = mysqli_fetch_assoc($query)){
								?><option><?php echo $row['Teach_ILC_TOL']; ?></option>
								<?php } ?>
							</select>
							<input class="btn btn-md btn-primary" type="submit" value="Delete" name="invitedDelete" />
							<input class="btn btn-md btn-primary" type="reset" value="Reset" name="reset" /> 
				   </form>
				</div>
			 </div>
        </div><!--End Of col-md-6 --> 
		
		<!--end of middle content section -->
			<div class="col-sm-3">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">QuickLinks</h3>
					</div>
					<div class="panel-body">
						<a href="general_Information.php">General Category</a><br><br>
						 <a href="academicActivity.php">Academic Activity </a><br><br>		 
						<a href="teachingLearning.php">Teaching Learing and Evalution Related Activities</a> <br><br>
						<a href="curricularActivities.php">Co-Curricular, Extension,Professional Development Related Activity</a><br><br>
						<a href="API_Summary.php">API Summary</a><br><br>
						<a href="otherInfo.php">Other Relevent Information<br> And Closures</a><br><br>
					</div>	
				</div><!--end of Panel Code -->
			</div>
			<!--end of Quicklinks Section - col-md-3 -->
    </div><!--End Of row-fluid Class --> 
</div>
<!--End Of container --> 
<?php
	      include('jsLinks.php');
		  }
		  else{
		     header('location:index.php');
	      }
     ?>

	 
	 <!--JavaScript code for dynamically showing records using AJAX-->
	 <script>
		function showUser(value, name)
		{
		if (value=="")
		  {
		  document.getElementById("apb").innerHTML="";
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
				if(name == 'apb'){
					document.getElementById("apb").innerHTML=xmlhttp.responseText;
				}
				if(name == 'pp'){
					document.getElementById("ppij").innerHTML=xmlhttp.responseText;
				}	
			}
		  }
		xmlhttp.open("GET","form_process/rpac_show.php?val="+value+"&name="+name,true);
		xmlhttp.send();
		}
	</script>
</body>
</html>                                		