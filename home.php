
<!DOCTYPE html>
<html>
<head>
	<title>OSU HIRING OPPORTUNITIES</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<header id="main-header">
		<div class="container">
			<h1>OSU HIRING OPPORTUNITIES</h1>
		</div>
	</header>

	<nav id="navbar">
		<div class="container">
			<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="employer_signup.html">Employer</a></li>
			<li><a href="student_signup.html">Sign Up</a></li>
			<li><a href="http://localhost/hiring/profile.html">Your Profile</a></li>
			<li><a href="contact.html">Contact</a></li>


		</ul>
		</div>
	</nav>

	<section id="showcase">
		<div class="container">
			<h1>Let employers find you and know more about your skills</h1>
		</div>
	</section>

	<div class="container">
		<section id="main">
			<h1>Welcome</h1>


			<small>a project website for CS561 class</small>
		 	<p>
		 		There are some skills and qualities employers seek in all their employees, regardless of the position. These are called soft skills, and they include the interpersonal skills and attributes you need to succeed in the workplace. They are also commonly referred to as professional skills, those that maintain a healthy workplace environment. </p>
		</section>

<?php
	if (isset($_POST['islogin'])){
		echo <<<EOT
			<form method="POST" action="signin.php">
			<aside id="sidebar">
				<label >Email</label>
	 <div class="form_input">
	    <input type="email" name="email" placeholder="Enter your OSU email address"/>
		</div>

	<label >Password</label>
	 <div class="form_input">
	    <input type="password" name="pass" placeholder="Enter your password"/>
		</div>

	<div>
	</div>
		<div><label>
	      <input type="submit" name="submit" value="LOGIN"/>
	    </label>
	</div>
			</aside>
			</form>
		</div>
EOT;
}
	else{
		echo <<<EOT
		<table border="1">
  <tr>
    <th>firstName</th>
    <th>F_name</th>
  </tr>
  <tr>
    <td>Email</td>
    <td>ABC@Oregonstate.edu</td>
  </tr>
	<tr>
		<th>Major</th>
		<th>EECS</th>
	</tr>
	<tr>
		<th>Degree</th>
		<th>Masters</th>
	</tr>
	<tr>
    <th>city</th>
    <th>Corvallis</th>
  </tr>
	<tr>
    <th>Address</th>
    <th>97330</th>
  </tr>
</table>
EOT;
	}

?>
	<footer id="main-footer">
		<p>Copyright &copy; 2020, OSU-CS561 Class Students</p>
	</footer>
</body>
</html>
