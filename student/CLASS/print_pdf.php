


<?php
	function generateRow(){
		$contents = '';
		$user_id = $_GET['user_id'];
      	include_once('../../connection/connection.php');
		$sql = "SELECT * FROM `student_grade` WHERE student_user_id = '$user_id'";

		//use for MySQLi OOP
		$query = $con->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "<tr>
			  
			   <td>".$row['student_user_id']."</td>
			   <td>".$row['class_name']."</td>
			   <td>".$row['period']."</td>
			   <td>".$row['grade']."</td>
			   <td>".$row['code']."</td>
			
			</tr>";
		}
		////////////////

		//use for MySQLi Procedural
		// $query = mysqli_query($conn, $sql);
		// while($row = mysqli_fetch_assoc($query)){
		// 	$contents .= "
		// 	<tr>
		// 		<td>".$row['id']."</td>
		// 		<td>".$row['firstname']."</td>
		// 		<td>".$row['lastname']."</td>
		// 		<td>".$row['address']."</td>
		// 	</tr>
		// 	";
		// }
		////////////////
		
		return $contents;
	}

	require_once('tcpdf/tcpdf.php');  
    $pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);  
    $pdf->SetCreator(PDF_CREATOR);  
    $pdf->SetTitle("Generated PDF using TCPDF");  
    $pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);  
    $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));  
    $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
    $pdf->SetDefaultMonospacedFont('helvetica');  
    $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);  
    $pdf->SetMargins(PDF_MARGIN_LEFT, '10', PDF_MARGIN_RIGHT);  
    $pdf->setPrintHeader(false);  
    $pdf->setPrintFooter(false);  
    $pdf->SetAutoPageBreak(TRUE, 10);  
    $pdf->SetFont('helvetica', '', 11);  
    $pdf->AddPage();  
    $content = '';  
    $content .= '
      	<h2 align="center">IBA NATIONATIONAL HIGHSCHOOL</h2>
      	<h4>STUDENT GRADE</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
              	               <th>STUDENT</th>
						<th>CLASS</th>
						<th>PERIOD</th>
						<th>GRADE</th>
						<th>CODE</th>
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    ob_end_clean();
    $pdf->Output('studnet_grade.pdf', 'I');
	

?>