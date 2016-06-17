<?php
include_once "Model/Request.php";
include_once "Model/Courses.php";
include_once "Database/DatabaseConnector.php";

class CourseController
{	
	private $requiredParameters = array('name', 'type', 'year', 'students');
	
	public function register($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)		{
			$courses = new Courses($params["name"],$params["type"],$params["year"],$params["students"]);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query($this->generateInsertQuery($courses));
			return $result->fetchAll(PDO::FETCH_ASSOC);	
		} else {
			echo "There are empty fields!!!";
		}
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
		$query =  	"INSERT INTO course (name, type, year, students) VALUES ('".$courses->get_nameCourse()."','".
					$courses->get_typeCourse()."','".
					$courses->get_yearCourse()."','".
					$courses->get_studentsCourse()."')";
		return $query;
	}

	public function search($request)
	{
		$params = $request->get_params();
		//if($this->isEmpty($params) == true)
	//	{
			$crit = $this->generateCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("SELECT name, type, year FROM course WHERE ".$crit);
			//var_dump($result);
			return $result->fetchAll(PDO::FETCH_ASSOC);
	//	} else {
	//        return "There are empty fields!!!";
		//}
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
        return "UPDATE course SET " . $crit . " WHERE name = '" . $params["name"] . "'";
    }
    private function generateUpdateCriteria($params)
    {
        $criteria = "";
        foreach ($params as $key => $value)
        {
            $criteria = $criteria.$key." = '".$value."' ,";
        }
        return substr($criteria, 0, -2);
    }
	
	
	public function ReqDelete($request)
	{
		$params = $request->get_params();
		if($this->isEmpty($params) == true)
		{
			$crit = $this->deleteCriteria($params);
			$db = new DatabaseConnector("localhost", "geopolosuab", "mysql", "", "root", "");
			$conn = $db->getConnection();
			$result = $conn->query("DELETE FROM course WHERE ".$crit);
			return $result->fetchAll(PDO::FETCH_ASSOC);
		} else {
			return "There are empty fields!!!";
		}
	}

	private function generateCriteria($params) 
	{
		$criteria = "";
		foreach($params as $key => $value)
		{
			if(gettype($value)=== "int"){
				$criteria = $criteria.$key." = '%".$value."%' AND ";
			}else{
				$criteria = $criteria.$key." = '".$value."' AND ";
			}
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