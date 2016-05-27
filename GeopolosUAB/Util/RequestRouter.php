	<?php
include_once "Control/ControlManager.php";
class RequestRouter
{
	
	public function route()
	{
     	return (new ControlManager)->getResource();		
	}
}