<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	$page = 'index';
	$posts = findAllPosts();
	if(!$currentUser)
    {
        header('Location: log-sin.php');
        exit(0);
    }
?>
<?php include 'header.php'; ?>



<?php if($currentUser): ?>				
		      	<li class="nav-item <?php echo $page === 'posts' ? 'active' :'' ?>">
		        <a class="nav-link" href="posts.php">Đăng trạng thái</a>
		      </li>
<?php endif; ?>   
<?php foreach ($posts as $post) : ?>
<div style="border:1px solid black" class="card">
  <div class="card-body">
  	<h5 class="card-title">
			<img style="width: 100px; height: 100px;" src="./img/<?php echo $currentUser['id']; ?>.jpg">
			<?php echo $post['fullName']; ?>
		</h5>
  	<h6 class="card-subtitle mb-2 text-muted"><?php echo $post['createdAt']; ?></h6>
    <p class="card-text"><?php echo $post['content']; ?></p>
		<form action="LikePageHandle.php" method="GET">
			<input type ="hidden" name = "idPost" value = "<?=$post['id']?>">
			<input type ="hidden" name = "countPost" value ="<?=(int)$post['count'] + 1?>">
			<button type="submit" name="like" style="margin:10px;"><i class="far fa-thumbs-up" style='font-size:25px;'id="like"></i></button>
			<span style = "width:10px;height:20px;border-radius:5px;background:red;border:1px solid red;"><?=$post["count"]?></span>
		</form>
		<form action="LikePageHandle.php" method="GET">
			<input type ="hidden" name = "idPost" value = "<?=$post['id']?>">
			<input type ="hidden" name = "countPost" value ="<?=(int)$post['count'] - 1?>">
			<button type="submit" name="like" style="margin:10px;"><i class="far fa-thumbs-down" style='font-size:25px;'></i></button>
			<span style = "width:10px;height:20px;border-radius:5px;background:red;border:1px solid red;"><?=$post["count"]?></span>
		</form>
  </div>
</div>
<?php endforeach; ?>
</body>



