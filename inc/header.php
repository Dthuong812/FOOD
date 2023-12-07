<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./public/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="wrapper">
        <div class="logo">
            <h1 class="slogan">FOOD</h1>
            <div class="out">
                <a href="?mod=cart&act=show" class="icon-cart">
                <?php 
                    $num_order=get_num_order_cart();
                    if($num_order >0){
                        ?>
                           <span id="num"><?php echo $num_order ?></span>
                        <?php 
                        }
                        ?>
                    <span><i class="fa-solid fa-cart-shopping"></i></span>
                    
                </a>
                <p class="title">Xin chào<a href="logout.php"> Đăng xuất</a></p>
            </div>
        </div>