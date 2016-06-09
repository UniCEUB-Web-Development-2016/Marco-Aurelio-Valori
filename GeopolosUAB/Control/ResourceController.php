<?php
include_once "Model/Request.php";
include_once "Control/UserController.php";
include_once "Control/CourseController.php";
include_once "Control/PolosController.php";


class ResourceController
{
	private $controlMap = 
	[	"user" => "UserController",
		"polos" => "PolosController",
		"course" => "CourseController"];
		
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