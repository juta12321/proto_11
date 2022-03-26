<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規会員登録</title>
    <link rel="stylesheet" href="create_user.css">
    <link rel="stylesheet" href="read.css">
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

    <header class="header">
        <div id="header"></div>
    </header>

    <div class="main">


        <form action="create_user_act.php" method="POST">

            <div class="fieldset-text">

                <div class="fieldset-text-title">
                    <h2>新規会員登録</h2>
                </div>

                <div class="mail">
                    <span>メールアドレス</span><br>
                    <input type="text" name="username">
                </div>

                <div class="password">
                    <span>パスワード</span><br>
                    <input type="text" name="password">
                </div>
                
                <div>
                    <button>アカウントを作成する</button>
                </div>

            </div>

        </form>

        


    <div class="main">



    <script>

        //共通パーツ読み込み
        $(function() {
        $("#header").load("header.php");
        });

    </script>

    
</body>
</html>