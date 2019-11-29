<!-- <?php
    require_once 'init.php';
    require_once 'function.php';
        //xu ly logic o day
    $page = 'follow';
    $user = findUserById($_POST['id']);


    if(!$currentUser)
    {
        header('Location: index.php');
        exit(0);
    }


    // nếu follow
$isFollow=count($relationshipfollow)===2;

//chưa follow
$noFollow=count($relationshipfollow)===0;

    if($_POST['action'] === 'Theo dõi')
    {
        addRelationshipfollow()($currentUser['id'],$user['id']);
    }

    if($_POST['action'] === 'Hủy theo dõi')
    {
        removeRelationshipfollow()($currentUser['id'],$user['id']);
    }
    
    header ("Location:profile.php?id=" . $user['id']);
?> -->