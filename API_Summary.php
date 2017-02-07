<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();
?>
<?php
//DBConnect.php include the code for Database connectivity
include('DBConnect.php');
?>


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
	if(isset($_SESSION['username']) and isset($_SESSION['pbasYear'])){
		echo '<div id="wrap">';
		include('header.php');
?>
<div class="container" style="background-color:#FFFFFF;">
	
	<div class="row" style=" margin-bottom:50px;">

	  <div class="col-sm-9">
	  <div style="box-shadow:5px 5px 5px 5px #888888; padding:3px 3px 3px 3px;" class="text-primary">
		<center><h4><b>Summary of API Score</b></h4></center>
	  </div>
	  <br>
		<div class="table-responsive">
			<table class="table table-hover" border="1">
				<tr>
					<th><center>S.No.</center> </th>
					<th ><center>Criteria</center> </th>
					<th><center>Last Academic Year</center> </th>
					<th><center>Total API Score for Assessement</center></th>
					<th><center>Annual Average API Score for Assessement</center></th>
				</tr>
				<tr align="center">
					<td>I</td>
					<td>Teaching Learning and Evaluation Related Activities</td>
					<td></td>
					<td><?php $muid=$_SESSION['username'];
					$year=$_SESSION['pbasYear'];
					
				  $get1 = mysqli_query($con, "select sum(Teach_LSTP_CTAPI) as value_sum  from Teach_LSTP where User_Id='".$muid."' and year='".$year."' ");
                  $row1 = mysqli_fetch_assoc($get1); 
                  $lstp1 = $row1['value_sum'];
				  

				  $get2 = mysqli_query($con, "select sum(Teach_LSTP_TLAPI) as value_sum  from Teach_LSTP where User_Id='".$muid."' and year='".$year."'");
                  $row2 = mysqli_fetch_assoc($get2); 
                  $lstp2 = $row2['value_sum'];
				  

				  $lstp=$lstp1+$lstp2;
				  

				  $get3 = mysqli_query($con, "select sum(Teach_TLM_API) as value_sum  from Teach_TLM where User_Id='".$muid."' and year='".$year."'");
                  $row3 = mysqli_fetch_assoc($get3); 
                  $tlm = $row3['value_sum'];
				  

				  $get4 = mysqli_query($con, "select sum(Teach_EDAP_API) as value_sum  from Teach_EDAP where User_Id='".$muid."' and year='".$year."'");
                  $row4 = mysqli_fetch_assoc($get4); 
                  $edap = $row4['value_sum'];
				  

				  $teachinglearning=$lstp+$tlm+$edap;
				  echo $teachinglearning; 
				  
				  
				  ?></td>
					<td></td>
	</tr>
	<tr align="center">
		<td>II</td>
		<td>Co-Curricular,Extension,Professional, Development Related Activities</td>
		<td></td>
		<td><?php 
			$get5 = mysqli_query($con, "select sum(Teach_ECFA_API) as value_sum  from Teach_ECFA where User_Id='".$muid."' and year='".$year."'");
            $row5 = mysqli_fetch_assoc($get5); 
            $ecfa = $row5['value_sum'];

            $get6 = mysqli_query($con, "select sum(Teach_CLMI_API) as value_sum  from Teach_CLMI where User_Id='".$muid."' and year='".$year."'");
            $row6 = mysqli_fetch_assoc($get6); 
            $clmi = $row6['value_sum'];

            $get7 = mysqli_query($con, "select sum(Teach_PDA_API) as value_sum  from Teach_PDA where User_Id='".$muid."' and year='".$year."'");
            $row7 = mysqli_fetch_assoc($get7); 
            $pda = $row7['value_sum'];

            $CoCurricular=$ecfa+$clmi+$pda;
            echo $CoCurricular;
            

		?></td>
		<td></td>
	</tr>
	<tr align="center">
		<td></td>
		<td>Total I+II</td>
		<td></td>
		<td ><?php 

		$sum=$teachinglearning+$CoCurricular;
		echo $sum;
		

		?></td>
		<td></td>
	</tr>
	<tr align="center">
		<td>III</td>
		<td>Research Publication and Academic Contribution</td>
		<td></td>
		<td><?php 

		$get8 = mysqli_query($con, "select sum(Teach_PPIJ_API) as value_sum  from Teach_PPIJ where User_Id='".$muid."' and year='".$year."'");
        $row8 = mysqli_fetch_assoc($get8); 
        $ppij = $row8['value_sum'];	

        $get9 = mysqli_query($con, "select sum(Teach_APB_API) as value_sum  from Teach_APB where User_Id='".$muid."' and year='".$year."'");
        $row9 = mysqli_fetch_assoc($get9); 
        $apb = $row9['value_sum'];	

        $get10 = mysqli_query($con, "select sum(Teach_FCP_API) as value_sum  from Teach_FCP where User_Id='".$muid."' and year='".$year."'");
        $row10 = mysqli_fetch_assoc($get10); 
        $fcp = $row10['value_sum'];	

        $get11 = mysqli_query($con, "select sum(Teach_BPE_API) as value_sum  from Teach_BPE where User_Id='".$muid."' and year='".$year."'");
        $row11 = mysqli_fetch_assoc($get11); 
        $bpe= $row11['value_sum'];	

        $get12 = mysqli_query($con, "select sum(Teach_OPC_API) as value_sum  from Teach_OPC where User_Id='".$muid."' and year='".$year."'");
        $row12 = mysqli_fetch_assoc($get12); 
        $opc = $row12['value_sum'];	

        $get13 = mysqli_query($con, "select sum(Teach_CPC_API) as value_sum  from Teach_CPC where User_Id='".$muid."' and year='".$year."'");
        $row13 = mysqli_fetch_assoc($get13); 
        $cpc = $row13['value_sum'];	

        $get14 = mysqli_query($con, "select sum(Teach_RG_API) as value_sum  from Teach_RG where User_Id='".$muid."' and year='".$year."'");
        $row14 = mysqli_fetch_assoc($get14); 
        $rg = $row14['value_sum'];	

        $get15 = mysqli_query($con, "select sum(Teach_FDP_API) as value_sum  from Teach_FDP where User_Id='".$muid."' and year='".$year."'");
        $row15 = mysqli_fetch_assoc($get15); 
        $fdp = $row15['value_sum'];	

        $get16 = mysqli_query($con, "select sum(Teach_PPC_API) as value_sum  from Teach_PPC where User_Id='".$muid."' and year='".$year."'");
        $row16 = mysqli_fetch_assoc($get16); 
        $ppc = $row16['value_sum'];	

        $get17 = mysqli_query($con, "select sum(Teach_ILC_API) as value_sum  from Teach_ILC where User_Id='".$muid."' and year='".$year."'");
        $row17 = mysqli_fetch_assoc($get17); 
        $ilc = $row17['value_sum'];	

        $research=$ppij+$apb+$fcp+$bpe+$opc+$cpc+$rg+$fdp+$ppc+$ilc;
        echo $research;
        

		?></td>
		<td></td>
	</tr>
</table>
       </div> <!--table-responsive-->
	   </div><!--End of col-sm-9 class -->
	        <div class="col-sm-3">
	 			<div class="panel panel-primary">
      		 		<div class="panel-heading">
         				<h3 class="panel-title">QuickLinks</h3>
 	  			 	</div>
 	   				<div class="panel-body">
						<a href="general_Information.php">General Category</a><br><br>
						 <a href="academicActivity.php">Academic Activity </a><br><br>		 
						<a href="teachingLearningActivities.php">Teaching Learning and Evalution Related Activities</a> <br><br>
						<a href="professionalDevelopmentActivity.php">Co-Curricular, Extension,Professional Development Related Activity</a><br><br>
   			 			<a href="ppij.php">Research, publication And Academic Contribution</a><br><br>
						<a href="otherInfo.php">Other Relevent Information<br> And Closures</a><br><br>
  	  				</div>	
   		 		</div>
	  		</div>
	   </div>
	</div>
</div>
<?php
	      	include('footer.php');
	        include('jsLinks.php');
		  }
		  else{
		     header('location:index.php');
	      }
     ?>
</body>


</html>

