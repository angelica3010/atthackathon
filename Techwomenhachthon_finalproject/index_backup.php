<!DOCTYPE html>



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

      <!-- Static navbar -->
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
              <li class="active"><a href="#">Search</a></li>
              <li><a href="login.php">Profile</a></li>
              <li><a href="#">Your Resources</a></li>

            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

      <!-- Main component for a primary marketing message or call to action -->
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
                
            <h2> Your Volunteer Profile </h2>
                <div class="row">
                    <div class="col-md-6">
    					<div class="panel panel-default" style = "padding-left:30px;padding-right:30px; padding-top:25px;">
            					<form id="form1" name="form1" method="post" action="">
                           
                                     <div class="form-group" style = "padding-left:20px;padding-right:20px;">
                                          <label for="inputlg">Volunteer Project</label>
                                          <input class="form-control input-lg" type="text" name="msg" id="msg">
                                     </div>
                                     <div class="form-group" style = "padding-left:20px;padding-right:20px;">
                                          <label for="inputlg">Reflection Journal</label>
                                          <input class="form-control input-lg" type="text" name="name" id="name">
                                     </div>
                                     <label>Submit
                                     <input type="submit" name="submit" id="submit" value="Submit" />
                                     </label>
                                     </p>
                                </form>
                                
                                 <?php
                                    $msg = $_POST["msg"];
                                    $name = $_POST["name"];
                                    $posts = file_get_contents("posts.txt");
                                    $posts = "$msg - $name\n" . $posts;
                                    file_put_contents("posts.txt", $posts);
                                    echo $posts;
                                 ?>
                        </div>
    				</div>
        </div>
           
      </div>

    </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

<footer>
    
</footer>
</html>