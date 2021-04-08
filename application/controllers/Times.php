<?php

class Times extends CI_Controller{

    public function main(){

        $this->load->view('partial_layouts/header');
        $this->load->view('time');
        $this->load->view('partial_layouts/footer');

    }
}