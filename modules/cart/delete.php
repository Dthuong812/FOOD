<?php
#xóa sản phẩm nào
$id = (int)$_GET['id'];
delete_cart($id);
redirect('?mod=cart&act=show');
?>