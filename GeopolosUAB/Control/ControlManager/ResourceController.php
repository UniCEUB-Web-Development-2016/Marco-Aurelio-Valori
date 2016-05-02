<?php
include_once "model/Request.php";
include_once "control/UserController.php";
include_once "control/PolosUAB_Controller.php";

class ResourceController
{
	private $controlMap = 
	[	"user" => "UserController",
		"polosuab" => "PolosUAB_Controller"];
	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
}