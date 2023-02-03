<?php
	function generateRow(){
		ob_start();
		$contents = '';
		include_once('../../connection/connection.php');
		$sql = "SELECT *,student_info.id as STUDIN, login.id as LOGID FROM `student_info` LEFT JOIN login ON student_info.user_id = login.user_id WHERE role = 'student'";

		//use for MySQLi OOP
		$query = $con->query($sql);
		while($row = $query->fetch_assoc()){
			$contents .= "
			<tr>
				<td>".$row['fname']." ".$row['lname']."</td>
				<td>".$row['emailAdd']."</td>
				<td>".$row['mobile_num']."</td>
				<td>".$row['role']."</td>
			</tr>
			";
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
      	<h2 align="center">Generated PDF using TCPDF</h2>
      	<h4>Members Table</h4>
      	<table border="1" cellspacing="0" cellpadding="3">  
           <tr>  
                              <th style="width:20%;">FULLNAME</th>
						<th style="width:20%;">EMAIL</th>
						<th style="width:20%;">PHONE</th>
						<th style="width:20%;">ROLE</th>
						<th style="width:20%;">STATUS</th>
           </tr>  
      ';  
    $content .= generateRow();  
    $content .= '</table>';  
    $pdf->writeHTML($content);  
    $pdf->Output('members.pdf', 'I');
	
	ob_end_clean();

?>