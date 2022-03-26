<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>治安Easy ユーザーログイン</title>
    <link rel="stylesheet" href="login_user.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="modaal/modaal.css">  

    <!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(function() {
            $('html,body').animate({ scrollTop: 0 }, '1');
        });
    </script>	


</head>

<body>
    
    <header>
        <div id="header"></div>
    </header>

    <div class="main">

        <div class="info">
            <p>ユーザーログインを行うことで、マップの拡大表示機能が利用可能。</p>
            <p>より細かい地域のゴミステーション情報を閲覧することができます。</p>
            <img src="img/info3.png">
        </div>

        <form action="login_user_act.php" method="POST">

                <div class="fieldset-text">
                    
                    <div class="fieldset-text-title">
                        アカウントにログイン
                    </div>

                    <div class="fieldset-text-input">
                        <div class="mail">
                            <span>メールアドレス</span><br>
                            <input type="text" name="username">   
                        </div>

                        <div class="password">
                            <span>パスワード</span><br>
                            <input type="text" name="password">
                        </div>
                    </div>

                    <div>
                        <button>ログイン</button>  
                    </div>
                    
                
                </div>

    

        </form>

    </div>

    <div class="create_user">
        <a href="create_user.php">新規会員登録はこちら</a>
    </div>




    <script>

        //共通パーツ読み込み
        $(function() {
        $("#header").load("header.php");
        });

    </script>






</body>

</html>