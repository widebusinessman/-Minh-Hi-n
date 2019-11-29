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

<?php

$s = trim(htmlspecialchars(addslashes($_GET['tukhoa1'])));
if (isset($_GET['tukhoa1'])) {
	
    $db = new PDO('mysql:host=localhost;dbname=dack;charset=utf8', 'root', ''); 
    $stmt = $db->prepare("SELECT * FROM posts WHERE  content LIKE '%$s%' ORDER BY createdAt desc ");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<b><strong>Thực Hiện Tìm Kiếm bài viết Với từ khóa:<?php echo $_GET['tukhoa1'] ?> </strong> </b>
			<div class="list">
				<table table width = '600' boder ='5'>
					<tr>
					<?php
					
					$i =1;						foreach ($resultSet as $row) 
                          {  
						
					?>
						<td >
                        <?php echo $i; ?> 
							<p><?php echo $row["createdAt"] ?></p>
							<?php $u = findUserById($row["userId"]); ?>
							<h5 class="card-title">
			<img style="width: 100px; height: 100px;" src="./img/<?php echo $u['id']; ?>.jpg">
			
							</h5>
							<a   > <strong> <?php echo $u["fullname"]; ?> </strong> </a>
							<p><?php echo substr($row["content"], 0, 30)." ...";// In ra nội dung bài viết lấy chỉ 100 ký tự ?></p>
							<a href="hienthi.php?id=<?php echo $row["id"]; // Tạo liên kết đến trang display.php và truyền vào id bài viết ?>"> Xem thêm</a>
                        </td>
                        <?php echo "</tr>"; ?>
					
					<?php
						$i++;
					?>
				<?php } ?>
				<?php } ?>
					
           
