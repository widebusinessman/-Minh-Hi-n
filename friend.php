<?php
    require_once 'init.php';
    require_once 'function.php';
        //xu ly logic o day
    $page = 'friend';
    $user = findUserById($_POST['id']);


    if(!$currentUser)
    {
        header('Location: index.php');
        exit(0);
    }


    $relationship=findRelationship($currentUser['id'],$user['id']);
    // var_dump($relationship);

    // nếu là bạn
    $isFriend=count($relationship)===2;

    //chưa phải là bạn
    $noRelationship=count($relationship)===0;

    //đang xảy ra 1 yêu cầu nào đó
    if(count($relationship)===1)
    {
        //đang gửi yêu cầu kết bạn
        $isRequesting=$relationship[0]['user1Id']===$currentUser['id'];// kiểm tra có phải cùng 1 người
    }

    if($_POST['action'] === 'Kết bạn' || $_POST['action'] === 'Đồng ý')
    {
        addRelationship($currentUser['id'],$user['id']);
    }

    if($_POST['action'] === 'Xóa bạn bè' || $_POST['action'] === 'Từ chối')
    {
        removeRelationship($currentUser['id'],$user['id']);
    }
    
    header ("Location:profile.php?id=" . $user['id']);
?>