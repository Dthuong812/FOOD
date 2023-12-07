<?php
$cat_id = (int) $_GET['cat_id'];
// echo $cat_id;
//lấy thông tin danh mục
$info_cat = get_info_cat($cat_id);
// show_array($info_cat);
//lấy danh sach bài viết
$list_product = get_list_product_by_cat_id($cat_id);
// show_array($list_product);
?>
<?php
get_header();
?>
<?php
get_menu('');
?>
<div id="content">
   <h1 class="cat-title"><?php echo $info_cat['cat_title'] ?></h1>
   <p class="cat-desc"><?php echo $info_cat['cat_desc'] ?></p>
   <div class="product">
      <?php
      if (!empty($list_product)) {
      ?>
         <ul class="product-list">
            <?php
            foreach ($list_product as $item) { ?>
               <li class="product-item">
                  <a href="<?php echo $item['url'] ?>" class="thumb">
                  <img src="<?php echo $item['product_thumb'] ?>" alt="" class="img-head"></a>
                  <a href="<?php echo $item['url'] ?>
                        <h3 class=" product-title"><?php echo $item['product_title'] ?></h3>
                  </a>
                  <a href="<?php echo $item['url'] ?>
                        <p class=" price"><?php echo $item['price'] ?></p>
                  </a>

               </li>
            <?php } ?>
         </ul>
      <?php } ?>
   </div>
</div>
<?php
get_footer();
?>