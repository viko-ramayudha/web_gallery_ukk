<?php include 'koneksi.php'; session_start() ?>

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
            margin: 90px auto;
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
            margin-top: 20px;
            margin-bottom: 5px;
            color: #9564da;
        }


        form {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 10px;
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
        <h2>Login</h2>
        <br>
        <p style="color: #5a5a5a; font-weight: bold; margin-bottom: 7px;">Welcome !!!</p>
        <?php
            $submit=@$_POST['submit'];
            if ($submit=='Login'){
                $username=$_POST['username'];
                $password=md5($_POST['password']);

                //cek apakah Username dan Password yang di masukkan ke dalam <input> ada di dataBase
                $sql=mysqli_query($conn, "SELECT * FROM user WHERE Username='$username' AND Password='$password' ");
                $cek=mysqli_num_rows($sql);
                if($cek!=0){
                    //ambil data dari dataBase untuk membuat session
                    $sesi=mysqli_fetch_array($sql);
                    echo "<p style='color: green; font-weight: bold;'>Login successful!!</p>";
                    $_SESSION['username']=$sesi['Username'];
                    $_SESSION['userid']=$sesi['UserID'];
                    $_SESSION['email']=$sesi['Email'];
                    $_SESSION['nama_lengkap']=$sesi['NamaLengkap'];
                    $_SESSION['alamat']=$sesi['Alamat'];
                    echo '<meta http-equiv="refresh" content="0.8; url=./">';
                } else{
                    echo "<p style='color: red; font-weight: bold;'>Login failed!!</p>";;
                    echo '<meta http-equiv="refresh" content="0.8; url=login.php">';
                }
            }

        ?>

        <!-- form login -->
        <form action="login.php" method="post">
                <label>Username</label>
                <input type="text" name="username" required>

                <label>Password</label>
                <input type="password" name="password" required>

            <input type="submit" name="submit" value="Login">
            <p style="margin-left: 70px; font-size: 13.4px;">Don't have an account? <a style=" color: #eabe1f" href="register.php">Register Now!!</a></p>
        </form>
    </div>
</body>
</html>