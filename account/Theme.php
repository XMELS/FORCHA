<?php
session_start();
require('connect_db.php');
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
    <div class="container">
<!--        <a href="CreateTheme.php"><button>Создать тему</button></a>-->




        <?php
        if($_GET['id'])
        {
            $query = "SELECT * FROM themes WHERE theme_id='".$_GET['id']."'";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            if(mysqli_num_rows($result))
            {
                while ($row = mysqli_fetch_assoc($result))
                {
                    $result_user = mysqli_query($connection, "SELECT * FROM users WHERE nickname='".$row['theme_creator']."'") or die(mysqli_error($connection));
                    while($row_user = mysqli_fetch_assoc($result_user))
                    {
                        $user_id = $row_user['id'];
                    }
                    echo "<h1>".$row['theme_name']."</h1>";
                    echo "<h4> Создал: <a href='Profile_theme.php?id=$user_id'>".$row['theme_creator']."</a><br> Дата создания: ".$row['date_theme']."</h4>";
                    echo "<br>".$row['theme_content'];
                }
            }else{
                echo "Такой темы не существует";
            }
        }





        ?>
    </div>



    <!--    <form action="forums.php" method="post">-->
    <!--        <p>Topic name: <br> <input type="text" name="theme_name" style="width: 400px;"></p>-->
    <!--        <p>Content: <br> <textarea name="con" id="" cols="30" rows="10"></textarea></p>-->
    <!--        <input type="submit" name="submit" value="Post" style="width: 400px;">-->
    <!--    </form>-->



    <!--<div class="container">-->
    <!--    <div class="row">-->
    <!--        <div class="col-9 m-blocks-container">-->
    <!---->
    <!--        --><?php
    //        if($_GET['id'])
    //        {
    //            $user = mysqli_query($connection, "SELECT * FROM users WHERE id='".$_GET['id']."'");
    //            $row = mysqli_num_rows($user);
    //
    //            if(mysqli_num_rows($user) != 0)
    //            {
    //                while ($row = mysqli_fetch_assoc($user))
    //                {?>
    <!--                    <div class="media">-->
    <!--                        --><?// echo "<img src='".$row['img']."' alt=\"User\" class=\"mr-3 mt-1 rounded-circle\" style=\"width:40px;\">"; ?>
    <!---->
    <!--                        <div class="media-body">-->
    <!--                            <h6>Новое обновление</h6>-->
    <!--                            <ul class="listInline">-->
    <!--                                <li>19.02.2020</li>-->
    <!--                                --><?//
    //                                echo "<li class='".$row['vipclass']."'> <a href=\"#\"><span>" .$row['nickname'].$row['vip'].'</span></a></li>';
    //                                echo '<li class=""><a href=\"#\"><span>' .$row['city']. '</span></a></li>';
    //
    //                                ?>
    <!--                            </ul>-->
    <!--                        </div>-->
    <!---->
    <!--                    </div>-->
    <!--                --><?//}
    //            }else {
    //                echo "ID NOT FOUND";
    //            }
    //
    //        } else { header("Location: ../index.php"); }?>
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <?php require('../layout/Footer.php') ?>

    <?php require('../layout/scriptBootstrap.php')?>
    </body>
    </html>
<?php }?>
