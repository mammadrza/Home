<?php

class kablosuzController extends CI_Controller{


    public function index(){

       $rows = $this->db->get("usersdb")->result();
//       $rows = $this->db->get("usersdb")->row();

//        print_r($rows);

        $data = array( "rows" => $rows );

        $this->load->view('giris',$data);


    }




    public function where(){
       $result = $this->db->where("user_email","kamranwtf@gmail.com")->get('usersdb')->result();
       print_r('<pre>');
       print_r($result);
        print_r('</pre>');
    }

    public function orderby(){
//        $ord = array("id" => "ASC");

        $result = $this->db->order_by("id" , "ASC")->get('usersdb')->result();

        //ASC
        //DESC
        //RANDOM

        print_r('<pre>');
        print_r($result);
        print_r('</pre>');

        echo $this->db->last_query();//sql-i goster
    }

    public function limit(){
        $result= $this->db->limit(5)->get('usersdb')->result();
        print_r('<pre>');
        print_r($result);
        print_r('</pre>');

//        echo $this->db->last_query();
    }

    public function query(){
        $result = $this->db
            ->order_by('id','DESC')
            ->limit(2)
            ->where('user_name','Kamran')
            ->like('user_adress','ak')
            ->get('usersdb')->result();




        echo $this->db->last_query();
        echo '<br>';
        print_r('<pre>');
        print_r($result);
        print_r('</pre>');
    }

    public function customQuery(){
        $result = $this->db->query("SELECT * FROM `usersdb` WHERE `user_name` = 'Kamran' AND `user_adress` LIKE '%ak%' ESCAPE '!' ORDER BY `id` DESC LIMIT 2")->result();


        echo $this->db->last_query();
        echo '<br>';

        print_r('<pre>');
        print_r($result);
        print_r('</pre>');
    }




    public function insertPage(){
        $this->load->view('giris');

    }

    public function insert(){
        $user_email = $this->input->POST('user_email');  //giriw-> input ->logemail
        $user_pass  = $this->input->POST('user_pass');   //giriw-> input ->logpassword

        $data = array(
            "user_email"   => $user_email,
            "user_pass"    => $user_pass
        );

        $insert = $this->db->insert("usersdb",$data);
        echo $insert; // echo vermeye ehtiyyac yoxdur
    }



    public function updatePage(){
        $this->load->view('giris');
    }

    public function update(){
        $id         = $this->input->POST('id');
        $user_email = $this->input->POST('user_email');  //giriw-> input ->logemail
        $user_pass  = $this->input->POST('user_pass');   //giriw-> input ->logpassword


        $data = array(
            "user_email"   => $user_email,
            "user_pass"    => $user_pass
        );

        $update = $this->db->where("id", $id )->update("usersdb",$data);


        echo $update; // echo vermeye ehtiyyac yoxdur
    }



    public function delete($id){
        $delete = $this
            ->db
            ->where("id",$id)
            ->delete('usersdb');

        echo $delete;
    }

}