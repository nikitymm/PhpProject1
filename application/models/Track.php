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
class Track {
     public function create($name){
       $query = array(
            'Name' => $name,
            'AlbumId' => $album_id,
            'Composer' => $composer,
            'Miliseconds' => $miliseconds,
            'Bytes' => $bytes,
            'UnitPrice' => $unit_price,
        );
       
       $this->db->insert('Track', $query); 
    }
    
    public function edit_name($track_id,$name,$name1){
       $this->db->where('TrackId',$track_id);
       $this->db->where('Name',$name);
       $this->db->update('Track', $name1);
       
    }
    
    public function edit_album_id($track_id,$album_id,$album_id1){
       $this->db->where('TrackId',$track_id);
       $this->db->where('AlbumId',$album_id);
       $this->db->update('Track', $album_id1);
    }
    
    public function edit_composer($track_id,$composer,$composer1){
       $this->db->where('TrackId',$track_id);
       $this->db->where('Composer',$composer);
       $this->db->update('Track', $composer1);
    }
    
    public function edit_miliseconds($track_id,$miliseconds,$miliseconds1){
       $this->db->where('TrackId',$track_id);
       $this->db->where('Miliseconds',$miliseconds1);
       $this->db->update('Track', $miliseconds1);
    }
    
    public function edit_bytes($track_id,$bytes,$bytes1){
       $this->db->where('TrackId',$track_id);
       $this->db->where('Bytes',$bytes);
       $this->db->update('Track', $bytes1);
    }
    
    public function edit_unit_price($track_id,$unit_price,$unit_price1){
       $this->db->where('TrackId',$track_id);
       $this->db->where('UnitPrice',$unit_price);
       $this->db->update('Track', $unit_price1);
    }
    
    public function excluir($title,$artist_id){
       $this->db->where('TrackId',$track_id);
       $this->db->where('Name',$name);
       $this->db->where('AlbumId',$album_id);
       $this->db->where('Composer',$composer);
       $this->db->where('Miliseconds',$miliseconds);
       $this->db->where('Bytes',$bytes);
       $this->db->where('UnitPrice',$unit_price1);
       $this->db->delete('Track', $query);       
    }
    
    public function mostrar() {
        return $this->db->get('Track');
    }
}
