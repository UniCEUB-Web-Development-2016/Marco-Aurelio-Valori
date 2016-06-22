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

    <form class="form-signin" action="upPolo1.php" method="post">
        <h2 class="form-signin-heading">Alteração de Polo</h2>
		
		<input type="text" name="reference" id="inputNameReference" class="form-control" placeholder="Referencia" required autofocus>
				
		<input type="text" name="name" id="inputName" class="form-control" placeholder="Nome">

        <input type="text" name="status" id="inputStatus" class="form-control" placeholder="Status">

        <input type="text" name="situation" id="inputSituation" class="form-control" placeholder="Situação">
		
		<input type="text" name="lon" id="inputLon" class="form-control" placeholder="Longitude">

        <input type="text" name="lat" id="inputLat" class="form-control" placeholder="Latitude">
		
		<input type="text" name="uf" id="inputUf" class="form-control" placeholder="UF">
		
		<input type="text" name="year" id="inputYear" class="form-control" placeholder="Ano-Base">
		
		<button class="btn btn-lg btn-primary btn-block" type="submit">Salvar</button>
      </form>

    </div>>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>