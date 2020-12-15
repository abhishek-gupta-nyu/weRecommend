<?php

class Recommend extends Application{
	
	private $out = array();
	
	private $table = 'recommend';	
	
	public function __construct() {
				
		parent::__construct();
		
	}
		
	public function additem($product_id){
		
		
		$sql = "SELECT * FROM {$this->table} WHERE antecedent_id = '$product_id'";
		$result = $this->mysqli->query($sql);
		
		
		while($row = mysqli_fetch_assoc($result)) {
			
			if(!in_array($row['consequent_id'], $this->out)){
			
				$product = new Product();
				$result1 = $product->getProductById($row['consequent_id']);
				
				if($row1 = mysqli_fetch_assoc($result1)) {	
								   
					$this->out[$row['consequent_id']]['id'] = $row1["product_id"];
					$this->out[$row['consequent_id']]['name'] = $row1["product_name"];
			
				}			
				
			}
			
			
		}
	
		
		
		
		
	}
	
	public function removeitem($product_id){
		
		unset($_SESSION['recommend'][$product_id]);	
		
	}
	
	
	public function displayrecommend(){
		
		
		foreach($_SESSION['cart'] as $cart_item){
			
			
			$this->additem($cart_item['id']);
			
			
		}
		
		foreach($_SESSION['cart'] as $cart_item){
			
			unset($this->out[$cart_item['id']]);			
			
		}
		
		
		
		$output = '';
		
		
		foreach($this->out as $recommend_item){
			
			
		?>



			<div class="row">
			
				<div class="col-lg-4">
				  <img src="images/<?php echo $recommend_item['id']; ?>.jpg" alt="" height="80">
				</div>
			
				<div class="col-lg-8">
				  <h5><?php echo $recommend_item['name']; ?></h5>
				  <p><a class="btn btn-success btn-xs" href="index.php?product_id=<?php echo $recommend_item['id']; ?>" role="button">Add to Cart »</a></p>
				</div>
				
			</div>
			
		<?php
			
		
		}
		
		
		
		return $output;
		
	}
	
}