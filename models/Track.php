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
    
    public function edit_name($track_id,$name,$name1,$album_id,$composer,$miliseconds,$bytes,$unit_price){
       $query = array(
            'Name'        => $name1,
            'AlbumId'     => $album_id,
            'Composer'    => $composer,
            'Miliseconds' => $miliseconds,
            'Bytes'       => $bytes,
            'UnitPrice'   => $unit_price
        );
       $this->db->where('TrackId',$track_id);
       $this->db->where('Name',$name);
       $this->db->update('Track', $query);
       
    }
    
    public function edit_album_id($track_id,$name,$album_id,$album_id1,$composer,$miliseconds,$bytes,$unit_price){
       $query = array(
            'Name'        => $name,
            'AlbumId'     => $album_id1,
            'Composer'    => $composer,
            'Miliseconds' => $miliseconds,
            'Bytes'       => $bytes,
            'UnitPrice'   => $unit_price
        );
       $this->db->where('TrackId',$track_id);
       $this->db->where('AlbumId',$album_id);
       $this->db->update('Track', $query);
    }
    
        public function edit_composer($track_id,$name,$album_id,$composer,$composer1,$miliseconds,$bytes,$unit_price){
       $query = array(
            'Name'        => $name,
            'AlbumId'     => $album_id,
            'Composer'    => $composer1,
            'Miliseconds' => $miliseconds,
            'Bytes'       => $bytes,
            'UnitPrice'   => $unit_price
        );
       $this->db->where('TrackId',$track_id);
       $this->db->where('Composer',$composer);
       $this->db->update('Track', $query);
    }
    
        public function edit_miliseconds($track_id,$name,$album_id,$composer,$miliseconds,$miliseconds1,$bytes,$unit_price){
       $query = array(
            'Name'        => $name,
            'AlbumId'     => $album_id,
            'Composer'    => $composer,
            'Miliseconds' => $miliseconds1,
            'Bytes'       => $bytes,
            'UnitPrice'   => $unit_price
        );
       $this->db->where('TrackId',$track_id);
       $this->db->where('Miliseconds',$miliseconds1);
       $this->db->update('Track', $query);
    }
    
        public function edit_bytes($track_id,$name,$album_id,$composer,$miliseconds,$bytes,$bytes1,$unit_price){
       $query = array(
            'Name'        => $name,
            'AlbumId'     => $album_id,
            'Composer'    => $composer,
            'Miliseconds' => $miliseconds,
            'Bytes'       => $bytes1,
            'UnitPrice'   => $unit_price
        );
       $this->db->where('TrackId',$track_id);
       $this->db->where('Bytes',$bytes);
       $this->db->update('Track', $query);
    }
    
        public function edit_unit_price($track_id,$name,$album_id,$composer,$miliseconds,$bytes,$unit_price,$unit_price1){
       $query = array(
            'Name'        => $name,
            'AlbumId'     => $album_id,
            'Composer'    => $composer,
            'Miliseconds' => $miliseconds,
            'Bytes'       => $bytes,
            'UnitPrice'   => $unit_price1
        );
       $this->db->where('TrackId',$track_id);
       $this->db->where('UnitPrice',$unit_price);
       $this->db->update('Track', $query);
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
