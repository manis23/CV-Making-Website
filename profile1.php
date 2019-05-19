<?php
  $servername = "localhost";
$username = "root";
$password = "";

$count=0;

$conn = mysqli_connect($servername, $username, $password,'project');

if(!$conn)
{
die("failed".mysqli_error());
}

echo "<font size=50>Hi There!!</font> <BR><BR>";
$e1=$_POST['mail'];
$p1=$_POST['word'];
$sql1="select email from profile where email='$e1'";
$result=mysqli_query($conn,$sql1);
if(!$result)
  echo die(mysqli_error($conn));
$count=mysqli_num_rows($result);
if($count==0){
  echo'<script>alert("Please Sign up First");
  window.location="homepage2.php";</script>';
}
else{
$sql="select * from cvpage where uid in (select uid from profile where email ='$e1' and password='$p1')";
$result=mysqli_query($conn,$sql);
if(!$result)
  echo die(mysqli_error($conn));

  if ($result->num_rows > 0) {
    while($row = mysqli_fetch_array($result)) {
        $fname= $row["fname"]; 
        $lname=$row["lname"];
        $phone=$row["phone"];
        $address=$row["address"];
        $skills=$row["skills"];
        $category=$row["category"];
        $sname10=$row["sname10"];
        $sname12=$row["sname12"];
        $cnameb=$row["cnameb"];
        $cnamem=$row["cnamem"];
    }
}
}
    
?>

<html>
<title>Profile</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
html,body,h1,h2,h3,h4,h5,h6 {font-family: "Roboto", sans-serif}

.navbar {
   
      padding-right: 20px;
      font-size: 16px;
      letter-spacing: 1px;
      
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
<body class="w3-light-grey">

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container1">
     <h2><a class="navbar-brand" href="homepage2.php"><b>Jobs.com</b></a></h2>
   </div>
   </nav>
   <br>
   <br>
   <br>


<div class="w3-content w3-margin-top" style="max-width:1400px;">
  
  <div class="w3-row-padding">
  
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <div class="w3-display-bottomleft w3-container w3-text-black">
          </div>
        </div>
                    <h2 style="text-align: center;">NAME</h2>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php  echo $fname." ".$lname;   ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $address; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $e1; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>
          <hr>

         
         
          <br>
        </div>
      </div><br>

    </div>

    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>SKILLS</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Core Skills</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Nov 2018 - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><?php echo $skills; ?></p>
          <hr>
        </div>
        
      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>10th School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013-2015</h6>
          <p><?php echo $sname10; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>12th</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2015 - 2017</h6>
          <p><?php echo $sname12; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Graduation Institute</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2017 - 2019</h6>
          <p><?php echo $cnameb; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>Masters Institue</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2020 - </h6>
          <p><?php echo $cnamem; ?></p><br>
        </div>
      </div>

    </div>
    
  </div>
  
</div>

<footer class="container-fluid bg-4">
  <h3 align="center">VISIT US AGAIN</h3>
  <a class="navbar-brand" href="about.php">Developers</a>
  <a class="navbar-brand" href="what.php">What We Do</a>
      <a class="navbar-brand" href="RegisteredCompany.php">Company Registered With Us</a>

</footer>

</body>
</html>
