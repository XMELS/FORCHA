<?php
session_start();
require ('connect_db.php');



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
    </head>
    <body>
    <?php require('../layout/AccountMenu.php') ?>

    <div class="container my-forum-container">

        <div class="user-fon"><img src="/resource/img/strahovka.jpg" alt=""></div>
        <div class="user">
            <?php
            if($_GET['id'])
            {
                $user = mysqli_query($connection, "SELECT * FROM users WHERE id='".$_GET['id']."'");
                $row = mysqli_num_rows($user);

                if(mysqli_num_rows($user) != 0)
                {
                    while ($row = mysqli_fetch_assoc($user))
                    {?>
                        <div class="user-profile">
                            <? echo "<img src='".$row['img']."' alt=\"User\" class=\"mr-3 mt-5 rounded-circle\">"; ?>
                        </div>
                        <div class="user-profile-void">
                            <?
                            echo '<p>Логин: <a href=\"#\" style=""><span>' .$row['login']. '</span></a></p>';
                            echo '<p>Email: <a href="#" style="" ><span>' .$row['email']. '</span></a></p>';
                            echo "<p>Никнейм: <a href=\"#\" style='".$row['vipclass']."' title='".$row['role']."'><span>" .$row['nickname'].$row['vip'].'</span></a></p>';
                            echo "<p>Страна: <a href=\"#\" style=\"\"><span>" .$row['country'].'</span></a></p>';
                            echo '<p>Город: <a href="#" style=""><span>' .$row['city']. '</span></a></p>';
                            echo '<p>Дата регистрации: <a href="" style=""><span>' .$row['date_reg']. '</span></a></p>';
                            ?>
                        </div>
                    <?}
                }else {
                    echo "ID NOT FOUND";
                }

            }
            ?>
        </div>
    </div>






    <?php require('../layout/Footer.php') ?>

    <?php require('../layout/scriptBootstrap.php')?>
    </body>
    </html>
<?php }?>
