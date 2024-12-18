
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
            margin-left: 130px;
            /* margin: 0 auto; */
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            margin-top: 120px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            margin-bottom: 300px;
            /* margin-bottom: 650px; */
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
            margin-left:360px;
            margin-top: 18px;
            background-color: #9564da;
            color: white;
            padding: 10px 25px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #6c45a2;
        }


        .card-container {
            display: flex;
            /* margin-top: -1193px; */
            margin-top: -878px;
            margin-left:660px;
            /* justify-content: center; */
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
            margin-bottom: 10px;
        }

        .card {
            width: 230px;
            height: 280px;
            margin: 13px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
            background-color: #fff;
            border-radius: 5px;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 3px;
        }

        .card-content {
            padding: 20px;
        }

        .button-edit {
            /* margin-left: 100px; */
            margin-top: 18px;
            padding: 7px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            background-color: transparent;
            border: 1.5px solid #9564da;
        }

        /* .button-edit:hover {
            background-color: #9564da;
        } */

        .button-hapus {
            margin-left: 3px;
            margin-top: 18px;
            background-color: #9564da;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button-edit:hover {
            border: 1.5px solid  #6c45a2;
        }

        .button-hapus:hover {
            background-color:   #6c45a2;
        }

        .report-container {
            max-width: 1185px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding:20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            margin-top: 290px;
            margin-bottom: -490px;
            padding-right: 83px;
        }

        /* Overall table styling */
        .report-container table {
        border-collapse: collapse;
        width: 106%;
        margin-bottom: 20px;
        }

        /* Table header styling */
        .report-container table thead tr.thead {
        background-color: #f2f2f2;
        text-align: left;
        padding: 8px;
        }

        .report-container table thead tr.thead th {
        border: 1px solid #ddd;
        }

        /* Table body styling */
        .report-container table tbody tr {
        border: 1px solid #ddd;
        padding: 8px;
        }

        /* Table cell styling */
        .report-container table tbody tr td {
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
        .report-container table tbody tr td input[type="button"] {
        background-color: #9564da;
        border: none;
        cursor: pointer;
        padding: 0px;
        margin: 0px;
        }

        .report-container table tbody tr td a {
        text-decoration: none;
        color: #000;
        }

        .report-container table tbody tr td a:hover {
        text-decoration: underline;
        }

        .img-report {
            width: 100%;
            height: 110px;
            object-fit: cover;
            border-radius: 3px;
        }

        .report-edit {
            /* margin-left: 100px; */
            margin-left: 1050px;
            margin-right: auto; /* iki ngaruh */
            margin-bottom: -5px;
            margin-top: -5px;
            padding: 9px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            background-color: #9564da;
            border: 1.5px solid #9564da;
            color: #fff;
        }

        .report-edit:hover {
            background-color: transparent;
            color: #9564da;
        }

        .report-edit a:hover {
            
            color: #9564da;
        }
        .footer {
            margin-top: 600px;
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
        <h1>Image Upload</h1>
        <hr>
        <br>
        <?php
            $submit=@$_POST['submit'];
            $fotoid=@$_GET['fotoid'];
            if($submit=='Upload'){
                $judul_foto=@$_POST['judul_foto'];
                $deskripsi_foto=@$_POST['deskripsi_foto'];
                $nama_file=@$_FILES['namafile']['name'];
                $tmp_foto=@$_FILES['namafile']['tmp_name'];
                $tanggal=date('Y-m-d');
                $album_id=@$_POST['album_id'];
                $user_id=@$_SESSION['userid'];
                $uploadDirectory = 'uploads/';

                if (!is_dir($uploadDirectory)) {
                    // If the directory doesn't exist, create it
                    mkdir($uploadDirectory, 0777, true);
                }
                if(move_uploaded_file($tmp_foto, 'uploads/'.$nama_file)){
                    $insert=mysqli_query($conn, "INSERT INTO foto VALUES('', '$judul_foto', '$deskripsi_foto', '$tanggal', '$nama_file', '$album_id', '$user_id')");
                    echo "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Image uploaded successfully!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=upload">';
                }else{
                    echo "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Image failed to upload!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=upload">';
                }
            }elseif(isset($_GET['edit'])){
                if($submit=="Save"){
                    $judul_foto=@$_POST['judul_foto'];
                    $deskripsi_foto=@$_POST['deskripsi_foto'];
                    $nama_file=@$_FILES['namafile']['name'];
                    $tmp_foto=@$_FILES['namafile']['tmp_name'];
                    $tanggal=date('Y-m-d');
                    $album_id=@$_POST['album_id'];
                    $user_id=@$_SESSION['userid'];
                    $uploadDirectory = 'uploads/';
                    if(strlen($nama_file)==0){
                        $update=mysqli_query($conn, "UPDATE foto SET JudulFoto='$judul_foto', DeskripsiFoto='$deskripsi_foto', TanggalUnggah='$tanggal', AlbumID='$album_id' WHERE FotoID='$fotoid' ");
                        if($update){
                            echo "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Image changed successfully!!!</p>";
                            echo '<meta http-equiv="refresh" content="1; url=?url=upload">';
                        }else{
                            echo "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Image failed to change!!!</p>";
                            echo '<meta http-equiv="refresh" content="1; url=?url=upload">';
                        }
                    }else{
                        if(move_uploaded_file($tmp_foto, "uploads/".$nama_file)){
                            $update=mysqli_query($conn, "UPDATE foto SET JudulFoto='$judul_foto', DeskripsiFoto='$deskripsi_foto', LokasiFile='$nama_file', TanggalUnggah='$tanggal', AlbumID='$album_id' WHERE FotoID='$fotoid' ");
                            if($update){
                                echo "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Image changed successfully!!!</p>";
                                echo '<meta http-equiv="refresh" content="1; url=?url=upload">';
                            }else{
                                echo "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Image failed to change!!!</p>";
                                echo '<meta http-equiv="refresh" content="1; url=?url=upload">';
                            }
                        }
                    }
                }
            }elseif(isset($_GET['hapus'])){
                $delete=mysqli_query($conn, "DELETE FROM foto WHERE FotoID='$fotoid'");
                if($delete){
                    echo "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Image deleted successfully!!!</p>";
                    echo '<meta http-equiv="refresh" content="0.8; url=?url=upload">';
                }else{
                    echo "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Image failed to delete!!!</p>";
                    echo '<meta http-equiv="refresh" content="0.8; url=?url=upload">';
                }
            }


            $album=mysqli_query($conn, "SELECT * FROM album");
            $val=mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM foto WHERE FotoID='$fotoid' "));
        ?>
        <?php if(!isset($_GET['edit']) && !isset($_GET['hapus'])): ?>
        <form action="?url=upload" method="post" enctype="multipart/form-data">
            <label>Image Name</label>
            <input type="text" id="title" required name="judul_foto">

            <label>Description</label>
            <textarea id="description" name="deskripsi_foto" required></textarea>

            <div class="image-upload">
                <label>Choose File</label>
                <input type="file" name="namafile" required>
                <small style="color: red;" >File harus berupa : *.jpg, *.png, *.gif</small>
                <!-- <label for="file-input" class="custom-file-label">No file selected</label> -->

                <!-- <div class="preview"></div> -->
            </div>
            
            <div>
                <label class="categ">Category:</label>
                <select name="album_id" required>
                    <?php foreach($album as $albums): ?>
                    <option value="<?= $albums['AlbumID'] ?>"><?= $albums['NamaAlbum'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <input type="submit" value="Upload" name="submit"></input>
        </form>
        
        <?php elseif(isset($_GET['edit'])): ?>
        <form action="?url=upload&&edit&&fotoid=<?= $val['FotoID'] ?>" method="post" enctype="multipart/form-data">
            <label>Title</label>
            <input type="text" id="title" value="<?= $val['JudulFoto'] ?>"  required name="judul_foto">

            <label>Description</label>
            <textarea id="description" name="deskripsi_foto"  required><?= $val['DeskripsiFoto'] ?></textarea>

            <div class="image-upload">
                <label>Choose File</label>
                <input type="file" name="namafile" >
                <small style="color: red;" >File harus berupa : *.jpg, *.png, *.gif</small>
                <!-- <label for="file-input" class="custom-file-label">No file selected</label> -->

                <!-- <div class="preview"></div> -->
            </div>
            
            <div>
                <label class="categ">Category:</label>
                <select name="album_id" required>
                    <?php foreach($album as $albums): ?>
                        <?php if($albums['AlbumID']==$val['AlbumID']): ?>
                            <option value="<?= $albums['AlbumID'] ?>" selected><?= $albums['NamaAlbum'] ?></option>
                        <?php else: ?>
                            <option value="<?= $albums['AlbumID'] ?>"><?= $albums['NamaAlbum'] ?></option>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </div>
            
            <input type="submit" value="Save" name="submit"></input>
        </form>
        <?php endif; ?>
    </div>

    
    <div class="card-container">
        <?php 
            $fotos=mysqli_query($conn, "SELECT * FROM foto WHERE UserID='".@$_SESSION['userid']."' ");
            foreach ($fotos as $foto):
        ?>
        <div class="card">
            <img src="uploads/<?= $foto['LokasiFile']?>" >
            <div class="card-content">
                <p style="margin-bottom: 10px;" ><?= $foto['JudulFoto'] ?></p>
                <button class="button-edit"><a style="text-decoration: none; color:#9564da;" href="?url=upload&&edit&&fotoid=<?= $foto['FotoID'] ?>">Edit</a></button>
                <button class="button-hapus"><a style="text-decoration: none; color: white;" href="?url=upload&&hapus&&fotoid=<?= $foto['FotoID'] ?>">Delete</a></button>
            </div>
        </div>
        <?php endforeach; ?>
    </div>


    <?php 
        $fotos=mysqli_query($conn, "SELECT * FROM user WHERE UserID='".@$_SESSION['userid']."' ");
        foreach ($fotos as $foto):
    ?>
    <?php
        //if (isset($_SESSION['userid']) && $_SESSION['userid'] == $komens['Username'] && $_SESSION['userid'] == $komens['UserID']):
        if (isset ($_SESSION['username']) && $_SESSION['username'] == $foto['Username']):
        $report = mysqli_query($conn, "SELECT * FROM foto WHERE UserID='" . @$_SESSION['userid'] . "'");
        if (mysqli_num_rows($report) > 0): // Only show table if there's data
    ?>
    <div class="report-container">
            <table>
                <thead>
                    <tr>
                        <th style="padding: 15px; background-color: #9564da; color: white;" >No</th>
                        <th style="padding: 3px; background-color: #9564da; color: white;" >Image</th>
                        <th style="padding: 3px; background-color: #9564da; color: white;" >Image Tittle</th>
                        <th style="padding: 15px; background-color: #9564da; color: white;" >Description</th>
                        <th style="padding: 15px; background-color: #9564da; color: white;" >Upload Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $i=1;
                        $userid=@$_SESSION['userid'];
                        $report=mysqli_query($conn, "SELECT * FROM foto WHERE UserID='$userid'");
                        foreach($report as $reports):
                    ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><img class="img-report" src="uploads/<?= $reports['LokasiFile']?>"></td>
                        <td style="text-align: left;"><?= $reports ['JudulFoto'] ?></td>
                        <td style="text-align: left;" class="deskrip"><?= $reports['DeskripsiFoto'] ?></td>
                        <td><?= $reports['TanggalUnggah'] ?></td> 
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <form action="print.php" method="POST" target="_blank">
                <button type="submit" class="report-edit" ><a style="text-decoration: none; font-weight: bold;">Print</a></button>
            </form>
            <?php
            endif; 
            ?>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    <footer class="footer">
        <p class="footer-p">&copy; 2024 Viko Ramayudha/SkensaPas</p>
    </footer>
</body>
</html>
