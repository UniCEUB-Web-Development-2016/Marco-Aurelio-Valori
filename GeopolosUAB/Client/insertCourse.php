<?php

include ('httpful.phar');

$url = "http://localhost/GeopolosUAB/course/?name=".$_POST['name']."&type=".$_POST['type']."&year=".$_POST['year']
."&students=".$_POST['students'];

$response = \Httpful\Request::post($url)->send();

header('location:courseInserted.php');

