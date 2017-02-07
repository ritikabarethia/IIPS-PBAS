
<?php include 'base_template_2_column.php' ?>
	<?php startblock('page_title'); ?>
	Developer Center | IIPS
	<?php endblock(); ?>

      
		
	<?php startblock('style'); ?>

	<style type="text/css">
		.dcMembers{
			background-color:white;
			padding: 10px 10px 10px 10px;
			margin-bottom: 20px;
		}

	</style>

	<?php endblock(); ?>

	<?php startblock('page_heading'); ?>
        Development Center
	<?php endblock(); ?>
		
				
				
					<?php startblock('sidemenu'); ?>

						<ul class="nav side-tabs nav-pills">
							<li class="active btn-block"><a class="icon-chevron-sign-right" href="#tab1"> About DC</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab2"> Current Projects</a></li>
			                <!-- <li ><a class="icon-chevron-sign-right" href="#tab3"> Open Projects</a></li> -->
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab3"> Open Source Initiatives</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab4"> Past Projects</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab5"> Members</a></li>
			                <li class="btn-block"><a class="icon-chevron-sign-right" href="#tab6"> Entrance</a></li>
			                
						</ul>

	                <?php endblock() ; ?>				

	

					<?php startblock('content'); ?>

						<div id="tab1"  class="tab-content active">
	                      <?php 
							$aboutDC ="textFiles/DC/about_dc.txt";  
							readTextFiles($aboutDC);
					     ?>
	                   </div>
 						
	                   <div id="tab2"  class="tab-content hide">
	                      <?php 
							$currentProjects ="textFiles/DC/current_projects.txt";  
							readTextFiles($currentProjects);
					     ?>
	                   </div>

	                   <!-- <div id="tab3"  class="tab-content hide">
	                      <?php 
							$openInitiatives /*="textFiles/DC/open_projects.txt"*/;  
							readTextFiles($openInitiatives);
					     ?>
	                   </div> -->

	                   <div id="tab3"  class="tab-content hide">
	                      <?php 
							$openProjects ="textFiles/DC/open_initiatives.txt";  
							readTextFiles($openProjects);
					     ?>
	                   </div>

	                   <div id="tab4"  class="tab-content hide">
	                      <?php 
							$pastProjects ="textFiles/DC/past_projects.txt";  
							readTextFiles($pastProjects);
					     ?>
	                   </div>

	                   <div id="tab5"  class="tab-content hide">
	                      <?php 
							$members ="textFiles/DC/members.txt";  
							readTextFiles($members);
					     ?>
	                   </div>

	                   <div id="tab6"  class="tab-content hide">
	                      <?php 
							$entrance ="textFiles/DC/entrance.txt";  
							readTextFiles($entrance);
					     ?>
	                   </div>


	                <?php endblock(); ?>
					
				

			
	

