<?php

class Courses{
	
	private $name_course;
	private $type_course;
	private $year_course;
	private $students_course;
	
	
	public function __construct($name_course, $type_course, $year_course, $students_course){
		$this->set_nameCourse($name_course);
		$this->set_typeCourse($type_course);
		$this->set_yearCourse($year_course);
		$this->set_studentsCourse($students_course);
	}
	
	
	private function set_nameCourse($name_course){
		$this->name_course = $name_course;
	}
	
	private function set_typeCourse($type_course){
		$this->type_course = $type_course;
	}
	
	private function set_yearCourse($year_course){
		$this->year_course = $year_course;
	}
	
	private function set_studentsCourse($students_course){
		$this->students_course = $students_course;
	}
	
	
	public function get_nameCourse(){
		return $this->name_course;
	}
	
	public function get_typeCourse(){
		return $this->type_course;
	}
	
	public function get_yearCourse(){
		return $this->year_course;
	}
	
	public function get_studentsCourse(){
		return $this->students_course;
	}
}