<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeModels extends CI_Model {


    // Function to retrieve all employees
    public function get_employee() {
        $query = $this->db->get('employee');
        return $query->result();
    }

   
}

