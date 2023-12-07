<?php
function get_header(){
    $path_header ="./inc/header.php";
    if(file_exists($path_header)){
        require  $path_header;
    }else{
        echo "Không tồn tại";
    }
    
    
};
function get_menu($version = ''){
    if(!empty($version)){
        $path_menu ="./inc/menu-{$version}.php";
    }else{
        $path_menu ="./inc/menu.php";
    }
    if(file_exists($path_menu)){
        require  $path_menu;
    }else{
        echo "Không tồn tại";
    }
    
};

function get_footer(){
    $path_footer ="./inc/footer.php";
    if(file_exists($path_footer)){
        require  $path_footer;
    }else{
        echo "Không tồn tại";
    }
    
    
}
?>
