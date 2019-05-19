<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<title>CV PAGE</title>
<style>
body
{
  font: 20px Arial, sans-seriff;
   line-height:1.8;
   color: #fffff;
     background-color:#32127A;

}
p{ font-size: 16px; }
.navbar {
   
      padding-right: 20px;
      font-size: 16px;
      letter-spacing: 1px;
   
  }
  .error{

  }
.margin {margin-bottom: 45px;}
 
    .bg-4 { 
      background-color: #2f2f2f; /* Black Gray */
      color: #fff;
  }
  .container-fluid {
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .container {
    background-image: url("linked.jpg");
    background-repeat: repeat;
    background-size: 940px 600px;
}
.navbar a{
  font-size: 28px;
}
.form2 {
    max-width: 550px;
    padding: 16px;
    
    right: 0;
    margin: 20px;
    left : 80vh;
   background-color: #0077B5;
}




button {
    background-color: #302;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
button:hover {
  background-color: #7468;
}
.container button {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
input[type=text], input[type=password] {
    
    
    margin: 5px 0 16px 0;
    background: #f1f1f1;
}
</style>
<body>



  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container1">
     <h2><a class="navbar-brand" href="homepage2.php"><b>Jobs.com</b></a></h2>
   </div>
   </nav>

<?php

$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password,'project');

if(!$conn)
{
die("failed".mysqli_error());
}

ECHO "SUCCESSFUL CONNECTION <BR><BR>";


$f = $l = $p =$add = $s = $c =$s10 = $s12 = $cb = $cm ="";
if(isset($_POST['submit']))
{
$f=$_POST['fname'];
$l=$_POST['lname'];
$p=$_POST['phone'];
$add=$_POST['address'];
$s=$_POST['skills'];
$c=$_POST['category'];
$s10=$_POST['sname10'];
$s12=$_POST['sname12'];
$cb=$_POST['cnameb'];
$cm=$_POST['cnamem'];
$uid=$_POST['uid'];

$sql="insert into cvpage values('$f','$l','$p','$add','$s','$c','$s10','$s12','$cb','$cm','$uid')";

$check= mysqli_query($conn, $sql);

if(!$check)
{
die("failed". mysqli_error($conn));
}

echo "Successfully taken your entries<br><br>";
}
mysqli_close($conn);
?>

<?php
$fnameErr = $lnameErr = $phoneErr =$uidErr= "";
$fname = $lname = $phone =$uid= "";
$flag=0;

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["fname"])) {
     $fnameErr = "Name is required";
     $flag=1;
     
   } 

   else {
     $fname = $_POST["fname"];
    if (!preg_match("/^[a-zA-Z]*$/",$fname)) {
    $flag=1;
   $fnameErr = "Only letters allowed";
   
     }
   }

   if (empty($_POST["lname"])) {
     $lnameErr = "Name is required";
      $flag=1;
   } 

   else {
     $lname = $_POST["lname"];
    if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
    $flag=1;
   $lnameErr = "Only letters allowed";
    
     }
   }
   if (empty($_POST["phone"])) {
     $phoneErr = "Phone number is required";
      $flag=1;
   } 

   else {
     $phone = $_POST["phone"];
    if (!preg_match("/^[0-9]*$/",$phone)) {
    $flag=1;
   $phoneErr = "Only numerics allowed";
      }
   }


   if (empty($_POST["uid"])) {
     $uidErr = "Name is required";
     $flag=1;
   } 
   else {
     $fname = $_POST["uid"];
    if (!preg_match("/^[a-zA-Z0-9]*$/",$uid)) {
    $flag=1;
   $uidErr = "Invalid userid";
   
     }
   }
   if($flag!=1 and isset($_POST["submit"])){
header("Location: homepage2.php");
}

   
}
?>
<div class="container" align="middle">
   <br><br><br>

<form class="form2"  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
  <h1><b>Enter Your Details</b></h1>
<b>First Name</b><br></font>
<input type="text" name="fname" required/>
<span class="error">* <?php echo $fnameErr."<br>";?></span>

<br>
<b>Last Name </b><br>
<input type="text" name="lname" required/>
<span class="error">* <?php echo $lnameErr."<br>";?></span><br>



<b>Contact Number</b><br>
<input type="text" name="phone" required/>
<span class="error">* <?php echo $phoneErr."<br>";?></span><br>

<b>Address</b><br></font>
<textarea cols="40" rows="4" name="address"></textarea> <br>
<br>
<b>Core Skills</b><br>
<textarea cols="40" rows="4" name="skills"></textarea><br>
Category<br><br><select name="category">
    <option>Technical</option>
    <option>Management</option>
    <option>Law Corporation</option>
    <option>Accountancy</option>
    <option>Enterpreneur</option>
    <br></select>
<br>
<b>Education Qualifications:</b><br>
<br>

  School Name(10th) <input type="text" name="sname10"></input><br>
  School Name(12th) <input type="text" name="sname12"></input><br> 
  College Name(Btech)    <input type="text" name="cnameb"></input><br>
  College Name(Mtech)    <input type="text" name="cnamem"></input><br>
  <b>User Id</b><br>
<input type="text" name="uid" required/>
<span class="error">* <?php echo $uidErr."<br>";?></span><br>
<br>
<input type="submit" value="Submit" name="submit">

</form>

</div>


<footer class="container-fluid bg-4">
  <h4 align="center">VISIT US AGAIN</h4>
  <br>
  <a class="navbar-brand" href="about.php">Developers</a>
  <a class="navbar-brand" href="what.php">What We Do</a>
      <a class="navbar-brand" href="RegisteredCompany.php">Company Registered With Us</a>

</footer>
</body></html>


