
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload with Title, Description, Dropdown, and Choose File</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: sans-serif;
            margin: 0;
            padding: 0px;
            background-color: #f1ebf8;
        }

        .upload-container {
            max-width: 500px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding:20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            margin-top: 120px;
            margin-bottom: 40px;
        }

        h1 {
            text-align: center;
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }

        textarea {
            height: 100px;
        }

        .image-upload {
            /* display: flex; */
            align-items: center;
        }

        .custom-file-label {
            cursor: pointer;
        }

        input[type="file"]{
            margin-bottom: 5px;
        }

        .preview {
            width: 100px;
            height: 100px;
            border: 1px solid #ddd;
            padding: 5px;
            margin-left: 10px;
            background-size: cover;
            background-position: center;
        }

        .categ {
            margin-top: 15px;
        }

        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="submit"] {
            margin-left:373px;
            margin-top: 18px;
            background-color: #9564da;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6c45a2;
        }

        .crud-container {
            max-width: 1115px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding:20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            margin-top: 60px;
            margin-bottom: 80px;
            padding-right: 83px;
        }

        /* Overall table styling */
        .crud-container table {
        border-collapse: collapse;
        width: 106%;
        margin-bottom: 20px;
        }

        /* Table header styling */
        .crud-container table thead tr.thead {
        background-color: #f2f2f2;
        text-align: left;
        padding: 8px;
        }

        .crud-container table thead tr.thead th {
        border: 1px solid #ddd;
        }

        /* Table body styling */
        .crud-container table tbody tr {
        border: 1px solid #ddd;
        padding: 8px;
        }

        /* Table cell styling */
        .crud-container table tbody tr td {
        border: 1px solid #ddd;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: 6.7px;
        padding-right: 6.7px;
        position: relative;
        text-align: center;
        }

        /* tampilan deskripsi agar bagus jika teksnya panjang */
        .deskrip {
            width: 590px;
        }

        /* Action buttons styling */
        .crud-container table tbody tr td input[type="button"] {
        background-color: #9564da;
        border: none;
        cursor: pointer;
        padding: 0px;
        margin: 0px;
        }

        .crud-container table tbody tr td a {
        text-decoration: none;
        color: #000;
        }

        .crud-container table tbody tr td a:hover {
        text-decoration: underline;
        }

        .button-edit {
            /* margin-left: 100px; */
            margin-left: 10px;
            margin-right: -80px; /* iki ngaruh */
            margin-bottom: 18px;
            padding: 9px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            background-color: transparent;
            border: 1.5px solid #9564da;
        }

        .button-hapus {
            margin-right: 10px;
            margin-left: 90px;
            margin-top: 18px;
            background-color: #9564da;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button-edit:hover {
            border: 1.5px solid #6c45a2;
        }

        .button-hapus:hover {
            background-color:  #6c45a2;
        }

        .footer {
            margin-top: 100px;
            text-align: center;
            padding: 2.5rem;
            background-color: #9564da;
            color: #fff;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="upload-container">
        <h1>Image Album</h1>
        <hr>
        <br>
        <?php
            //ambil data yang telah dikirim di dataBase oleh tag <form>
            $submit=@$_POST['submit'];
            $albumID=@$_GET['albumid'];
            if($submit=='Upload'){
                $nama_album=@$_POST['nama_album'];
                $deskripsi_album=@$_POST['deskripsi_album'];
                $tanggal_dibuat=date('Y-m-d');
                $userid=@$_SESSION['userid'];
                $insert=mysqli_query($conn, "INSERT INTO album VALUES('', '$nama_album', '$deskripsi_album', '$tanggal_dibuat', '$userid')");
                if($insert){
                    echo "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Successfully added an album!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=album">';
                }else{
                    echo "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Failed to add album!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=album">';
                }
            }elseif(isset($_GET['edit'])) {
                if($submit=='Save'){
                    $nama_album=@$_POST['nama_album'];
                    $deskripsi_album=@$_POST['deskripsi_album'];
                    $tanggal_dibuat=date('Y-m-d');
                    $userid=@$_SESSION['userid'];
                    $update=mysqli_query($conn, "UPDATE album SET NamaAlbum='$nama_album', Deskripsi='$deskripsi_album' WHERE AlbumID='$albumID' ");
                    if($update){
                        echo "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Successfully changed the album!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=album">';
                    }else{
                        echo "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Failed to change album!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=album">';
                    }
                }
            }elseif(isset($_GET['hapus'])) {
                $hapus=mysqli_query($conn, "DELETE FROM album WHERE AlbumID='$albumID' ");
                if($hapus){
                    echo "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Successfully deleted the album!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=album">';
                }else{
                    echo "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Failed to delete album!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=album">';
                }
            }

            $val=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM album WHERE AlbumID='$albumID' "));
        ?>

        <!-- mengirimkan data ke dataBase -->
        <?php if(!isset($_GET['edit'])): ?>
        <form action="?url=album" method="post">
            <label>Album Name</label>
            <input type="text" id="title" required name="nama_album">

            <label>Description</label>
            <textarea id="description" name="deskripsi_album" required></textarea>

            <input type="submit" value="Upload" name="submit"></input>
        </form>

        <!-- untuk edit data -->
        <?php elseif(isset($_GET['edit'])): ?>
            <form action="?url=album&&edit&&albumid=<?= $val['AlbumID'] ?>" method="post">
            <label>Album Name</label>
            <input type="text" id="title" value="<?= $val['NamaAlbum'] ?>" required name="nama_album">

            <label>Description</label>
            <textarea id="description" name="deskripsi_album" required> <?= $val['Deskripsi'] ?> </textarea>

            <input type="submit" value="Save" name="submit"></input>
        </form>
        <?php endif; ?>
    </div>

    <!-- tabel crud (untuk mengedit maupun menghapus kategori album yang telah dibuat oleh masing-masing User) -->
    <div class="crud-container">
            <table>
                <thead>
                    <tr>
                        <th style="padding: 15px; background-color: #9564da; color: white;" >No</th>
                        <th style="padding: 3px; background-color: #9564da; color: white;" >Album Name</th>
                        <th style="padding: 15px; background-color: #9564da; color: white;" >Description</th>
                        <th style="padding: 15px; background-color: #9564da; color: white;" >Upload Date</th>
                        <th style="padding: 15px; background-color: #9564da; color: white;" >Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i=1;
                        $userid=@$_SESSION['userid'];
                        $albums=mysqli_query($conn, "SELECT * FROM album WHERE UserID='$userid'");
                        foreach($albums as $album):
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $album['NamaAlbum'] ?></td>
                        <td style="text-align: left;" class="deskrip"><?= $album['Deskripsi'] ?></td>
                        <td><?= $album['TanggalDibuat']?></td>
                        <td>
                            <button class="button-edit" ><a style="text-decoration: none; color: #9564da"  href="?url=album&&edit&&albumid=<?= $album['AlbumID'] ?>">Edit</a></button>
                            <button class="button-hapus"><a style="text-decoration: none; color: white;"  href="?url=album&&hapus&&albumid=<?= $album['AlbumID'] ?>">Delete</a></button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <footer class="footer">
            <p class="footer-p">&copy; 2024 Viko Ramayudha/SkensaPas</p>
        </footer>
</html>
