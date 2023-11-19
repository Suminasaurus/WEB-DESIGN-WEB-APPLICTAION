<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Akasia</title>
	<style>
		
		.header{
			background-color: white;
			padding: 5px;
			display:block;
			justify-content: space-between;
			align-items:stretch;
		}
		
	body{
		
		height:auto;
		background:linear-gradient(55deg, #DBECE9 0%, #C10303 51%, #0F4C77 85%);
		
  font-family: "Arial", "Helvetica", sans-serif;
		
		
}
	.navbar {
	overflow: hidden;
		background-image: linear-gradient(to right,  #DBECE9,#C10303, #0F4C77);}
	
		.navbar a {
		float:left;
		font-size:20px;
		color: black;
		text-align: center;
		padding: 14px 20px;
		text-decoration: none;
		}
		
		.dropdown {
			float:left;
			overflow:hidden;
		}
		
		.dropdown .dropbtn{
		font-size: 20px;
		border: none;
		outline: none;
		color: black;
		padding: 14px 20px;
		background-color: inherit;
  		font-family: inherit;
  		margin: 0;
		}
		
		.navbar a:hover, .dropdown:hover .dropbtn
		{
			background-color:gray;
		}
		
		.dropdown-content {
		display: none;
		position: absolute;
		background-color: #f9f9f9;
		min-width: 160px;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
			z-index: 1;
		}
		
		.dropdown-content a {
 		 float: none;
  		color: black;
  		padding: 12px 16px;
  		text-decoration: none;
  		display: block;
 		 text-align:left;
		}
		
		.dropdown-content a:hover {
			background-color: #ddd;
		}
		
		.dropdown:hover .dropdown-content {
			display: block;
		}
		
		.content-container{
			display:flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			text-align: center;
		}
		
		.content img{
			max-width: 90%;
			display:block;
			margin:0 auto;
		}
		
		.footer{
			display:flex;
			justify-content:space-between;
			align-items: center;
			padding:20px;
			color: black;
		}
		
		.copyright {
			text-align: center;
		    margin-top: 100px;
            color:#403B37;
		    font-size: 16px;
			color: black;
	    }
		
		.caption {
			display:block;
			background-color: white;
			background-size:50px;
			padding: inherit;
			text-align: center;
			color: black;
			align-items: stretch;
		}
		.body1{
			display:block;
			background-color: black;
			background-size:50px;
			padding: inherit;
			text-align: center;
			color: white;
			align-items: stretch;
		}
		
		.body1 h1 b {
    font-family: Cambria, Hoefler Text, Liberation Serif, Times, Times New Roman, serif;
}
		.video1 {
			align:center;
			width;70%;
		}
	
    </style>
</head>

<body>
	<header>
	<div class="header">
	<img src="Logo.png" alt="logo" height="50px" width="auto">	
	<div class="navbar">
		<a href="https://www.uptm.edu.my/">Home</a>
		<a href="Time_Slot.php">Booking Slot</a>
	<div class="dropdown">
		<button class="dropbtn">Admin<i class="fa fa-caret-down"></i></button><div class="dropdown-content">
		<a href="admin_page.php">ADMIN PAGE</a>
		<a href="registration_form.php">Admin Registration</a>
		</div>
		</div>
	</div>
	</div>
	</header>
	
<div class="body1">

	<h1><b> AKASIA ROOM </b></h1>
	</div>
	<p style="text-align: center;"><img src="akasia3.jpg" alt="akasiaroom" height="416" width="1066">
	
<div class="caption">
	<br><h2><b><u>ABOUT US</u></b></h2>
	
	<p>Hi!! We are 2023 Akasia Team and this is our practice room or also known as <i><b>AKASIA ROOM</b></i>. Now we create this website for you to use this room for other event such as talks, dance practice, festival and etc.</p><br></div>
		 
	
<div class="body2">
		<p style="text-align: center;"><img src="akasia2.jpg" alt="akasiateam" height="450" width="310"></p>
	<p></p> </div>
	<div class="body1">
		<h1><b> AKASIA TEAM DANCE PRACTICE </b></h1></div>
	<div class="video1">
	<video width="700" height="500" align="center" style="margin-left: 400px;" controls>
		<source src="video1.mp4" type="video/mp4" >
    </video></div>
	
 
	
	
<main style="align-content: center"
	

	<footer>
  <div class="copyright"> <p><b>&copy; 2023 Akasia. All rights reserved.</b></p></div>
	</footer>
</body>
</html>
