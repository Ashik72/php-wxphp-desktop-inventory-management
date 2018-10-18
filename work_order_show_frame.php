<?php

/*
* PHP code generated with wxFormBuilder (version Jun 17 2015)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

/*
 * Class WORK_ORDER_SHOW
 */

class WORK_ORDER_SHOW extends wxFrame {
	
	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 1283,519 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer1 = new wxBoxSizer( wxVERTICAL );
		
		$this->show_work_order_txt = new wxStaticText( $this, wxID_ANY, "Showing Work Records For Entry: ", wxDefaultPosition, wxDefaultSize, 0 );
		$this->show_work_order_txt->Wrap( -1 );
		$this->show_work_order_txt->SetFont( new wxFont( 20, 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer1->Add( $this->show_work_order_txt, 0, wxALIGN_CENTER_HORIZONTAL, 5 );
		
		$this->m_grid1 = new wxGrid( $this, wxID_ANY, new wxPoint( -1,-1 ), new wxSize( 1170,-1 ), 0 );
		
		# Grid
		$this->m_grid1->CreateGrid( 0, 8 );
		$this->m_grid1->EnableEditing( true );
		$this->m_grid1->EnableGridLines( true );
		$this->m_grid1->EnableDragGridSize( false );
		$this->m_grid1->SetMargins( 0, 0 );
		
		# Columns
		$this->m_grid1->SetColSize( 0, 45 );
		$this->m_grid1->SetColSize( 1, 95 );
		$this->m_grid1->SetColSize( 2, 83 );
		$this->m_grid1->SetColSize( 3, 116 );
		$this->m_grid1->SetColSize( 4, 133 );
		$this->m_grid1->SetColSize( 5, 445 );
		$this->m_grid1->SetColSize( 6, 87 );
		$this->m_grid1->SetColSize( 7, 81 );
		$this->m_grid1->EnableDragColMove( false );
		$this->m_grid1->EnableDragColSize( true );
		$this->m_grid1->SetColLabelSize( 30 );
		$this->m_grid1->SetColLabelValue( 0, "ID" );
		$this->m_grid1->SetColLabelValue( 1, "Work Order ID" );
		$this->m_grid1->SetColLabelValue( 2, "Book Number" );
		$this->m_grid1->SetColLabelValue( 3, "Amount" );
		$this->m_grid1->SetColLabelValue( 4, "Date" );
		$this->m_grid1->SetColLabelValue( 5, "Comments" );
		$this->m_grid1->SetColLabelValue( 6, "Edit" );
		$this->m_grid1->SetColLabelValue( 7, "Delete" );
		$this->m_grid1->SetColLabelAlignment( wxALIGN_CENTRE, wxALIGN_BOTTOM );
		
		# Rows
		$this->m_grid1->EnableDragRowSize( true );
		$this->m_grid1->SetRowLabelSize( 80 );
		$this->m_grid1->SetRowLabelAlignment( wxALIGN_CENTRE, wxALIGN_CENTRE );
		
		# Label Appearance
		
		# Cell Defaults
		$this->m_grid1->SetDefaultCellAlignment( wxALIGN_LEFT, wxALIGN_TOP );
		$bSizer1->Add( $this->m_grid1, 0, wxALIGN_CENTER_HORIZONTAL|wxALL, 5 );
		
		$this->remaining_txt = new wxStaticText( $this, wxID_ANY, "Remaining:", wxDefaultPosition, wxDefaultSize, 0 );
		$this->remaining_txt->Wrap( -1 );
		$this->remaining_txt->SetFont( new wxFont( 20, 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer1->Add( $this->remaining_txt, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$this->remaining_box = new wxTextCtrl( $this, wxID_ANY, "43543", wxDefaultPosition, wxDefaultSize, 0 );
		$this->remaining_box->Enable( false );
		
		$bSizer1->Add( $this->remaining_box, 0, wxALIGN_CENTER|wxALL, 5 );
		
		
		$this->SetSizer( $bSizer1 );
		$this->Layout();
		
		$this->Centre( wxBOTH );
		
		// Connect Events
		$this->m_grid1->Connect( wxEVT_GRID_CELL_LEFT_DCLICK, array($this, "clickRecordCell") );
	}
	
	
	function __destruct( ){
	}
	
	
	// Virtual event handlers, overide them in your derived class
	function clickRecordCell( $event ){
		$event->Skip();
	}
	
}

?>
