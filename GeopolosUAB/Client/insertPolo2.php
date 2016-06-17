<?php

include ('httpful.phar');

$url = "http://localhost/GeopolosUAB/polos/?name=".$_POST['name']."&status=".$_POST['status']."&situation=".$_POST['situation']
."&lon=".$_POST['lon']."&lat=".$_POST['lat']."&uf=".$_POST['uf']."&year=".$_POST['year'];

$response = \Httpful\Request::post($url)->send();

header('location:poloInserted.php');



