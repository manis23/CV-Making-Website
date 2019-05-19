<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<title>homepage</title>
<style>
body
{
  font: 20px Arial, sans-seriff;
   line-height:1.8;
   color: #fffff;
   background-color: #0077B5;
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
      background-color: #2f2f2f;
      color: #fff;
  }
  .container-fluid {
      padding-top: 10px;
      padding-bottom: 10px;
  }
  .container {
    background-image: url("linked.jpg");
    background-repeat: repeat;
    background-size: 1200px 900px;
}
.container1 a{
  font-size: 28px;
}
.form2 {
    max-width: 500px;
    padding: 16px;
    
    right: 0;
    margin: 20px;
    left : 80vh;
    background-color: white;
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
   <div class="navbar-right navbar-align">
    <form action="profile1.php" method="post">
      <input type="text" placeholder="Email"  name="mail" required>
	    <input type="Password" placeholder="Password" name="word" required>
 	    <input type="submit" value="Login">
  </form>
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


$f = $l = $p = $e = $pass ="";

if(isset($_POST["submit"])){
$f=$_POST['fname'];
$l=$_POST['lname'];
$p=$_POST['phone'];
$e=$_POST['email'];
$pass=$_POST['password'];
$uid=$_POST['uid'];


$sql="insert into profile values('$f','$l','$p','$e','$pass','$uid')";

$check= mysqli_query($conn, $sql);

if(!$check)
{
die("failed". mysqli_error($conn));
}

echo "Successfully created a table<br><br>";
}
mysqli_close($conn);
?>

<?php
$fnameErr = $lnameErr = $phoneErr = $emailErr = $passwordErr =$uidErr= "";
$fname = $lname = $phone = $email = $password =$uid= "";
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
    
   $fnameErr = "Only letters allowed";
   $flag=1;
     }
   }

   if (empty($_POST["lname"])) {
     $lnameErr = "Name is required";
      $flag=1;
   } 

   else {
     $lname = $_POST["lname"];
    if (!preg_match("/^[a-zA-Z]*$/",$lname)) {
    
   $lnameErr = "Only letters allowed";
    $flag=1;
     }
   }
   if (empty($_POST["phone"])) {
     $phoneErr = "Phone number is required";
      $flag=1;
   } 

   else {
     $phone = $_POST["phone"];
    if (!preg_match("/^[0-9]*$/",$phone)) {
    
   $phoneErr = "Only numerics allowed";
      $flag=1;}
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
      $flag=1;
   } 

   else {
     $email = $_POST["email"];
    if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$email)) {
    
   $emailErr = "Not a valid Email";
    $flag=1;
     }
   }

   

if (empty($_POST["password"])) {
     $passwordErr = "Passwordis required";
    $flag=1;} 

   else {
     $password = $_POST["password"];
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/",$password)) {
    
   $passwordErr = "Password must contain atleast one capital letter,one special character,one numeric";
      $flag=1;}
   }

}

if($flag!=1 and isset($_POST["submit"])){
header("Location: newcvpage.php");
}

?>

<div class="container" align="middle">
   <br><br><br>
<form class="form2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <h1><b><font face="cooper black">Enter Your Details</font></b></h1>
  *required<br><br>
<b>First Name</b><br>
<input type="text" name="fname" required/>
<span class="error">* <?php echo $fnameErr."<br>";?></span><br>
    

<b>Last Name</b><br>
<input type="text" name="lname" required/>
<span class="error">* <?php echo $lnameErr."<br>";?></span><br>


<b>Phone Number</b><br>
<input type="text" name="phone" required/>
<span class="error">* <?php echo $phoneErr."<br>";?></span>

<b>Email</b><br>
<input type="text" name="email" required/>
<span class="error">* <?php echo $emailErr."<br>";?></span>


<b>Password(6 or more characters)</b><br>
<input type="password" name="password" required />
<span class="error">* <?php echo $passwordErr."<br>";?></span><br>

<b>User ID</b><br>
<input type="text" name="uid" required />
<span class="error">* <?php echo $uidErr."<br>";?></span><br>


<input type="submit" value="JOIN NOW" name="submit"><br>
<br>
</form>
</div>
<div class="cr">
<button type="button" onclick="document.location.href='newcompany.php'">Company Registration</button></a>
<br>
</div>



<footer class="container-fluid bg-4">
  <h4 align="center">VISIT US AGAIN</h4>
  <br>
  <a class="navbar-brand" href="about.php">Developers</a>
  <a class="navbar-brand" href="what.php">What We Do</a>
    <a class="navbar-brand" href="RegisteredCompany.php">Company Registered With Us</a>

</footer>
</body>
</html>