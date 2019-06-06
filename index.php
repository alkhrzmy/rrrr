<?php
if($_SERVER["SCRIPT_URI"] == "http://apirzmy.herokuapp.com/index.php"){
  header('Location: https://apirzmy.herokuapp.com/index.php');
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <!--<link rel="icon" href="../../favicon.ico">-->
    
        <title>Welcome to rzmy's API Base</title>
    
        <!-- Bootstrap core CSS -->
        <!--<link href="https://apirzmy.000webhostapp.com/css/bootstrap.min.css" rel="stylesheet">-->
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <link href="https://apirzmy.000webhostapp.com/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    
        <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
        <script src="https://apirzmy.000webhostapp.com/js/ie-emulation-modes-warning.js"></script>
    
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    
        <!-- Custom styles for this template -->
        <!--<script src="https://apirzmy.000webhostapp.com/js/bootstrap.min.js"></script>-->
  </head>
    <body>
        <div class="container">
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Rzmy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="https://apirzmy.000webhostapp.com">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://apirzmy.000webhostapp.com/About">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="https://apirzmy.000webhostapp.com/Contact">Contact</a>
      </li>    
    </ul>
  </div>  
</nav>
</div>
<br>
<center>
        <div class="toast" data-autohide="false">
            <div class="toast-header">
                <strong class="mr-auto text-primary">Hi!</strong>
                <small class="text-muted">Rzmy's website</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
               Selamat datang di api base Rzmy:) semoga dapat berguna
            </div>
        </div></center><br/>
<div class="container">
<script>
$(document).ready(function(){
  $('.toast').toast('show');
});
</script></div>
        
        <div class="container">
            <table class="table">
                <caption>Beberapa API sedang error</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>API</th>
                        <th>LINK</th>
                        <th>STATUS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-danger">
					    <td><font color="#C80000">MAL Anime info</font></td>
					    <td><a href="./preview?p=berita.php&type=1" class="btn btn-danger" role="button">Click</a></td>
					    <td><font color="red">Offline</font></td>
				    </tr>
				    <tr class="table-success">
					    <td><font color="green">Meownime</font></td>
					    <td><a href="./preview?p=meownime-ongoing.php&type=2" class="btn btn-success" role="button">Click</a></td>
					    <td><font color="green">Online</font></td>
			    	</tr>
			    	<tr class="table-success">
				    	<td><font color="green">Samehadaku Search</font></td>
				    	<td><a href="./preview?p=samehadaku.php&type=2" class="btn btn-success" role="button">Click</a></td>
				    	<td><font color="green">Online</font></td>
			    	</tr>
			    	<tr class="table-success">
				    	<td><font color='green'>Anime OnGoing Samehadaku</font></td>
				    	<td><a href="./preview?p=ongoing.php&type=1" class="btn btn-success" role="button">Click</a></td>
				    	<td><font color="green">Online</font></td>
			    	</tr>
			    	<tr class="table-danger">
				    	<td><font color='red'>Anime News</font></td>
				    	<td><a href="./preview?p=anime-news.php&type=1" class="btn btn-danger" role="button">Click</a></td>
				    	<td><font color="red">Online</font></td>
			    	</tr>
			    	<tr class="table-success">
				    	<td><font color='green'>Anime Search</font></td>
				    	<td><a href="./preview?p=search-anime.php&type=2" class="btn btn-success" role="button">Click</a></td>
				    	<td><font color="green">Online</font></td>
			    	</tr>
				<tr class="table-success">
				    	<td><font color='green'>Anime Schedule Airing</font></td>
				    	<td><a href="./preview.php?p=jadwal-airing.php&type=2" class="btn btn-success" role="button">Click</a></td>
				    	<td><font color="green">Online</font></td>
			    	</tr>
			    </tbody>
            </table>
            
            
            
        </div>
		<br><br>
		<div class="container">
			<a href="https://line.me/ti/p/~alkhoarizmy">Contact</a>
		</div>
		
    </body>
</html>
