<?php

class Course extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Course_model");
    }
    
    public function show($id)
    {   
        $this->output->enable_profiler(TRUE);
        $course = $this->Course_model->get_course_by_id($id);
        var_dump($course);
    }
    
    public function add()
    {
        $this->load->model("Course_model");

        $course_details = array(
            "title" => "JavaScript",
            "description" => "JavaScript Rocks!"
        );

        $add_course = $this->Course_model->add_course($course_details);

        if($add_course === TRUE) {
            echo "Course is added!";
        }
    }

}