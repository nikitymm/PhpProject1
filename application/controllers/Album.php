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
class Album extends CI_Controller{
    
    public function create(){
    $this->load->model('Album');    
    $data['query'] = $this->Album->create();
    $this->load->view('edit', $data);    
    }
    public function delete(){
    $this->load->model('Album');    
    $data['query'] = $this->Album->delete();
    $this->load->view('edit', $data);    
    }
    public function edit(){
    $this->load->model('Album');    
    $data['query'] = $this->Album->edit_title();
    $data['query'] = $this->Album->edit_artist();
    $this->load->view('edit', $data);    
    }
    public function mostrar(){
    $this->load->model('Album');    
    $data['query'] = $this->Album->mostrar();
    $this->load->view('mostrar', $data);
    }           
}    //put your code here

