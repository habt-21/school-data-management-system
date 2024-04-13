<?php
	if($_SERVER['REQUEST_METHOD'] == 'POST'){


		$lrn=$_POST['lrn'];
		$ln=$_POST['lname'];
		$fn=$_POST['fname'];
		$mn=$_POST['mname'];
		$gender=$_POST['gender'];
		$bp=$_POST['bp'];
		$dob=$_POST['dob'];
		$pob=$_POST['pob'];
		$pg=$_POST['pg'];
		$pga=$_POST['pg_add'];
		$icc=$_POST['icc'];
		$sy=$_POST['sy'];
		$tny=$_POST['tny'];
		$ave=$_POST['ave'];
		$prog = $_POST['prog'];
		$user = $_SESSION['ID'];
include 'db.php';

$search_query = mysqli_query($conn, "SELECT * FROM staff_info WHERE STAFF_ID = '$lrn'");
		$num_row = mysqli_num_rows($search_query);
		if($num_row >= 1){
			"<script>
			alert('LRN is not available.');
			 location.replace(document.referrer);
			</script>";
		}else{
			$sql = "INSERT INTO staff_info
			 (
				STAFF_ID,
				FIRST_NAME,
				MIDDLE_NAME,
				LAST_NAME,
				BIRTH_DATE,
				QUALIFICATION,
				GENDER,
				ADDRESS,
				BIRTH_PLACE,
				CONTRAT_TYPE,
				SALARY,
				HIRED_DATE,				
				PHONE,
				EMAIL
			   )
		VALUES (
			
				'$lrn',
				'$ln',
				'$fn',
				'$mn',
				'$dob',
				'$bp',
				'$gender',				
				'$pob',
				'$pg',
				'$pga',				
				'$icc',
				'$sy',
				'$tny',
				'$ave',			

		)";
		
$search_query = mysqli_query($conn, "SELECT * FROM staff_info WHERE STAFF_ID = '$lrn'");
$num_row = mysqli_num_rows($search_query);
		if (mysqli_query($conn, $sql)) {

			echo "<div class='erlert-success'><center><h4>" . "New Staff Successfully Added." . "</h4></center></div>";

		} else {
		    "<script>
			alert('Failed to Submit.');
			</script>";
		}


		}
	
	}
mysqli_close($conn);

  ?>