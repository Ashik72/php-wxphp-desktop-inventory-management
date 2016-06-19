<?php 

require_once "event_actions.php";

require_once "home.php";

/**
* Home Extended
*/
class homeExtend extends homeFrame
{
	
	function __construct()
	{
		parent::__construct();


		return;

	}

	function click_add_records( $event ){
		$event->Skip();

	//$this->mf = new event_frame01(10);
    $this->mf = new event_frame01();
    $this->mf->Show();
	
	return;

	}


}


 ?>