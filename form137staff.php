&nbsp<!DOCTYPE html>
<html>
<?php 
include 'db.php';
session_start();
$user = $_SESSION['ID'];


	$id = $_GET['id'];

	$query = mysqli_query($conn,"SELECT * FROM student_info2 where STUDENT_ID = '$id' ");
	$row = mysqli_fetch_assoc($query);
	$student = $row['FIRSTNAME'].' '. $row['LASTNAME'];

	mysqli_query($conn, "INSERT into history_log (transaction,user_id,date_added) 
		VALUES ('printed $student permanent record','$user',NOW() )");



?>
<head>
    <link rel="icon" href="images/logo.jpg">

    <title>Staff Data System</title>

     <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/styles.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="asset/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="asset/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    
    <script src="datatables/jquery.dataTables.js"></script>
    <script src="datatables/dataTables.bootstrap.js"></script>
        <link href="datatables/dataTables.bootstrap.css" rel="stylesheet">

    <script src="assets/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js" type="text/javascript"></script>

    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script src="assets/js/jq.js"></script>
	<style>
	@media print {  
		@page {
			size:8.5in 13in;
		}
		head{
			height:0px;
			display: none;
		}
		#head{
			display: none;
			height:0px;
		}
		#print{
		position:fixed;
		top:0px;
		margin-top:20px;
		margin-bottom:30px;
		margin-right:50px;
		margin-left:50px;
		}
		}
		#print{
		width:7.5in;
		}
		input {
    border: 0;
    outline: 0;
    background: transparent;
    border-bottom: 1px solid black;
}

.foo{
	font-family: "Bodoni MT", Didot, "Didot LT STD", "Hoefler Text", Garamond, "Times New Roman", serif;
	font-size: 24px;
	font-style: italic;
	font-variant: normal;
	font-weight: bold;
	line-height: 24px;
	}
	.p {
	font-family: "Segoe UI", Frutiger, "Frutiger Linotype", "Dejavu Sans", "Helvetica Neue", Arial, sans-serif;
	font-size: 14px;
	font-style: italic;
	font-variant: normal;
	font-weight: 550;
	line-height: 20px;
	 letter-spacing: 2px;
}
	</style>

</head> 
<body style="background-color:white"> 
<span id='returncode'></span>
<div class="col-md-2" id="head">
	<button class="btn btn-info" onclick="print()"><i class="glyphicon glyphicon-print"></i>PRINT</button>
	<a class="btn btn-info" onclick="window.close()">Cancel</a>
	
