<?php
	$db = new MySqli('localhost', 'root', '', 'pbas_db');
?>

<?php
	$action = (!empty($_POST['action'])) ? $_POST['action'] : ''; //action to be used(insert, delete, update, fetch)
	$lstparray = (!empty($_POST['lstparray'])) ? $_POST['lstparray'] : ''; //an array of the student details

	//check if the student is not an empty string
	//and assigns a value to $name and $age if its not empty
	if(!empty($lstparray)){
	  $course = $lstparray['course'];
	  $level = $lstparray['level']; 
	  $mot = $lstparray['mot'];   
	  $noc = $lstparray['noc']; 
	  $practicals = $lstparray['practicals']; 
	  $ctdr = $lstparray['ctdr'];       
	  $ctapi = $lstparray['ctapi'];   
	  $tlapi = $lstparray['tlapi'];   
	}

	switch($action){
		default:
		  //only select student records which aren't deleted
		  $students = $db->query("SELECT * FROM teach_lstp");
		  $students_r = array();
		  
		  while($row = $students->fetch_array()){

			  //default student data
			  $course = $row['Teach_LSTP_Course'];
			  $level = $row['Teach_LSTP_Level'];
			  $mot = $row['Teach_LSTP_MOT'];
			  $noca = $row['Teach_LSTP_NOCA'];
			  $nocc = $row['Teach_LSTP_NOCC'];
			  $practicals = $row['Teach_LSTP_Practicals'];
			  $ctdr = $row['Teach_LSTP_CTDR'];
			  $ctapi = $row['Teach_LSTP_CTAPI'];
			  $tlapi = $row['Teach_LSTP_TLAPI'];

			  //build the array that will store all the student records
			  $students_r[] = array(
				  'id' => $id, 'name' => $name, 'age' => $age,
				  'nameUpdate' => $name_update, 'ageUpdate' => $age_update,
				  );
		  }

		  echo json_encode($students_r); //convert the array to JSON string
		  break;
		
		case 'insert':
		  $db->query("INSERT INTO teach_lstp SET Teach_LSTP_Course = '$course', Teach_LSTP_Level = '$level', Teach_LSTP_MOT='$mot', Teach_LSTP_NOCA='$noca' , Teach_LSTP_NOCC='$nocc' , Teach_LSTP_Practicals='$practicals' , Teach_LSTP_CTDR='$ctdr' , Teach_LSTP_CTAPI='$ctapi' , Teach_LSTP_TLAPI='$tlapi' ");
		  echo $db->insert_id; //last insert id
		  break;
		  
		case 'update':
		  $id = $student['id'];
		  $db->query("UPDATE students SET name = '$name', age = '$age' WHERE id = '$id'");
		  break;
		
		case 'delete':
		  $id = $_POST['student_id'];
		  $db->query("UPDATE students SET status = '0' WHERE id = '$id'");
		  break;


	}
?>