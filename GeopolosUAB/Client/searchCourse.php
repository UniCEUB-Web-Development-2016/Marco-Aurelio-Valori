<?php
include("header.php");
include ('httpful.phar');

$url = "http://localhost/GeopolosUAB/course/?name=".$_GET['name']."&type=".$_GET['type']."&year=".$_GET['year']
."&students=".$_GET['students'];

$response = \Httpful\Request::get($url)->send();
$course = json_decode($response, true);
$response = ["course" => $response];
?>

<h1>Resultados</h1>
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
				<th>Tipo</th>
				<th>Ano-base</th>
				<th>Estudantes</th>
			  </tr>
			</thead>
			    <tbody>
				<?php 
				foreach($course as $s){
					echo "<tr>";
					echo "<td>" . $s['name'] . "</td>";
					echo "<td>" . $s['type'] . "</td>";
					echo "<td>" . $s['year'] . "</td>";
					echo "<td>" . $s['students'] . "</td>";
					echo "<tr>";
				}
				?>
				</tbody>
			</table>
		</div>
<?php 

include("footer.php");