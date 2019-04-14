<!-- Left aside -->
<div class="col-md-3 col-lg-2"> 
    <ul class="nav">
        <li class="nav__element"><a href="index.php" class="nav__link <?= (!isset($_GET["category"])) ? "nav__link--active" : ""?>">Все товары</a></li>
        <li class="nav__element"><a href="index.php?category=телефоны" class="nav__link <?= (isset($_GET["category"]) && $_GET["category"] == "телефоны") ? "nav__link--active" : ""?>">Телефоны</a></li>
        <li class="nav__element"><a href="index.php?category=планшеты" class="nav__link <?= (isset($_GET["category"]) && $_GET["category"] == "планшеты") ? "nav__link--active" : ""?>">Планшеты</a></li>
        <li class="nav__element"><a href="index.php?category=ноутбуки" class="nav__link <?= (isset($_GET["category"]) && $_GET["category"] == "ноутбуки") ? "nav__link--active" : ""?>">Ноутбуки</a></li>
        <li class="nav__element"><a href="index.php?category=компьютеры" class="nav__link <?= (isset($_GET["category"]) && $_GET["category"] == "компьютеры") ? "nav__link--active" : ""?>">Компьютеры</a></li>
    </ul>
</div>
<!-- // Left aside -->