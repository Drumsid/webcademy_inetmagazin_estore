<?php
require_once 'config.php';
$pageTitle = 'Страница авторизации';

?>


<?php require_once 'templates/_head.php'; ?>

	<!-- white-plate -->
	<div class="white-plate white-plate--login">
		<div class="container-fluid">

		<?php require_once 'templates/_loginHeader.php'; ?>

			<div class="line-between"></div>
			<form action="check-login.php" method = "post">
				<div class="form-group">
					<input name="password" type="password" class="form-control" placeholder="Пароль">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block">Войти</button>
				</div>
			</form>
			<p class="text-center"><a href="index.php" class="text-secondary">Вернуться назад</a></p>
		</div>
	</div>
	<!-- // white-plate -->

	<?php require_once 'templates/_footer.php'; ?>