<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PlaylistTrack
 *
 * @author programadores
 */
class PlaylistTrack {
    public function create(){
    $this->load->model('PlaylistTrack');    
    $data['query'] = $this->PlaylistTrack->create();
    $this->load->view('edit', $data);    
    }
    public function delete(){
    $this->load->model('PlaylistTrack');    
    $data['query'] = $this->PlaylistTrack->delete();
    $this->load->view('edit', $data);    
    }
    public function edit(){
    $this->load->model('PlaylistTrack');    
    $data['query'] = $this->PlaylistTrack->edit_track_id();
    $this->load->view('edit', $data);    
    }
    public function mostrar(){
    $this->load->model('PlaylistTrack');    

    }             
}
