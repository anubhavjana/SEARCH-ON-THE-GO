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
      <li><a href="trains.php">TRAINS</a></li>      
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
    </header>
    <div class="feedback">
    <div class="row row-content">
           <div class="col-12">
             <h2 style="text-align: center; color:#CDDC39";>Send us your Feedback</h2>
           </div><br><br>
            <div class="col-12 col-md-9">
                <form method="post" action="feedconn.php">
                    <div class="form-group row">
                       <label for="firstname" class="col-md-2 col-form-label">First Name</label> 
                       <div class="col-md-10">
                           <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name">
                       </div>
                        
                    </div>
                    <div class="form-group row">
                        <label for="lastname" class="col-md-2 col-form-label">Last Name</label> 
                       <div class="col-md-10">
                           <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                       </div>                        
                    </div>
                    
                    
                    <div class="form-group row">
                      <label for="emailid" class="col-md-2 col-form-label">Email</label>  
                      <div class="col-md-10">
                           <input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
                       </div>                         
                    </div>
                    
                    <div class="form-group row">
                      <label for="feedback" class="col-md-2 col-form-label">Your Feedback</label>  
                      <div class="col-md-10">
                           <textarea  class="form-control" id="feedback" name="feedback" rows="12"></textarea>
                       </div>                         
                    </div>
                    <div class="form-group row">
                       <div class="offset-md-2 col-md-10">
                           <button type="submit" class="btn btn-primary ">Send Feedback</button>

                       </div>                       


                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
</html>
    