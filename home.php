<?php


/*
 * Class homeFrame
 */

class homeFrame extends wxFrame {
	
	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 636,413 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer5 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_staticText16 = new wxStaticText( $this, wxID_ANY, "Welcome!", wxDefaultPosition, wxDefaultSize, 0 );
		$this->m_staticText16->Wrap( -1 );
		$this->m_staticText16->SetFont( new wxFont( 40, 71, 90, 92, false, wxEmptyString ) );
		
		$bSizer5->Add( $this->m_staticText16, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$fgSizer22 = new wxFlexGridSizer( 0, 2, 0, 0 );
		$fgSizer22->SetFlexibleDirection( wxBOTH );
		$fgSizer22->SetNonFlexibleGrowMode( wxFLEX_GROWMODE_SPECIFIED );
		
		$this->add_record = new wxButton( $this, wxID_ANY, "Add Record (s)", wxDefaultPosition, new wxSize( 200,75 ), 0 );
		$fgSizer22->Add( $this->add_record, 0, wxALL, 5 );
		
		$this->view_records = new wxButton( $this, wxID_ANY, "View Records", wxDefaultPosition, new wxSize( 200,75 ), 0 );
		$fgSizer22->Add( $this->view_records, 0, wxALL, 5 );
		
		
		$bSizer5->Add( $fgSizer22, 0, wxALIGN_CENTER|wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		
		$this->SetSizer( $bSizer5 );
		$this->Layout();
		$this->m_statusBar1 = $this->CreateStatusBar( 1, wxST_SIZEGRIP, wxID_ANY );
		
		$this->Centre( wxBOTH );
		
		// Connect Events
		$this->add_record->Connect( wxEVT_COMMAND_BUTTON_CLICKED, array($this, "click_add_records") );
		$this->add_record->Connect( wxEVT_ENTER_WINDOW, array($this, "mouse_enter_add") );
		$this->add_record->Connect( wxEVT_LEAVE_WINDOW, array($this, "mouse_leave_add") );
		$this->view_records->Connect( wxEVT_COMMAND_BUTTON_CLICKED, array($this, "click_view_records") );
		$this->view_records->Connect( wxEVT_ENTER_WINDOW, array($this, "mouse_enter_view") );
		$this->view_records->Connect( wxEVT_LEAVE_WINDOW, array($this, "mouse_leave_view") );
		$this->m_statusBar1->Connect( wxEVT_ENTER_WINDOW, array($this, "enter_info_box") );
	}
	
	
	function __destruct( ){
	}
	
	
	// Virtual event handlers, overide them in your derived class
	function click_add_records( $event ){
		$event->Skip();
	}
	
	function mouse_enter_add( $event ){
		$event->Skip();
	}
	
	function mouse_leave_add( $event ){
		$event->Skip();
	}
	
	function click_view_records( $event ){
		$event->Skip();
	}
	
	function mouse_enter_view( $event ){
		$event->Skip();
	}
	
	function mouse_leave_view( $event ){
		$event->Skip();
	}
	
	function enter_info_box( $event ){
		$event->Skip();
	}
	
}

?>
