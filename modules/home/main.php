<?php
$info_cat_1 = get_info_cat(1);
$info_cat_2 = get_info_cat(2);
$info_cat_3 = get_info_cat(3);
$list_item_1 = get_list_product_by_cat_id(1);
$list_item_2 = get_list_product_by_cat_id(2);
$list_item_3 = get_list_product_by_cat_id(3);

// show_array($list_item);
?>
<?php
get_header();
?>
<?php
get_menu();
?>
<div class="content">
    <div class="content-item">
        <a href="<?php echo $info_cat_1['url'] ?>" class="cat-text"><?php echo $info_cat_1['cat_title'] ?></a>
        <div class="product">
            <?php
            if (!empty($list_item_1)) {
            ?>
                <ul class="product-list">
                    <?php
                    foreach ($list_item_1 as $item) { ?>
                        <li class="product-item">
                            <a href="<?php echo $item['url'] ?>" class="thumb">
                            <img src="<?php echo $item['product_thumb'] ?>" alt="" class="img-head">
                            </a>
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
    <div class="content-item">
        <a href="<?php echo $info_cat_2['url'] ?>" class="cat-text"><?php echo $info_cat_2['cat_title'] ?></a>
        <div class="product">
            <?php
            if (!empty($list_item_2)) {
            ?>
                <ul class="product-list">
                    <?php
                    foreach ($list_item_2 as $item) { ?>
                        <li class="product-item">
                            <a href="<?php echo $item['url'] ?>" class="thumb">
                            <img src="<?php echo $item['product_thumb'] ?>" alt="" class="img-head">
                            </a>
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
    <div class="content-item">
        <a href="<?php echo $info_cat_3['url'] ?>" class="cat-text"><?php echo $info_cat_3['cat_title'] ?></a>
        <div class="product">
            <?php
            if (!empty($list_item_3)) {
            ?>
                <ul class="product-list">
                    <?php
                    foreach ($list_item_3 as $item) { ?>
                        <li class="product-item">
                            <a href="<?php echo $item['url'] ?>" class="thumb">
                            <img src="<?php echo $item['product_thumb'] ?>" alt="" class="img-head">
                            </a>
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
</div>
<?php
get_footer();
?>