<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>
  <body>

<?php
$p = rawurlencode($_GET['p']);
echo <<<EXCERPT
<div class="container">
  <h3>Documentation</h3>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">URL+Parameters</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">Example</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>
      <h4>URL+Parameters</h4>
      <blockquote class="blockquote">
      <span class="badge badge-success">URL</span><font size="3">https://apirzmy.herokuapp.com/$p</font>
      </blockquote>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h4>Example</h4>
      
    </div>
  </div>
</div>

EXCERPT;
    
    
?>

  </body>
</html>
