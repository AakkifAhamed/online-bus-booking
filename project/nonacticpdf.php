<?Php

session_start();

	

 
	require 'PHPMailerAutoload.php';
    require('fpdf/fpdf.php');
   $username= $_SESSION['customer'];

$vehicleID=$_SESSION['vID1'];
 $paydate=date("Y/m/d");
$_SESSION['paydate1']=$paydate;
 //$cardnumber=$_SESSION['cnumber1'];
$amount= $_SESSION['tot1'];
 $quantity=$_SESSION['quant1'];   
$start=$_SESSION['start1'];
$destination=$_SESSION['des1'];
$date=$_SESSION['paydate1'];

 $id=$_SESSION['id1'];
$time=$_SESSION['paytime1'];
 $ddate=$_SESSION['ddate1'];
 $dtime=$_SESSION['dtime1'];

$title="Booked Ticket";
$pdf=new FPDF();
$pdf->Addpage();
$pdf->setTitle($title);
$pdf->SetFont('Arial','B',15);
//$pdf->Cell(80,10,$title,1,1,'C');
$w=$pdf->GetStringWidth($title)+6;
$pdf->SetX((210-$w)/2);
$pdf->SetDrawColor(221,221,221,1);
$pdf->SetFillColor(10,158,0,1);
$pdf->SetTextColor(255,255,255,1);
$pdf->SetLineWidth(1);
$pdf->Cell($w,9,$title,1,1,'C',true);
$pdf->Ln(10);
$pdf->SetTextColor(0,0,0,1);
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'PaidID',1,0,'C');
$pdf->Cell(40,10,$id,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Name',1,0,'C');
$pdf->Cell(40,10,$username,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'VehicleID',1,0,'C');
$pdf->Cell(40,10,$vehicleID,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Start',1,0,'C');
$pdf->Cell(40,10,$start,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Destination',1,0,'C');
$pdf->Cell(40,10,$destination,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Date',1,0,'C');
$pdf->Cell(40,10,$ddate,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Time',1,0,'C');
$pdf->Cell(40,10,$dtime,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Seats booked',1,0,'C');
$pdf->Cell(40,10,$quantity,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Total',1,0,'C');
$pdf->Cell(40,10,$amount,1,1,'C');
$pdf->SetX((170-$w)/2);

/*$pdf->Cell(40,10,'CCnumber',1,0,'C');
$pdf->Cell(40,10,$cardnumber,1,1,'C');
$pdf->SetX((170-$w)/2);*/

$pdf->Cell(40,10,'Booked date',1,0,'C');
$pdf->Cell(40,10,$date,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->Cell(40,10,'Booked Time',1,0,'C');
$pdf->Cell(40,10,$time,1,1,'C');
$pdf->SetX((170-$w)/2);

$pdf->output();

?>