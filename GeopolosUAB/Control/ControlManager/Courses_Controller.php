<?php
include_once "model/Request.php";
include_once "model/Courses_PolosUAB.php";
include_once "database/DatabaseConnector.php";
class Courses_Controller
{
	public function register($request)
	{
		$params = $request->get_params();
		$courses = new Courses($params["id"],
								$params["name"],
								$params["type"],
								$params["year"],
								$params["students"]);
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $this->generateInsertQuery($courses);
	}
	private function generateInsertQuery($courses)
	{
		$query =  	"INSERT INTO Courses (id, name, type, year, students) VALUES ('".$courses->get_id()."','".
					 $courses->get_name()."','".
					 $courses->get_type()."','".
					 $courses->get_year()."','".
					 $courses->get_students();
		return $query;
	}
	
	public function search($request)
	{
		$params = $request->get_params();
		$crit = $this->generateCriteria($params);
		$db = new DatabaseConnector("localhost", "GeopolosUAB", "mysql", "", "root", "");
		$conn = $db->getConnection();
		$result = $conn->query("SELECT id, name, type, year, students FROM Courses WHERE ".$crit);
		//foreach($result as $row) 
		return $result->fetchAll(PDO::FETCH_ASSOC);
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
}
