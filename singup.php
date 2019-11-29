<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	$page = 'singup';
	$success = false;
	if(isset($_POST['password'])  && isset($_POST['fullName']) && isset($_POST['email']))
	{
        $success = true;
		$password = $_POST['password'];
		$fullName = $_POST['fullName'];
		$email = $_POST['email'];

        $passwordHash = password_hash($password, PASSWORD_DEFAULT);
        $userId = createUser($email, $fullName,$passwordHash);
        $user = findUserByEmail($email);
        if($user){
            $secret = createActiveAccount($user['id']);
           sendEmail($user['email'], $user['fullname'], 'Active Account', 'Click <a href="http://localhost:81/DACKWEB/active.php?secretac=' . $secret .'">here</a> to active account');
           header('Location: notactive.php');
		    
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
                <h1>Đăng Ký</h1>
            </div>
            <div class="_div2">
                <?php if(!$success) : ?>
                    <form action="singup.php" method="POST">
                        <div class="_text">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" autocomplete="off">
                        </div>
                        <div class="_text">
                            <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Nhập tên" autocomplete="off">
                        </div>
                        <div class="_text">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Nhập password">
                        </div>
                        <div class="_text">
                            <input class ="_submit" style="background-color:#1da1f2; color:white;" type="submit" class="form-control" id="singup" name="singup" value="Sing up">
                        </div>
                    </form>
                <?php endif; ?>
                <?php include 'footer.php'; ?>
            </div>
            
        </div>
    </div>
</body>
</html>