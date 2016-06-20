<?php 

require_once "event_actions.php";

require_once "home.php";


require_once "records_frame.php";

require_once "records_frame_events.php";


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

	function click_view_records( $event ){
		$event->Skip();
	
	$this->mf = new records_Frame_Events();
    //$this->mf = new event_frame01();
    $this->mf->Show();

		return;

	}


}


 ?>