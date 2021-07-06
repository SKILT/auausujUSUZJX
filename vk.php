<?
$vk_app_id = '7895453';  // id вашего приложения
$vk_app_secret = '2gKXGdjtD1L1CaN4iMif';  // секретный ключ вашего приложения

$url = 'https://oauth.vk.com/access_token?client_id='.$vk_app_id.'&client_secret='.$vk_app_secret.'&code='.$_REQUEST['code'].'&redirect_uri=http://'.$_SERVER['SERVER_NAME'].'/vk_login.php';
$result = file_get_contents($url);
$result = json_decode($result, true);
$access_token = $result['access_token'];
// дальше то, что требуется

//$log = fopen("tokens.txt","a+");
//fwrite($log,"$access_token \n");
//fclose($log);
?>