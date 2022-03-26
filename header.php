<?php
// DB接続
session_start();
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

 
 <body>
    <script>

        //ログアウトしているときに非表示にするメニュー
        //ユーザー名
        const session ="<?=$_SESSION['username']?>"

        if(session==""){
        $('#username').css('display', 'none');
        $('#logout').css('display', 'none');
        }
        else{
        $('#create-user').css('display', 'none');
        $('#login').css('display', 'none');

        }



    </script>
    
        <header id="header" class="header">

            <div class="main-header">

            <div class="header-inner">
            <div class="logo">
            <a href="http://proto01.lolipop.io/proto/"> <img src="img/logo.png"></a>
            </div>

            <div class="header-text">
            日本で唯一の治安情報閲覧サイト<b><font color="#166678"> 治安Easy</font></b><br>
            </div>

            <nav class="header-nav">
            
            <!-- 新規会員登録 -->
            <div id="create-user" class="header-nav-item">
                <a href="create_user.php" class="header-button header-explain">無料で新規会員登録</a>
            </div>

            <!-- ログイン -->
            <div id="login" class="header-nav-item">
                <a href="login_user.php" class="header-button header-login">ログイン</a>
            </div>        
                    
            <!-- ログインしているときにユーザーネーム表示、してないときはdisplay:none   -->
            <div id="username" class="username  ">
                <?=$_SESSION['username']?> 様
            </div>

            <!-- ログインしているときにログアウト表示、してないときはdisplay:none   -->
            <a id="logout" href="logout_user.php" class="logout">ログアウトする</a>

            </nav>

            </div>  
            </div>

        </header>

</body>