<?php
 require_once 'config.php';
$pageTitle = 'Страница товара';

?>


<?php require_once 'templates/_head.php'; ?>

	<!-- white-plate -->
	<div class="white-plate">
		<div class="container-fluid">
			
		
		<?php require_once 'templates/_header.php'; ?>


			<div class="line-between"></div>
			<!-- content block -->
			<div class="row">


			<?php require_once 'templates/_aside.php'; ?>


				<!-- Center Part -->
				<div class="col-md-9">

				<?php

				$currentProductId = intval($_GET['productId']);

				$sql = "SELECT * FROM products WHERE id = '$currentProductId'"; 
				$result = $db->query($sql);

				$product = $result->fetch(PDO::FETCH_ASSOC);
				
				
				
				?>
					<div class="product-title"><?php echo $product['title']; ?></div>

					<div class="row mob-columns">
						<div class="col-6">
							<img src="img/products/<?php echo $product['img']; ?>" alt="">
						</div>
						<div class="col-6">
							<div class="product-price"><?php echo $product['price']; ?> руб</div>
							<a href="order.php?id=<?php echo $product['id']; ?>" class="product-btn-order">Сделать заказ</a>
							<div class="product-desc">
								<p><?php echo $product['description']; ?></p>

							</div>

						</div>
					</div>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->
	<?php require_once 'templates/_footer.php'; ?>