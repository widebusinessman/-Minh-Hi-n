
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

if ($s != null) {
    $s = trim(htmlspecialchars(addslashes($_GET['tukhoa1'])));
    $db = new PDO('mysql:host=localhost;dbname=dack;charset=utf8', 'root', ''); 
    $stmt = $db->prepare("SELECT * FROM post WHERE tittle LIKE '%$s%' or content LIKE '%$s%' ORDER BY createdate desc ");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
			<div class="list">
				<table table width = '600' boder ='5'>>
					<tr>
					<?php
					
						// Lặp dữ liệu lấy data từ cơ sở dữ liệu
						foreach ($resultSet as $row) {
                            $i =0;
						
					?>
						<td >
                        <?php echo $i; ?> 
							<b><?php echo $row["title"];// In ra title bài viết ?></b>
							<p><?php echo substr($row["content"], 0, 100)." ...";// In ra nội dung bài viết lấy chỉ 100 ký tự ?></p>
							<a href="display.php?id=<?php echo $row["id"]; // Tạo liên kết đến trang display.php và truyền vào id bài viết ?>"> Xem thêm</a>
                        </td>
                        <?php echo "</tr>"; ?>
					
					<?php
					$i++;	
						}
					?>
                </table>
                <?php
                 if ($s = null) {
                echo '<div>Vui lòng nhập từ khóa tìm kiếm.</div>';
                    } ?>	
			</div>
		</main>
		
		<nav>
			<div class="innertube">
				<h3>Right heading</h3>
				<ul>
					<li><a href="#">Link 1</a></li>
					<li><a href="#">Link 2</a></li>
					<li><a href="#">Link 3</a></li>
					<li><a href="#">Link 4</a></li>
					<li><a href="#">Link 5</a></li>
				
			</div>
		</nav>
                <?php }?>