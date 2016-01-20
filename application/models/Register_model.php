<?php
class Register_model extends CI_Model {
    public $student_name;
    public $phone;
    public $reg_time;
    public function __construct()
    {
            // Call the CI_Model constructor
            parent::__construct();
            //$this->load->model('register_model', '', TRUE);
    }

    public function new_student()
    {
        $this->student_name = $_POST['name']; // please read the below note
        $this->phone = $_POST['phone'];
        $this->reg_time = time();
        $this->db->insert('students', $this);
    }
}
?>