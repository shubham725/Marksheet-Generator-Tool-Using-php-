<?php
require_once('fpdf.php');

// create new PDF document
$pdf = new FPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator('My Application');
$pdf->SetAuthor('John Doe');
$pdf->SetTitle('HTML to PDF');
$pdf->SetSubject('Convert HTML form to dynamic PDF');

// add a page
$pdf->AddPage();

// get form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// write HTML content
$html = '
	<h1>Contact Information</h1>
	<p><strong>Name:</strong> '.$name.'</p>
	<p><strong>Email:</strong> '.$email.'</p>
	<p><strong>Phone:</strong> '.$phone.'</p>
	<p><strong>Message:</strong> '.$message.'</p>
';

// output the HTML content as PDF
$pdf->writeHTML($html, true, false, true, false, '');

// output the PDF as a download
$pdf->Output('contact_info.pdf', 'D');
?>