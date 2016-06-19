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
		parent::__construct ( $parent, wxID_ANY, wxEmptyString, wxDefaultPosition, new wxSize( 1283,650 ), wxDEFAULT_FRAME_STYLE|wxTAB_TRAVERSAL );
		
		$this->SetSizeHints( wxDefaultSize, wxDefaultSize );
		
		$bSizer1 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer7 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer7->SetMinSize( new wxSize( -1,50 ) ); 
		$this->m_staticText14 = new wxStaticText( $this, wxID_ANY, my_shop_lvl, wxDefaultPosition, new wxSize( -1,-1 ), 0 );
		$this->m_staticText14->Wrap( -1 );
		$this->m_staticText14->SetFont( new wxFont( 50, 70, 90, 90, false, wxEmptyString ) );
		
		$bSizer7->Add( $this->m_staticText14, 0, wxALIGN_CENTER, 5 );
		
		
		$bSizer1->Add( $bSizer7, 0, wxBOTTOM|wxEXPAND, 5 );
		
		$bSizer5 = new wxBoxSizer( wxVERTICAL );
		
		$bSizer71 = new wxBoxSizer( wxVERTICAL );
		
		$this->date_txt = new wxStaticText( $this, wxID_ANY, "Date", wxDefaultPosition, wxDefaultSize, 0 );
		$this->date_txt->Wrap( -1 );
		$this->date_txt->SetFont( new wxFont( 15, 70, 90, 91, false, wxEmptyString ) );
		
		$bSizer71->Add( $this->date_txt, 0, wxALIGN_RIGHT|wxRIGHT, 5 );
		
		$this->date_txt_val = new wxTextCtrl( $this, wxID_ANY, "26/11/2015", wxDefaultPosition, wxDefaultSize, 0 );
		//$this->date_txt_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer71->Add( $this->date_txt_val, 0, wxALIGN_RIGHT|wxRIGHT, 5 );
		
		$gSizer11 = new wxGridSizer( 0, 2, 0, 0 );
		
		$this->product_id1 = new wxStaticText( $this, wxID_ANY, "Product ID", wxDefaultPosition, wxDefaultSize, 0 );
		$this->product_id1->Wrap( -1 );
		$gSizer11->Add( $this->product_id1, 0, wxALIGN_LEFT|wxLEFT, 5 );
		
		$this->product_id_val1 = new wxTextCtrl( $this, wxID_ANY, "idval", wxDefaultPosition, wxDefaultSize, 0 );
		$gSizer11->Add( $this->product_id_val1, 0, wxLEFT, 2 );
		
		
		$bSizer71->Add( $gSizer11, 0, 0, 5 );
		
		
		$bSizer5->Add( $bSizer71, 1, wxEXPAND, 5 );
		
		
		$bSizer1->Add( $bSizer5, 0, wxEXPAND, 5 );
		
		
		$bSizer1->Add( 0, 30, 0, wxEXPAND, 5, null );
		
		$fgSizer2 = new wxFlexGridSizer( 0, 2, 0, 500 );
		$fgSizer2->SetFlexibleDirection( wxBOTH );
		$fgSizer2->SetNonFlexibleGrowMode( wxFLEX_GROWMODE_SPECIFIED );
		
		$bSizer2 = new wxBoxSizer( wxVERTICAL );
		
		$this->shop_code = new wxStaticText( $this, wxID_ANY, "Shop Code", wxDefaultPosition, wxDefaultSize, 0 );
		$this->shop_code->Wrap( -1 );
		$bSizer2->Add( $this->shop_code, 0, wxALL, 5 );
		
		$shop_code_valChoices = array( "c1", "c2", "c3" );
		$this->shop_code_val = new wxListBox( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, $shop_code_valChoices, 0 );
		$bSizer2->Add( $this->shop_code_val, 0, wxLEFT|wxSHAPED, 5 );
				

		$this->customer_name = new wxStaticText( $this, wxID_ANY, "Customer Name", wxDefaultPosition, wxDefaultSize, 0 );
		$this->customer_name->Wrap( -1 );
		$bSizer2->Add( $this->customer_name, 0, wxALL, 5 );
		
		//$this->customer_name_val = new wxTextCtrl( $this, wxID_ANY, "My name", wxDefaultPosition, wxDefaultSize, 0 );
		$this->customer_name_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer2->Add( $this->customer_name_val, 0, wxALL, 5 );
		
		$this->cust_address = new wxStaticText( $this, wxID_ANY, "Customer Address", wxDefaultPosition, wxDefaultSize, 0 );
		$this->cust_address->Wrap( -1 );
		$bSizer2->Add( $this->cust_address, 0, wxALL, 5 );
		
		//$this->cust_address_val = new wxTextCtrl( $this, wxID_ANY, "Block G , BRA", wxDefaultPosition, new wxSize( 200,50 ), 0 );
		$this->cust_address_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, new wxSize( 200,50 ), 0 );
		$bSizer2->Add( $this->cust_address_val, 0, wxALL, 5 );
		
		$this->book_number = new wxStaticText( $this, wxID_ANY, "Book Number", wxDefaultPosition, wxDefaultSize, 0 );
		$this->book_number->Wrap( -1 );
		$bSizer2->Add( $this->book_number, 0, wxALL, 5 );
		
		//$this->book_number_val = new wxTextCtrl( $this, wxID_ANY, "4535546", wxDefaultPosition, wxDefaultSize, 0 );
		$this->book_number_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer2->Add( $this->book_number_val, 0, wxALL, 5 );
		
		$this->work_order = new wxStaticText( $this, wxID_ANY, "Work Order", wxDefaultPosition, wxDefaultSize, 0 );
		$this->work_order->Wrap( -1 );
		$bSizer2->Add( $this->work_order, 0, wxALL, 5 );
		
		$this->work_order_view = new wxButton( $this, wxID_ANY, "Edit", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer2->Add( $this->work_order_view, 0, wxALL, 5 );

		$this->rate_txt = new wxStaticText( $this, wxID_ANY, "Rate", wxDefaultPosition, wxDefaultSize, 0 );
		$this->rate_txt->Wrap( -1 );
		$bSizer2->Add( $this->rate_txt, 0, wxALL, 5 );


		
		//$this->quan_val = new wxTextCtrl( $this, wxID_ANY, "50", wxDefaultPosition, wxDefaultSize, 0 );
		$this->rate_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer2->Add( $this->rate_val, 0, wxALL, 5 );

		
		
		$fgSizer2->Add( $bSizer2, 1, wxEXPAND, 5 );
		
		$bSizer21 = new wxBoxSizer( wxVERTICAL );
		
		$this->cust_ph_number = new wxStaticText( $this, wxID_ANY, "Customer Phone Number", wxDefaultPosition, wxDefaultSize, 0 );
		$this->cust_ph_number->Wrap( -1 );
		$bSizer21->Add( $this->cust_ph_number, 0, wxALL, 5 );
		
		//$this->cust_ph_number_val = new wxTextCtrl( $this, wxID_ANY, "+8801752202886", wxDefaultPosition, wxDefaultSize, 0 );
		$this->cust_ph_number_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer21->Add( $this->cust_ph_number_val, 0, wxALL, 5 );
		
		$this->desc_goods = new wxStaticText( $this, wxID_ANY, "Description Of Goods", wxDefaultPosition, wxDefaultSize, 0 );
		$this->desc_goods->Wrap( -1 );
		$bSizer21->Add( $this->desc_goods, 0, wxALL, 5 );
		
		//$this->desc_goods_val = new wxTextCtrl( $this, wxID_ANY, "lorem ipsum dolar", wxDefaultPosition, new wxSize( 200,50 ), 0 );
		$this->desc_goods_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, new wxSize( 200,50 ), 0 );
		$bSizer21->Add( $this->desc_goods_val, 0, wxALL, 5 );
		
		$this->quan_txt = new wxStaticText( $this, wxID_ANY, "Quantity", wxDefaultPosition, wxDefaultSize, 0 );
		$this->quan_txt->Wrap( -1 );
		$bSizer21->Add( $this->quan_txt, 0, wxALL, 5 );


		
		//$this->quan_val = new wxTextCtrl( $this, wxID_ANY, "50", wxDefaultPosition, wxDefaultSize, 0 );
		$this->quan_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer21->Add( $this->quan_val, 0, wxALL, 5 );



		$this->unit_choices_txt = new wxStaticText( $this, wxID_ANY, "Unit Of Measurement", wxDefaultPosition, wxDefaultSize, 0 );
		$this->unit_choices_txt->Wrap( -1 );
		$bSizer21->Add( $this->unit_choices_txt, 0, wxALL, 5 );
		

		$unit_choices = array( "c1", "c2", "c3" );
		$this->unit_of_measurement = new wxListBox( $this, wxID_ANY, wxDefaultPosition, wxDefaultSize, $unit_choices, 0 );
		$bSizer21->Add( $this->unit_of_measurement, 0, wxLEFT|wxSHAPED, 5 );

		
		$bSizer8 = new wxBoxSizer( wxHORIZONTAL );
		
		$fgSizer21 = new wxFlexGridSizer( 0, 2, 0, 0 );
		$fgSizer21->SetFlexibleDirection( wxBOTH );
		$fgSizer21->SetNonFlexibleGrowMode( wxFLEX_GROWMODE_SPECIFIED );
		
		$this->amount_txt = new wxStaticText( $this, wxID_ANY, "Amount", wxDefaultPosition, wxDefaultSize, 0 );
		$this->amount_txt->Wrap( -1 );
		$fgSizer21->Add( $this->amount_txt, 0, wxALIGN_BOTTOM|wxALL, 5 );
		
		//$this->amount_val = new wxTextCtrl( $this, wxID_ANY, "45452", wxDefaultPosition, wxDefaultSize, 0 );
		$this->amount_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$fgSizer21->Add( $this->amount_val, 0, wxALL, 5 );
		
		
		$bSizer8->Add( $fgSizer21, 0, wxEXPAND, 5 );
		
		$fgSizer3 = new wxFlexGridSizer( 0, 2, 0, 0 );
		$fgSizer3->SetFlexibleDirection( wxBOTH );
		$fgSizer3->SetNonFlexibleGrowMode( wxFLEX_GROWMODE_SPECIFIED );
		
		$this->adv_txt = new wxStaticText( $this, wxID_ANY, "ADV", wxDefaultPosition, wxDefaultSize, 0 );
		$this->adv_txt->Wrap( -1 );
		$fgSizer3->Add( $this->adv_txt, 0, wxALIGN_BOTTOM|wxALL, 5 );
		
		//$this->adv_val = new wxTextCtrl( $this, wxID_ANY, "343545", wxDefaultPosition, wxDefaultSize, 0 );
		$this->adv_val = new wxTextCtrl( $this, wxID_ANY, "", wxDefaultPosition, wxDefaultSize, 0 );
		$fgSizer3->Add( $this->adv_val, 0, wxALL, 5 );
		
		
		$bSizer8->Add( $fgSizer3, 1, wxEXPAND, 5 );
		
		
		$bSizer21->Add( $bSizer8, 0, wxEXPAND, 5 );
		
		$bSizer9 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->adv_date_txt = new wxStaticText( $this, wxID_ANY, "ADV Date", wxDefaultPosition, wxDefaultSize, 0 );
		$this->adv_date_txt->Wrap( -1 );
		$bSizer9->Add( $this->adv_date_txt, 0, wxALL, 5 );
		
		$this->adv_date_txt_val = new wxTextCtrl( $this, wxID_ANY, "26/08/2009", wxDefaultPosition, wxDefaultSize, 0 );
		$bSizer9->Add( $this->adv_date_txt_val, 0, wxALL, 5 );
		
		
		$bSizer21->Add( $bSizer9, 0, wxEXPAND, 5 );
		
		$bSizer10 = new wxBoxSizer( wxHORIZONTAL );
		
		$this->product_delivered_txt = new wxStaticText( $this, wxID_ANY, "Product Delivered", wxDefaultPosition, wxDefaultSize, 0 );
		$this->product_delivered_txt->Wrap( -1 );
		$bSizer10->Add( $this->product_delivered_txt, 0, wxALL, 5 );
		
		$product_delivered_optChoices = array( "Yes", "No" );
		$this->product_delivered_opt = new wxRadioBox( $this, wxID_ANY, "Status", wxDefaultPosition, wxDefaultSize, $product_delivered_optChoices, 1, wxRA_SPECIFY_ROWS );
		$this->product_delivered_opt->SetSelection( 0 );
		$bSizer10->Add( $this->product_delivered_opt, 0, wxALIGN_TOP, 5 );
		
		
		$bSizer21->Add( $bSizer10, 1, wxEXPAND, 5 );
		
		
		$fgSizer2->Add( $bSizer21, 1, wxEXPAND, 5 );
		
		
		$fgSizer2->Add( 0, 0, 1, wxEXPAND, 5, null );
		
		$this->product_update = new wxButton( $this, wxID_ANY, "Update", wxDefaultPosition, wxDefaultSize, 0 );
		$this->product_update->SetFont( new wxFont( 15, 70, 90, 90, false, "Arial" ) );
		
		$fgSizer2->Add( $this->product_update, 0, 0, 5 );
		
