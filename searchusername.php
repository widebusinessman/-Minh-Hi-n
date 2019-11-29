<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chào mừng bạn đến với MXH</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style/hieuung.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>

<div class="_big">
        <div class="_left">
            <div class="_adv">
                <span class="fa fa-search">
                </span>
                <span>Theo dõi những sở thích của bạn</span>
            </div>
            <div class="_adv">
                 <span class="fa fa-search-plus">
                </span>
                <span>Kết bạn bốn phương.</span>
            </div>
            <div class="_adv">
                <span class="fa fa-comment">
                </span>
                <span>Tham gia vào cuộc trò chuyện.</span>
            </div>
        </div>
        <div class="_right">
            
            <div class="_right1">
                <div >
                <?php

 
$page = 'timkiemuser';

$s = trim(htmlspecialchars(addslashes($_GET['tukhoa1'])));// lấy từ khóa từ ô search...
//echo "$s "; 
if ($s != null) {
    
    // $connection = mysqli_connect("localhost", "root", "", "dack");
    // $sql="SELECT * FROM users WHERE fullname LIKE '%kim%' or email LIKE '%kim%' ORDER BY id ";

    $db = new PDO('mysql:host=localhost;dbname=dack;charset=utf8', 'root', ''); 
    $stmt = $db->prepare("SELECT * FROM users WHERE fullname LIKE '%$s%' or email LIKE '%$s%' ORDER BY id ");
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $stmt->execute();
    $resultSet = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table width = '600' boder ='5'> ";
    echo " <h1> Có Phải Bạn Đang Tìm Kiếm </h1>";
    echo "<tr>";
    echo"<td><u> Tên: </u></td> ";
    echo"<td><u> Email: </u> </td> ";
    echo "</tr>";
        $i = 0;
        foreach ($resultSet as $row) {
        $ten = $row['fullname'];
        $email = $row['email'];
      
        echo "<tr>";
        echo"<td> $ten </td> ";
        echo"<td> $email </td> ";
        echo "</tr>";
        $i++;
        }
     echo "</table> "   ;
if($i == 0) {echo '<div> tìm kiếm không thành công </div>';}
    }
    // Lấy số hàng trong table
    // $sqlGetCountPost = "SELECT id_post FROM posts WHERE status = '1' AND title LIKE '%$s%' OR keywords LIKE '%$s%' OR descr LIKE '%$s%'";
    // echo " $sqlGetCountPost"
    // $countPost = $db->num_rows($sqlGetCountPost);

    // $sql_get = "SELECT * FROM users WHERE  fullname LIKE '%$s%' OR email LIKE '%$s%'  ORDER BY id DESC ";
    // if ($db->num_rows($sql_get)) {
    //     foreach ($db->fetch_assoc($sql_get, 0) as $data_post)
    //{
        // echo '
        //     <div class="col-md-3">
        //         <div class="thumbnail">
        //             <a href="' . $_DOMAIN . $data_post['slug'] . '-' . $data_post['id_post'] . '.html">
        //                 <img src="' . $data_post['url_thumb'] . '">
        //             </a>
        //             <div class="caption">
        //                 <h3><a href="' . $_DOMAIN . $data_post['slug'] . '-' . $data_post['id_post'] . '.html">' . $data_post['title'] . '</a></h3>
        //                 <p>' . $data_post['descr'] . '</p>
        //             </div>
        //         </div>
        //     </div>
//        ';
//         echo ' $sql_get ';
//     }

//     echo '</div>';

//     echo '
//         <div class="btn-toolbar" role="toolbar">
//             <div class="btn-group">
//     ';
               
  

 else {
    echo '<div>Vui lòng nhập từ khóa tìm kiếm.</div>';
}

?>
                 
                 </div>
                 

                <a href="singup.php">
                    <div class="_button" style="background-color: #1da1f2;"> Sing up</div>
                </a>
                <a href="login.php">  
                    <div class="_button" style="color: #1da1f2"> Log in</div>
                </a>
                <a href="timban.php">  
                    <div class="_button" style="color: #1da1f2"> Tìm Lại </div>
                </a>
            </div>
        </div>
    </div>


   </body>
   </html>

   
