<?php 

/**
* Printing Class
*/
require_once 'print_dialog.php';

require_once 'printOut.php';

class localPrinter extends wxPrinter
{
	public $printOut = null;

	function __construct()	{
		
		$this->printDialog = new localPrintDialogData();

		parent::__construct($this->printDialog);

		//$this->printOut = new localPrintOut();

		return;
	}

	function init_dialog() {

		$this->PrintDialog(null);
		//$this->Setup(null);
		
		return;
	}


}


 ?>