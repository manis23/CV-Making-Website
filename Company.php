<html>
<head>
<title>company</title>
<style>
* {box-sizing: border-box;}
body{
	
	font-family:Arial;
	background-image: url("linked.jpg");
    height: 100%; 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   
}
.topnav {
  overflow: hidden;
  background-color:#32127A;
}
.topnav a {
  float: left;
  color: white;
  margin-top: 10px;
  padding: 4px 16px;
  text-decoration: none;
  font-size: 34px;
}
.topnav a:hover {
  background-color: #89cff0;
}

.topnav a.active {
  background-color: blue;
  color: white;
}

.topnav .logincontainer {
float:right;
}
.topnav input[type=text] {
  padding: 6px;
  margin-top: 10px;
  font-size: 17px;
  border: none;
  width:120px;
}
.topnav input[type=password] {
  padding: 6px;
  margin-top: 10px;
  font-size: 17px;
  border: none;
  width:120px;
}
.topnav .logincontainer button {
  
  float: right;
  padding: 6px 10px;
  margin-top: 10px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}
.topnav .logincontainer button:hover {
  background-color: green;
}

.MyForm {
    
    position: absolute;
    right: 0;
    left : 80vh;

    margin: 20px;
    max-width: 400px;
    padding: 16px;
    background-color: white;
}
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}
.SignUpButton {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}
.cr {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin-top:400px; 
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 10;
    max-width: 300px;
}
.BottomSection{

}
</style>
</head>
<body>
<div class="topnav">
 	<a href="homepage.html"class="active">Jobs.com</a>
 	<a href="#about">Devolpers</a>
	<div class="logincontainer">
 		<form>
		<input type="text" placeholder="Email">
  		<input type="Password" placeholder="Password">
  		<button type="submit">Login</button>
  	    </form>
    </div>
</div>
<div class="Userform">
<form class="MyForm">
	Company Name<br>
	<input type="text"/><br>
	Registered id<br>
	<input type="text"/><br>
	Email<br>
	<input type="text"/><br>
	Marketing head Phone Number<br>
	<input type="text"/><br>
	Head office Address<br>
	<input type="text"/><br>
	Category<br><br><select>
		<option>Technical
		<option>Management
		<option>Law Corporation
		<option>Accountancy
		<option>Enterpreneur
		</select><br><br><br>	
	Password(6 or more characters)<br>
	<input type="password"/>
	
		<button type="submit" class="SignUpButton">Join now</button>

	
</form>
</div>
<div class="registerd company">
	  	Company Registered with us:
</div>

