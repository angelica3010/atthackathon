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


$sql = "INSERT INTO Loginfor (username, password) VALUES ('$usr', '$psd')";
//echo $sql;



if ($conn->query($sql) === TRUE) {
    echo "Sign up Successfully!";
} else {
    echo "Sign up errors:( " . $conn->error;
}

$conn->close();

?>
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
     <div class="container">
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
      
       <div class="jumbotron">
          <h1 class="display-3">Welcome to Unteer</h1>
          <p class="lead">Build Your Volunteer Experience and connect with your future employers</p>
          <hr class="m-y-2">
            <ul>
              <li>Get an inside view of an industry and organization/company</li>
              <li>Gain valuable skills and knowledge</li>
              <li>Make professional connections and enhance your network</li>
              <li>Get experience in a field to allow you to make a career transition</li>
            </ul>
          <!--<h4><a href = "entry.php">Back to Log in </h4></a>-->
          <a href = "entry.php"><button type="button" class="btn btn-info">Log in</button></a>
         

           
        </div>

     </div>
</body>
    
</html>
