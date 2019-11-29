<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP"
        crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>Keeblock</title>
</head>

<body>  
    <header>
	<?php if($currentUser) : ?>
        <div class="search">
            <div class="full-search">
                <div class="icon-logo">
                    <a href="index.php"><i class="fas fa-apple-alt"></i></a>
                </div>
                <div class="text-search">
                    <input type="text" placeholder="Tìm kiếm">
                </div>
                        <a href="index.php"></a>
                        <a href="search.php">
                 <div class="button-search"><i class="fas fa-search"></i>
                </div>
            <a>
            </div>
        </div>
        <div class="function-header">
            <div class="all-menu">
                <div class="menu-funciton">
                    <ul class="menu-header">
                        <li class="nav-item <?php echo $page === 'thongtin' ? 'active' :'' ?>">
							<a class="nav-link" href="profile.php?id=<?php echo $currentUser['id'];?>"><?php echo $currentUser['fullname']; ?></a>
						</li>
                        <li><a href="index.php">Trang chủ</a></li>
                    </ul>
                </div>
                <div class="icon-funciton">
                    <div class="friend">
                        <a href="listfriend.php?id=<?php echo $currentUser['id']; ?>" style="color:white;"><i class="fas fa-user-friends" id="listfriend"></i></a>
                    </div>
                    <div class="message">
                        <i class="fab fa-facebook-messenger"></i>
                    </div>
                    <div class="bell">
                        <i class="fas fa-bell"></i>
                    </div>
                </div>
                <div class="help">
                    <i class="fas fa-question-circle"></i>
                </div>
                <div class="out" >
                    <i class="fas fa-outdent" id="a"></i>
                    <!-- <ul class="menu-out">
                        <li><a href="#">Nhật kí hoạt động</a></li>
                        <li><a href="#">Cài đặt</a></li>
                        <li><a href="#">Đăng xuất</a></li>
                    </ul> -->
                </div>
            </div>
        </div>
	<?php endif; ?>
    </header>
    <div class="middle" id="moddle-id">
            <div class="menu">
              <li class="item">
                <a class="btn" href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
              </li>
            </div>
     </div>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
     <script>
         $("#a").dblclick(function(){
             var clicked=$("#moddle-id");
             if(clicked){$('#moddle-id').css('display','block');}
            
         });
         $("#a").click(function(){
             var clicked=$("#moddle-id");;
             if(clicked){$('#moddle-id').css('display','none');}
            
         });
        var p=document.querySelector("#listfriend");
        var title=document.createAttribute("title");
        title.value="Danh sách bạn bè";
        p.setAttributeNode(title);
     </script>

</body>

</html>
