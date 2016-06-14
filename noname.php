<?php

/*
* PHP code generated with wxFormBuilder (version Aug 23 2015)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

/*
 * Class MyFrame1
 */

class MyFrame1 extends wxFrame {
	
	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 1283,670 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer1 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer7 = new wxBoxSizer( wxVERTICAL );
		
		bSizer7->SetMinSize( new wxSize( -1,50 ) ); 
		$this->m_staticText14 = new wxStaticText( $this, wxID_ANY, "My Shop", wxDefaultPosition, new wxSize( -1,-1 ), 0 );
		$this->m_staticText14->Wrap( -1 );
		$this->m_staticText14->SetFont( new wxFont( 50, 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer7->Add( $this->m_staticText14, 0, wxALIGN_CENTER, 5 );
		
		
		$bSizer1->Add( $bSizer7, 0, wxBOTTOM|wxEXPAND, 5 );
		
		$bSizer5 = new wxBoxSizer( wxVERTICAL );
		
		$gSizer11 = new wxGridSizer( 0, 2, 0, 0 );
		
		$this->product_id1 = new wxStaticText( $this, wxID_ANY, "Product ID", wxDefaultPosition, wxDefaultSize, 0 );
		$this->product_id1->Wrap( -1 );
		$gSizer11->Add( $this->product_id1, 0, wxALIGN_LEFT|wxLEFT, 5 );
		
		$this->product_id_val1 = new wxTextCtrl( $this, wxID_ANY, "idval", wxDefaultPosition, wxDefaultSize, 0 );
		$gSizer11->Add( $this->product_id_val1, 0, wxLEFT, 2 );
		
		
		$bSizer5->Add( $gSizer11, 0, wxLEFT, 5 );
		
		
		$bSizer1->Add( $bSizer5, 0, wxEXPAND, 5 );
		
		
		$bSizer1->Add( 0, 30, 0, wxEXPAND, 5, null );
		
		$fgSizer2 = new wxFlexGridSizer( 0, 2, 0, 500 );
		$fgSizer2->SetFlexibleDirection( wxBOTH );
		$fgSizer2->SetNonFlexibleGrowMode( wxFLEX_GROWMODE_SPECIFIED );
		
		$bSizer2 = new wxBoxSizer( wxVERTICAL );
		
		$this->shop_code = new wxStaticText( $this, wxID_ANY, "Shop Code", wxDefaultPosition, wxDefaultSize, 0 );
		$this->shop_code->Wrap( -1 );
		$bSizer2->Add( $this->shop_code, 0, wxALL, 5 );
		
		$this->m_button1 = new wxButton( $this, wxID_ANY, "MyButton", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer2->Add( $this->m_button1, 0, wxALL, 5 );
		
		
		$bSizer2->Add( 0, 0, 1, wxEXPAND, 5, null );
		
		$m_listBox1Choices = array( "c1", "c2", "c3" );
		$this->m_listBox1 = new wxListBox( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, $m_listBox1Choices, 0 );
		$bSizer2->Add( $this->m_listBox1, 0, wxALL, 5 );
		
		
		$fgSizer2->Add( $bSizer2, 1, wxEXPAND, 5 );
		
		$bSizer21 = new wxBoxSizer( wxVERTICAL );
		
		$gSizer111 = new wxGridSizer( 0, 2, 0, 0 );
		
		
		$bSizer21->Add( $gSizer111, 0, 0, 5 );
		
		$gSizer12 = new wxGridSizer( 0, 2, 0, 0 );
		
		
		$bSizer21->Add( $gSizer12, 0, 0, 5 );
		
		
		$fgSizer2->Add( $bSizer21, 1, wxEXPAND, 5 );
		
		
		$bSizer1->Add( $fgSizer2, 1, wxEXPAND|wxLEFT, 5 );
		
		
		$this->SetSizer( $bSizer1 );
		$this->Layout();
		$this->top_menu = new wxMenuBar( 0 );
		$this->top_file = new wxMenu();
		$this->top_file_quit = new wxMenuItem( $this->top_file, wxID_ANY, "Quit", wxEmptyString, wxITEM_NORMAL );
		$this->top_file->Append( $this->top_file_quit );
		
		$this->top_menu->Append( $this->top_file, "File" ); 
		
		$this->top_tools = new wxMenu();
		$this->top_tools_import = new wxMenuItem( $this->top_tools, wxID_ANY, "Import", wxEmptyString, wxITEM_NORMAL );
		$this->top_tools->Append( $this->top_tools_import );
		
		$this->top_tools_export = new wxMenuItem( $this->top_tools, wxID_ANY, "Export", wxEmptyString, wxITEM_NORMAL );
		$this->top_tools->Append( $this->top_tools_export );
		
		$this->top_menu->Append( $this->top_tools, "Tools" ); 
		
		$this->top_help = new wxMenu();
		$this->top_help_documentation = new wxMenuItem( $this->top_help, wxID_ANY, "Documentation", wxEmptyString, wxITEM_NORMAL );
		$this->top_help->Append( $this->top_help_documentation );
		
		$this->top_help_about = new wxMenuItem( $this->top_help, wxID_ANY, "About", wxEmptyString, wxITEM_NORMAL );
		$this->top_help->Append( $this->top_help_about );
		
		$this->top_menu->Append( $this->top_help, "Help" ); 
		
		$this->SetMenuBar( $this->top_menu );
		
		$this->m_statusBar4 = $this->CreateStatusBar( 1, wxST_SIZEGRIP, wxID_ANY );
		
		$this->Centre( wxBOTH );
	}
	
	
	function __destruct( ){
	}
	
}

?>
