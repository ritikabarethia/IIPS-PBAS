<!-- Called from main_menu.php,  -->
<!-- Imported the 'ti.php' for template inheritance -->

<!-- This template uses two column design. One for side menu and another for the content area -->
<!--  -->
<!--  -->
<!--  -->

<!-- List of blocks existing in this page -->
	<!-- 	'page_title'  		- for title of the page -->
	<!-- 	'page_heading'  	- for heading of the page below menu 	-->
	<!-- 	'style' 			- for the styles in the page 			-->
	<!-- 	'header' 			- for the header of the page 			-->
	<!-- 	'content'		 	- for the contents of the page 			-->
	<!-- 	'script' 			- for the scripts of the particular page-->


<!--  -->
<!--  -->
<!--  -->

<?php require_once 'ti.php' ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
        <title>
        
        <?php startblock('page_title'); ?>
		<?php endblock(); ?>
		
		</title>

		<!-- Style (CSS files) block Start -->
		<?php 
		startblock('style');
		endblock(); 
		
		?>
	       		
	        
			<?php
			 include('cssLinks.php');
			?>
		
		<!-- Style block End -->
</head>
<body>
	<!-- Header block Start -->
	<?php startblock('header') ?>
		<?php
			// inlclude header here
			//include 'header.php';
			
			include('readTextFilesScript.php');
		?>
	<?php endblock(); ?>
	<!-- Header block End -->
	<div id="wrap">
		 <div class="container" style="background-color:#FFFFFF;">
			<h4><b><?php startblock('page_heading'); 
					endblock();
				 ?></b></h4>
			
			<br>
            			   	
			<!-- Content block Start -->
			<?php startblock('content') ?>
			
			<?php endblock(); ?>
			<!-- Content block End -->
				
            
			 
		</div><!--.container class ended -->	
   </div>	<!-- End of wrap -->
	
	<?php
	        include('footer.php');
			include('jsLinks.php');
		?>
		<!-- Include Scripts-->
		<script type="text/javascript" src="js/jQuery-hashchange.js"></script>       

	<!-- Script (JS files) block Start -->
	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46860115-2', 'redirectme.net');
  ga('send', 'pageview');

</script>
	<?php startblock('script'); ?>
		
	<?php endblock(); ?>
	<!-- Script block End -->


</body>

</html>
