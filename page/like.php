<?php
    //cek apakah foto di detail.php sudah dilike oleh user
    $cek=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM likefoto WHERE FotoID='$_GET[id]' AND UserID='$_SESSION[userid]'"));
    if($cek==0) {
        //mengambil data yang dikirim melalui url
        $foto_id=@$_GET['id'];
        $user_id=@$_SESSION['userid'];
        $tanggal=date('Y-m-d');
        $insert=mysqli_query($conn, "INSERT INTO likefoto VALUES('', '$foto_id', '$user_id', '$tanggal')");
        header("Location: ?url=detail&&id=$foto_id");
    } else{
        //jika user yang login sudah like, maka lakukan dislike
        $foto_id=@$_GET['id'];
        $user_id=@$_SESSION['userid'];
        $dislike=mysqli_query($conn, "DELETE FROM likefoto WHERE FotoID='$foto_id' AND UserID='$user_id'");
        header("Location: ?url=detail&&id=$foto_id");
    }
?>