<?php

/*
* PHP code generated with wxFormBuilder (version Jun 17 2015)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

/*
 * Class MyFrame1
 */

class work_order_entry extends wxFrame {
	
	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 419,469 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer1 = new wxBoxSizer( wxVERTICAL );
		
		$fgSizer2 = new wxFlexGridSizer( 0, 2, 0, 0 );
		$fgSizer2->SetFlexibleDirection( wxBOTH );
		$fgSizer2->SetNonFlexibleGrowMode( wxFLEX_GROWMODE_SPECIFIED );
		
		$this->work_order_record_txt = new wxStaticText( $this, wxID_ANY, work_order_records_txt, wxDefaultPosition, wxDefaultSize, 0 );
		$this->work_order_record_txt->Wrap( -1 );
		$fgSizer2->Add( $this->work_order_record_txt, 0, wxALL, 5 );
		


		$this->work_order_record_val = new wxStaticText( $this, wxID_ANY, "0", wxDefaultPosition, wxDefaultSize, 0 );
		$this->work_order_record_val->Wrap( -1 );
		$this->work_order_record_val->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 93, 92, false, wxEmptyString ) );
		
		$fgSizer2->Add( $this->work_order_record_val, 0, wxALL, 5 );
		
		$this->work_order_record_status = new wxStaticText( $this, wxID_ANY, work_order_records_txt, wxDefaultPosition, wxDefaultSize, 0 );
		$this->work_order_record_status->Wrap( -1 );
		$fgSizer2->Add( $this->work_order_record_status, 0, wxALL, 5 );

		
		$bSizer1->Add( $fgSizer2, 0, wxEXPAND, 5 );
		
		$bSizer2 = new wxBoxSizer( wxVERTICAL );
		
		$fgSizer3 = new wxFlexGridSizer( 0, 2, 0, 0 );
		$fgSizer3->SetFlexibleDirection( wxBOTH );
		$fgSizer3->SetNonFlexibleGrowMode( wxFLEX_GROWMODE_SPECIFIED );
		
		$bSizer3 = new wxBoxSizer( wxVERTICAL );
		
		$this->product_id_txt = new wxStaticText( $this, wxID_ANY, "Product ID", wxDefaultPosition, wxDefaultSize, 0 );
		$this->product_id_txt->Wrap( -1 );
		$this->product_id_txt->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer3->Add( $this->product_id_txt, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->work_order_number_txt = new wxStaticText( $this, wxID_ANY, "Work Order Number", new wxPoint( -1,-1 ), wxDefaultSize, 0 );
		$this->work_order_number_txt->Wrap( 100 );
		$this->work_order_number_txt->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer3->Add( $this->work_order_number_txt, 0, wxALL, 5 );
		
		$this->book_number_txt = new wxStaticText( $this, wxID_ANY, "Book Number", wxDefaultPosition, wxDefaultSize, 0 );
		$this->book_number_txt->Wrap( -1 );
		$this->book_number_txt->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer3->Add( $this->book_number_txt, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->amount_txt = new wxStaticText( $this, wxID_ANY, "Amount", new wxPoint( -1,-1 ), new wxSize( -1,25 ), 0 );
		$this->amount_txt->Wrap( -1 );
		$this->amount_txt->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer3->Add( $this->amount_txt, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->date_txt = new wxStaticText( $this, wxID_ANY, "Date", wxDefaultPosition, new wxSize( -1,25 ), 0 );
		$this->date_txt->Wrap( -1 );
		$this->date_txt->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer3->Add( $this->date_txt, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		$this->comments_txt = new wxStaticText( $this, wxID_ANY, "Comments", wxDefaultPosition, wxDefaultSize, 0 );
		$this->comments_txt->Wrap( -1 );
		$this->comments_txt->SetFont( new wxFont( wxC2D(wxNORMAL_FONT)->GetPointSize(), 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer3->Add( $this->comments_txt, 0, wxALIGN_CENTER_VERTICAL|wxALL, 5 );
		
		
		$fgSizer3->Add( $bSizer3, 1, wxALL|wxEXPAND, 5 );
		
		$bSizer4 = new wxBoxSizer( wxVERTICAL );
		
		$this->product_id_val = new wxTextCtrl( $this, wxID_ANY, "product_id", wxDefaultPosition, wxDefaultSize, 0 );
		$this->product_id_val->Enable( false );
		
		$bSizer4->Add( $this->product_id_val, 0, wxALL, 5 );
		
		$this->work_order_val = new wxTextCtrl( $this, wxID_ANY, "work order", wxDefaultPosition, wxDefaultSize, 0 );
		$this->work_order_val->Enable( false );
		
		$bSizer4->Add( $this->work_order_val, 0, wxALL, 5 );
		
		$this->book_number_val = new wxTextCtrl( $this, wxID_ANY, "book number", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer4->Add( $this->book_number_val, 0, wxALL, 5 );
		
		//$this->amount_val = new wxTextCtrl( $this, wxID_ANY, "amount", wxDefaultPosition, wxDefaultSize, 0 );
		$this->amount_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer4->Add( $this->amount_val, 0, wxALL, 5 );
		
		$this->date_val = new wxTextCtrl( $this, wxID_ANY, "29/03/2003", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer4->Add( $this->date_val, 0, wxALL, 5 );
		
		//$this->comments_val = new wxTextCtrl( $this, wxID_ANY, "Comments", wxDefaultPosition, new wxSize( 200,50 ), 0 );
		$this->comments_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, new wxSize( 200,50 ), 0 );
		$bSizer4->Add( $this->comments_val, 0, wxALL, 5 );
		
		
		$fgSizer3->Add( $bSizer4, 1, wxEXPAND, 5 );
		
		
		$bSizer2->Add( $fgSizer3, 1, wxEXPAND, 5 );
		
		$this->submit_work_order = new wxButton( $this, wxID_ANY, "Submit", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer2->Add( $this->submit_work_order, 0, wxALL, 5 );

		
		//$this->close_work_order = new wxButton( $this, wxID_ANY, "Close", wxDefaultPosition, wxDefaultSize, 0 );
		//$bSizer2->Add( $this->close_work_order, 0, wxALL, 5 );

		
		
		$bSizer1->Add( $bSizer2, 0, wxALL|wxEXPAND, 30 );
		
		
		$this->SetSizer( $bSizer1 );
		$this->Layout();
		
		$this->Centre( wxBOTH );
		
		// Connect Events
		$this->submit_work_order->Connect( wxEVT_COMMAND_BUTTON_CLICKED, array($this, "work_order_on_submit") );
		//$this->close_work_order->Connect( wxEVT_COMMAND_BUTTON_CLICKED, array($this, "closeWorkOrder") );

	}
	
	
	function __destruct( ){
	}
	
	
	// Virtual event handlers, overide them in your derived class
	function work_order_on_submit( $event ){
		$event->Skip();
	}

	function closeWorkOrder( $event ){
		$event->Skip();
	}
	
}

?>
