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
		  <a class="navbar-brand" href="mainCourses.html">Polos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div>
      </div>
    </nav>
    <div class="jumbotron">
  
    <div class="container">

    <form class="form-signin" action="upCourse1.php" method="post">
        <h2 class="form-signin-heading">Alteração de Curso</h2>
		
		<input type="text" name="reference" id="inputNameReference" class="form-control" placeholder="Referencia" required autofocus>
				
		<input type="text" name="name" id="inputName" class="form-control" placeholder="Nome">

        <input type="text" name="type" id="inputType" class="form-control" placeholder="Tipo (Exatas/Humanas)">

        <input type="text" name="year" id="inputYear" class="form-control" placeholder="Ano-Base">
		
		<input type="text" name="students" id="inputStudents" class="form-control" placeholder="Estudantes">

        	
		<button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button>
      </form>

    </div>>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>