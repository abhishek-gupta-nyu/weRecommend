<?php

class Application{
	
// 	Connection variables for local database server


	protected $_host = "localhost";
	protected $_user = "root";
	protected $_password = "";
	protected $_name = "werecommend";

	
	protected $admin_email = "";

	protected $mysqli = '';
	
	
	public function __construct() {
		
		$this->mysqli = new MySQLi($this->_host, $this->_user, $this->_password, $this->_name);
		
	}
	
}