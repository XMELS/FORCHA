<?php
session_start();

require('connect_db.php');

if(isset($_GET['exit']))
{
    session_destroy();
    header('Location: ../index.php');
    exit;
}
if($_SESSION['login']){
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
</head>
<body>
<?php require('../layout/AccountMenu.php') ?>

<?php //if (isset($_SESSION['login']) && isset($_SESSION['id']))
//{?>
<!--    <div class="alert alert-success alert-dismissible fade show" role="alert">-->
<!--        <strong>Добро пожаловать!</strong> You should check in on some of those fields below.-->
<!--        <button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
<!--            <span aria-hidden="true">&times;</span>-->
<!--        </button>-->
<!--    </div>-->
<?//}?>


<div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Привет, <? echo $_SESSION['nickname'];?></h1>
        <p class="lead">Это простой пример блока с компонентом в стиле jumbotron для привлечения дополнительного внимания к содержанию или информации.</p>
        <hr class="my-4">
        <p>Использются служебные классы для типографики и расстояния содержимого в контейнере большего размера.</p>
        <p class="lead">
            <a href="?exit" class="btn btn-primary btn-lg" >Выход</a>
        </p>
    </div>
</div>

<script>
    ('.alert').alert('Close');
</script>

<?php require('../layout/Footer.php') ?>



<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php //require('../layout/scriptBootstrap.php')?>
</body>
</html>
<?php
} else {
    echo 'Вы не залогинелись правильно';
}?>