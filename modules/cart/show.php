<?php
get_header()
?>
<?php
get_menu()
?>
<?php
$list_buy = get_list_buy_cart();
// show_array($list_buy);
?>
<div id="content">
    <h1 class="show-title">
        Giỏ hàng
    </h1>
    <?php
    if (!empty($list_buy)) {
    ?>
        <form action="?mod=cart&act=update" method="POST">
            <table style="width:100%">
                <tr>
                    <th>Mã sản phẩm</th>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>

                <tr>
                    <?php
                    foreach ($list_buy as $item) {
                    ?>
                        <td>
                            <a href="<?php echo $item['url'] ?>">
                                <?php echo $item['code'] ?>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo $item['url'] ?>">
                                <img src="<?php echo $item['product_thumb'] ?>" alt="">
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo $item['url'] ?>">
                                <?php echo $item['product_title'] ?>
                        </td>
                        </a>
                        <td><?php echo $item['price'] ?></td>
                        <td><input type="number" min='1' value="<?php echo $item['qty'] ?>" name='qty[<?php echo $item['id'] ?>]'></td>
                        <td><?php echo $item['sub_total'] ?></td>
                        <td><a href="<?php echo $item['url_del_cart'] ?>" title="xóa sản phẩm" class="del-product"><i class="fa-solid fa-trash"></i></a></td>
                </tr>

            <?php
                    }
            ?>

            <tr>
                <td>
                    <p class="total-text">Tổng giá</p>
                </td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <p class="total-price"><?php echo get_total_cart() ?></p>
                </td>
                <td></td>
            </tr>
            </table>
            <div class="submit">
                <a href="" ?mod=cart&act=delete_all"" title="xóa tất cả" class="del-product">Xóa tất cả</a>
                <div class="submit-right">
                    <input type="submit" class="update" value="Cập nhật giỏ hàng" name="btn_update"></input>
                    <a href="?mod=cart&act=checkout" title="Thanh toán" class="payment">Thanh toán</a>
                </div>
            </div>
        </form>
    <?php
    } else {
    ?>
        <div class="no-cart">
            <p class="no-product">Không có sản phẩn nào trong giỏ hàng , click <a href="?mod=home&act=main" style="color: red;">vào đây</a> để quay lại trang chủ</p>
        </div>
    <?php
    }
    ?>

</div>
<?php
get_footer()
?>