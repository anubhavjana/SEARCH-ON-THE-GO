<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
<title>ONLINE TRANSPORT SYSTEM</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
body
{
	color:#F4511E;
}
.jumbotron
{

  padding:50px 50px 50px 50px;
  margin:-20px;
  background:#9575CD;
  color:floralwhite;
}
.row-content
{
  margin:0px auto;
  padding:50px 0px 50px 0px;
  min-height:400px;
  background-image: url("https://visual.ly/blog/wp-content/uploads/2015/10/Feedback-to-Creatives-.png");
  background-repeat: no-repeat;
  background-size: contain;
  width:1370px;
}.container1
{
	text-align:center;
	padding:50px 50px 50px 50px;
	margin:0px auto;
	background-image: url("gray.jpg");
	background-repeat:round;
	background-size: contain;
}

</style>
</head>
<body>
	<nav  class="navbar navbar-inverse" style="width:1370px">
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:red;" class="navbar-brand" href="index.php">SEARCH ON THE GO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">TRAINS</a></li>      
      <li><a href="maps.php">CAB ROUTES</a></li>      
      <li><a href="searchbus.php">BUSES</a></li>
      <li><a href="cabs.php">CABS</a></li>
      <li><a href="feedback.php">SEND FEEDBACK</a></li>
      <i class="icon-large icon-cars"></i>
    </ul>
    
  </div>
</nav>
<header class="jumbotron">
        <div class="container">
            <div class="row row-header">              
                <div class="col-12 col-sm-8">
                    <h1 style="color:orange";>SEARCH ON THE GO</h1>
                    <p style="color:yellow";>We take inspiration from the World's best transport online portals, and create a unique fusion experience.</p>
                </div>
                <div class="col col-sm">
                    <div class="col col-sm align-self-center">
                    
                </div>
                </div>
            </div>
        </div>
    </header><br><br><br>
 <div class="container1">

<?php
$serverName='localhost';
$username='root';
$password='';
$databaseName='transport'; 
$connection=mysqli_connect($serverName,$username,$password,$databaseName) or die("Could not connect !");
$fname=$_POST["firstname"];
$lname=$_POST["lastname"];
$email=$_POST["emailid"];
$feedback=$_POST["feedback"];
$fetchDataQuery="INSERT INTO feedback(firstname,lastname,email,comments) VALUES('$fname','$lname','$email','$feedback') " ; 
$result=mysqli_query($connection,$fetchDataQuery);
if(!empty($result))
{
	echo "<h1><b>YOUR FEEDBACK HAS BEEN POSTED SUCCESSFULLY !</i></h1>";
	header("refresh:5; url=index.php");

}
else
{
	echo "UNABLE TO POST YOUR FEEDBACK ! PLEASE TRY AGAIN";
}
?>
</div>
</body>
</html>