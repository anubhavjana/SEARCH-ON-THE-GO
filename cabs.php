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
<link rel="stylesheet" type="text/css" href="main.css">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<style>
body,
html {
  height:100%;
  margin: 0;
  padding: 0; 
  background-image: url("http://www.dragonartz.net/wp-content/uploads/2013/12/Vector-Blurred-Colorful-Backgrounds-by-DragonArtz_Prev.jpg");
  background-size: cover;

  
  
}

input[type=text]:focus
 {
    background-color:#E1BEE7;

}
input[type="text"]
{
  margin:15px;   
}
button {
    background-color:#FF3D00;
    color:#FFE082;
    padding: 10px;
    margin: 20px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    bottom:0;
    

}

.jumbotron
{

  padding:50px 50px 50px 50px;
  margin:-20px;
  background:#9575CD;
  color:floralwhite;

}
.row-header
{
  margin:0px auto;
  padding:0px auto;
}
.row-content
{
  margin:0px auto;
  padding:50px 0px 50px 0px;
  min-height:400px;
}
.search
{
  background-image: url("http://www.mindinventory.com/blog/wp-content/uploads/2017/01/taxi-booking-app.jpg"); 
  background-size:cover;  
  background-repeat:round;
  padding:30px 30px 30px 30px;
  margin:0px auto;
  align-self: center;
  width:1368px;
  height:100%;
  
}
.container
{
  width:100%;
  padding:50px 50px 50px 50px;
  margin:0px auto;
  background: rgb(26, 188, 156);
  background: -moz-linear-gradient(-45deg, rgba(26, 188, 156, 1) 0%, rgba(142, 68, 173, 1) 100%);
  background: -webkit-linear-gradient(-45deg, rgba(26, 188, 156, 1) 0%, rgba(142, 68, 173, 1) 100%);
  background: linear-gradient(135deg, rgba(26, 188, 156, 1) 0%, rgba(142, 68, 173, 1) 100%);

  
}
.container1
{
  
  margin:0px auto;
  padding:0px 10px -10px 10px;
  width:100%;
  height:40%;

}


</style>
</head>
<body>
  

    <nav  class="navbar navbar-inverse" style="width:1368px;" >
  <div class="container-fluid">
    <div class="navbar-header">
      <a style="color:red;" class="navbar-brand" href="index.php">SEARCH ON THE GO</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="trains.php"> TRAINS</a></li>      
      <li><a href="maps.php"> CAB ROUTES</a></li>      
      <li><a href="searchbus.php"> BUSES</a></li>
      <li><a href="cabs.php"> CABS</a></li>
      <li><a href="feedback.php">SEND FEEDBACK</a></li>
      <i class="icon-large icon-cars"></i>
    </ul>
    
  </div>
</nav>
  <div class="jumbotron">
        <div class="container">
            <div class="row row-header">              
                <div class="col-12 col-sm-8">
                    <h1 style="color:orange";>Search On The Go</h1>
                    <p style="color:yellow";>We take inspiration from the World's best transport online portals, and create a unique fusion experience. Looking to book a cab? </p>
                    <p style="color:#DD2C00;animation: blinker 2s linear infinite";><a href="peakhour.php"><span class="glyphicon glyphicon-hand-right" style="color:red";></span>   Cabs rates can be higher during peak hours !!</a></p>
                </div>
                <div class="col col-sm">
                    <div class="col col-sm align-self-center">
                    <img src="" class="img-fluid">
                </div>
                </div>
            </div>
        </div>
    </div>
  
  <div class="container1">
                   
                <h1><marquee  style="text-align:center; color:#283593;  font-family: 'Helvetica', sans-serif; animation: blinker 1s linear infinite; text-shadow: 3px 2px #CDDC39;" direction="right">Welcome To Our Portal</marquee></h1><br>

                    <form class="search" method="post" action="Default.htm">
                        
                        <center><button class="button1" name="search" type="submit">BOOK NOW  <span class="glyphicon glyphicon-send"></span></button></center>
                    </form>
  </div> 
      

</body>
</html>


