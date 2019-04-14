<!-- Товар 1 -->
<div class="col-sm-6 col-md-6 col-lg-4">
	<article class="card mb-4">
		<div class="card-top">

		<?php if ($product['sale']) {?>
			<div class="card-top__sale">Sale</div>
		<?php } elseif($product['new']) { ?>

			<div class="card-top__new">New</div>

		<?php } else { ?>

		<?php }  ?>

		<div class="card-top__cat"><?php echo $product['category']; ?></div>
		</div>
		<div class="product-img">
			<img src="img/products/<?php echo $product['img']; ?>">
		</div>
		<div class="card-body">
			<h4 class="item-title"><a href="product-page.php?productId=<?php echo $product['id']; ?>&category=<?php echo $product['category']; ?>"><?php echo $product['title']; ?></a></h4>
			<div class="card-btn">
				<div class="card-btn__price">
				<?php echo $product['price']; ?> ₽
				</div>
				<a href="order.php?id=<?php echo $product['id']; ?>" class="card-btn__btn">
					Купить
				</a>
			</div>
		</div>
	</article>
</div>
<!-- // Товар 1 -->