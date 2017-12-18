<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Track
 *
 * @author programadores
 */
class Track {
    public function create(){
    $this->load->model('Track');    
    $data['query'] = $this->Track->create();
    $this->load->view('edit', $data);    
    }
    public function delete(){
    $this->load->model('Track');    
    $data['query'] = $this->Track->delete();
    $this->load->view('edit', $data);    
    }
    public function edit(){
    $this->load->model('Track');  
    $data['query'] = $this->Track->edit_name();
    $data['query'] = $this->Track->edit_album_id();
    $data['query'] = $this->Track->edit_composer();
    $data['query'] = $this->Track->edit_miliseconds();
    $data['query'] = $this->Track->edit_bytes();
    $data['query'] = $this->Track->edit_unit_price();
    $this->load->view('edit', $data);    
    }
    public function mostrar(){
    $this->load->model('Track');    

    }           
}
