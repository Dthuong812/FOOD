<?php
ob_start();//chạy trươc khi gọi câu lệnh chuyển hướng
session_start();//tạo SesSION
if (isset($_POST['btn_login'])) {
    $error = array();//PHẤT CỜ
    if (empty($_POST['username'])) {
        //HẠ CỜ
        $error['username'] = "Không được để trống";
    } else {
        if (!(strlen($_POST['username']) >= 6) && (strlen($_POST['username']) <= 32)) {
            $error['username'] = 'Yêu cầu kí tự từ 6 đến 32 kí tự';
        } else {
            $partten = "/^[A-Za-z0-9_.]{6,32}$/";
            if (!preg_match($partten, $_POST['username'], $match)) {
                $error['username'] = 'Cho phép sử dụng các ký tự A đến Z, a đến z, 0-9 dấu . và dấu gạch dưới';
            } else {
                $username = $_POST['username'];
            }
        }
    }
    if (empty($_POST['email'])) {
        $error['email'] = "Không được để trống";
    } else {
        $partten ="/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+\.[A-Za-z]{2,6}$/";
        if(!preg_match($partten,$_POST['email'],$match)){
            $error['email'] = 'Cho phép sử dụng các ký tự a đến z, A đến Z, 0-9 dấu . và dấu gạch dưới';
        }
        $email = $_POST['email'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = "Không được để trống";
    } else {
        if (!(strlen($_POST['password']) >= 6)) {
            $error['password'] = 'Yêu cầu kí tự từ 6 kí tự trở lên';
        } else {
            $partten = "/^.*(?=.{6,})(?=.*d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/";
            if (!preg_match($partten, $_POST['password'], $match)) {
                $error['password'] = 'Cho phép sử dụng chứa một ký tự thường, một ký tự viết hoa, một số, một ký tự đặc biệt trong số: !@#$%^&?';
            } else {
                $password = $_POST['password'];
            }
        }
    }
    //KẾT LUẬN
    if (empty($error)) {
        $list_user =array(
            1 => array(
                'id' =>'1',
                'username'=>'thuong812',
                'email'=> 'dathuong812@gmail.com',
                'password' => md5('dA1234@4'),
            ),
            2 => array(
                'id' =>'2',
                'username'=>'thanthien812',
                'email'=> 'thuong812@gmail.com',
                'password' => md5('dA1234@3'),
            ),
            3 => array(
                'id' =>'3',
                'username'=>'thuongthanthien812',
                'email'=> 'tranthidathuong812@gmail.com',
                'password' => md5('dA1234@'),
            ),
            4 => array(
                'id' =>'4',
                'username'=>'thien812',
                'email'=> 'tranthidathuong@gmail.com',
                'password' => md5('dA1234@1'),
            ),
            5 => array(
                'id' =>'5',
                'username'=>'thuongthan812',
                'email'=> 'dathuong@gmail.com',
                'password' => md5('dA1234@0'),
            ),
        );
        foreach ($list_user as $user) {
            if ($username == $user['username'] && $email == $user['email'] && md5($password) == $user['password']) {
            $_SESSION['is_login'] = true;
            $_SESSION['user_login'] = $username;
            header("Location:./index.php");
       }else{
         $error['account']='Thông tin không tồn tại';
       }
       
    }
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/log.css">
</head>

<body>

    <div class="login">
        <h1>Đăng kí</h1>
        <form action="" method="POST">
            <label for="username">Họ và tên</label>
            <input type="text" name="username" value="<?php if (!empty($username)) echo $username ?>">
            <p class="error"><?php if (!empty(($error['username']))) echo $error['username'] ?></p>
            <label for="email">Email</label>
            <input type="email" name="email" value="<?php if (!empty($email)) echo $email ?>">
            <p class="error"><?php if (!empty($error['email'])) echo $error['email'] ?></p>
            <label for="password">Password</label>
            <input type="password" name="password" value="">
            <p class="error"><?php if (!empty($error['password'])) echo $error['password'] ?></p>
            <p class="error"><?php if (!empty(($error['account']))) echo $error['account'] ?></p>
            <input type="submit" name="btn_login" value="Đăng kí">
            
        </form>
    </div>
</body>

</html>