/*		$this->err_status = new wxStaticText( $this, wxID_ANY, "err", wxDefaultPosition, wxDefaultSize, 0 );
		$this->err_status->Wrap( -1 );
		$fgSizer2->Add( $this->err_status, 50, 200, -10 );
*/

		
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
	// Connect Events
		$this->product_update->Connect( wxEVT_COMMAND_BUTTON_CLICKED, array($this, "buttonClickUpdate") );
		$this->Connect( wxEVT_ACTIVATE, array($this, "main_frame_activate") );
		$this->work_order_view->Connect( wxEVT_COMMAND_BUTTON_CLICKED, array($this, "work_order_view_buttonClickUpdate") );
		$this->date_txt_val->Connect( wxEVT_SET_FOCUS, array($this, "date_txt_val_buttonClickUpdate") );
		$this->amount_val->Connect( wxEVT_SET_FOCUS, array($this, "amount_val_focus_button") );

	}
	
	
	function __destruct( ){
	}
	
	
	// Virtual event handlers, overide them in your derived class
	function buttonClickUpdate( $event ){
		$event->Skip();

	}

		// Virtual event handlers, overide them in your derived class
	function main_frame_activate( $event ){
		$event->Skip();
	}
	
	function work_order_view_buttonClickUpdate( $event ){
		$event->Skip();

	}

	function date_txt_val_buttonClickUpdate( $event ){
		$event->Skip();

	}

	function amount_val_focus_button( $event ){
		$event->Skip();
	}

	
}

?>
