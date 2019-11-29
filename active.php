<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	$page = 'active';
	$success = false;
	if(isset($_POST['secretac']))
	{
		$secret = $_POST['secretac'];
        $active = findActiveAccount($secret);
        if($active){
            $userId = $active['userId'];
            markActiveAccount($userId);
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
    <title>Kích hoạt tài khoản</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/hieuung.css">
</head>
<body>
    <div class="_divBig1">
        <div class="_formLog1">
            <div class="_div11">
                <h1>Kích hoạt tài khoản</h1>
            </div>
            <div class="_div21">
                <?php if(!$success) : ?>
                    <form action="active.php" method="POST">
                        <input type="hidden" name="secretac" value="<?php echo $_GET['secretac']; ?>">
                        <h1>Vui lòng bấm vào nút dưới đây để kích hoạt tài khoản</h1>
                        <div class="_text1">
                            <input class ="_submit" style="background-color:#1da1f2; color:white;" type="submit" class="form-control" id="active" name="active" value="Kích hoạt tài khoản">
                        </div>
                    </form>
                <?php endif; ?>
                <?php include 'footer.php'; ?>
            </div>
            
        </div>
    </div>
</body>
</html>