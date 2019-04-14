<?php

 require_once 'config.php';
$pageTitle = 'Главная страница';



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
				<div class="col-md-9 col-lg-10">
					<div class="row">


					<?php

					$curentCategory = $_GET['category'];

					if($_GET['category']) {
						$sql = "SELECT * FROM products WHERE category = '$curentCategory'"; 
						$result = $db->query($sql);
						$products = $result->fetchALL(PDO::FETCH_ASSOC);
					} else {
						$sql = "SELECT * FROM products"; 
						$result = $db->query($sql);
						$products = $result->fetchALL(PDO::FETCH_ASSOC);
					}
						
						foreach ($products as $product) {
					

							include './templates/_produc-item.php';


					 }
						
					
					// for ($i = 0; $i < 5; $i++) {
					// 	include './templates/_produc-item.php';
					// }
					
					
					?>


					</div>
				</div>
				<!-- // Center Part -->
			</div>
			<!-- content block -->
		</div>
	</div>
	<!-- // white-plate -->

	<?php require_once 'templates/_footer.php'; ?>
