<?php

include('httpful.phar');
include("header.php"); 

$url = "http://localhost/GeopolosUAB/polos/?name=".$_GET['name']."&status=".$_GET['status']."&situation=".$_GET['situation']
."&uf=".$_GET['uf']."&year=".$_GET['year'];

$response = \Httpful\Request::get($url)->send();
$polos = json_decode($response, true);
$response = ["polos" => $response];
?><h1>Resultados</h1>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>index</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	
	
	<style>
	
	.col-md-4 > a {
	color: inherit; 
	text-decoration: none;
	}
	
	</style>
	
  </head>
  <body>

    <div class ="container">
		
		<div class="col-md-4">
			
			<table class="table table-hover">
			<thead>
			  <tr>
				<th>Nome</th>
				<th>Status</th>
				<th>Situação</th>
				<th>Longitude</th>
				<th>Latitude</th>
				<th>UF</th>
				<th>Ano-base</th>
			  </tr>
			</thead>
			    <tbody>
				<?php 
				foreach($polos as $s){
					echo "<tr>";
					echo "<td>" . $s['name'] . "</td>";
					echo "<td>" . $s['status'] . "</td>";
					echo "<td>" . $s['situation'] . "</td>";
					echo "<td>" . $s['lon'] . "</td>";
					echo "<td>" . $s['lat'] . "</td>";
					echo "<td>" . $s['uf'] . "</td>";
					echo "<td>" . $s['year'] . "</td>";
					echo "<tr>";
				}
				?>
				</tbody>
			</table>
		</div>
<?php 

include("footer.php");
