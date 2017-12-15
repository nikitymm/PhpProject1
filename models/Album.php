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
class Album {
    public function create($name,$artist_id){
       $query = array(
            'Name' => $name,
            'ArtistId' => $artist_id
        );
       
       $this->db->insert('Album', $query); 
    }
    
    public function edit_title($title,$title1,$artist_id){ 
       $query = array(
            'Title' => $title1,
            'ArtistId'=> $artist_id
        );
       $this->db->insert('Album', $query);
       $this->db->where('Title',$title1);
    }
    
    public function edit_artist($title,$artist_id,$artist_id1){
       $query = array(
            'Title' => $title,
            'ArtistId'=> $artist_id1
        );
       $this->db->update('Album', $query);
       $this->db->where('ArtistId',$artist_id1);
    }
    
    public function excluir($title,$artist_id){
       $query = array(
            'Title' => $title,
            'ArtistId'=> $artist_id
        );
       $this->db->delete('Album', $query);
       $this->db->where('Title',$title);
       $this->db->where('ArtistId',$artist_id);
    }
    
    public function mostrar() {
        return $this->db->get('Album');
    }
}
