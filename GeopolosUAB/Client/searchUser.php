<?php

include('httpful.phar');
include("header.php"); 

$response = \Httpful\Request::get("http://localhost/GeopolosUAB/user/?name=".$_GET['name'])->send();
$request_response = json_decode($response->body);
?><h1>Resultados</h1><?php
foreach($request_response as $value)
{
?><center><blockquote><p class=lead>Nome: <?php echo $value->name . '<br>';
}?><p>

<?php 
foreach($request_response as $value)
{
?>	<p class=lead>Sobrenome: <?php echo $value->last_name . '<br>';
}?><p>
<?php 
foreach($request_response as $value)
{
?>	<p class=lead>e-mail: <?php echo $value->email . '<br>';
}?><p>
<?php 
foreach($request_response as $value)
{
?>	<p class=lead>Tipo: <?php echo $value->type . '<br>';
}?><p>
<?php
foreach($request_response as $value)
{
?>	<p class=lead>Senha: <?php echo $value->password . '<br>';
}?><p>
<?php 

?><p></blockquote><center>

<?php  
?>

<?php include("footer.php");?>