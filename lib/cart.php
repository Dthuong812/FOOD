<?php
#Lấy thông tin sản phâm cần lưu vào giỏ hàng
function add_cart($id)
{
    global $list_product;
    $item_detail = get_product_detail($id);
    // show_array($item_detail);
    # thêm thông tin vào giỏ hàng
    /**
     * id
     * product_title
     * price
     * qty
     * total
     */
    #lưu trữ thong tin sản phẩm đã mua
    $qty = 1;
    if (isset($_SESSION['cart']) && array_key_exists($id, $_SESSION['cart']['buy'])) {
        $qty = $_SESSION['cart']['buy'][$id]['qty'] + 1;
    }
    $_SESSION['cart']['buy'][$id] = array(
        "id" => $item_detail['id'],
        "url" => $item_detail['url'],
        "product_title" => $item_detail['product_title'],
        "price" => $item_detail['price'],
        "code" => $item_detail['code'],
        "product_thumb" => $item_detail['product_thumb'],
        "qty" => $qty,
        'sub_total' => $item_detail['price'] * $qty
    );
    update_info_cart();
};
function update_info_cart()
{
    if(isset($_SESSION['cart'])){
        $num_order = 0;
    $total = 0;
    foreach ($_SESSION['cart']['buy'] as $item) {
        $num_order += $item['qty'];
        $total += $item['sub_total'];
    }
    #lưu thông tin hóa đơn
    $_SESSION['cart']['info'] = array(
        'number_order' =>  $num_order,
        'total' => $total
    );
    }
    
};
function get_list_buy_cart()
{
    if (isset($_SESSION['cart'])) {
        foreach($_SESSION['cart']['buy'] as $item){
            $item['url_del_cart']="?mod=cart&act=delete&id={$item['id']}";
            #tham chiếu
            $_SESSION['cart']['buy'][$item['id']] =$item;
        }
        return $_SESSION['cart']['buy'];
    }
    return false;
};
function get_num_order_cart(){
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['number_order'] ;
    }
    return false;
};
function get_total_cart(){
    if (isset($_SESSION['cart'])) {
        return $_SESSION['cart']['info']['total'] ;
    }
    return false;
};
#xóa sản phẩm
function delete_cart($id){
 if(isset($_SESSION['cart'])){
    if(!empty($id)){
        unset($_SESSION['cart']['buy'][$id]);
        update_info_cart();
    }else{
        unset($_SESSION['cart']);
    }
 }
};
#cập nhật giỏ hàng
function update_cart($qty){
    foreach($qty as $id => $new_qty){
        $_SESSION['cart']['buy'][$id]['qty'] = $new_qty;
        $_SESSION['cart']['buy'][$id]['sub_total'] = $new_qty* $_SESSION['cart']['buy'][$id]['price'];
        
    }
    update_info_cart();
}
