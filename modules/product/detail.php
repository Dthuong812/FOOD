<?php
$id = (int)$_GET['id'];
$item_detail = get_product_detail($id);
// show_array($item_detail);
?>
<?php
get_header();
?>
<?php
get_menu('');
?>
<div id="content">
   <div class="product-detail">
      <div class="content-first">
         <img src="<?php echo $item_detail['product_thumb'] ?>" alt="">
         <div class="title">
            <h1 class="product-title"><?php echo $item_detail['product_title'] ?></h1>
            <p class="product-info"><?php echo $item_detail['product_desc'] ?></p>
            <h2 class="product-price"><?php echo $item_detail['price'] ?></h2>
            <a href="<?php echo $item_detail['url_add'] ?>" class="add-to-cart">Thêm vào giỏ hàng</a>
         </div>
      </div>
      <div class="content-last">
         <?php echo $item_detail['product_content'] ?>
      </div>
   </div>
</div>
<?php
get_footer();
?>