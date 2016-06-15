<?php 

require_once "config.php";


/**
* DB SQLITE3
*/
class the_db_opener extends SQLite3
{
	

	function __construct()
	{
		$this->open(DB_NAME);
	}


}

/**
* DB_Ops
*/
class DB_Ops extends the_db_opener
{
	
	public $db;
	public $db_status;

	function __construct()
	{
		$this->db = new the_db_opener();

		if(!$this->db){
	    
	      return;
	   	
	   	} else {

	      return db_open_success;

	   	}
	}

	public function query_sql_select($sql = null) {

		if (empty($sql))
			return;

		$data = $this->db->query($sql);

		$data_array = array();

		while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
				$data_array[] = $row;
				}

		if (empty($data_array))
			return;				

		return $data_array; 
	}

	public function query_sql_update($sql = null) {

		if (empty($sql))
			return;

	$ret = $this->db->exec($sql);
   	
   	if(!$ret){
      return array(
      	'status' => 0,
      	'log' => $this->db->lastErrorMsg()
      	);
   	} else {
      return array(
      	'status' => 1,
      	'log' => $this->db->changes(). record_updated_success
      	);
   	}



	}	

	public function query_sql_insert($sql = null) {

		if (empty($sql))
			return;

	$ret = $this->db->exec($sql);
   	
   	if(!$ret){
      return array(
      	'status' => 0,
      	'log' => $this->db->lastErrorMsg()
      	);
   	} else {
      return array(
      	'status' => 1,
      	'log' => $this->db->changes(). record_added_success
      	);
   	}

	}

	public function query_sql_delete($sql = null) {

	if (empty($sql))
		return;

	$ret = $this->db->exec($sql);
   	
   	if(!$ret){
      return array(
      	'status' => 0,
      	'log' => $this->db->lastErrorMsg()
      	);
   	} else {
      return array(
      	'status' => 1,
      	'log' => $this->db->changes(). record_delete_success
      	);
   	}

	}


}

$db_ops = new DB_Ops();
var_dump($db_ops);


//var_dump($db_ops->query_sql_select("SELECT * FROM general_info;"));
//var_dump($db_ops->query_sql_update("UPDATE `general_info` SET `shop_code`='abcd' WHERE `id`='2';"));
//var_dump($db_ops->query_sql_insert("INSERT INTO `general_info`(`id`,`shop_code`,`book_number`,`work_order_number`,`date`,`customer_name`,`customer_address`,`customer_phone_number`,`description_of_goods`,`quantity`,`unit_of_mesurement`,`rate`,`amount`,`adv`,`adv_date`,`product_delivered`) VALUES (null,'aty','43532',5644,'16/7/2008','abcd customer','adj dsjf dhaka','4355453','dsf dfsnnj kdskfk dsfg','34','meter','45','678','ad gfd','4/5/90','y');"));
//var_dump($db_ops->query_sql_delete("DELETE from general_info where id=7;"));

 ?>