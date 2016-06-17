<?php
include("header.php");
include ('httpful.phar');

$url = "http://localhost/GeopolosUAB/course/?name=".$_GET['name']."&type=".$_GET['type']."&year=".$_GET['year']
."&students=".$_GET['students'];

$response = \Httpful\Request::get($url)->send();

header('location:searchCourse3.php');
