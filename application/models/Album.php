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
    public function create($title,$artist_id){
       $query = array(
            'Title' => $title,
            'ArtistId' => $artist_id
        );
       
       $this->db->insert('Album', $query); 
    }
    
    public function edit_title($album_id,$title,$title1){
       $this->db->where('AlbumId',$album_id);
       $this->db->where('Title',$title);
       $this->db->insert('Album', $title1);
    }
    
    public function edit_artist($album_id,$artist_id,$artist_id1){
       $this->db->where('AlbumId',$album_id);
       $this->db->where('ArtistId',$artist_id);  
       $this->db->update('Album', $artist_id);
    }
    
    public function excluir($album_id,$title,$artist_id){
       $this->db->where('AlbumId',$album_id);
       $this->db->where('Title',$title);
       $this->db->where('ArtistId',$artist_id);
       $this->db->delete('Album', $query);
    }
    
    public function mostrar() {
        return $this->db->get('Album');
    }
}
