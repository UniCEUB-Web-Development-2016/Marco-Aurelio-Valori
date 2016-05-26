<?php
include_once "GeopolosUAB/Classes/Request_PolosUAB.php";
include_once "Control/UserController.php";
include_once "Control/PolosUAB_Controller.php";
include_once "Control/Courses_Controller.php";

class ResourceController
{
	private $controlMap = 
	[	"user" => "UserController",
		"polosuab" => "PolosUAB_Controller",
		"course" => "Courses_Controller"];
	
	public function createResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->register($request);
	}
	public function searchResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->search($request);
	}
	public function deleteResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->ReqDelete($request);
	}
	public function updateResource($request)
	{
		return (new $this->controlMap[$request->get_resource()]())->update($request);
	}	
}
