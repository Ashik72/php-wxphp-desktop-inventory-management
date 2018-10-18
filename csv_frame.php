<?php

/*
* PHP code generated with wxFormBuilder (version Jun 17 2015)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

/*
 * Class FRMAE_CSV
 */

class FRMAE_CSV extends wxFrame {
	
	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 341,128 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer1 = new wxBoxSizer( wxVERTICAL );
		
		$gSizer1 = new wxGridSizer( 0, 2, 0, 0 );
		
		$this->startid = new wxTextCtrl( $this, wxID_ANY, "startID", wxDefaultPosition, wxDefaultSize, 0 );
		$gSizer1->Add( $this->startid, 0, wxALL, 5 );
		
		$this->endID = new wxTextCtrl( $this, wxID_ANY, "endID", wxDefaultPosition, wxDefaultSize, 0 );
		$gSizer1->Add( $this->endID, 0, wxALL, 5 );
		
		
		$bSizer1->Add( $gSizer1, 0, wxALIGN_CENTER, 5 );
		
		$this->csvButton = new wxButton( $this, wxID_ANY, "Generate CSV!", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer1->Add( $this->csvButton, 0, wxALIGN_CENTER, 5 );
		
		
		$this->SetSizer( $bSizer1 );
		$this->Layout();
		$this->m_statusBar1 = $this->CreateStatusBar( 1, wxST_SIZEGRIP, wxID_ANY );
		
		$this->Centre( wxBOTH );
		
		// Connect Events
		// $this->startid->Connect( wxEVT_LEFT_DOWN, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_LEFT_UP, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_MIDDLE_DOWN, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_MIDDLE_UP, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_RIGHT_DOWN, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_RIGHT_UP, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_MOTION, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_LEFT_DCLICK, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_MIDDLE_DCLICK, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_RIGHT_DCLICK, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_LEAVE_WINDOW, array($this, "mouseEventStartID") );
		 $this->startid->Connect( wxEVT_ENTER_WINDOW, array($this, "mouseEventStartID") );
		// $this->startid->Connect( wxEVT_MOUSEWHEEL, array($this, "mouseEventStartID") );



		// $this->endID->Connect( wxEVT_LEFT_DOWN, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_LEFT_UP, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_MIDDLE_DOWN, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_MIDDLE_UP, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_RIGHT_DOWN, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_RIGHT_UP, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_MOTION, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_LEFT_DCLICK, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_MIDDLE_DCLICK, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_RIGHT_DCLICK, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_LEAVE_WINDOW, array($this, "mouseEventEndID") );
		 $this->endID->Connect( wxEVT_ENTER_WINDOW, array($this, "mouseEventEndID") );
		// $this->endID->Connect( wxEVT_MOUSEWHEEL, array($this, "mouseEventEndID") );

		$this->csvButton->Connect( wxEVT_COMMAND_BUTTON_CLICKED, array($this, "generate_csv") );
	}
	
	
	function __destruct( ){
	}
	
	
	// Virtual event handlers, overide them in your derived class
	function mouseEventStartID( $event ){
		$event->Skip();
	}
	
	function mouseEventEndID( $event ){
		$event->Skip();
	}
	
	function generate_csv( $event ){
		$event->Skip();
	}
	
}

?>
