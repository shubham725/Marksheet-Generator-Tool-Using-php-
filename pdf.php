<?php
  if(! empty($_POST['save']))

  { 
  	$n1 = $_POST['s1'];
  	$n2 = $_POST['s2'];
    $t1 = $_POST['k1'];
  	$t2 = $_POST['k2'];
    $t3 = $_POST['k3'];
    $t4 = $_POST['k4'];
  	$n3 = $_POST['s3'];
  	$n4 = $_POST['s4'];
  	$n5 = $_POST['s5'];
  	$n6 = $_POST['s6'];
  	$n7 = $_POST['s7'];
  	$n8 = $_POST['s8'];
    
   

   $Total = $n3 + $n4 + $n5 + $n6 + $n7 + $n8;

   $percentege = round(($Total / 600) * 100, 2);
    
    
    
    require("fpdf.php");
  

    
    
    $pdf =new fpdf();
    $pdf->AddPage();
    
    $pdf->image('img\WhatsApp Image 2023-04-01 at 5.41.27 PM (2).jpg',0,0,0,0);

  
    $pdf->setfont("Arial","B",18);


    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(10,70,185,10,'F');

    $pdf->SetFillColor(173,177,255);
    $pdf->Rect(10,80,185,10,'F');

    $pdf->SetFillColor(192,192,192);
    $pdf->Rect(10,120,185,10,'F');

    $pdf->SetFillColor(173,177,255);
    $pdf->Rect(10,130,185,60,'F');


    $pdf->SetFillColor(173,177,255);
    $pdf->Rect(10,200,185,10,'F');

    $pdf->SetFillColor(173,177,255);
    $pdf->Rect(10,210,185,10,'F');


$Margin =" ";

    
    $pdf->Cell(0,60," ",0,1,'C');
    
   
   
    $pdf->cell(45,10,"STREAM ",1,0,'C');
    $pdf->Cell(45,10,"SEAT NO",1,0,'C');
    $pdf->Cell(45,10,"CLASS",1,0,'C');
    $pdf->Cell(50,10,"DATE",1,1,'C');
    
    $pdf->setfont("Arial","",19);
     
    $pdf->cell(45,10,"Scince",1,0,'C');
    $pdf->Cell(45,10,"$n2",1,0,'C');
    $pdf->Cell(45,10,"$t1",1,0,'C');
    $pdf->Cell(50,10,$t2.'/'.$t3.'/'.$t4,1,0,'C');


    $pdf->cell(0,10,"   ",0,1,'C');


    $pdf->cell(0,10,"   ",0,1,'C');
    
    $pdf->setfont("Arial","B",19);
    $pdf->cell(90,10,"CANDIDATE'S FULL NAME ",0,0);
    $pdf->Cell(0,10,$n1,0,0);


 
    $pdf->cell(0,10,"   ",0,1,'C');
    $pdf->Cell(0,10,"  ",0,1,'C');

    $pdf->setfont("Arial","B",18);

     $pdf->cell(70,10,"Subject Name ",1,0,'C');
     $pdf->Cell(40,10,"Medium",1,0,'C');
    $pdf->Cell(40,10,"Max Marks",1,0,'C');
    $pdf->Cell(35,10,"Marks",1,1,'C');

    
    $pdf->setfont("Arial","",18);

    $pdf->cell(70,10," ENGLISH",1,0);
    $pdf->Cell(40,10,"ENG",1,0,'C');
    $pdf->Cell(40,10,"100",1,0,'C');
    $pdf->Cell(35,10,$n3,1,1,'C');

    $pdf->cell(70,10," MARATHI",1,0);
    $pdf->Cell(40,10,"MAR",1,0,'C');
    $pdf->Cell(40,10,"100",1,0,'C');
    $pdf->Cell(35,10,$n4,1,1,'C');

    $pdf->cell(70,10," HINDI",1,0);
    $pdf->Cell(40,10,"HIN",1,0,'C');
    $pdf->Cell(40,10,"100",1,0,'C');
    $pdf->Cell(35,10,$n5,1,1,'C');

    $pdf->cell(70,10," PHYSICS",1,0);
    $pdf->Cell(40,10,"ENG",1,0,'C');
    $pdf->Cell(40,10,"100",1,0,'C');
    $pdf->Cell(35,10,$n6,1,1,'C');

    $pdf->cell(70,10," MATHAMATICS ",1,0);
    $pdf->Cell(40,10,"ENG",1,0,'C');
    $pdf->Cell(40,10,"100",1,0,'C');
    $pdf->Cell(35,10,$n7,1,1,'C');

    $pdf->cell(70,10," CHEMISTRY",1,0);
    $pdf->Cell(40,10,"ENG",1,0,'C');
    $pdf->Cell(40,10,"100",1,0,'C');
    $pdf->Cell(35,10,$n8,1,1,'C');

    
    $pdf->cell(0,10,"   ",0,1,'C');

    $pdf->cell(70,10," Total ",1,0);
    $pdf->Cell(40,10,"Result",1,0,'C');
    $pdf->Cell(40,10,"600",1,0,'C');
    $pdf->Cell(35,10,$Total,1,1,'C');


     $pdf->cell(70,10," Percentege",1,0,);
     $pdf->Cell(40,10,"Pass",1,0,'C');
     $pdf->Cell(40,10,$percentege.'%',1,0,'C');
    $pdf->cell(35,10,"-",1,0,'C');

   


    $pdf->output();
  }
?>

<?php include("projectserver.php"); ?>
<?php

if(! empty($_POST['save']))

  {
    $n1 = $_POST['s1'];
    $n2 = $_POST['s2'];
    $n3 = $_POST['s3'];
    $n4 = $_POST['s4'];
    $n5 = $_POST['s5'];
    $n6 = $_POST['s6'];
    $n7 = $_POST['s7'];
    $n8 = $_POST['s8'];
   
    


   $total = $n3 + $n4 + $n5 + $n6 + $n7 + $n8;

   $percentege = $Total / 600 * 100;
       

      

      $now = "INSERT INTO SHIVAM (studentname,seatno,english,marathi,hindi,physics,maths,chemistry,total,percentege) VALUES('$n1','$n2','$n3','$n4','$n5','$n6','$n7','$n8','$total','$percentege')";


       $data = mysqli_query($conn,$now);

       if ($now)   
   {
    echo "connection now";
   }
   else
   {
    echo " failed";
   }
 }

 

?>


