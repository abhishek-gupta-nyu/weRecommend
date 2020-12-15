<?php

class Product extends Application{
	
	private $table = 'products';	
	
	public function __construct() {
		
		parent::__construct();
		
	}
	
	public function getAllProducts(){
		
		$sql = "SELECT * FROM {$this->table}";
				
		$result = $this->mysqli->query($sql);
		
		return $result;
		
	}
	
	
	public function getProductById($product_id){
		
		$sql = "SELECT * FROM {$this->table} WHERE product_id = '$product_id'";
		$result = $this->mysqli->query($sql);
		return $result;
		
		
	}
	
}