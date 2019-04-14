<?php
 require_once 'config.php';
$pageTitle = 'Сделать заказ';

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

					<div class="title-1">Сделать заказ</div>

					<?php

						$currentProductId = intval($_GET['id']);

						$sql = "SELECT * FROM products WHERE id = '$currentProductId'"; 
						$result = $db->query($sql);

						$product = $result->fetch(PDO::FETCH_ASSOC);
				
					?>

					<div class="order-item">
						<div class="order-img">
							<img class="order-img" src="img/products/<?php echo $product['img']; ?>">
						</div>
						<div class="order-desc">
							<h4 class="order-title"><?php echo $product['title']; ?></h4>
							<div class="order-price"><?php echo $product['price']; ?> ₽</div>
						</div>
					</div>

					<form method="POST" action="mail.php">
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Имя и Фамилия">
						</div>
						<div class="form-group">
							<input name="phone" type="text" class="form-control" placeholder="Телефон">
						</div>
						<div class="form-group">
							<input name="mail" type="email" class="form-control" placeholder="Email">
						</div>
						<div class="form-group">
							<input name="addres" type="text" class="form-control" placeholder="Адрес">
						</div>
						<input name="productTitle" type="hidden" value="<?php echo $product['title']; ?>" >
						<input name="productId" type="hidden" value="<?php echo $product['id']; ?>" >
						<input name="productPrice" type="hidden" value="<?php echo $product['price']; ?>" >
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Оформить заказ</button>
						</div>
					</form>

				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php require_once 'templates/_footer.php'; ?>
