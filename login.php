<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>
Demo: Javascript/jquery
</title>

<link type="text/css" rel="stylesheet" href="css/bootstrap.css">
<link href="css/font-awesome.css" rel="stylesheet">
<style>
body{ margin: 0;
padding:0; 
outline: none;
font-family: "Geo Sans Light";
-webkit-font-smoothing: antialiased;  
-webkit-text-stroke: 0.4px;

}

h1{
 font-family: "Geo Sans Light";
}
@font-face {
    font-family: "Geo Sans Light";
    src: url('fonts/GeosansLight.ttf') format("truetype"); 
}


.row{
	margin-top: 100px;	
}

.panel,
.panel-default{
	padding: 30px 100px 60px;
	background: url('images/content_bg.jpg') repeat;
	

}

.form-control{
	
	border-style: inset;
	border-width: 2px;
	background-color: 
}


.btn{
	

	width: 100%;
	float: right;
}

#msg{
	
	font-size: 15px;
	background-color: #f7f8c2;
	text-align: center;
	
}

#help-content{
	
display: none;
	
}


#help-content:target{
font-size: 20px;	
display: block;
}


@media (max-width: 500px) {
	
.panel,
.panel-default{
	padding: 30px 30px 60px;	
	
	
}
</style>


<script>

function validation()
{
	var x = document.getElementById("username").value;
	var msg= document.getElementById("msg");
	msg.style.backgroundColor= "";
	
	var check = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	if (!check.test(x)){
	
    msg.innerHTML="Please provide a valid email addres";
	}
	else
	{
	 msg.innerHTML="";	
	}
	
}   
 
  
function check()
{

var user = document.getElementById("username").value;
var pass = document.getElementById("password").value;
var msg = document.getElementById("msg");
msg.style.backgroundColor= "";

if(user =="admin@admin.com" && pass =="12345")
{
	
 msg.innerHTML="Login successful";		
 msg.style.backgroundColor = "#c6fbc9";
 setTimeout("msg.innerHTML='' ",5000);
 document.location = "admin.php";

 }

else
{
	msg.innerHTML="Invalid login";		
 msg.style.backgroundColor = "#fdd0c4";	
	
}

}
	
</script>

</head>
<body>
	
<div class="container">
		<div class="col-md-12">
			<a  href="#help-content"><i class="fa fa-question-circle">Click for info</i></a>
			<div id="help-content">
				<p>This is a demo login page. This does not use <code>&lt;form&gt;</code> element because i wanted to show the Javascript validation and, on this screen itself.
				<br>Use these credentials for successful login :<br> Email : admin@admin.com<br> Password: 12345</p>
			</div>
		</div>
</div>
	
	
<div class="container">
	<div class="row">
	
	
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<h1 style="text-align: center" >Login</h1><br><hr>
				<div class="form" style="font-size: 24px">
					<div id="msg"></div>
					Email: <input type="email" id="username" placeholder="Enter your email" class="form-control"  onblur="validation()" required><br>
					Password: <input type="password" id="password" placeholder="Enter your password" class="form-control" required>
					<hr>
					<button class="btn btn-default btn-lg" onclick="check()" >Login</button>			
				</div>	
			</div>
		</div>
	</div>	
</div>
	
	
	
<script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</body>
</html>