<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
    <link href="css/bootstrap.min.css" rel="stylesheet">
	
  </head>
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.html">Geopolos UAB - CAPES</a>
		  <a class="navbar-brand" href="mainPolos.html">Polos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div>
      </div>
    </nav>
    <div class="jumbotron">

    <div class="container">

    <form class="form-signin" action="delCourse1.php" method="post">
        <h2 class="form-signin-heading">Exclusão de Curso</h2>
        
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Curso" required autofocus>

        <input type="text" name="type"id="inputType" class="form-control" placeholder="Tipo" required autofocus>

        <input type="text" name="year" id="inputYear" class="form-control" placeholder="Ano-Base" required autofocus>
		
		<input type="text" name="students" id="inputStudents" class="form-control" placeholder="Estudantes" required autofocus>

        <button class="btn btn-primary btn-lg" type="submit">Save</button><!--<input type="hidden" name="codStore" value="<?php //echo $_SESSION['CurrentUser']; ?>" />-->
    </form>
		
		
    </div> 
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>