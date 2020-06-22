<!--ログアウト-->
<?php
session_start();
$_SESSION = array();
//クッキーのデータ削除処理
if (ini_set('sesion.use_cookies')){
    $params = session_get_cookie_params();
    setcookie(session_name(). '',time() -4200,
    $params['path'],$params['domain'],$params['secure'],$params['httponly']);

}
session_destroy();
//クッキーの値消去
setcookie('email','',time()-3600);
//ログイン画面に移動
header('Location:login.php');
exit();
?>