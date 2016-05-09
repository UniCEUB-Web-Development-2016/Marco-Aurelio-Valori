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
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $this->generateInsertQuery($user);	
	}
	private function generateInsertQuery($user)
	{
		$query =  	"INSERT INTO User (id, name, status, situation, long, lat, uf, year) VALUES ('".$user->get_id()."','".
					 $user->get_name()."','".
					 $user->get_last_name()."','".
					 $user->get_email()."','".
					 $user->get_nickname()."','".
					 $user->get_type()."','".
					 $user->get_pass()."','".;
		return $query;					
	}
	
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		//$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		//$conn = $db->getConnection();
		$result = "SELECT name, last_name, email, nickname, type FROM User WHERE ".$crit;
		//foreach($result as $row)
		//return $result->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '%".$value."%' OR ";
		}
		return substr($criteria, 0, -4);	
	}
	
