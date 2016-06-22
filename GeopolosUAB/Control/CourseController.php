<?php
include_once "Model/Request.php";
include_once "Model/Courses.php";
include_once "Database/DatabaseConnector.php";
header('Access-Control-Allow-Origin: *');
class CourseController
{	
	public function register($request)
	{
		$params = $request->get_params();
		
			$courses = new Courses($params["name"],$params["type"],$params["year"],
			$params["students"],$params["id"]);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query($this->generateInsertQuery($courses));
			return $result->fetchAll(PDO::FETCH_ASSOC);	
			}
	
	private function isEmpty($params)
	{
		if($this->compare($params) == null)
		{
			return true;
		} else {
			return false;
		}
	}
	
	private function compare($params)
	{
		$paramsMap = ["name" => "", "type" => "", "year" => "", "students" => ""];
		$result = array_diff_key($paramsMap, $params);
		return $result;
	}

	private function generateInsertQuery($courses)
	{
		$query =  	"INSERT INTO course (name, type, year, students, id) VALUES ('".$courses->get_nameCourse()."','".
					$courses->get_typeCourse()."','".
					$courses->get_yearCourse()."','".
					$courses->get_studentsCourse()."','".
					$courses->get_courseId()."')";
		return $query;
	}

	public function search($request)
	{
		$params = $request->get_params();
		
			$crit = $this->generateCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("SELECT name, type, year, students FROM course WHERE ".$crit);
			
			return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	
	public function update($request)
    {
        $params = $request->get_params();
        $db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
        $conn = $db->getConnection();
        $result = $conn->query($this->generateUpdateQuery($params));
		return $result->fetchAll(PDO::FETCH_ASSOC);
    }
    private function generateUpdateQuery($params)
    {
        $crit = $this->generateUpdateCriteria($params);
        return "UPDATE course SET name = '" . $params["name"] 
								. "', type = '" . $params["type"] 
								. "', year = '" . $params["year"] 
								. "', students = '" . $params["students"] 
								. "' WHERE name = '" . $params["ref"] . "'";
    }
    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }
        return substr($criteria, 0, -2);
        return substr($criteria, 0, -2);
    }
	
	public function ReqDelete($request)
	{
		$params = $request->get_params();
			$crit = $this->deleteCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("DELETE FROM course WHERE ".$crit);
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
	
	private function deleteCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			$criteria = $criteria.$key." LIKE '".$value."' AND ";
		}
		return substr($criteria, 0, -5);	
	}
	
}