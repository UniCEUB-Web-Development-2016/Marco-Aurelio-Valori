<?php
include_once "model/Request.php";
include_once "model/User.php";
//include_once "database/DatabaseConnector.php";
class UserController
{
	public function register($request)
	{
		$params = $request->get_params();
		$user = new User($params["name"],
				 $params["last_name"],
				 $params["email"],
				 $params["nickname"],
				 $params["type"],
				 $params["pass"]);
		$db = new DatabaseConnector("localhost", "pricetracking", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $this->generateInsertQuery($user);	
	}
	private function generateInsertQuery($user)
	{
		$query =  [$user->getName(),
					$user->getLastName(),
					$user->getEmail(),
					$user->getNickname(),
					$user->getType(),
					$user->getPass()];
		return $query;						
	}
}