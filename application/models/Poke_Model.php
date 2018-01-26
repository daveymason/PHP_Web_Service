<?php

class Poke_Model extends CI_Model {
	
	function __Construct()  
	{
		$this->load->database(); //Manually connects to the database specified in database.php  
		
	} //Consructor
	
	public function get_pokemon() //Method to get data from DB and store it.
	{
    $query = $this->db->get('Pokemon'); 
    $conn   = $query->result();        
    return $conn;
	} //function
	
	// Below Code-reuse from https://www.codeigniter.com/userguide3/database/query_builder.html
	
	public function get_grass() // Method selects Pokemon only if their type=Grass.
	{
	$where = "Type='Grass'"; //Custom String for a manual clause. 
	$query = $this->db->where($where);
	}
	
	public function get_water() //Water Pokemon
	{
	$where = "Type='Water'";
	$query = $this->db->where($where);
	}
	
	public function get_fire() //Fire Pokemon
	{
	$where = "Type='Fire'";
	$query = $this->db->where($where);
	}
	
} //class
