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

    <form class="form-signin" action="delPolo1.php" method="post">
        <h2 class="form-signin-heading">Exclusão de Polo</h2>
        
        <input type="text" name="name" id="inputName" class="form-control" placeholder="Polo" required autofocus>

        <input type="text" name="status"id="inputStatus" class="form-control" placeholder="Status (AA-Apto / AP-Apto com Pendências / FR - Fase de Regularização / NA - Não Apto)" required autofocus>

        <input type="text" name="situation" id="inputSituation" class="form-control" placeholder="Situação (Ativo / Desligado / Inativo / Provisório)" required autofocus>
		
		<input type="text" name="lon" id="inputLon" class="form-control" placeholder="Longitude" required autofocus>
		
		<input type="text" name="lat" id="inputLat" class="form-control" placeholder="Latitude" required autofocus>
		
		<input type="text" name="uf" id="inputUf" class="form-control" placeholder="UF" required autofocus>
		
		<input type="text" name="year" id="inputYear" class="form-control" placeholder="Ano-Base" required autofocus>
		
		
				
		<button class="btn btn-primary btn-lg" type="submit">Save</button>
        </form>
		
		
    </div> 
    <script src="js/ie10-viewport-bug-workaround.js"></script>
	
  </body>
</html>