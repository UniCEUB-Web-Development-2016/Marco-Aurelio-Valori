<?php

class PolosUab{
	
	private $name;
	private $status;
	private $situation;
	private $lon;
	private $lat;
	private $uf;
	private $year;
	private $idPolo;
	
	public function __construct($name, $status, $situation, $lon, $lat, $uf, $year, $idPolo){
		$this->set_poloName($name);
		$this->set_poloStatus($status);
		$this->set_poloSituation($situation);
		$this->set_poloLon($lon);
		$this->set_poloLat($lat);
		$this->set_poloUF($uf);
		$this->set_poloYear($year);
		$this->set_poloId($idPolo);
		
	}
	
	
	private function set_poloName ($name){
		$this->name = $name;
	}
	
	private function set_poloStatus ($status){
		$this->status = $status;
	}
	
	private function set_poloSituation($situation){
		$this->situation = $situation;
	}
	
	private function set_poloLon($lon){
		$this->lon = $lon;
	}
	
	private function set_poloLat($lat){
		$this->lat = $lat;
	}
	
	private function set_poloUF($uf){
		$this->uf = $uf;
	}
	
	private function set_poloYear($year){
		$this->year = $year;
	}
	private function set_poloId($idPolo){
		$this->idPolo = $idPolo;
	}
	
	
	public function get_poloName (){
		return $this->name;
	}
	
	public function get_poloStatus (){
		return $this->status;
	}
	
	public function get_poloSituation(){
		return $this->situation;
	}
	
	public function get_poloLon(){
		return $this->lon;
	}
	
	public function get_poloLat(){
		return $this->lat;
	}
	
	public function get_poloUF(){
		return $this->uf;
	}
	
	public function get_poloYear(){
		return $this->year;
	}
	public function get_poloId(){
		return $this->idPolo;
	}
	
}