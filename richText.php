<?php

/*
* PHP code generated with wxFormBuilder (version Jun 17 2015)
* http://www.wxformbuilder.org/
*
* PLEASE DO "NOT" EDIT THIS FILE!
*/

/*
 * Class MyFrame2
 */

class MyFrame2 extends wxFrame {
	
	function __construct( $parent=null ){
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 822,727 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer2 = new wxBoxSizer( wxVERTICAL );
		
		$this->m_richText1 = new wxRichTextCtrl( $this, wxID_ANY, wxEmptyString, wxDefaultPosition, wxDefaultSize, 0|wxVSCROLL|wxHSCROLL|wxNO_BORDER|wxWANTS_CHARS );
		$bSizer2->Add( $this->m_richText1, 1, wxEXPAND | wxALL, 5 );
		
		
		$this->SetSizer( $bSizer2 );
		$this->Layout();
		
		$this->Centre( wxBOTH );
	}
	
	
	function __destruct( ){
	}
	
}

?>
