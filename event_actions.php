<?php 

require_once "main.php";

/**
* frame_01 events
*/
class event_frame01 extends MyApp
{
	
	function __construct()
	{
		//$this->Connect( wxEVT_ACTIVATE, array($this, "main_frame_activate") );
	}

	function main_frame_activate( $event ){
		$event->Skip();

		$this->m_statusBar4->SetStatusText("The Status!");
	}
}



 ?>