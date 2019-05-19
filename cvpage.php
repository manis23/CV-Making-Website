<html>
<head>
  <title>cvpage</title>
<style >
	body
	{
	font-family:Arial;
	background-image: url("40CoverPic.jpg");
    height: 100%; 
    background-position: center;
    
    background-size: cover;
    }
    .topnav {
  overflow: hidden;
  background-color:#32127A;
}
.topnav a {
  float: left;
  color: white;
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
 	.cvform2 {
    
    position: absolute;
    left : 60vh;
    margin: 20px;
    width: 500px;
    padding: 16px;
    background-color: white;
}
input[type=text] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}
input[type=text]:focus {
    background-color: #ddd;
    outline: none;
}
.button {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

	</style>
<body>
	<div class="topnav">
 	<a href="homepage.html"class="active"><b>Jobs.com</b></a>
 	<a href="#about">Devolpers</a>
    </div>
</div>
<div class="cvform1" style="">
<form class="cvform2">
	<h1 align="center">INPUT DETAILS</h1>
<b><font size="4">First Name<br></font>
<input type="text">  </input><br>
<br>
<b><font size="4">Last Name <br></font>
<input type="text">  </input><br>
<br>
<b><font size="4">Contact Number<br></font>
<input type="text"> </input><br>
<br>
<b><font size="4">Address<br></font>
<textarea cols="60" rows="4"></textarea> <br>
<br>
<b><font size="4">Core Skills<br></font>
<textarea cols="60" rows="4"></textarea><br>
<br>
<b> <font size="4">Education Qualifications:<br></font>
<br>
<form>
	School Name(10th) <input type="text" name="sname"></input><br>
	School Name(12th) <input type="text" name="snam"></input><br>	
	College(Btech)    <input type="text" name="Btech"></input><br>
	College(Mtech)    <input type="text" name="Mtech"></input><br>
</form>
<br>
<b>Work Experience<br>
<textarea cols="60" rows="4" ></textarea><br>
<br>
<font size="4">Achievements(IF ANY)<br></font>
<textarea cols="60" rows="4"></textarea><br>
<button type="submit" class="button">Submit</button>
<br>
</head>
</body>
</html>
