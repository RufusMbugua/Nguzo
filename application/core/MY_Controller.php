<?php
## Extend CI_Controller to include Doctrine Entity Manager
error_reporting(0);
class  MY_Controller  extends  CI_Controller  {

public $em, $response, $theForm, $rowsInserted, $executionTime,$data,
      $selectCompManufacturers,$selectPremixType, $selectIodizationCentre,$selectFactoryByManufacturer,$manufacturer,
      $factories;

function __construct()  {
		parent::__construct();
		
}

   public function load_template_view(){
   	        $this->data['page']='Front-End';
			$this->data['content'] = 'Vehicles';
			$this->data['title']='Vehicles';
			$this -> load -> view('template', $this->data);
   }

   


}  