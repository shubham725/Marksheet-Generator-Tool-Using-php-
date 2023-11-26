

<?php include("projectserver.php");
   
  $no = $_GET['no'];

    $query = "SELECT * FROM SHIVAM where no ='$no'";
   
   $data = mysqli_query($conn,$query);

    
    $result = mysqli_fetch_assoc($data);
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=divice-width, initial-scale=1.0">
  <title>My College Projects</title>
  <link rel="stylesheet" type="text/css" href="style.css">
   <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

  <style></style>
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

<div class="sk1">
  <form action="pdf.php" method="POST">
    
  	<div class="title1">
  		Update Marksheet 
  	</div>
  	<div class="form">
  		<div class="input-field">
  			<label>Student Name </label>
  			<input type="text" value="<?php echo $result['studentname'];?>" class="input" name="s1">
  		</div>

  		<div class="input-field">
  			<label>Seat No </label>
  			<input type="text" value="<?php echo $result['seatno'];?>" class="input" name="s2">
  		</div>

		  <div class="input-field">

      <label>Class</label>   
          <div class="">
	         <select name="k1">
			 
		          <option>Select</option>
		          <option>11th</option>
		          <option>12th</option>
            </select >
            </div>
         </div>

		 <div class="input-field">

      <label>Date</label>  
          <div class="ak1">
	         <select name="k2">
			     <option>Days</option>
		          <option>01</option>
		          <option>02</option>
		          <option>03</option>
				  <option>04</option>
		          <option>05</option>
		          <option>06</option>
				  <option>07</option>
		          <option>08</option>
		          <option>09</option>
				  <option>10</option>
		          <option>11</option>
		          <option>12</option>
		          <option>13</option>
				  <option>14</option>
		          <option>15</option>
		          <option>16</option>
				  <option>17</option>
		          <option>18</option>
		          <option>19</option>
				  <option>20</option>
		          <option>21</option>
		          <option>22</option>
				  <option>23</option>
				  <option>24</option>
		          <option>25</option>
		          <option>26</option>
				  <option>27</option>
		          <option>28</option>
		          <option>29</option>
				  <option>30</option>
		          <option>31</option>
            </select >
            </div> <div class="ak1">
	         <select name="k3">
			     <option>Month</option>
		          <option>01</option>
		          <option>02</option>
		          <option>03</option>
				  <option>04</option>
		          <option>05</option>
		          <option>06</option>
				  <option>07</option>
		          <option>08</option>
		          <option>09</option>
				  <option>10</option>
		          <option>11</option>
		          <option>12</option>
		         
            </select >
            </div>
			<div class="ak1">
	         <select name="k4">
			     <option>Year</option>
		          <option>1990</option>
		          <option>1991</option>
				  <option>1992</option>
		          <option>1993</option>
		          <option>1994</option>
				  <option>1995</option>
		          <option>1996</option>
		          <option>1997</option>
				  <option>1998</option>
		          <option>1999</option>
		          <option>2001</option>
		          <option>2002</option>
				  <option>2003</option>
		          <option>2004</option>
		          <option>2005</option>
				  <option>2006</option>
		          <option>2007</option>
		          <option>2008</option>
				  <option>2009</option>
		          <option>2010</option>
		          <option>2011</option>
				  <option>2012</option>
				  <option>2013</option>
				  <option>2014</option>
		          <option>2015</option>
		          <option>2016</option>
				  <option>2017</option>
		          <option>2018</option>s
		          <option>2019</option>
				  <option>2020</option>
		          <option>2020</option>
				  <option>2021</option>
				  <option>2022</option>
				  <option>2023</option>
				 
            </select >
            </div>


         </div>

  		<div class="input-field">
  			<label>English </label>
  			<input type="text" value="<?php echo $result['english'];?>" class="input" name="s3">
  		</div>

  		<div class="input-field">
  			<label>Marathi</label>
  			<input type="text" value="<?php echo $result['marathi'];?>" class="input" name="s4">
  		</div>
  		<div class="input-field">
  			<label>Hindi</label>
  			<input type="text" value="<?php echo $result['hindi'];?>" class="input" name="s5">
  		</div>

  		<div class="input-field">
  			<label>Physics </label>
  			<input type="text" value="<?php echo $result['physics'];?>" class="input" name="s6">
  		</div>
  		
  		<div class="input-field">
  			<label>Maths </label>
  			<input type="text" value="<?php echo $result['maths'];?>" class="input" name="s7">
  		</div>

  		<div class="input-field">
  			<label>Chemistry </label>
  			<input type="text" value="<?php echo $result['chemistry'];?>" class="input" name="s8">
  		</div>

      

  		<div class="term">
  			<label class="check">
  				<input type="checkbox" >
  				<span class="checkmark"></span>
  			</label>
  			<p>Conform To Submit Form</p>
  		</div>
  		<div class="skbtn">
  			<input type="Submit" value="UPDATE" class="msbtn"  name="save">
  		</div>	
  	</div>
    
   </form>
  </div>
</body>
</html>
<?php include("projectserver.php"); ?>
<?php
