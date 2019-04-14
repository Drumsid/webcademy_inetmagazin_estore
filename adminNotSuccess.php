<?php
require_once 'config.php';

// if( isset($_SESSION['login']) && $_SESSION['login'] == 'on') {
	
// } else {
// 	header('Location: index.php');
// }


$pageTitle = 'Не все поля заполнены';

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
                <div class="title-1">Не все поля заполнены!</div>
            <p>Поля обязательные к заполнению должны быть заполнены</p>
            <a href="admin.php">попробовать еще</a>

            </div>

        </div>
        <!-- content block -->
    </div>
</div>
<!-- // white-plate -->

<?php require_once 'templates/_footer.php'; ?>