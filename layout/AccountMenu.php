<?php
session_start();

echo '<link href="/resource/css/navbar/navbar.css" rel="stylesheet">
<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#"><i class="fas fa-dice-d20"></i>Форум</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/account/index.php">Главная <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/account/forums.php">Форумы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/account">Новости</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../account/profile.php">Профиль</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right ml-auto">
            <!--     Выход       -->


        </ul>
    </div>
</nav>';

////            <li class="nav-item">
////                <a href="../page/register.php" data-toggle="dropdown" class="btn btn-outline-info dropdown-toggle get-started-btn mt-1 mb-1 ahref">Регистрация</a>
////            </li>
///             <li class="nav-item">
//                <a data-toggle="dropdown" name="exit" class="btn btn-outline-success dropdown-toggle get-started-btn mt-1 mb-1 ahref ahfa" href="#">Выход</a>
//            </li>