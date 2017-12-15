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
class PlaylistTrack {
     public function create($name){
       $query = array(
            'TrackId' => $track_id
        );
       
       $this->db->insert('TrackId', $query); 
    }
    
    public function edit_track_id($track_id,$track_id1){
       $this->db->where('TrackId',$track_id);
       $this->db->update('PlaylistTrack', $track_id1);
    }
    
    public function excluir($track_id){
       $this->db->where('TrackId',$track_id);
       $this->db->delete('PlaylistTrack');
    }
    
    public function mostrar() {
        return $this->db->get('PlaylistTrack');
    }
}
