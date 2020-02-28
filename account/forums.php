<?php
session_start();

if($_SESSION['login'])
{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <title>Главная страница</title>
        <?php require('../layout/Link.php') ?>
        <!-- Link Bootstrap подключаются с помощью доп страницы -->
        <link rel="stylesheet" href="../resource/css/style.css">
        <link rel="stylesheet" href="../resource/css/profile/profile.css">
        <link rel="stylesheet" href="../resource/css/profile/tablediv.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<!--        <link href="../resource/css/SnippetsBootstrap-table.css" rel="stylesheet" />-->
        <link rel="stylesheet" href="/resource/css/forums/forums.css">
<!--        <script src="../scripts/js/jquery-1.11.3.min.js"></script>-->
<!---->
<!---->
<!--        <script type="text/javascript" src="../scripts/js/bootstrap-table.min.js"></script>-->
<!--        <script type="text/javascript" src="../scripts/js/SnippetBootstrap-table.js"></script>-->
    </head>
    <body>
    <?php require('../layout/AccountMenu.php') ?>


        <div class="d-flex justify-content-left">
        <div class="row">
            <div class="col-sm">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Форумы</li>
                    </ol>
                </nav>
            </div>
        </div>
        </div>
        <div class="container">
            <div class="row">
                <a href="CreateTheme.php"><button id="alertBtn" class="btn btn-default">Создать тему</button></a>
                <div class="col-9 m-blocks-container">
                    <h3>Форумы</h3>
                    <div class="row">
                        <? require('../scripts/themes/tabletheme.php')?>
                    </div>
                </div>
            </div>

        </div>






    <?php require('../layout/Footer.php') ?>

    <?php require('../layout/scriptBootstrap.php')?>

    </body>
</html>
<?php }?>
