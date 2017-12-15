<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Album
 *
 * @author programadores
 */
class Playlist {
     public function create($name){
       $query = array(
            'Name' => $name,
            'ArtistId' => $artist_id
        );
       
       $this->db->insert('Playlist', $query); 
    }
    
    public function edit_name($name,$name1){
 
       $query = array(
            'Name' => $name1
        );
       $this->db->update('Playlist', $query);
       $this->db->where('Name',$name);
    }
    
    public function excluir($name){
       $query = array(
            'Name' => $name
        );
       $this->db->delete('Playlist');
       $this->db->where('Name',$name);
    }
    
    public function mostrar() {
        return $this->db->get('Playlist');
    }
}
