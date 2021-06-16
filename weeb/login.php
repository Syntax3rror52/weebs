<?php include('config.php'); ?> 
<!DOCTYPE html>
<html>
<head>
	
	<title>Validated Login Form</title>
	
	<link rel="stylesheet" href="css/login.css">
 <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

  <script src="js/validation.js"></script>

</head>
<body>

  <h1 class="head">Welcome Back!</h1>
  <img src="img/2.jpg" class="image">
	<div class="container">
		<img src="img/logo.png">
		<h1 class="label"><span style="color:white ; font-style:Sans-serif; font-weight: medium;">Log</span>
    <span style="color: black; font-style:Sans-serif;font-weight: medium;"> In</h1>
		<form class="login_form" method="post" action="index.html" name="form">
			<div class="font">Username</div>
			<input type="text" name="userid" id="username" onkeyup="nospaces(this)" required>
			<div class="font font2">Password</div>
			<span><input type="Password" id="password" required></span>
      <i class="far fa-eye"  id="hide" onclick="show()"></i>
      <i class="far fa-eye-slash"  id="show" onclick="show()"></i>
			 <input type="button" class="button" onclick="check(this.form)" value="Login">

			 <p class="forgot"> Forgot password?</p>
		</form>
		<div class="box">
		<input type="checkbox">
  				<label for="checkbox"> Remember me</label>
	</div>	
		<button onclick="document.getElementById('bg-modal').style.display = 'block'" id="button" class="button2">Sign Up</button>
</div>
		<div id="bg-modal" class="modal">
			
				<form action="" class="form">	
	
			<h1 class="sign"><span style="color:white ;font-weight: normal;">SIGN</span>
			<span style="color: black; font-weight: bold;">UP</span></h1>
			<div onclick="document.getElementById('bg-modal').style.display = 'none'"class="close">+</div>
    		<form id="contactform" tabindex="1">
          
          <form method="post" action="">

    		
          <form id="contactform"> 
          <p class="contact"><label>Name</label></p> 
         <input type="text" name="fname" placeholder="Full Name">

          <p class="contact" type="number"><label>Age</label></p> 
          <input type="text" name="age" placeholder="Age" onkeypress="javascript:return isNumber(event)">

          <p class="contact"><label>Date of Birth</label></p> 
          <td><input type="date" name="dob" ></td>  

          <p class="contact"><label>Gender</label></p> 

          <td><input type="radio" name="gender" value="Male"> Male </td>
          </tr>

          <td><input type="radio" name="gender" value="female"> Female </td>

          <p class="contact"><label>Email</label></p> 
          <input type="email" name="email" placeholder="example@example.com" >

           <p class="contact"><label>Create a username</label></p>
         <input type="text" name="username" placeholder="Username" onkeyup="nospaces(this)">     

          <p class="contact"><label>Password</label></p> 
         <input type="password" class ="contact" name="password" >

            <p id="txt2"></p>
            <p class="cpass_txt"><label for="confirmpass">Confirm your password</label></p> 
           <input type="password" class ="cpass" name="cpassword" >

           <p class="contact"><label>Phone</label></p> 
          <input type="tel" class="phonum" name="phone" onkeypress="javascript:return isNumber(event)"  >

          <button  tabindex="12" name="submit" onclick="sign()" class="button3">Submit</button> <br>


</form>

</body>
</html>