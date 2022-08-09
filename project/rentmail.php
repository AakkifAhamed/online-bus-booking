

<?Php

session_start();

	

 
	require 'PHPMailerAutoload.php';
    require('fpdf/fpdf.php');
   $username= $_SESSION['user'];
$IDnum= $_SESSION['ID'];
$vehicleID=$_SESSION['vehicle'];
 $paydate=date("Y/m/d");
$_SESSION['paydate']=$paydate;
 $cardnumber=$_SESSION['cardnumber'];
$amount= $_SESSION['amount'];
    date_default_timezone_set("Asia/Colombo");

$paytime= date(" H:i:s"); 
$_SESSION['paytime']=$paytime;
$days=$_SESSION['amountx'];
$date=$_SESSION['date'];
$returndate= $_SESSION['returndate'];
$title="Rental Ticket";
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
$pdf->Cell(40,10,'Name',1,0,'C');
$pdf->Cell(40,10,$username,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'NIC',1,0,'C');
$pdf->Cell(40,10,$IDnum,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'VehicleID',1,0,'C');
$pdf->Cell(40,10,$vehicleID,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'Date',1,0,'C');
$pdf->Cell(40,10,$date,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'Return Date',1,0,'C');
$pdf->Cell(40,10,$returndate,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'Rented days',1,0,'C');
$pdf->Cell(40,10,$days,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'CC number',1,0,'C');
$pdf->Cell(40,10,$cardnumber,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'Paid date',1,0,'C');
$pdf->Cell(40,10,$paydate,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'Paid time',1,0,'C');
$pdf->Cell(40,10,$paytime,1,1,'C');
$pdf->SetX((170-$w)/2);
$pdf->Cell(40,10,'Amount',1,0,'C');
$pdf->Cell(40,10,$amount,1,1,'C');
$pdf->output();
?>

