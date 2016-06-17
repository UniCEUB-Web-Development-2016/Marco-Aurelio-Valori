<?php

include ('httpful.phar');

$url = "http://localhost/GeopolosUAB/user/?name=".$_POST['name']."&last_name=".$_POST['last_name']."&email=".$_POST['email']."&type=".$_POST['type']."&password=".$_POST['password'];

$response = \Httpful\Request::post($url)->send();
//var_dump($response);

header('location:userInserted.php');


$response = \Httpful\Request::get($url)->send();

$request_response = json_decode($response->body);

foreach($request_response as $value)
{
	echo $value->name . '<br>';
	echo '<div class="checkbox">
       <label>
          <input type="checkbox" value="remember-me"> Remember me
       </label>
       </div>';
}


