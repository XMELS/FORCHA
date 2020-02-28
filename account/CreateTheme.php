<?php
session_start();
require('connect_db.php');
if($_SESSION['login'] && $_SESSION['nickname'])
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
        <form action="CreateTheme.php" method="post">
            <div class="form-group">
                <label style="color: white">Тема</label>
                <input type="text" class="form-control" name="theme_name">
            </div>
            <div class="form-group">
                <label style="color: white">Контент</label>
                <textarea class="form-control" name="con" rows="3"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
    <?

    $t_name =  mysqli_real_escape_string($connection,$_POST['theme_name']);
    $content =  mysqli_real_escape_string($connection,$_POST['con']);
    $date = date("y-m-d");
//    $result_user = mysqli_query($connection, "SELECT * FROM users") or die(mysqli_error($connection));
//    while ($row_user = mysqli_fetch_assoc($result_user))
//    {
//        $user_nick = $row_user['nickname'];
//    }


    if(isset($_POST['submit']))
    {
        if($t_name && $content)
        {
            if(strlen($t_name) >= 2 && strlen($t_name) <= 100)
            {
                $query = "INSERT INTO themes (theme_name, theme_content, theme_creator, date_theme) VALUES ('".$t_name."', '".$content."', '".$_SESSION['nickname']."', '".$date."')";
                $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
                if($result)
                {
                    echo "<a>Вы успешно создали тему!!!</a>";
                }else{
                    echo "Ошибки в коде";
                }
            }else{
                echo "Название темы не больше 70, не меньше 10";
            }
        }else{
            echo "Please fill in all the friends.";
        }
    }
    ?>


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

    <?php require('../layout/scriptBootstrap.php') ?>
    </body>
    </html>
<?php }?>
