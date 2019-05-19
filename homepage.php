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
    
    
    background-size: cover;
}
.container1 a{
  font-size: 28px;
}
.form2 {
    max-width: 350px;
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
     <h2><a class="navbar-brand" href="homepage.php"><b>Jobs.com</b></a></h2>
   </div>
   <div class="navbar-right navbar-align">
    <form >
      <input type="text" placeholder="Email">
	    <input type="Password" placeholder="Password">
 	    <input type="submit" value="Login">
  </form>
</div>

</nav>
<div class="container" align="middle">
   <br><br><br>
<form class="form2" method="post" action="newcvpage.php">
  <h1><b>Enter Your Details</b></h1>
First Name<br>
<input type="text" name="firstname" required/><br>
<?php if(isset($firstname)){echo $firstname,"<br>";}?>
Last Name<br>
<input type="text" name="lastname" required/><br>
<?php if(isset($lastname)){echo $lastname,"<br>";}?>
Email<br>
<input type="text" name="email" required/><br>
<?php if(isset($email)){echo $email,"<br>";}?>
Phone Number<br>
<input type="text" name="phonenumber" required/><br>
<?php if(isset($phonenumber)){echo $phonenumber,"<br>";}?>
Password(6 or more characters)<br>
<input type="password" name="password" required /><br><br>
<?php if(isset($password)){echo $password,"<br>";}?>
<input type="submit" value="JOIN NOW"><br>
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
  <a class="navbar-brand" href="../Cover Page3.php">About Us</a>
  <a class="navbar-brand" href="../Cover Page3.php">What We Do</a>
</footer>


<?php
// define variables and set to empty values
$firstname=$lastname=$email=$phonenumber=$password="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if(preg_match('/\s/',$_POST["firstname"]))
  {
   $firstname="Your firstname must not contain any whitespace";
  }
  else if(empty($_POST["firstname"]))
  {
   $firstname="Your firstname must contain some word";
  }
  else if(ctype_alpha($_POST["firstname"]))
  {
   $fisrtname="Your firstname does not consist of all letters";
  }
  if(preg_match('/\s/',$_POST["lastname"]))
  {
   $lastname="Your lastname must not contain any whitespace";
  }
  else if(empty($_POST["lastname"]))
  {
   $lastname="Your lastname must contain some word";
  }
  else if(ctype_alpha($_POST["lastname"]))
  {

   $lastname="Your lastname does not consist of all letters";
  }
  if(preg_match('/\s/',$_POST["email"]))
  {
   $email="Your email must not contain any whitespace";
  }
  else if(empty($_POST["email"]))
  {
   $email="Your email must contain some word";
  }
  if(preg_match('/\s/',$_POST["phonenumber"]))
  {
   $phonenumber="Your phonenumber must not contain any whitespace";
  }
  else if(empty($_POST["phonenumber"]))
  {
   $phonenumber="Your phonenumber must contain some word";
  }
  else if(strlen($_POST["phonenumber"])<10 || strlen($_POST["phonenumber"])<10)
  {
   $phonenumber="Your phonenumber must contain only 10 digits";
  }
  else if(!ctype_digit($_POST["phonenumber"]))
  {
   $phonenumber="Your phonenumber contain non-numbers";
  }
  if(empty($_POST["password"]))
  {
   $password="Your password must contain some word";
  }
  else if(strlen($_POST["password"])<6)
  {
   $password="Your password must contain at least 6 word";
  }
}
?>