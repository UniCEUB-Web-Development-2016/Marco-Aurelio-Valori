<?php

include('httpful.phar');
include("header.php"); 

$url = "http://localhost/GeopolosUAB/polos/?name=".$_GET['name']."&status=".$_GET['status']."&situation=".$_GET['situation']
."&uf=".$_GET['uf']."&year=".$_GET['year'];

$response = \Httpful\Request::get($url)->send();
//var_dump($response);
//echo $response;

//header('location:searchPolo3.php');

$request_response = json_decode($response->body);
?><h1>Resultados</h1><?php

foreach($request_response as $value)
{
?><div align=left><blockquote><table border="1"><tr><td><p class=lead>Polo: <?php echo $value->name . '<br>';

}?><p></div></td></table>

<?php 
foreach($request_response as $value)
{
?>	<p class=lead>Status: <?php echo $value->status . '<br>';
}?><p>
<?php 
foreach($request_response as $value)
{
?>	<p class=lead>Situatiação: <?php echo $value->situation . '<br>';
}?><p>
<?php 
foreach($request_response as $value)
{
?>	<p class=lead>UF: <?php echo $value->uf . '<br>';
}?><p>
<?php
foreach($request_response as $value)
{
?>	<p class=lead>Ano-Base: <?php echo $value->year . '<br>';
}?><p>
<?php 



include("footer.php");
