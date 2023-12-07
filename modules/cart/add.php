<?php
#Lấy thông tin sản phâm cần lưu vào giỏ hàng
$id = (int)$_GET['id'];
$item = add_cart($id);
// show_array($_SESSION['cart']);
redirect('?mod=cart&act=show');
?>