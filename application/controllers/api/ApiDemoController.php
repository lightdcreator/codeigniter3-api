<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

require APPPATH . 'libraries/RestController.php';





class ApiDemoController extends RestController {

    public function __construct()
    {
        parent::__construct();
    }

    public function index_get()
    {

		echo "I am Rest api controller";

    }
}

/* End of file ApiDemoController.php and path \application\controllers\api\ApiDemoController.php */
?>
