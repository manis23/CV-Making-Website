<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<title>new company</title>
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
    background-size: 940px 600px;
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
    <form method="post" action="category.php">
      <input type="text" placeholder="Company_ID" name="idloginc" required>
      <input type="Password" placeholder="Password" name="passwordloginc" required>
      <input type="submit" value="Login" name="submit1">
  </form>
</div>
</nav>
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
else{
if(isset($_POST["submit1"])){
echo'<script>alert("WewWA");</script>';
$e1=$_POST['idloginc'];
$p1=$_POST['passwordloginc'];
$sql1="select id from company where id='$e1'";
$result=mysqli_query($conn,$sql1);
if(!$result)
  echo die(mysqli_error($conn));
$count=mysqli_num_rows($result);
if($count==0){
  echo'<script>alert("Please Register First");
  window.location="newcompany.php";</script>';
}
}
}
?> 
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


$n = $i = $e =$p = $add = $c =$pass ="";
if(isset($_POST['submit']))
{
  echo 'mridulS';
$n=$_POST['company'];
$i=$_POST['id'];
$e=$_POST['email'];
$p=$_POST['phone'];
$add=$_POST['address'];
$c=$_POST['category'];
$pass=$_POST['password'];

$sql="insert into company values('$n','$i','$e','$p','$add','$c','$pass')";

$check= mysqli_query($conn, $sql);

if(!$check)
{
die("failed". mysqli_error($conn));
}

echo "<br><br>Successfully taken your entries<br><br>";
}
mysqli_close($conn);
?>


<?php
$companyErr = $idErr = $emailErr = $phoneErr = $addressErr = $categoryErr = $passwordErr="";
$company = $id = $email = $phone = $address = $category = $password="";


if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
   if (empty($_POST["company"])) {
     $companyErr = "company name is required";
     
   } 

   else {
     $company = $_POST["company"];
    if (!preg_match("/^[a-zA-Z0-9]*$/",$company)) {
    
   $companyErr = "Only letters allowed";
   
     }
   }

   if (empty($_POST["id"])) {
     $idErr = "id is required";
      
   } 

   else {
     $id = $_POST["id"];
    if (!preg_match("/^[a-zA-Z0-9]*$/",$id)) {
    
   $idErr = "Only letters allowed";
    
     }
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
      
   } 

   else {
     $email = $_POST["email"];
    if (!preg_match("/^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/",$email)) {
    
   $emailErr = "Not a valid Email";
    
     }
   }

   if (empty($_POST["phone"])) {
     $phoneErr = "Phone number is required";
    
   } 

   else {
     $phone = $_POST["phone"];
    if (!preg_match("/^[0-9]*$/",$phone)) {
    
   $phoneErr = "Only numerics allowed";
      }
   }

if (empty($_POST["password"])) {
     $passwordErr = "Password is required";
    } 

   else {
     $password = $_POST["password"];
    if (!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,20}$/",$password)) {
    
   $passwordErr = "Password must contain atleast one capital letter,one special character,one numeric";
      }
   }

}


?>
<div class="container" align="middle">
   <br><br><br>

<form class="form2" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  
  <h1><b><font face="cooper black">Enter Company Details</b></font></h1><br>
  *required<br><br>
  <b>Company Name</b><br>
  <input type="text" name="company" required />
  <span class="error">* <?php echo $companyErr;?></span><br>
<br>
  <b>Registered id</b><br>
  <input type="text" name="id" required />
  <span class="error">* <?php echo $idErr;?></span><br>
<br>
  <b>Email</b><br>
  <input type="text" name="email" required />
  <span class="error">* <?php echo $emailErr;?></span><br>
<br>
  <b>Marketing head Phone Number</b><br>
  <input type="text" name="phone" required/>
  <span class="error">* <?php echo $phoneErr;?></span><br>
<br>
  <b>Head office Address</b><br>
  <input type="text" name="address"/ required>
  <span class="error">* <?php echo $addressErr;?></span><br>
<br>
  <b>Category</b><br><br><select name="category">
    <option>Technical</option>
    <option>Management</option>
    <option>Law Corporation</option>
    <option>Accountancy</option>
    <option>Enterpreneur</option>
    </select><br><br><br> 
 <b> Password(6 or more characters)</b><br>
  <input type="password" name="password" required />
  <span class="error">* <?php echo $passwordErr;?></span><br>

  <input type="submit" name="submit"><br>
<br>
</form>
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


