<?php 

/**
* Print Dialog
*/

require_once 'print_data.php';

class localPrintDialogData extends wxPrintDialogData
{
	
	function __construct()
	{

		$this->printData = new localPrintData();

		parent::__construct($this->printData);
		return;
	}
	
}


 ?>