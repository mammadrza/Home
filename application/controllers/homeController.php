<?php


class homeController extends CI_Controller{

    public function index(){
        $this->load->view('index');
    }

    public function butunElan(){
        $this->load->view('butunElanlar');
    }

    public function editProf(){
        $this->load->view('editProf');
    }

    public function elanYerles(){
        $this->load->view('ElanYerlesdir');
    }

    public function profil(){
        $this->load->view('profil');
    }

    public function registr(){
        $this->load->view('registr');
    }

    public function etrafli(){
        $this->load->view('etrafli');
    }

    public function login(){
        $this->load->view('giris');
    }

}