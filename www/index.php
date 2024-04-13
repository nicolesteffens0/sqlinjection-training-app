<?php
//function to check if sqlitraining database is created or not.
ob_start();
session_start();
include("db_config.php");
ini_set('display_errors', 1);
?>
<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>SQL Injection</title>

    <link href="./css/htmlstyles.css" rel="stylesheet">
	</head>

  <body>

    <div class="container-narrow">
        <div class="jumbotron">
			<h1 style="color:white">SQL Injection - Training App</h1>
			<p class="lead" style="color:white">
				An application designed to practice and learn manual detection and exploitation of SQL Injection flaws
			</p>
        </div>
		<br />
    <div class="row marketing">
        <div style="border:1px solid #000000; padding: 10px">
          <b>Use the username and password combo below.</b><br />
        <ul>
          <li>bob:password</li>
        </ul>
        </div>
        <br />
        <div style="border:1px solid #000000; padding: 10px">
        <b>Additional information</b>
        <ul>
        <li>The database needs to be setup before beginning. To (re)set the database, navigate to <a href="resetdb.php">reset database</a>.</li>
        <li>Most pages support a debug view to see the query being run. Add <b>?debug=true</b> to the URL to enable this.</li>
        <li>The application is meant to be a deliberately insecure to practice and learn SQL Injection attacks. <b>Do not run on a server exposed to the Internet or in untrusted environments!</b></li>
        </ul>
        </div>
    </div>		
      <div class="row marketing">
        <div class="col-lg-6">

    <div style="border:1px solid #000000; padding: 10px">
		 
          <p>Click on this link to go to the vulnerable login page.</p>	  
		  <h4><a href="os_sqli.php?user=<?php echo $_SESSION['username'];?>" style="color:#B31D14">os_sqli.php - can be used to interact with the filesystem and the OS via the MySQL databases</a></h4>
          </div>
      </div>

</div>
      <div class="footer">
		<p><a href="https://appsecco.com">Appsecco</a> | Riyaz Walikar | <a href="https://twitter.com/riyazwalikar">@riyazwalikar</a></p>
      </div>

    </div> <!-- /container -->

  

</body></html>
