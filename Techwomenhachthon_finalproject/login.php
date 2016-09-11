<!--<?php
$servername = "localhost";
$username = "xd2164";
$password = "";
$dbname = "c9";
$usr = $_POST['name'];
$psd = $_POST['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "Select password from Loginfor where username= '$usr' ";



$result = $conn->query($sql);

if ($result->num_rows > 0) 
   {
        // output data of each row
    	if ($result->num_rows > 1) {
    		echo "multiple password error";
        } 
        else {
    	    $stored_psd = null;
        	while($row = $result->fetch_assoc()) 
        	{
        		$stored_psd = $row["password"];
             }
         }
    } 
else {
    echo "0 results";
    }
    
if ($stored_psd == $psd){
	echo 'Log in successfully';
}
else{
    echo 'wrong password';
}


    

$conn->close();
?>-->

<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Unteer</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class = "container">
        <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Unteer</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="entry.php">Home</a></li>
              <li><a href="login.php">Profile</a></li>
              <li><a href="resource.php">Search</a></li>
              <li><a href="resource.php">Resources</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
      <!--Plug in PHP-->
      
      <?php
            $servername = "localhost";
            $username = "xd2164";
            $password = "";
            $dbname = "c9";
            $usr = $_POST['name'];
            $psd = $_POST['password'];
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            
            
            $sql = "Select password from Loginfor where username= '$usr' ";
            
            
            
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) 
               {
                    // output data of each row
                	if ($result->num_rows > 1) {
                		echo "multiple password error";
                    } 
                    else {
                	    $stored_psd = null;
                    	while($row = $result->fetch_assoc()) 
                    	{
                    		$stored_psd = $row["password"];
                         }
                     }
                } 
            else {
                echo "0 results";
                }
                
            if ($stored_psd == $psd){
            	echo 'Log in successfully';
            }
            else{
                echo 'wrong password';
            }
            
            
                
            
            $conn->close();
            ?>

      
      
      <div class="jumbotron">
        <h2>Build Your Volunteer Experience</h2>
        
               <div class="row">
                  <div class="col-md-6">
                              <section id="introduction">
    								<div class="panel panel-default">
    									<div class="panel-body">
    										<h3 style = "padding-left:20px"><span class="glyphicon glyphicon-camera" aria-hidden="true"></span> Upload Volunteer Photos</h3>
    									<button type="button" class="btn btn-primary btn-lg btn-block">Add Your Photos</button>
    									</div>
    									
    								</div>
                             </section>
                             <section id="introduction">
    								<div class="panel panel-default">
    									<div class="panel-body">
    										<h3 style = "padding-left:20px"><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Organizations</h3>
    									<button type="button" class="btn btn-success btn-lg btn-block">Build Your Network</button>
    									</div>
    									
    								</div>
                             </section>
                  </div>
                  <div class="col-md-6">
                              <section id="introduction">
    								<div class="panel panel-default">
    									<div class="panel-body">
    										<h3 style = "padding-left:20px"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Design Volunteer Experience</h3>
    									<button type="button" class="btn btn-info btn-lg btn-block">Total Volunteer Experience </button>
    									</div>
    									
    								</div>
                             </section>
                             <section id="introduction">
    								<div class="panel panel-default">
    									<div class="panel-body">
    										<h3 style = "padding-left:20px"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Reflect Volunteer Path</h3>
    									<button type="button" class="btn btn-warning btn-lg btn-block">Write Journal</button>
    									</div>
    									
    								</div>
                             </section>
                    </div>
                </div>
        <h2>Next Step</h2>
         <a href ="resume.php"><button type="button" class="btn btn-primary btn-lg btn-block">View Your Volunteer Portfolio</button></a>
      </div>
        
    </div>
    
</body>

</html>

