<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
</html>
<?php
include "connection.php";
require 'PHPMailerAutoload.php';
require('fpdf/fpdf.php');

 while (ob_get_level())
ob_end_clean();
header("Content-Encoding: None", true);
    $title="Order Details";
$pdf = new FPDF(); 
$pdf->AddPage();

$width_cell=array(18,18,18,18,18,18,18,18,18);
$pdf->SetFont('Arial','B',8);
$pdf->SetFillColor(193,229,252);

// Header starts /// 
//First header column //
$pdf->Cell($width_cell[0],10,'Order ID',1,0,'C',true);
//Second header column//
$pdf->Cell($width_cell[1],10,'VehicleID',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[2],10,'User Name',1,0,'C',true); 
//Fourth header column//
$pdf->Cell($width_cell[3],10,'Start',1,0,'C',true);
//Third header column//
$pdf->Cell($width_cell[4],10,'Destination',1,0,'C',true); 
$pdf->Cell($width_cell[5],10,'Tickets',1,0,'C',true); 
$pdf->Cell($width_cell[6],10,'Amount',1,0,'C',true); 
$pdf->Cell($width_cell[7],10,'Booked Date',1,0,'C',true); 
$pdf->Cell($width_cell[8],10,'Bookde Time',1,1,'C',true); 
//// header ends ///////

$pdf->SetFont('Arial','',14);
//Background color of header//
$pdf->SetFillColor(235,236,236); 
//to give alternate background fill color to rows// 
$fill=false;
 
   
session_start();
if(isset($_GET['vehicleID']))
{
	 $vid=$_GET['vehicleID'];
	
	
	$checkz="SELECT * FROM `acbooking` WHERE vehicleID='".$_GET['vehicleID']."'" ;
	$result=$conn->query($checkz);

}



      
		




if($result->num_rows>0){
	while($row=$result->fetch_assoc()){

$pdf->SetFont('Arial','',8);
         
$pdf->Cell($width_cell[0],10,$row['paidid'],1,0,'C',$fill);
$pdf->Cell($width_cell[1],10,$row['vehicleID'],1,0,'C',$fill);
$pdf->Cell($width_cell[2],10,$row['username'],1,0,'C',$fill);
$pdf->Cell($width_cell[3],10,$row['start'],1,0,'C',$fill);
$pdf->Cell($width_cell[4],10,$row['destination'],1,0,'C',$fill);
$pdf->Cell($width_cell[5],10,$row['quantity'],1,0,'C',$fill);
$pdf->Cell($width_cell[6],10,$row['total'],1,0,'C',$fill);
$pdf->Cell($width_cell[7],10,$row['paiddate'],1,0,'C',$fill);
$pdf->Cell($width_cell[8],10,$row['paidtime'],1,1,'C',$fill);
//to give alternate background fill  color to rows//
$fill = !$fill;
		 
$pdf->Output();	  
			
		  
		  }
	}
	





		
	
	
	
	

?>