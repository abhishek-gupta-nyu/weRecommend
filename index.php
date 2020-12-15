<?php require_once 'inc/session.php'; ?>
<?php require_once 'inc/config.php'; ?>
<?php require_once 'inc/autoload.php'; ?>
<?php

	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = array();
	}
	
	if(!isset($_SESSION['recommend'])){
		$_SESSION['recommend'] = array();
	}
	
	//echo gettype($_SESSION['cart']);

	$cart = new Cart();
	
	$recommend = new Recommend();
	
	if(isset($_GET['product_id'])){
		$cart->additem($_GET['product_id']);
	}
	
	if(isset($_GET['remove'])){
		$cart->removeitem($_GET['remove']);
	}

	$product = new Product();
	$result = $product->getAllProducts();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	
    <title>weRecommend</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


  </head>
  <body>


<div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted"><a href="index.php">weRecommend</a></h3>
      </div>

      <!-- Jumbotron -->
      <div class="jumbotron">
        <p class="lead">Based on what is present in your cart you will get custom recommendations</p>
      </div>
	  
	  <div class="row">
        <div class="col-lg-8">
		
		
		<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">All Products</h3>
			  </div>
			  <div class="panel-body">
					
				<div class="row">		
				
				<?php while($row = mysqli_fetch_assoc($result)) { ?>

						<div class="col-lg-4" style="min-height:300px;">
						  <img src="images/<?= $row["product_id"] ?>.jpg" alt="weRecommend" height="140">
						  <h5><?= $row["product_name"] ?></h5>
						  <p><a class="btn btn-primary" href="index.php?product_id=<?= $row["product_id"] ?>" role="button">Add to Cart »</a></p>
						</div>
													
				<?php } ?>
				
				</div>
          		
			  </div>
			</div>  
		  		  		  
        </div>
        <div class="col-lg-4">
			
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Cart</h3>
			  </div>
			  <div class="panel-body">
			  
			  
			  <?php $cart->displaycart(); ?>
			  
			  
			  
			  </div>
			</div>
			
			
			<div class="panel panel-default">
			  <div class="panel-heading">
				<h3 class="panel-title">Recommendations</h3>
			  </div>
			  <div class="panel-body">
			  
			  
			  <?php $recommend->displayrecommend(); ?>
			  
			  </div>
			</div>
          
		  	
		  
		  
		  
       </div>
      </div>

      <!-- Site footer -->
      <footer class="footer">
        <p>Note: Images may be subjected to copyright © and should not be used in commercial projects.</p>
      </footer>

    </div>








    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>