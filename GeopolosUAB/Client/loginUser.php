	<?php

include('httpful.phar');
include("header.php"); 

if (!empty($_GET['password'])){
$response = \Httpful\Request::get("http://localhost/GeopolosUAB/user/?name=".$_GET['name']."&password=".$_GET['password'])->send();
$request_response = json_decode($response->body);
?><h1> Você está logado</h1><?php
foreach($request_response as $value)
{
?><center><blockquote><p class=lead>Nome: <?php echo $value->name . '<br>';
}?><p>

<?php 

foreach($request_response as $value)
{
?>	<p class=lead>Email: <?php echo $value->email . '<br>';
}?><p></blockquote><center>

<?php }
Else{
	Echo "Digite sua senha!!!";
}
 ?>
}

<?php include("footer.php");?>