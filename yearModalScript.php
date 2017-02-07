<?php
	session_start();	
	//Condition or checking if year is submitted
	if(isset($_POST['yearButton'])){
		$pbasYear = $_POST['pbasYear'];

		$_SESSION['pbasYear'] = $pbasYear;
		header('location: Home.php');
	}
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
		include('yearModal.php');
		include('jsLinks.php');
	 ?>
	<script type="text/javascript">
				$(window).load(function(){
					$('#yearModal').modal('show');	
				});
				
  
	</script>

</body>
</html>