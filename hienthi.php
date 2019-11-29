<?php
	require_once 'init.php';
	require_once 'function.php';
	//xu ly logic o day
	$page = 'index';
	$success = false;
	if(!$currentUser){
        header('Location: log-sin.php');
        exit(0);
	}

?>
<?php include 'header.php'; ?>
<div>
<?php
	//$id = -1;
	echo $_GET["id"];
	$post = findPostByid($_GET["id"]);
?>
			<div >
			<?php 
			
			?>
				<i> Ngày tạo : <?php echo $post['createdAt']; ?></i>
				<p><?php echo $post['content']; ?></p>
			
			</div>
		</main>
	
<?php include "footer.php" ?>
</div>