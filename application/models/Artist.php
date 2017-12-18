<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of artist
 *
 * @author programadores
 */
class Artist extends CI_Model{
   
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
     
    public function create($name){
       $query = array(
            'Name' => $name,
        );
       $this->db->insert('Artist', $query); 
    }
    
    public function edit_name($artist_id,$name,$name1){
       $this->db->where('ArtistId',$artist_id);
       $this->db->where('Name',$name);
       $this->db->update('Artist', $name1); 
    }
    
    public function excluir($name) {       
        $this->db->where('Name',$name);
        $this->db->delete('Artist');
    }
    
    public function mostrar() {
        return $this->db->get('Artist');
    }
}
