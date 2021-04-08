<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dojos extends CI_Controller {

	public function ninjas()
    {
        $ninjas = array(
            'ninjas'=> array(
                array("name"=>"Patrick","Dojo"=>"Laguna"),
                array("name"=>"Zet","Dojo"=>"Laguna"),
                array("name"=>"Michael","Dojo"=>"San Francisco"),
                array("name"=>"Piolo","Dojo"=>"Laguna"),
                array("name"=>"Jotham","Dojo"=>"Taguig"),
            )
        );
        $this->load->view('hello',$ninjas);
    }
}