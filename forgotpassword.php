<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	$page = 'forgotpassword';
	$success = false;
	if(isset($_POST['email']))
	{
        $success = true;
		
		$email = $_POST['email'];
		$user  = findUserByEmail($email);
		if($user)
		{
           $secret = createResetPassWord($user['id']);
           sendEmail($user['email'],$user['fullname'], 'Reset PassWord', 'Click <a href="http://localhost:81/DACKWEB/reset_password.php?secret=' . $secret .'">here</a> to reset password');
		}
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quên mật khẩu</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/hieuung.css">
</head>
<body>
    <div class="_divBig">
        <div class="_formLog">
            <div class="_div1">
                <h1>Quên Mật Khẩu</h1>
            </div>
            <div class="_div2">
                <?php if(!isset($_POST['email'])) : ?>
                    <form action="forgotpassword.php" method="POST">
                        <div class="_text">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" autocomplete="off">
                        </div>
                        <div class="_text">
                            <input class ="_submit" style="background-color:#1da1f2; color:white;" type="submit" class="form-control" id="forgotpassword" name="forgotpassword" value="Reset Password">
                        </div>
                    </form>
                <?php else: ?>
                <div class="alert alert-success" role="alert">
                    Đã gửi email hướng dẫn khôi phục mật khẩu qua email, vui lòng kiểm tra! 
                </div>
                <?php endif; ?>
                <?php include 'footer.php'; ?>
            </div>
            
        </div>
    </div>
</body>
</html>