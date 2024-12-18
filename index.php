<?php include 'koneksi.php'; session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GalleryApp</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<nav style="background-color: #9564da; padding-left:35px;" class="navbar"> <!--#6c45a2 -->
    <div>
        <h1><a style="font-family: courier; font-size: 41px; text-decoration: none; color: white; text-shadow: 0.1px 0.1px 0.1px black;"  class="logo" href="index.php">GalReSka</a></h4>
        <!-- font-family: courier; -->
        <!--GalReSka galeri rekayasa skensa
        Regal ( RE kayasa Perangkat Lunak GAL lery)  -->
    </div>
    <ul class="nav-links">
        <?php if(isset($_SESSION['userid'])): ?>
        <li class="ben" style="font-size: 20px; font-weight: bold;"><a href="?url=home">Home</a></li>
        <li class="ben" style="font-size: 20px; font-weight: bold;"><a href="?url=upload">Upload</a></li>
        <li class="ben" style="font-size: 20px; font-weight: bold;"><a href="?url=album">Album</a></li>
        <li class="ben" style="font-size: 20px; font-weight: bold;"><a href="?url=profile"><?= ucwords($_SESSION['username']) ?></a></li>
        <li class="butlogout" style="font-size: 20px; font-weight: bold;"><a href="?url=logout">Logout</a></li>
        <?php else: ?>
        <li><button class="butlog"><a href="login.php">Login</a></button></li>
        <?php endif; ?>
    </ul>
</nav>
    <?php
    $url=@$_GET["url"];
    if($url=='home'){
        include 'page/home.php';
    }elseif($url== 'profile'){
        include 'page/profile.php';
    }else if($url== 'upload'){
        include 'page/upload.php';
    }else if($url== 'album'){
        include 'page/album.php';
    }else if($url== 'like'){
            include 'page/like.php';
    }else if($url== 'detail'){
        include 'page/detail.php';
    }else if($url== 'logout'){
        session_destroy();
        header("Location: ?url=home");
    }else{
        include 'page/home.php';
    }
    ?>
</body>
</html>