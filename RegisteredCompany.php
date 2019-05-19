<html>
<head>
	<title>Registered Company</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
body
{
  font: 20px Arial, sans-seriff;
   line-height:1.8;
   color: #fffff;
	background-color: #EEF5DB;
}
p{ font-size: 16px; }
.navbar {
   
      padding-right: 20px;
      font-size: 16px;
      letter-spacing: 1px;
      
   
  }
  .error{

  }
  .navbar a {
     
      font-size: 40px;
     
  }
.margin {margin-bottom: 45px;}
 
    .bg-4 { 
      background-color: #2f2f2f; 
      color: #fff;
  }
  



</style>
<body>

	<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container1">
     <h2><a class="navbar-brand" href="homepage2.php"><b>Jobs.com</b></a></h2>
   </div>
   </nav>
   <br>
   <br>
   <br>



<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,'project');

if(!$conn)
{
die("failed".mysqli_error());
}

echo "<font size=50>Company Registered With Us!!</font> <BR><BR>";

$sql="Select company From company ";

$result=mysqli_query($conn,$sql);

if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)) {
        echo "<b>".$row['company']."<br>"."</b>";
    }
}

?> 

<footer style="position: fixed;width: 100%; bottom: 0;" class="container-fluid bg-4">
  <h3 align="center">VISIT US AGAIN</h3>
  <a class="navbar-brand" href="about.php">Developers</a>
  <a class="navbar-brand" href="what.php">What We Do</a>
      

</footer>


</body>
</html>