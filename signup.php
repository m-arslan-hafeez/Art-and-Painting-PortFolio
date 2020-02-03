<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sign Up - Art and Painting</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="section">
			<div class="logo">
				<a href="index.html">Art & P</a>
			</div>
			<ul>
				<li>
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="paintings.html">Paintings</a>
				</li>
				<li>
					<a href="login.html">Log In</a>
				</li>
				<li class="selected">
					<a href="signup.html">Sign Up</a>
				</li>
			</ul>
		</div>
	</div>
<center>
	<form method="POST" >
		<p><br></p>
		<h1>Sign Up</h1>
			<Input  type="text" name="user" placeholder="User Name"/><br><br><br>
			<Input  type="text" name="firstname" placeholder="First Name"/><br><br><br>
			<Input  type="text" name="lastname" placeholder="Last Name"/><br><br><br>
			<Input type="email" name="email" placeholder="Email"/><br><br><br>
			<Input type="text" name="phno" placeholder="Phone Number"/><br><br><br>
			<Input  type="Password" name="password" placeholder="Password"/><br><br><br>
			<Input  type="text" name="contry" placeholder="Country"/><br><br><br>
			<Input  type="text" name="postalcode" placeholder="Postal code"/><br><br><br>
			<input type="radio" name="gender" value="Male"><label>Male</label>
			<input type="radio" name="gender" value="Female"><label>Female</label><br><br><br>
			<input type="checkbox" name="checkbox" value="rule"><label>By Signing Up You are agree to our terms and conditions. </label><br><br><br>
			<input type="submit" name="submit" value="Submit"><br><br><br>
    </form>
</center>
		<div id="footer">
		<div>
			<div class="connect">
				<a href="http://www.twitter.com/go/twitter/" id="twitter">twitter</a>
				<a href="http://www.facebook.com/go/facebook/" id="facebook">facebook</a>
				
			</div>
			<p>
				copyright 2018 all rights reserved.
			</p>
		</div>
	</div>
</body>
</html>


<?php
if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$firstname=$_POST['firstname'];
	$lastname=$_POST['lastname'];
	$email=$_POST['email'];
	$phno=$_POST['phno'];
	$password=$_POST['password'];
	$contry=$_POST['contry'];
	$postalcode=$_POST['postalcode'];
	$gender=$_POST['gender'];
	
$conn=mysqli_connect("localhost", "root", "root", "web_database");
$query=" INSERT INTO `art`(`user`, `firstname`, `lastname`, `email`, `phno`, `password`, `country`, `postalcode`, `gender`) 
VALUES ('$user','$firstname','$lastname','$email','$phno','$password','$contry','$postalcode','$gender')";
$result=mysqli_query($conn, $query);
if($result){
	echo "Data INSERT";
}
else{
	echo "Error";
}
}
?> 