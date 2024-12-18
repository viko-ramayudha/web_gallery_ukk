

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <style>
      .card {
        /* Adjust card width as needed */
        width: 1150px;
        height: 405px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 8px 15px rgba(0.05, 0, 0, 0.3); /* Subtle shadow for depth */
        margin-top: 120px;
        margin-left: auto; /* Optional spacing between cards */
        margin-right: auto;
        display: flex; /* Allow image and content to be side-by-side */
      }

      .card img {
        width: 300px; /* Match or adjust to fit card width */
        height: auto; /* Maintain aspect ratio */
        object-fit: cover; /* Crop image to fill container while preserving aspect ratio */
        border-radius: 5px 0 0 5px; /* Top left and bottom left rounded corners */
        margin-right: 20px; /* Spacing between image and card content */
      }

      .card-content {
         padding: 10px; /*Adjust padding for content spacing */
      }

      /* Media queries for responsiveness */
      @media (max-width: 1200px) {
        .card {
          width: 90%; /* Adjust width for smaller screens */
        }
      }

      @media (max-width: 768px) {
        /* Stack image and content vertically on extra small screens */
        .card {
          flex-direction: column; /* Stack elements vertically */
        }

        .card img {
          width: 100%; /* Image takes full width */
          margin-right: 0; /* Remove margin as elements are stacked */
        }
      }

      .card-content h3 {
        margin: 0 0 5px 0; /* Adjust margin for title */

      }

      /* like */
      .card-content a {
        color: #9564da;; /* Adjust link color to match your theme */
        text-decoration: none;
        transition: all 0.2s ease-in-out;
        background-color: transparent; /* Transparent background for link button */
        cursor: pointer;

        margin-top: 15px;
        padding: 7px 10px;
        border: 0.1px solid #9564da;; /* Consistent thin border for form elements */
        border-radius: 5px;
        font-size: 19px;
        margin-left: 10px; /* Spacing between form elements */
      }

      .fa-heart {
   
        color: #e74c3c; /* Adjust color as desired */
        font-size: 22px;
      }

      /* username */
      .card-content small {
        color: black;
        color: #888;  /* Adjust text color for less prominent information */
        display: block; /* Display on a new line */ /* Add spacing after small text */
        font-size: 14px;
        margin-top: 5.5px;
      }

      /* deskripsi_foto */
      .card-content p {
        margin-top: 15px;
        margin-bottom: 15px; /* Add spacing after description */
        font-weight: 500;
        font-size: 16px;
      }

      .card-content a:hover {
        opacity: 0.8; /* Add a hover effect for visual feedback */
      }

      .card-content form {
        display: flex; /* Arrange elements horizontally */
        align-items: center;

        /* hapus untuk versi komentar lama */
        margin-top: 2px;
      }

      .card-content form input[type="text"] {
        /* padding: 8px 100px; */
        border: 1px solid #ddd; /* Consistent thin border for form elements */
        border-radius: 5px;
        font-size: 14px;
        /* versi lama 
        /* margin-left: -80px;
        height: 170px;
        margin-bottom: 80px; 
        margin-top: 200px;*/

        /* versi baru */
        padding: 8px 23px;
        margin-left: -150px;
        margin-right: 75px;
        height: 36px;
      }

      .card-content a[type='kembali']{
        
        padding: 8px 20px;
        border: 1.5px solid #9564da; /* Consistent thin border for form elements */
        border-radius: 5px;
        font-size: 14px;
        /* ini untuk mengatur tombol kembali versi lama */
        /* margin-left: 210px;
        margin-right: -215px; 
        margin-top: 200px;*/

        /* ini untuk mengatur tombol kembali versi baru */
        margin-left: 0px;
        margin-right: 165px;
        margin-bottom: 16.5px;
        /* Spacing between form elements */

        transition: all 0.2s ease-in-out;
      }

      .card-content a[type='kembali']:hover {
        background-color: #9564da;
        color: white;
      }

      .card-content input[type="submit"] {
        /* versi lama
        margin-top: 200px; */
        padding: 9px 22px;
        border: 1px solid #ddd; /* Consistent thin border for form elements */
        border-radius: 5px;
        font-size: 14px;
        margin-left: -60px; /* Spacing between form elements */
      }

      .card-content input[type="submit"] {
          background-color: #9564da;
        /* background-color: #3498db; Submit button color */
        color: #fff; /* White text for submit button */
        cursor: pointer;
      }

      .card-content input[type="submit"]:hover {
          background-color: #6c45a2;
      }

      /* style.css */
      .heart-button {
        display: inline-flex;
        border-radius: 50%;
        border: none;
      }

      .heart-button:hover {
        background-color: #e5e5e5; /* Adjust hover color as needed */
      }

      .heart-button .fas {
        font-size: 18px;
        color: #d32f2f; /* Adjust heart color as needed */
        margin-right: 5px;
      }

      .card-comment {
        /* Adjust card width as needed */
        width: 100%;
        max-width: 453px;
        height: 605px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 8px 15px rgba(0.05, 0, 0, 0.3); /* Subtle shadow for depth */
        margin-top: 60px;
        margin-left: 805px; /* Optional spacing between cards */
        display: flex; /* Allow image and content to be side-by-side */

        overflow-y: auto;
        max-height: 300px; /* Atur ketinggian maksimum sesuai kebutuhan */
      }

      .card-comment h2 {
        margin-top: 15px;
        margin-bottom: 10px;
        margin-left: 25px;
        font-size: 25px;
      } 

      /* username */
      .card-comment small {
        margin-top: 13px;
        margin-left: 25px;
        color: black;
        /* color: #888; Adjust text color for less prominent information */
        display: block; /* Display on a new line */ /* Add spacing after small text */
        font-size: 16.5px;
        font-weight: bold;
      }

      /* deskripsi_foto */
      .card-comment p {
        /* margin-top: 8px;
        margin-left: 25px;
        margin-bottom: 5px; Add spacing after description */
        font-weight: 500;
        font-size: 14.9px;

        margin-top: -18px;
        margin-left: 125px;
        margin-bottom: 25px;
      }

      .card-comment hr {
        margin: 5px 0; /* Add space above and below the separator line */
        border-color: #ddd; /* Light gray separator line */
        margin-left: 25px;
      }

      .card-content input[name="edit"]{
        /* versi lama
        margin-top: -100px; */
        margin-top: -50px;
        padding: 8px 15px;
        border: 1.5px solid #9564da; /* Consistent thin border for form elements */
        border-radius: 5px;
        font-size: 14px;
        /* ini untuk mengatur tombol kembali */
        margin-left: 260px;
        margin-right: -285px;
        /* Spacing between form elements */

        transition: all 0.2s ease-in-out;
      }

      .card-content button[name="hapus"] {
        /* versi lama
        margin-top: -100px; 
        margin-left: 297px; */
        margin-top: -70px;
        padding: 5px 5px;
        border: 1px solid #fff; /* Consistent thin border for form elements */
        border-radius: 5px;
        font-size: 14px;
        margin-left: 347px; /* Spacing between form elements */
        background-color: #fff;
        cursor: pointer;
      }

      .footer {
        margin-top: 100px;
        text-align: center;
        padding: 2.5rem;
        background-color: #9564da;
        color: #fff;
        font-weight: bold;
      }

      @media (max-width: 768px) {
        .footer {
          font-size: 0.8rem; /* Adjust font size for smaller screens */
        }
      }
    </style>
