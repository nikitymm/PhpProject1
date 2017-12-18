<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Artist
 *
 * @author programadores
 */
class Artist {
   public function create(){
    $this->load->model('Artist');   
    $data['query'] = $this->Artist->create();
    $this->load->view('edit', $data);    
    }
    public function delete(){
    $this->load->model('Artist');    
    $data['query'] = $this->Artist->delete();
    $this->load->view('edit', $data);    
    }
    public function edit(){
    $this->load->model('Artist');    
    $data['query'] = $this->Artist->edit_name();
    $this->load->view('edit', $data);    
    }
    public function mostrar(){
    $this->load->model('Artist');    

    }           
}
