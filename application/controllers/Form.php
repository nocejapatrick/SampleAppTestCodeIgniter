<?php

class Form extends CI_Controller {

        public function index()
        {
            $this->load->helper(array('form', 'url'));

            $this->load->library('form_validation');

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required|max_length[5]',
                    array('required' => 'You must provide a %s.',
                          'max_length'=> 'Must be below 5 characters'
                    )
            );
            $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');

            if ($this->form_validation->run() == FALSE)
            {
                    $this->load->view('form');
            }
            else
            {
                    $this->load->view('formsuccess');
            }
        }
}