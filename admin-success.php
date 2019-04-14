<?php
require_once 'config.php';

if( isset($_SESSION['login']) && $_SESSION['login'] == 'on') {
	
} else {
	header('Location: index.php');
}


$pageTitle = 'Товар добавлен успешно';

?>

<?php require_once 'templates/_head.php'; ?>

<!-- white-plate -->
<div class="white-plate">
    <div class="container-fluid">
        

    <?php require_once 'templates/_header.php'; ?>


        <div class="line-between"></div>
        <!-- content block -->
        <div class="row">
            <div class="col-12">
                <div class="title-1"></div>
                <h2>Товар успешно добавлен!</h2>
                <hr>
                <div>
                    <a class="btn btn-primary" href="index.php">На главную</a> 
                    <a class="btn btn-primary" href="admin.php">Добавить еще товар</a>
                </div>

            </div>

        </div>
        <!-- content block -->
    </div>
</div>
<!-- // white-plate -->

<?php require_once 'templates/_footer.php'; ?>

