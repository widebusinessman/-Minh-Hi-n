<?php
require_once 'init.php';
require_once 'function.php';
$page = 'listfriend';
$user = findUserById($_GET['id']);
$listfriend=getFriends($user["id"]);

if(!$currentUser)
{
    header('Location: index.php');
    exit(0);
}

// nếu là bạn
// $isFriend=count($relationship)===2;
?>

<?php include 'header.php'; ?>
<head>
    <link rel="stylesheet" href="style/style-listfriend.css">
</head>
<?php
    foreach($listfriend as $listfriend):
    {
        $userfriend =findUserById($listfriend);
?>
   
        <div class="contrainer">
            <div class="img-personal">
                <div class="img">
                    <img src="img/27.jpg" alt="Ảnh đại diện">
                </div>
                <div class="titleName">
                    <h2><a href="http://localhost:81/DACKWEB/profile.php?id=<?php echo $userfriend['id'];?>"><?php echo $userfriend['fullname']; ?></a></h2>
                </div>
            </div>
        </div>
   
<?php   
    }
?>
<?php endforeach?>