</div>
<center>
<div id='print'>
<div style="margin-left:.5in;margin-right:.5in;margin-top:.1in;margin-bottom:.1in;line-height:1mm;">

		<p><center><b>Jimma Preparatory School</b></center></p>

		  </div>
		  <div class="row">
		  <div class="col-md-12">
		  <center><p><b><h4>Staff Accompaniment Letter</h4></b></p></center>
		  </div>
          </div>
          <div class="row">
		  <div class="col-md-12">

		  <table style="line-height:5mm">
		<?php 
		include 'db.php';
		$id = $_GET['id'];
		$sql = mysqli_query($conn,"SELECT * from student_info2 where STUDENT_ID = '$id'");
		while($row = mysqli_fetch_assoc($sql)){
			$mid = $row['MIDDLENAME'];
		?>
			<tr>
				<td style="width:600px;font-size:12px">
					<label for="" style="">Name:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<b style="font-size:13px;text-transform: uppercase;"><?php echo $row['LASTNAME'].", " .  $row['FIRSTNAME']. " " .  substr("$mid",0,1) . "."; ?></b>
					<br>
					<label for="">Place of Birth:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<h style="font-size:12px"><?php echo $row['BIRTH_PLACE'] ?></h>
					
				</td>
				<td style="width:600px;font-size:12px">
				<label for="">Date of Leave The School:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<h style="font-size:12px"><?php echo date("F d,Y") ?></h>
					<br>
					<label for="">Town / City:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<h style="font-size:12px"><?php echo $row['ADDRESS'] ?></h>
				</td>
				
			</tr>

			
			</table> 
			<table>
			<tr>
			<td style="width:1000px;font-size:12px;align:left">
				
					<label for="">Position In School:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<h style="font-size:12px;text-transform: capitalize"><?php echo $row['PARENT_GUARDIAN'] ?></h>
				</td>
				<td style="width:1000px;font-size:12px;align:left">
				<label for="">Phone Number:&nbsp</label>
					<h style="font-size:12px;text-transform: capitalize"><?php echo $row['GEN_AVE'] ?></h>
			</td>
			</tr>

			</table>
			<table>
			
			<tr>
			<td style="width:1000px;font-size:12px;align:left">

				
					<label for="">Qualification:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
					<h style="font-size:12px;text-transform: capitalize"><?php echo $row['P_ADDRESS'] ?></h>
				
			</td>
			
			</tr>
			
			</table> 
			<table>
			<tr>

			<td style="width:800px;font-size:12px">

				
					<label for="">Contract Type:&nbsp</label>
					<h style="text-transform: capitalize"><?php echo $row['INT_COURSE_COMP'] ?></h>
				
			</td>
			
			
			
			
			</tr>
		</table>
		<?php } ?>
		  </div>
          </div>
         

          <p style="">
          <?php
		$sql1 = mysqli_query($conn,"SELECT * FROM student_year_info2 left join grade on student_year_info2.YEAR=grade.grade_id where STUDENT_ID = '$id'");
		$num1 = mysqli_num_rows($sql1);

		

		while($row1 = mysqli_fetch_assoc($sql1)){
		?>
		<table style="float:left;margin-left:5px;margin-bottom:20px;">
		<tr>
		<td>  
		<table>
			<tr style="width:100%">
			<td>
         
			<label style="font-size:12px">School:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
			</td>
			<td style="border-bottom:1px solid black;width:280px">
		<label style="font-size:12px"><?php echo $row1['SCHOOL'] ?> </label>
		</td>
		</tr>
		</table>
	
					
					
		
	
					
					
		<table>
		<tr style="width:100%">
		<td  style="width:200px">
		<label style="font-size:12px">Yr.& Sec:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		</td>
		<td >
		<label style="font-size:12px">Sch.Yr.:&nbsp&nbsp&nbsp&nbsp&nbsp</label>
		</td>
		</tr>
		</table>
		<table style="border-collapse:collapse">
		<tr>
		<td style="width:150px;border:1px solid black;font-size:12px;"><center><b>Subjects</b></center></td>
		<td style="width:60px;border:1px solid black;font-size:12px;"><center><b>Final Rating</b></center></td>
		<td style="width:60px;border:1px solid black;font-size:12px;"><center><b>Units Earned</b></center></td>
		<td style="width:10px;border:1px solid black;font-size:12px;"><center><b>Action<br>Taken</b></center></td>
		</tr>
		<?php
		
		for($p = 0 ; $p < 7 ; $p++){
		 ?>
		
		<tr>
		<td style="width:150px;border:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:60px;border:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:60px;border:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:83px;border:1px solid black;font-size:12px;height:15px"></td>
		</tr>
		<?php 
	}
		?>
		<tr>
		<td style="width:150px;border:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:60px;height:15px;font-size:11px;text-align:right"><b>*</b></td>
		<td style="width:60px;height:15px;font-size:11px;text-align:right"><b>**** no &nbsp</b></td>
		<td style="width:83px;border-right:1px solid black;font-size:11px;height:15px;text-align:left"><b>entry *****</b></td>
		</tr>

		<?php
		for($s = 0 ; $s < 7 ; $s++){
		 ?>
		
		<tr>
		<td style="width:150px;border:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:60px;border:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:60px;border:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:83px;border:1px solid black;font-size:12px;height:15px"></td>
		</tr>
		<?php 
		}
	

		?>
<tr>
		<td style="width:150px;font-size:12px;height:15px">Days of School:</td>
		<td style="width:60px;border-bottom:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:60;font-size:12px;height:15px;text-align:right">No. of Ye</td>
		<td style="width:83px;font-size:12px;height:15px">ars in</td>
		</tr>
		<tr>
		<td style="width:150px;font-size:12px;height:15px">Days of Present:</td>
		<td style="width:60px;border-bottom:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:60;font-size:12px;height:15px;text-align:right">School:</td>
		<td style="width:83px;border-bottom:1px solid black;font-size:12px;height:15px"></td>
		</tr>

		</table>
		<table style="border-collapse:collapse">
			<tr>
		<td style="width:150px;font-size:12px;height:15px">To be classified as:</td>
		<td style="width:120px;border-bottom:1px solid black;font-size:12px;height:15px"></td>
		<td style="width:83px;font-size:12px;height:15px"></td>
		</tr>
		</table>
		</td>
		</tr>

		</td>
		</tr>

		</table>
		
		<?php 
	

		}
	
	

		?>
      	<p>


