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
    
    public function edit_name($playlist_id,$name,$name1){
       $this->db->where('PlaylistId',$playlist_id); 
       $this->db->where('Name',$name);
       $this->db->update('Playlist', $name1);
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
