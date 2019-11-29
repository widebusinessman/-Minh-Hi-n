<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	$page = 'login';
	$success = false;
	if(isset($_POST['email']) && isset($_POST['password']))
	{
		$password = $_POST['password'];
		$email = $_POST['email'];
		$user  = findUserByEmail($email);
		if($user)
		{
            $check = password_verify($password, $user['password']);
            
			if($check && $user['used'])
			{
				$_SESSION['userId'] = $user['id'];
				header('Location: index.php');
				$success = true;
            }
            else if(!$check && $user['used'])
                echo 'Thông tin tài khoản chưa đúng';
            else 
                echo 'Tài khoản chưa được kích hoạt';
		}
		
		
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng nhập vào MXH</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/hieuung.css">
</head>
<body>
    <div class="_divBig">
        <div class="_formLog">
            <div class="_div1">
                <h1>Đăng Nhập</h1>
            </div>
            <div class="_div2">
                <?php if(!$success) : ?>
                    <form action="login.php" method="POST">
                        <div class="_text">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" autocomplete="off">
                        </div>
                        <div class="_text">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập password">
                        </div>
                        <div class="_text">
                            <input class ="_submit" style="background-color:#1da1f2; color:white;" type="submit" class="form-control" id="login" name="login" value="Log in">
                        </div>
                    </form>
            </div>
            <div class="_div3">
                <a href="forgotpassword.php">
                    <span>Forgot password?</span>
                </a>
                .
                <a href="singup.php">
                    <span>Sing up for MXH</span>
                </a>
            </div>
            <?php endif; ?>
            <?php include 'footer.php'; ?>
        </div>
    </div>
</body>
</html>