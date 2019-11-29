<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	$page = 'reset_password';
	$success = false;
	if(isset($_POST['secret']) && isset($_POST['password']))
	{
		$password = $_POST['password'];

		$secret = $_POST['secret'];

		$passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $reset = findResetPassword($secret);
        if($reset && !$reset['used']){
            $userID = $reset['userId'];
            markResetPasswordUsed($secret);
            updatePassword($userID, $passwordHash);
            header('Location: login.php');
		    $success = true;
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
                <?php if(!$success) : ?>
                    <form action="reset_password.php" method="POST">
                    <input type="hidden" name="secret" value="<?php echo $_GET['secret']; ?>">
                        <div class="form-group">
                            
                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập mật khẩu mới">
                        </div>
                        <div class="_text">
                            <input class ="_submit" style="background-color:#1da1f2; color:white;" type="submit" class="form-control" id="reset_password" name="reset_password" value="Reset Password">
                        </div>
                    </form>
                <?php endif; ?>
                <?php include 'footer.php'; ?>
            </div>
            
        </div>
    </div>
</body>
</html>