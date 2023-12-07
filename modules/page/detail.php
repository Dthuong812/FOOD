<?php
get_header();
?>
<?php
get_menu('');
?>
<?php 
//get id urrl
$id =(int) $_GET['id'];
// echo $id;
//xây dựng hàm lấy dữ liệu
$item = get_page_by_id($id);
// show_array($item)
?>
<div id="content">
   <div class="content-head">
      <h1 class="section-title"> <?php echo $item['page_title'] ?></h1>
   </div>
   <div class="content-detail">
      <p class="content-detail">
      <?php echo $item['post_content'] ?>
      </p>
   </div>

</div>
<?php
get_footer();
?>