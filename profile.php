<?php
require_once 'init.php';
require_once 'function.php';
	//xu ly logic o day
$page = 'profile';
$user = findUserById($_GET['id']);

if (!$currentUser) {
    header('Location: index.php');
    exit(0);
}


$relationship = findRelationship($currentUser['id'], $user['id']);
// var_dump($relationship);

// nếu là bạn
$isFriend = count($relationship) === 2;



//chưa follow
// $noFollow=count($relationshipfollow)===0;

//chưa phải là bạn
$noRelationship = count($relationship) === 0;

//đang xảy ra 1 yêu cầu nào đó
if (count($relationship) === 1) {
    //đang gửi yêu cầu kết bạn
    $isRequesting = $relationship[0]['user1Id'] === $currentUser['id'];// kiểm tra có phải cùng 1 người
}


?>

<?php include 'header.php'; ?>
<head>
    <link rel="stylesheet" href="style/style-profile.css">
</head>

<div class="information">
    <div class="img-personal">
        <div class="img">
            <img src="img/27.jpg" alt="Ảnh đại diện">
        </div>
        <div class="titleName">
            <h2><?php echo $user['fullname']; ?></h2>
        </div>
    </div>
    <?php if ($user['id'] !== $currentUser['id']) : ?>
    <div class="menu-btn">
        <form action="friend.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $user['id']; ?>">
            <?php if ($isFriend) : ?> 
            <input type="submit" name="action" value="Xóa bạn bè" class="btn-function">
            <?php elseif ($noRelationship) : ?> 
            <input type="submit" name="action" value="Kết bạn" class="btn-function">
            <?php else : ?>
            <?php if (!$isRequesting) : ?>
            <input type="submit" name="action" value="Đồng ý" class="btn-function">
            <?php endif; ?>
            <input type="submit" name="action" value="Từ chối" class="btn-function">
            <?php endif; ?>
        </form>
        <!-- follow -->
        <?php

        $isFollowed = isUserFollowed($_GET['id']);
        ?>
        <?php if ($user['id'] !== $currentUser['id']) : ?> 
        <form action = "followHandler.php" method = "POST">
            <input type = "hidden" name = "idfollwed" value = "<?= $user["id"] ?>">
            <input type = "hidden" name = "idCurrent" value = "<?= $currentUser["id"] ?>">
        <?php if ($isFollowed) : ?> 
            <input type="submit" name="action" value="Hủy theo dõi" class="btn-function"  id="unfollow">
        <?php else : ?>
            <input type="submit" name="action" value="Theo dõi" class="btn-function" id="follow">
        <?php endif; ?> 
        <?php endif; ?> 
        </form>
        <?php endif; ?>
    </div>
</div>



