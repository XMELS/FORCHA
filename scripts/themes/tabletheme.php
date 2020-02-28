<?php
require('connect_db.php');

$query = "SELECT * FROM themes";
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
if(!$_GET['date_theme'])
{
if(mysqli_num_rows($result) != 0)
{
while($row = mysqli_fetch_assoc($result))
{
$id = $row['theme_id'];
echo "<div class=\"col-8 col-sm-6 blocks-container\">";
    echo "<a href='Theme.php?id=$id'><h6>".$row['icontheme'].$row['theme_name']."</h6></a>";
    echo "</div>";
    echo "<div class=\"col-8 col-sm-6 blocks-container\">";
    echo "<div class=\"media\">";
    $result_user = mysqli_query($connection, "SELECT * FROM users WHERE nickname='".$row['theme_creator']."'") or die(mysqli_error($connection));
    while ($row_user = mysqli_fetch_assoc($result_user))
    {
        $user_id = $row_user['id'];
        $user_img = $row_user['img'];
        $user_vip = $row_user['vip'];
        $user_vip_class = $row_user['vipclass'];
        $user_role = $row_user['role'];
    }
    $get_date = $row['date_theme'];
    echo "<img src=\"$user_img\" alt=\"img\" class=\"mr-3 mt-1 rounded-circle\" style=\"width:40px;\">";
    echo "<div class=\"media-body\">";
    echo "<a href='Theme.php?id=$id'><h6>".$row['comment']."</h6></a>";
    echo "<ul class=\"listInline\">";

    echo "<li><a href='forums.php?date_theme=$get_date'>".$row['date_theme']."</a></li>";
    echo "<li><a href='Profile_theme.php?id=$user_id' style='$user_vip_class' title='$user_role'><span>".$row['theme_creator'].$user_vip."</span></a></li>";
    echo "</ul>";

//    echo "<td style='text-align: center'>".$row_date['views']."</td>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"w-100 d-none d-md-block\"></div>";
}
}else{
echo "No theme found";
}
}
if($_GET['date_theme'])
{
$result_date = mysqli_query($connection, "SELECT * FROM themes WHERE date_theme='".$_GET['date_theme']."'") or die(mysqli_error($connection));
while ($row_date = mysqli_fetch_assoc($result_date))
{
$id = $row_date['theme_id'];
echo "<div class=\"col-8 col-sm-6 blocks-container\">";
    echo "<a href='Theme.php?id=$id'><h6>".$row_date['icontheme'].$row_date['theme_name']."</h6></a>";
    echo "</div>";
    echo "<div class=\"col-8 col-sm-6 blocks-container\">";
    echo "<div class=\"media\">";
    $result_user = mysqli_query($connection, "SELECT * FROM users WHERE nickname='".$row_date['theme_creator']."'") or die(mysqli_error($connection));
    if($result_user)
    {
        while ($row_user = mysqli_fetch_assoc($result_user))
        {
            $user_id = $row_user['id'];
            $user_img = $row_user['img'];
            $user_vip = $row_user['vip'];
            $user_vip_class = $row_user['vipclass'];
            $user_role = $row_user['role'];
        }
    }else{
        echo "Траблы";
    }
    $get_date = $row_date['date_theme'];
    echo "<img src=\"$user_img\" alt=\"img\" class=\"mr-3 mt-1 rounded-circle\" style=\"width:40px;\">";
    echo "<div class=\"media-body\">";
    echo "<a href='Theme.php?id=$id'><h6>".$row_date['theme_name']."</h6></a>";
    echo "<ul class=\"listInline\">";

    echo "<li><a href='forums.php?date_theme=$get_date'>".$row_date['date_theme']."</a></li>";
    echo "<li><a href='Profile_theme.php?id=$user_id' style='$user_vip_class' title='$user_role'><span>".$row_date['theme_creator'].$user_vip."</span></a></li>";
    echo "</ul>";

//    echo "<td style='text-align: center'>".$row_date['views']."</td>";

    echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "<div class=\"w-100 d-none d-md-block\"></div>";
}
}
?>

<!--        <div class="col-8 col-sm-6 blocks-container">-->
<!--            <a href=""><h6><i class="fas fa-info-circle"></i> Новости и информация</h6></a>-->
<!--        </div>-->
<!--        <div class="col-8 col-sm-6 blocks-container">-->
<!--            <div class="media">-->
<!--                <img src="/img/img_avatar.png" alt="User" class="mr-3 mt-1 rounded-circle" style="width:40px;">-->
<!--                <div class="media-body">-->
<!--                    <h6>Новое обновление</h6>-->
<!--                    <ul class="listInline">-->
<!--                        <li>19.02.2020</li>-->
<!--                        <li class="listInline-li"> <a href="#"><span>Max Kolbin <i class="fas fa-check-circle"></i></span></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        Заставит следующие колонки перейти на следующую строку на брейкпойнте md и выше-->
<!--        <div class="w-100 d-none d-md-block"></div>-->
<!---->
<!--        <div class="col-8 col-sm-6 blocks-container">-->
<!--            <a href=""><h6><i class="fas fa-cogs"></i> Технический раздел</h6></a>-->
<!--        </div>-->
<!--        <div class="col-8 col-sm-6 blocks-container">-->
<!--            <div class="media">-->
<!--                <img src="/img/img_avatar.png" alt="User" class="mr-3 mt-1 rounded-circle" style="width:40px;">-->
<!--                <div class="media-body">-->
<!--                    <h6>Новое обновление</h6>-->
<!--                    <ul class="listInline">-->
<!--                        <li>19.02.2020</li>-->
<!--                        <li class="listInline-li"> <a href="#"><span>Max Kolbin <i class="fas fa-check-circle"></i></span></a></li>-->
<!--                    </ul>-->
<!--                </div>-->
<!---->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="w-100 d-none d-md-block"></div>-->
<!---->
<!--        <div class="col-8 col-sm-6 blocks-container">-->
<!--            <a href=""><i class="fab fa-vk" aria-hidden="true"></i> Официальная группа Вконтакте</a>-->
<!--        </div>-->
<!--        <div class="col-8 col-sm-6 blocks-container"></div>-->
<!--<div class="d-flex justify-content-left">-->
<!--    <div class="row">-->
<!--        <div class="col-sm">-->
<!--            <nav aria-label="breadcrumb">-->
<!--                <ol class="breadcrumb">-->
<!--                    <li class="breadcrumb-item"><a href="#">Главная</a></li>-->
<!--                    <li class="breadcrumb-item active" aria-current="page">Форумы</li>-->
<!--                </ol>-->
<!--            </nav>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
<!--<div class="container">-->
<!--    <div class="row">-->
<!--        <div class="col-9 m-blocks-container">-->
<!--            <h3>Форумы</h3>-->
<!--            <div class="row">-->
<!--                --><?// require('../scripts/themes/tabletheme.php')?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--</div>-->
