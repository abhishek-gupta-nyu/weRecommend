<?php

class Cart extends Application{
	
	
	public function __construct() {
				
		parent::__construct();
		
	}
		
	public function additem($product_id){
		
		
		if(!in_array($product_id, $_SESSION['cart'])){
			
			
			$product = new Product();
			$result = $product->getProductById($product_id);
			
			if($row = mysqli_fetch_assoc($result)) {	
                               
				$_SESSION['cart'][$product_id]['id'] = $row["product_id"];
				$_SESSION['cart'][$product_id]['name'] = $row["product_name"];
		
			}
			
			$recommend = new Recommend();
			$recommend->additem($product_id);
			
			
		}
		
	}
	
	public function removeitem($product_id){
		
		unset($_SESSION['cart'][$product_id]);
		
	}
	
	
	public function displaycart(){
		
		$output = '';
		
		
		foreach($_SESSION['cart'] as $cart_item){
			
			
		?>



			<div class="row">
			
				<div class="col-lg-4">
				  <img src="images/<?php echo $cart_item['id']; ?>.jpg" alt="" height="80">
				</div>
			
				<div class="col-lg-8">
				  <h5><?php echo $cart_item['name']; ?></h5>
				  <p><a class="btn btn-danger btn-xs" href="index.php?remove=<?php echo $cart_item['id']; ?>" role="button">Remove »</a></p>
				</div>
				
			</div>
			
		<?php
			
		
		}
		
		
		
		return $output;
		
	}
	
}