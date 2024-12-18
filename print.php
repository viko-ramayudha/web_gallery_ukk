<?php
// Mulai sesi untuk dapat mengakses variabel sesi
session_start();

// Periksa apakah pengguna telah login
if (!isset($_SESSION['userid'])) {
    // Jika belum login, alihkan ke halaman login
    header("Location: ../index.php");
    exit; // Hentikan eksekusi skrip
}

// Sertakan file koneksi untuk menghubungkan ke database
include 'koneksi.php';

$logged_in_user_id = $_SESSION['userid'];

// Ambil data dari database (hanya foto pengguna yang login)
$query = mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.userid=user.userid INNER JOIN album ON foto.albumid=album.albumid WHERE foto.userid = '$logged_in_user_id'");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Print Photo</title>
    <style>
        .report-container {
            max-width: 1185px;
            margin: 0 auto;
            border: 1px solid #ddd;
            padding:20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            background-color: #fff;
            margin-top: relative;
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

        .button-print {
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

        .button-print:hover {
            background-color: transparent;
            color: #9564da;
        }

        .button-print a:hover {
            
            color: #9564da;
        }
        @media print{
            /* Style Untuk Media Cetak */
            .button-print{
                display: none;
            }
        }
    </style>
</head>
<body>
    <h2>Data Photo</h2>
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
            <button class="button-print" onclick="window.print()" type="submit" class="report-edit" ><a style="text-decoration: none; font-weight: bold;">Print</a></button>
        </div>
</body>
</html>