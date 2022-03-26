<?php

function connect_to_db(){
    // DB接続
    $dbn ='mysql:dbname=5e7aac4280cd6134bd17ae01fcd2807f;charset=utf8mb4;host=mysql-2.mc.lolipop.lan';
    $user = '5e7aac4280cd6134bd17ae01fcd2807f';
    $pwd = 'Senbaduru1127';

    try {
    return new PDO($dbn, $user, $pwd);
    } catch (PDOException $e) {
    echo json_encode(["db error" => "{$e->getMessage()}"]);
    exit();
    }
};


// ログイン状態のチェック関数
function check_session_id()
{
  if (!isset($_SESSION["session_id"]) ||$_SESSION["session_id"] != session_id()) {
    header('Location:login_user.php');
    exit();
  } else {
    session_regenerate_id(true);
    $_SESSION["session_id"] = session_id();
  }
}

