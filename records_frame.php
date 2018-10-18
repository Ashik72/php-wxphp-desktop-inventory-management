<?php

/*
* PHP code generated with wxFormBuilder (version Jun 17 2015)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

/*
 * Class MyFrame3
 */

class records_Frame extends wxFrame {
	
	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 1750,512 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer8 = new wxBoxSizer( wxVERTICAL );
		
		$this->records_txt = new wxStaticText( $this, wxID_ANY, "Records", wxDefaultPosition, wxDefaultSize, 0 );
		$this->records_txt->Wrap( -1 );
		$this->records_txt->SetFont( new wxFont( 25, 70, 90, 92, false, wxEmptyString ) );
		
		$bSizer8->Add( $this->records_txt, 0, wxALIGN_CENTER|wxALL, 5 );
		
		$bSizer10 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_grid2 = new wxGrid( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, 0 );
		
		# Grid
		$this->m_grid2->CreateGrid( 0, 17 );
		$this->m_grid2->EnableEditing( true );
		$this->m_grid2->EnableGridLines( true );
		$this->m_grid2->EnableDragGridSize( false );
		$this->m_grid2->SetMargins( 0, 0 );
		
		# Columns
		$this->m_grid2->SetColSize( 0, 88 );
		$this->m_grid2->SetColSize( 1, 96 );
		$this->m_grid2->SetColSize( 2, 121 );
		$this->m_grid2->SetColSize( 3, 51 );
		$this->m_grid2->SetColSize( 4, 132 );
		$this->m_grid2->SetColSize( 5, 108 );
		$this->m_grid2->SetColSize( 6, 156 );
		$this->m_grid2->SetColSize( 7, 137 );
		$this->m_grid2->SetColSize( 8, 58 );
		$this->m_grid2->SetColSize( 9, 129 );
		$this->m_grid2->SetColSize( 10, 57 );
		$this->m_grid2->SetColSize( 11, 68 );
		$this->m_grid2->SetColSize( 12, 62 );
		$this->m_grid2->SetColSize( 13, 74 );
		$this->m_grid2->SetColSize( 14, 111 );
		$this->m_grid2->SetColSize( 15, 116 );
		$this->m_grid2->SetColSize( 16, 121 );

		$this->m_grid2->EnableDragColMove( false );
		$this->m_grid2->EnableDragColSize( true );
		$this->m_grid2->SetColLabelSize( 30 );
		$this->m_grid2->SetColLabelValue( 0, "SHOP CODE" );
		$this->m_grid2->SetColLabelValue( 1, "BOOK NUMBER" );
		$this->m_grid2->SetColLabelValue( 2, "Work Order Number" );
		$this->m_grid2->SetColLabelValue( 3, "DATE" );
		$this->m_grid2->SetColLabelValue( 4, "CUSTOMER NUMBER" );
		$this->m_grid2->SetColLabelValue( 5, "Customer Address" );
		$this->m_grid2->SetColLabelValue( 6, "Customer PHONE NUMBER" );
		$this->m_grid2->SetColLabelValue( 7, "Description of GOODS" );
		$this->m_grid2->SetColLabelValue( 8, "Quantity" );
		$this->m_grid2->SetColLabelValue( 9, "Unit of Measurement" );
		$this->m_grid2->SetColLabelValue( 10, "Rate" );
		$this->m_grid2->SetColLabelValue( 11, "AMOUNT" );
		$this->m_grid2->SetColLabelValue( 12, "ADV" );
		$this->m_grid2->SetColLabelValue( 13, "Adv DATE" );
		$this->m_grid2->SetColLabelValue( 14, "Product Delivered" );
		$this->m_grid2->SetColLabelValue( 15, "Edit" );
		$this->m_grid2->SetColLabelValue( 16, "Delete" );
		$this->m_grid2->SetColLabelValue( 17, wxEmptyString );
		$this->m_grid2->SetColLabelValue( 18, wxEmptyString );
		$this->m_grid2->SetColLabelAlignment( wxALIGN_CENTRE, wxALIGN_CENTRE );
		
		# Rows
		$this->m_grid2->EnableDragRowSize( true );
		$this->m_grid2->SetRowLabelSize( 20 );
		$this->m_grid2->SetRowLabelAlignment( wxALIGN_CENTRE, wxALIGN_CENTRE );
		
		# Label Appearance
		
		# Cell Defaults
		$this->m_grid2->SetDefaultCellAlignment( wxALIGN_LEFT, wxALIGN_TOP );
		$bSizer10->Add( $this->m_grid2, 0, wxALL|wxEXPAND, 5 );
		
		
		$bSizer8->Add( $bSizer10, 1, wxEXPAND, 5 );
		
		
		$this->SetSizer( $bSizer8 );
		$this->Layout();
		
		$this->Centre( wxBOTH );
		
		// Connect Events
		$this->Connect( wxEVT_ACTIVATE, array($this, "records_frame_activate") );
		$this->m_grid2->Connect( wxEVT_GRID_CELL_LEFT_DCLICK, array($this, "leftDClickCell") );
		$this->m_grid2->Connect( wxEVT_GRID_SELECT_CELL, array($this, "gridSelectCellEvent") );
	}
	
	
	function __destruct( ){
	}
	
	
	// Virtual event handlers, overide them in your derived class
	function records_frame_activate( $event ){
		$event->Skip();
	}	

	function leftDClickCell( $event ){
		$event->Skip();
	}
	
	function gridSelectCellEvent( $event ){
		$event->Skip();
	}
	
}

?>
