<?php
require_once ('connect_db.php');
$t_name =  mysqli_real_escape_string($connection,$_POST['theme_name']);
$content =  mysqli_real_escape_string($connection,$_POST['con']);
$date = date("y-m-d");
$session = mysqli_real_escape_string($connection,$_SESSION['login']);

if(isset($_POST['submit']))
{
    if($t_name && $content)
    {
        if(strlen($t_name) >= 3 && strlen($t_name) <= 70)
        {
            $query = "INSERT INTO themes (theme_name, theme_content, theme_creator, date_theme) VALUES ('".$t_name."', '".$content."', '".$session."', '".$date."')";
            $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
            if($result)
            {
                echo "success";
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

