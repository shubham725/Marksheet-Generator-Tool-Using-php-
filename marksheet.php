

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, initial-scale=1.0">
  <title>My College Projects</title>
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <style>
    h2{   
          margin-top:130px;
          font-size: 40px;
         color: #ff702a;
    }
      table{
        background-color: transparent;
        margin-top: 80px;
        
        

      }

     



      th{
        border: 3px solid #ff702a;
        padding: 10px ;
         border-radius: 3px;
        font-size: 22px;
        

      }

      td{
        border: 3px solid #ff702a;
        padding: 5px;
        border-radius: 0px;
        text-align: center;
        font-size: 20px;
        

      }

      .update{
        padding: 5px 10px;
      	background: #ff702a;
      	color: #fff; 
      	font-size: 20px;	
      	border-radius: 0.5rem; 
      	border: 2px solid black;
	      cursor: pointer;
        
      }
  </style>
</head>
<body>
  <header>
    <a href="index.php" class="logo">Marksheet Generatore</a>
  
    <ul class="navbar">
      <li><a href="index.php">Home</a></li>
      <li><a href="generator.php">Generator</a></li>
      <li><a href="marksheet.php">Marksheet</a></li>
      <li><a href="calculator.php">Login</a></li>
      
    </ul>
  </header>
<?php
    include("projectserver.php");
    error_reporting();

   $query = "SELECT * FROM SHIVAM";
   
   $data = mysqli_query($conn,$query);

    $total = mysqli_num_rows($data);

    

  

   // echo $total;


    if($total != 0)

    {
       
         ?>
         <h2 align="center">STUDENT MARKSHEET</h2>
         <center>
          <div class="yy">
       <table  width="100%" padding-top="300px" >
        <tr>
           <th width="1%">NO</th>
           <th width="20%">Student Name</th>
           <th width="10">Seat No</th>
           <th width="1%">English</th>
           <th width="1%">Marathi</th>
           <th width="1%">Hindi</th>
           <th width="1%">Physics</th>
           <th width="1%">Maths</th>
           <th width="1%">Chemistry</th>
           <th width="2%">Total</th>
           <th width="1%">Percentage</th>
           <th width="15%">Update/Delete</th>
        </tr>

       

    </div>
         <?php
        while($result = mysqli_fetch_assoc($data))
        {
    echo "<tr>
           <td>".$result['no']."</td>
           <td>".$result['studentname']."</td>
           <td>".$result['seatno']."</td>
           <td>".$result['english']."</td>
           <td>".$result['marathi']."</td>
           <td>".$result['hindi']."</td>
           <td>".$result['physics']."</td>
           <td>".$result['maths']."</td>
           <td>".$result['chemistry']."</td>
           <td>".$result['total']."</td>
           <td>".$result['percentege']."</td>

           <td><a href='update.php?no=$result[no]'><input type='submit' value='Update' class='update'></a>
          
           <a href='marksheet.php?no=$result[no]'><input type='submit' value='Delete' class='update' onclick = 'return delete()'></a></td>
       
       
           </tr>";

        
        
        }

     }   
    else
    {
        echo "Table is Not Record";
    }

  ?>
   </table>
</center>
   </body>
</html>

<script>

  function delete()
  {
    return Confirm('Are You Sure Delete Your Marksheet ?'); 
  }
</script>

	
<?php
  error_reporting(0);
  
  $_POST['save'];

 $query =" FROM SHIVAM ";

 $data = mysqli_query($conn,$query);

  if($data)
  {
      echo"";
  }
  else{
      echo " Marksheet Not Deleted";
  }
?>

<?php
  error_reporting(0);
  
 $no = $_GET['no'];

 $query ="DELETE FROM SHIVAM WHERE no='$no' ";

 $data = mysqli_query($conn,$query);

  if($data)
  {
      echo"";
  }
  else{
      echo " Marksheet Not Deleted";
  }
?>


