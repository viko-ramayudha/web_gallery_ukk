<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful UI Page</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f1ebf8;
        }

        .hero-container {
            position: relative;
            height: 618px;
            background: url('uploads/HR.jpg') center/cover no-repeat;
            color: #fff;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /* margin-left: 50px;
            margin-right: 50px */
            filter: brightness(0.93) contrast(1.2);
            margin-bottom: 20px;
        }

        .hero-text {
            font-size: 2em;
            /* margin-bottom: 10px; */
        }

        .h1{
            text-align: center;
            margin-top: 1px;
            margin-bottom: 2px;
            background-color: #9564da;
            padding-top: 30px;
            padding-bottom: 30px;
            color: white;
        }

        .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding-top: 20px;
            /* margin-left: 90px; */
            /*Laptop Version */
            margin-left: 13px;
            /* agar jika card image satu berada di kiri */
            justify-content: flex-start;
        }

        .card {
            width: 295px;
            margin: 18px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease-in-out;
            border-radius: 5px;
            background-color: white;
        }

        .card:hover {
            transform: scale(1.1);
        }

        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 2.5px;
        }

        .card-content {
            padding: 20px;
        }

        .button {
            margin-left: 170px;
            margin-top: 15px;
            background-color: #9564da;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .button:hover {
            background-color: #6c45a2;
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
    <div class="hero-container">
        <div class="hero-text">
            <h1>Welcome to Our Gallery Site</h1>
            <!-- <h1>Welcome to The Class</h1> -->
            <!-- <p>Discover Amazing Content</p> -->
            <?php if(isset($_SESSION['userid'])): ?>
            <p style="font-size: 38px; font-weight: bold;" ><?= ucwords($_SESSION['username']) ?></p>
            <?php else: ?>
            <p style="font-size: 30px; font-weight: bold;">Please Login Now!!!</p>
            <?php endif; ?>
        </div>
    </div>

    <br>
    <hr>
    <div>
        <h1 class="h1">~~ Our Photo's ~~</h1>
    </div>
    <hr>

    <!-- card foto -->
    <div class="card-container">
        <?php
            //memanggil gambar dari dataBase
            $tampil=mysqli_query($conn, "SELECT * FROM foto INNER JOIN user ON foto.UserID=user.UserID");
            foreach($tampil as $tampils):
        ?>
        <div class="card">
            <img src="uploads/<?= $tampils['LokasiFile']?>" >
            <div class="card-content">
                <h2 style="margin-bottom: 4px;"><?= $tampils['JudulFoto'] ?></h2>
                <p style="margin-left: 1px;">by: <?= $tampils['Username'] ?></p>
                <button class="button"><a style="text-decoration: none; color: white;" href="?url=detail&&id=<?= $tampils['FotoID'] ?>">Details</a></button>
            </div>
        </div>

        <?php
            endforeach;
        ?>

    </div>

    <footer class="footer">
        <p class="footer-p">&copy; 2024 Viko Ramayudha/GalReSka</p>
    </footer>
</body>

</html>
