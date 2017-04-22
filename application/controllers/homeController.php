<?php


class homeController extends CI_Controller{


    public function index(){
        $this->load->view('index');
    }

    public function  butunElanlar(){
        $this->load->view('butunElanlar');
    }


}