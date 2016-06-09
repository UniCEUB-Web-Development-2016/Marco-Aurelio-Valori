<?php
// Point to where you downloaded the phar
include('httpful.phar');


$url = "http://localhost/GeopolosUAB/request/user/?name=".$_POST['name']."&last_name=".$_POST['last_name']."&email=".$_POST['email']."&password=".$_POST['password'];

$response = \Httpful\Request::post($url)->send();
var_dump($response);


// And you're ready to go!
$response = \Httpful\Request::get('http://localhost/GeopolosUAB/request/user/?name=Marco')->send();

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


