<?php

$isAuth = App\Library\AuthHelper::isAuth();
$userRole = App\Library\AuthHelper::getUserRole();

?>

<header>
    <h1>Аренда Авто</h1>
    <nav>
        <ul>
            <li><a href="/">Головна</a></li>
            <li><a href="/about-us">Про нас</a></li>
            <?php if ($isAuth) echo '<li><a href="#">Мої угоди</a></li>'; ?>
            <?php if ($isAuth && $userRole === 'worker') echo '<li><a href="/user/cars">Мої авто</a></li>'; ?>
            <?php if (!$isAuth) echo '<li><a href="/login">Увійти</a></li><li><a href="/registration">Реєстрація</a></li>'; ?>
            <?php if ($isAuth) echo '<li><a href="/profile">Профіль</a></li><li><a href="/log-out">Вийти</a></li>'; ?>
        </ul>
    </nav>
</header>