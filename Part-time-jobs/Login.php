<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Navigation Bar</title>
</head>
<body>


<nav class=" navbar navbar-expand-lg fixed-top " style="background-color: whitesmoke;">
	
	<div class="container-fluid">
		
		<a href="" class="navbar-brand">
			<!--<h3>CC || Career Care</h3>-->
			<img src="career4.png" height="40">
		</a>

			<button class="navbar-toggler navbar-toggler-right bg-primary" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive">
				Menu
				<i class="fa fa-bars"></i>
			</button>
			
		
		<div class="collapse navbar-collapse" id="navbarResponsive">

		
			<ul class="navbar-nav ml-auto" >

			<li class="nav-item"><a href="Preview.php" class="nav-link" style="color: orangered; font-size: 20px;">Home</a><li>
				
				<li class="nav-item"><a href="" class="nav-link" style="color: orangered ; font-size: 20px">Notification</a></li>
				<li class="nav-item"><a href="" class="nav-link" style="color: orangered; font-size: 20px">Contact</a></li>
				<li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown" style="color: orangered; font-size: 20px" >Jobs</a>
					<div class="dropdown-menu" id="navbarDropdown">
                       <a class="dropdown-item" href="">#1</a>
                       <a class="dropdown-item" href="">#2</a>
                       <a class="dropdown-item" href="">#3</a>
                    </div></li>
			<li class="nav-item dropdown"><a href="admin.php" class="nav-link" style="color: orangered; font-size: 20px" >Admin</a>
					
				</li>
				<li class="nav-item dropdown"><a href="" class="nav-link dropdown-toggle" id="navbarDropdown" data-toggle="dropdown"  style="color: orangered ; font-size: 20px;">Sign Up/In</a>
				<div class="dropdown-menu" id="navbarDropdown">
                       <a class="dropdown-item" href="user_signup.php">User</a>
                       <a class="dropdown-item" href="recruiter_signup.php">Recruiter</a>
                       
                    </div></li>
			</ul>
		


		<form class="form-inline">
				<input type="Search" placeholder="Search" id="input" class="form-control mr-sm-2" required="required" title="">
				<button type="Search" class="btn btn-outline-primary">Search</button>

			</form>




		</div>

	</div>

</nav>
<style>
	
li a:hover{
	background-color: lightgray;


}

</style>


<br>
<br>
<br>
<br>
<br>
<br>


<div class="container-fluid">
	<div class="card col-4 offset-4" style="background-color: whitesmoke;">
		
		
					

						

							<img src="log.png" class="w-100">
					
	<div id="frmRegistration">
		
	
		<form class="text-center" method="POST" action="login_code.php">
	
	<h4 class="">User Login Form</h4>
	<br>
  <div class="form-group">
    <label for="email">Email:</label>
    
      <input type="email" class="form-control fa fa-enevelope" required name="email" id="email" placeholder="&#xf0e0 Enter email ">
    
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    
      <input type="password" name="password" class="form-control fa fa-lock" required name="password" id="pwd" placeholder="&#xf023 Enter password ">

      <br>
      <br>

      <div class="row">
      	<div class="col-6">

      <a href="">Forgot Password?</a>
</div>
<div class="col-6">

      <a href="user_signup.php">Don't have an account?</a>
    </div>
      </div>
    
  </div>
  <div class="form-group"> 
    
      <button type="submit" name="login" class="btn btn-primary">Login</button>
    
  </div>
</form>
					
		</div>
	</div>

</div>
</div>

		

<br>
<br>


<hr>


<footer style="background-color: whitesmoke;">
	<div class="container-fluid">
		<div class="row text-center">

			<div class="col-md-4" style="color:orangered;">
				<br>
				<ul class="list-unstyled">
					<strong class ="text-primary" style="font-size:20px "><li class="">Career care</li></strong>
					<li class="ho">Mubashir</li>
					<li class="ho">Zeeshan</li>
					<li class="ho">Hamza</li>
					
					
				</ul>
			</div>

			<div class="col-md-4" style="color:orangered ;">
				<br>
				<ul class="list-unstyled">
					<strong class ="text-primary" style="font-size:20px "><li class="">Quick Links</li></strong>
					<li class="ho">Mubashir</li>
					<li class="ho">Zeeshan</li>
					<li class="ho">Hamza</li>
					
					
				</ul>
			</div>

			<div class="col-md-4" style="color: orangered;">
				<br>
				<ul class="list-unstyled">
					<strong class ="text-primary" style="font-size:20px "><li class="">Location</li></strong>
					<li class="ho">Mubashir</li>
					<li class="ho">Zeeshan</li>
					<li class="ho">Hamza</li>
					
					
				</ul>
			</div>
			</div>

			<hr>

			
           
           <div class="text-center" style="color: orangered;">
				
				
				<p>Copyright @2022 All Rights Reserved by: <a href=""><strong class="text-danger">CAREER CARE</strong></a></p>
			</div>

			<div class="text-center" style="color: orangered;">
				
					<ul class="list-unstyled list-inline">
					<li class="list-inline-item"><a href=""><i class="fa fa-facebook" style="font-size: 30px; color: blue;"></i></a></li>
					<li class="list-inline-item"><a href=""><i class="fa fa-twitter" style="font-size: 30px; color: skyblue;"></i></a></li>
					<li class="list-inline-item"><a href=""><i class="fa fa-github" style="font-size: 30px; color: lightblue;"></i></a></li>
					<li class="list-inline-item"><a href=""><i class="fa fa-instagram" style="font-size: 30px; color: pink;"></i></a></li>
				</ul>
			</div>
			<br>
		

		
		
	</div>
	



</footer>

<style type="text/css">
	
.ho:hover{
	background-color: lightgray;
}

</style>






<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- js tags -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>	

</body>
</html>