</head>
<body>
    <?php
      $details=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID WHERE foto.FotoID='$_GET[id]'");
      $data=mysqli_fetch_array($details);

      $likes=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM likefoto WHERE FotoID='$_GET[id]'"));
      //untuk menghilangkan warning apabila User belum login
      if (isset($_SESSION['userid'])) {
        $cek = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM likefoto WHERE FotoID='$_GET[id]' AND UserID='" . $_SESSION['userid'] . "'"));
      } else {
        // Handle the scenario where the user is not logged in (e.g., display a message or redirect to login page)
        $cek = 0; // Assuming not liked if not logged in
      }

    ?>

    <div class="card">
        <img src="uploads/<?= $data['LokasiFile']?>" alt="<?= $data['JudulFoto'] ?>" style="width: 700px; max-height: 405px;" >
        <div class="card-content">
          <h2><?= $data['JudulFoto'] ?>
            <a class="heart-button" href="<?php if(isset($_SESSION['userid'])){echo '?url=like&&id='.$data['FotoID'];}else{echo 'login.php';} ?>">
              <!-- untuk like dan dislike -->
              <!-- <i class="fas fa-heart"></i> -->
              <span style="margin-bottom: -3px;"><?php if($cek==0){echo "<i class='fa-regular fa-heart'></i>";}else{echo "<i class='fa-solid fa-heart'></i>";}?> <?= $likes?></span>
            </a>
          </h2>
          <small>By: <?= $data['Username'] ?>, on <?= $data['TanggalUnggah'] ?></small>
          <p>Description: <?= $data['DeskripsiFoto'] ?></p>
          <hr style="width: 95.5%;">


          <!-- ini komentar para pengguna -->
          <div style="overflow-y: auto; width: 421px; min-height: 199px; max-height: 200px;">
            <?php 
              $komen=mysqli_query($conn, "SELECT * FROM komentarfoto INNER JOIN user ON komentarfoto.UserID=user.UserID INNER JOIN foto ON komentarfoto.FotoID=foto.FotoID WHERE komentarfoto.FotoID='$_GET[id]'");
              foreach($komen as $komens):
            ?>
            
            <small style="margin-top: 12px; color: black; font-size: 16.5px; font-weight: bold; display: inline-block; max-width: 100%;"><?= $komens['Username'] ?></small>
            <P style="font-weight: 500; font-size: 14.9px; margin-top: -17px; margin-left: calc(65px + 10px);"> <?= $komens['IsiKomentar'] ?> </p>
            <p style="color: #888; font-size: 12px; margin-top: -8px; margin-bottom: 8px;"><?= $komens['TanggalKomentar'] ?></p>
            

            <?php
            //if (isset($_SESSION['userid']) && $_SESSION['userid'] == $komens['Username'] && $_SESSION['userid'] == $komens['UserID']):
            if (isset ($_SESSION['username']) && $_SESSION['username'] == $komens['Username']):
            ?>

            <?php
              // Menangani permintaan hapus komentar
              if (isset($_POST['hapus']) && !empty($_POST['komentarid'])) {
                //untuk membersihkan input pengguna sebelum digunakan dalam query SQL. Hal ini untuk mencegah SQL injection.
                $komentarid = mysqli_real_escape_string($conn, $_POST['komentarid']);

                // Jalankan query delete
                $hapus = mysqli_query($conn, "DELETE FROM komentarfoto WHERE KomentarID = $komentarid");
                
                if($hapus) {
                  echo "<p style='color:green'>Comment successfully deleted!!</p>";
                  echo '<meta http-equiv="refresh" content="1">';
                } else {
                  echo "<p style='color:red'>Failed to delete comment!!</p>";
                  echo '<meta http-equiv="refresh" content="0.8">';
                }
                // Redirect ke halaman detail dengan pesan
                // header("Location: ?url=detail&id=" . $_GET['id'] . "&success=comment_deleted");
                exit;
              }
            ?>

            <?php
            if (isset($_POST['edit']) && !empty($_POST['komentarid'])) {
              // ... (kode validasi dan sanitasi input)
              //untuk membersihkan input pengguna sebelum digunakan dalam query SQL. Hal ini untuk mencegah SQL injection.
              $komentarid = mysqli_real_escape_string($conn, $_POST['komentarid']);
              // Jalankan query update
              $update = mysqli_query($conn, "UPDATE komentarfoto SET IsiKomentar = '$komentar' WHERE KomentarID = $komentarid");
            
              if ($update) {
                echo "<p style='color:green'>Komentar berhasil diubah!</p>";
                echo '<meta http-equiv="refresh" content="0">';
              } else {
                echo "<p style='color:red'>Gagal mengubah komentar!</p>";
                echo '<meta http-equiv="refresh" content="0">';
              }
            
              exit;
            }
            ?>
            
          <!-- <button type="button" class="hidden-button"></button>
          <svg aria-label="More options" fill="currentColor" height="24" role="img" viewBox="0 0 24 24" width="24" class="dropdown-toggle">
            <circle cx="12" cy="12" r="1.5"></circle>
            <circle cx="6" cy="12" r="1.5"></circle>
            <circle cx="18" cy="12" r="1.5"></circle>
          </svg>

          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Edit</a></li>
            <li><a href="#">Hapus</a></li>
          </ul> -->


              <!-- tombol hapus -->
              <form method="POST" href="?url=detail&id=<?=$_GET['id'] ?>">
                <input type="hidden" name="komentarid" value="<?= $komens['KomentarID'] ?>">
                <!-- <input type="submit" name="edit" value="Edit" > -->
                <button type="submit" name="hapus" value="Delete">
                  <i class="fa-solid fa-trash-can fa-1.5x"></i>
                </button>
              </form>
              <?php endif; ?>
            <?php endforeach; ?>
          </div>

          <hr style="width: 95.5%;">
          <!-- ini input komentar -->
          <?php 
            //ambil data komentar
            $submit=@$_POST['submit'];
            if($submit=='Send') {
              $komentar=isset($_POST['komentar']) ? $_POST['komentar'] : '';
              $foto_id=isset($_POST['foto_id']) ? $_POST['foto_id'] : '';
              $user_id=@$_SESSION['userid'];
              $tanggal=date('Y-m-d');
              $komen=mysqli_query($conn, "INSERT INTO komentarfoto VALUES('', '$foto_id', '$user_id', '$komentar', '$tanggal')");
              // header("Location: ?url=detail&&id=$foto_id");
              if($komen){
                echo "<p style='color: green; '>Comment sent successfully!!</p>";
                echo '<meta http-equiv="refresh" content="0.8; url=?url=detail&id=' . $foto_id . '">';
              }else{
                echo "<p style='color: green; font-weight: semibold;'>Comment failed to send!!</p>";
                echo '<meta http-equiv="refresh" content="1; url=?url=detail&id=' . $foto_id . '">';
              }
            }
          ?>

          <!-- sebelumnya pake href -->
          <form href="?url=detail" method="POST">
            <input type="hidden" name="foto_id" value="<?= $data['FotoID'] ?>">
            <a type="kembali" href="?url=home">Back</a>
            <?php if(isset($_SESSION['userid'])): ?>
              <input type="text" name="komentar" placeholder="Input Comment's..."></input>
              <input type="submit" value="Send" name="submit">
            <?php endif; ?>
          </form>
      </div>
    </div>
    <footer class="footer">
        <p class="footer-p">&copy; 2024 Viko Ramayudha/SkensaPas</p>
    </footer>
  </body>
</html>