<?php
include_once "model/Request.php";
include_once "model/PolosUAB.php";
include_once "database/DatabaseConnector.php";
class polosUABController
{
	public function register($request)
	{
		$params = $request->get_params();
		$polosuab = new Polosuab($params["name"],
								 $params["status"],
								 $params["situation"],
								 $params["long"],
								 $params["lat"],
								 $params[uf]);
		$db = new DatabaseConnector("localhost", "polosuab", "mysql", "", "root", "");
		$conn = $db->getConnection();
		
		
	    return $this->generateInsertQuery($polosuab);
	}
	private function generateInsertQuery($polosuab)
	{
		$query =  	"INSERT INTO polosuab (name, status, situation, long, lat, uf) VALUES ('".$polosuab->get_name()."','".
					 $polosUAB->get_status()."','".
					 $polosUAB->get_situation()."','".
					 $polosUAB->get_long()."','".
					 $polosUAB->get_lat()."','".,
					 $polosUAB->get_uf()."','".;
		return $query;
	}
}