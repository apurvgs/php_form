<?php
require('C:\xampp\htdocs\fpdf\fpdf.php');
//require 'vendor/autoload.php';
class Person{

public $name;
public $age;
public $sex;

public function return_name(){
	return $this->name;
}
public function return_age(){
	return $this->age;
}

public function print_name()
{
	echo "Welcome $this->name";
}
public function print_age()
{
	echo "You entered your age $this->age";
}



public function prt_pdf()
{
	$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,"Name:",1,0);
$pdf->Cell(40,10,"$this->name",1,1);
$pdf->Cell(40,10,"DOB:",1,0);
$pdf->Cell(40,10,"$this->age",1,1);
$pdf->Cell(40,10,"SEX:",1,0);
$pdf->Cell(40,10,"$this->sex",1,1);
$pdf->Output();	
}
}
$p=new Person();

if(isset($_POST['text1']))
{
	$p->name=$_POST['text1'];
	$p->age=$_POST['bday'];
	$p->sex=$_POST['gender'];	
	//$p->print_name();
	$p->prt_pdf();
}


?>
