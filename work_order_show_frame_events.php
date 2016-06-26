<?php 


/**
* Work Order Show Events
*/
class WORK_ORDER_SHOW_Events extends WORK_ORDER_SHOW
{
	
	function __construct($db = null, $col = null, $row = null, $val = null)
	{
		parent::__construct();

		$this->the_db = $the_db;

		$this->col = $col;

		$this->row = $row;

		$this->val = $val;

		var_dump($this->val);

	}
}


 ?>