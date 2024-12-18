<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            /* background-color: #f1ebf8; */
            background-color: #9564da;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 450px;
            margin: 15px auto;
            padding-top: 20px;
            padding-bottom: 25px;
            padding-left:50px;
            padding-right: 50px;
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        h2 {
            text-align: center;
            margin-top: 10px;
            color: #9564da;
        }

        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 20px;
        }

        label {
            display: block;
            width: 100%;
            margin-top: 16px;
            margin-bottom: 7px;
            font-size: 14px;
            color: #5a5a5a;
        }

        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            color: #5a5a5a;
        }

        input[type="text"]:focus, input[type="email"]:focus, input[type="password"]:focus {
            outline: none;
            box-shadow: 0 0 3px #5a5a5a;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #9564da;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 30px;
            margin-bottom: 15px;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #6c45a2;
        }


    </style>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <!-- <p>Create an account!!</p> -->
        <?php
            //ambil data yang dikirimkan oleh <form> ke dataBase dengan method POST
            $submit=@$_POST['submit'];
            if ($submit=='Register'){
                $username=@$_POST['username'];
                $password=md5(@$_POST['password']);
                $email=@$_POST['email'];
                $nama_lengkap=@$_POST['nama_lengkap'];
                $alamat=@$_POST['alamat'];

                //cek apakah ada Username dan Email yang sama atau sudah di pakai orang lain, jika ada yang sama maka register akan gagal
                $cek=mysqli_num_rows(mysqli_query($conn, "SELECT * FROM user WHERE Username='$username' OR Email='$email' "));
                if($cek==0){
                    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password', '$email', '$nama_lengkap', '$alamat' )");
                    echo 'Daftar berhasil, silahkan login!!';
                    echo '<meta http-equiv="refresh" content="0.8; url=login.php">';
                } else{
                    echo 'Maaf akun sudah terdaftar';
                    echo '<meta http-equiv="refresh" content="0.8; url=register.php">';
                }
            }

        ?>

        <!-- mengirimkan data ke dataBase -->
        <form action="register.php" method="post">
                <label>Username</label>
                <input type="text" name="username" required>

                <label>Password</label>
                <input type="password" name="password" required>

                <label>Email</label>
                <input type="text" name="email" required>

                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" required>

                <label>Alamat</label>
                <input type="text" name="alamat" required>
            <input type="submit" name="submit" value="Register">
            <p style="margin-left: 70px; font-size: 13.4px;">Already have an account? <a style="color: #eabe1f" href="login.php">Login Now!!</a></p>
        </form>
    </div>
</body>
</html>