<?php
// session_start();
// if(!isset($_SESSION['is_login'])){
//     header("Location: ./login.php");
// }
?>
<?php
session_start();
ob_start();
#dữ liệu
require 'data/pages.php';
require 'data/product.php';
#thư viện hàm
require 'lib/data.php';
require 'lib/url.php';
require 'lib/pages.php';
require 'lib/product.php';
require 'lib/cart.php';
require 'lib/template.php';


?>

<?php
$mod =!empty($_GET['mod'])?$_GET['mod']:'home';
$act =!empty($_GET['act'])?$_GET['act']:'main';
$path ="modules/{$mod}/{$act}.php";

if(file_exists($path)){
    require $path;
}else{
    require 'inc/404.php';
}
?>
