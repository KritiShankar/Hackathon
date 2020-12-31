<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--<meta http-equiv="refresh" content="5">-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#json_data").load("http://localhost/KL/data_script.php");
		//refresh();
	
	},10);
});
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>


<style>
body {
  margin: 0;
  font-family: "Times New Roman", Times, serif;
  background-color: #adebad;/*#4CAF50;*/
  
}
table {
	border-collapse: collapse;
  border: 1px solid black;
  width:auto;
  text-align:center;
  margin-left: auto;
  margin-right: auto;
}

td {
  border-bottom: 1px solid black;
  padding:10px;
}

th {
  border-bottom: 1px solid black;
  color:#cccccc;
  background-color:blue;
  padding:10px;
}




tr:hover {background-color: #f5f5f5;}

.topnav {
  overflow: hidden;
  background-color: #0066cc;
  width:100%;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 8px 16px;
  text-decoration: none;
  font-size: 22px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  border-radius: 3px 3px 0px 0px;
}

.topnav a.active {
  background-color:#47d147;/* #4CAF50;*/
  color:#1a1a1a; /*white;*/
  /*border: 2px solid red;*/
  border-radius: 3px 3px 0px 0px;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
     
  }
  

  
  
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;
  	
  }
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}

@media only screen and (min-device-width : 320px) and (max-device-width : 480px) {
  .topnav {
    background: #0066cc;
    width: 100%;
  }
}

.myDiv {
  background-color: white;
  width:98%; 
	border-left: 5px outset red;
	border-radius: 5px;
}

</style>
</head>
<body>

<div class="topnav">
	<h1 style="color:white">&nbsp; DashBoard  </h1>
</div>


<div class="topnav" id="myTopnav">
  <a href="index.html" ><b>Home</b></a>
  <a href="update.php">Updates</a>
  <a href="dataset.php" class="active">Data</a>
  <a href="team.html">Team</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<h1>IOT Data Set</h1>
<div id="json_data" style="padding:10px">
  
  
</div>


<br>
<br>



</body>
</html>


