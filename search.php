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
<body>

                
    <form action = " searchlist.php" method = "GET" >
  <div class="form-row">
    <div class="col">
      <input name="tukhoa1" type="text" class="form-control" placeholder="Tìm kiếm bài viết">
   
  </div>
  <button type="submit" class="btn btn-primary">Tìm Kiếm</button>
</form>
           
    </div>
