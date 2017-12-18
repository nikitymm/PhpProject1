<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Playlist
 *
 * @author programadores
 */
class Playlist {
   public function create(){
    $this->load->model('Playlist');   
    $data['query'] = $this->Playlist->create();
    $this->load->view('edit', $data);    
    }
    public function delete(){
    $this->load->model('Playlist');    
    $data['query'] = $this->Playlist->delete();
    $this->load->view('edit', $data);    
    }
    public function edit(){
    $this->load->model('Playlist');    
    $data['query'] = $this->Playlist->edit_name();
    $this->load->view('edit', $data);    
    }
    public function mostrar(){
    $this->load->model('Playlist');    

    }                   
}
