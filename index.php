<?php
session_start();
if($_SESSION['login'])
    echo $_SESSION['login'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Главная страница</title>
<!--    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">-->
    <?php include('layout/Link.php') ?>
<!-- Link Bootstrap подключаются с помощью доп страницы -->
<!--    <link href="/resource/css/navbar/navbar.css" rel="stylesheet">-->
<link rel="stylesheet" href="resource/css/style.css">
</head>
<body>


<?php include('layout/Menu.php') ?>

<div class="container">
    <div class="my-container">
        <div class="theme-container">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cum debitis delectus dolor doloremque ea eos expedita harum in maiores minus natus numquam obcaecati odit porro praesentium qui quis rerum saepe unde vel, veritatis voluptatem. Accusamus animi aspernatur assumenda autem consequuntur cupiditate delectus doloremque dolores ducimus, facilis fuga magni maxime, necessitatibus numquam, perferendis perspiciatis praesentium quam quasi quos repellat reprehenderit sint tempora totam vero voluptates. Adipisci amet aperiam eius exercitationem facilis, fuga ipsa laboriosam nihil pariatur perferendis porro quibusdam saepe sequi, tempora, tempore! Asperiores assumenda porro quaerat voluptas! Adipisci commodi cupiditate debitis doloribus eos excepturi illo nulla numquam quaerat ut.</p>
        </div>
        <div class="advertising-container"></div>
    </div>
</div>



<?php include('layout/Footer.php') ?>







<?php include('layout/scriptBootstrap.php')?>


</body>
</html>