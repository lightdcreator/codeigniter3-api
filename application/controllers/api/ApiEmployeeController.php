<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

require APPPATH . 'libraries/RestController.php';





class ApiEmployeeController extends RestController {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('EmployeeModels');
    }

    public function index_get()
    {
		//echo "I am Rest api controller";
		$employee = new EmployeeModels;
		$result_emp = $employee->get_employee();
		$this->response($result_emp, 2000);

    }
}

/* End of file ApiDemoController.php and path \application\controllers\api\ApiDemoController.php */
?>
