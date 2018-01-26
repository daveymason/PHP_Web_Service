<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Poke_Controller extends CI_Controller { //Extend the  main class

	
	public function index() 
	{
		
		$filter = $this->input->get('filter'); 
		
		$this->load->view('templates/header');
		$this->load->model('Poke_Model'); //Load up the Model that gets the data from DB. 
		
		//The buttons pass a value which is identical to the type of pokemon the user wants to filter.
		
		if ($filter==="Grass") { 
			$conn = $this->Poke_Model->get_grass(); 		
		} 
		
		if ($filter==="Water") {
				$conn = $this->Poke_Model->get_water(); 
		}
		
		if  ($filter==="Fire") {
				$conn = $this->Poke_Model->get_fire();
        }
		//Below Code reuse https://stackoverflow.com/questions/28320504/codeigniter-pass-data-from-model-to-controller-to-use-in-view
		$conn = $this->Poke_Model->get_pokemon(); 
			if($conn){
				$data['result'] = $conn;               
				$this->load->view('content', $data);  
			}
			
		$this->load->view('templates/footer');		
	}	
	
}