<p style="float:left;margin-left:15px;margin-bottom:20px;">
<div class="col-md-12">
          <hr style="border-color:black;border:1px solid black"></hr>

         <table>
         <tr>
         	<td>
		<center><h4 class="foo"><u><b>Subject To: All Concerned </b></u></h4></center>	
		
		<?php
		$sql= mysqli_query($conn,"SELECT * FROM student_info2 where STUDENT_ID = '$id'");
		while($row = mysqli_fetch_assoc($sql)){
			$mid = $row['FIRSTNAME'];
			$sql3 = mysqli_query($conn,"SELECT * FROM student_year_info2 where STUDENT_ID = '$id'");
			$num = mysqli_num_rows($sql3) ; 
			if($num > 0){
		$sql2 = mysqli_query($conn,"SELECT * FROM student_year_info2 where STUDENT_ID = '$id' order by SYI_ID DESC limit 1 ");
		while($row2 = mysqli_fetch_assoc($sql2)){

		 ?>
		
		
<p class="p" style="text-align: justify; line-height: 5mm; text-transform: capitalize;">
I hereby certify that this is the true record of <?php echo '<u>' . $row['LASTNAME'] . ' ' . substr("$mid", 0, 1) . '. ' . $row['MIDDLENAME'] . '</u>'; ?>. This staff member has successfully completed their service with us and is leaving on <?php echo date("F d, Y"); ?>. We acknowledge their contributions to our institution and wish them success in their future endeavors.
</p>

		<?php
		}
	}else{
		?>
<p class="p" style="text-align:justify;line-height:5mm;font-transform:capitalize">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I hereby certify that this is the true record of 
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo '<u>&nbsp;&nbsp;&nbsp;' . $row['LASTNAME'] . ' ' . substr("$mid", 0, 1) . '. ' . $row['MIDDLENAME'] . '&nbsp;&nbsp;</u>'; ?>
    This staff member has completed their tenure at Jimma Preparatory School effectively. They have demonstrated exceptional professionalism and dedication during their service. Their contributions to <u><?php echo $row['PARENT_GUARDIAN'] ?></u> have significantly benefited our institution.

    <?php
    // Assuming $salary is the variable holding the staff member's salary
    echo 'Their final salary payment, including any accrued benefits, amounts to Birr ' . $row['SCHOOL_YEAR']. '.';
    ?>

    The staff member's last working day is <?php echo date('m/d/Y');; ?>. We wish them success in their future endeavors and thank them for their valuable contributions.

   
</p>


		
		<?php
		}
		}
		 ?>
		 <br>
		 <br>
		 <br>
		 <h4 style="font-family: 'Times New Roman', Times, serif;">Warm Regards</h4>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
			<table>
			<tr>
				<td align="left" style="width:500px">
					<h5>REMARKS:</h5>
				</td>
				<td style="">
					<table>
						
				
					
					<tr>
						<td>
							&nbsp
						</td>
					</tr>

						<tr>
							<td style="width:250px;border-bottom:1px solid black">
								
							</td>
						</tr>
						<tr>
						<td style="width:250px;">
							<center><h5>PRINCIPAL</h5></center>
						</td>
					</tr>
					</table>
				</td>

			</tr>
			</table>
         	</td>
         </tr>
         </table>

</div>
</p>

<?php

 mysqli_close($conn);
?>
</center>
</body>
<script>
function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;

	$.ajax({
		url:'print_log.php?act=form137&id=<?php echo $_GET['id'] ?>',
		success:function(html){
			$('#returncode').html(html);
		}
	});
}
</script>
</html>