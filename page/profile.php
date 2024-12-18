<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="style.css">
    <style>
       /* Baseline styles */
       body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f1ebf8;
        }

        h2 {
            font-size: 2em;
            margin-bottom: 0.2em;
        }

        p {
            font-size: 1em;
            line-height: 1.5;
        }

        a {
            color: #333;
            text-decoration: none;
        }

        /* a:hover {
            color: #666;
        } */

        /* Container styles */
        .container {
            margin-top: 110px;
            margin-left: 390px;
            max-width: 600px;
            padding: 2em;
            border-radius: 5px;
            background-color: #fff;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 0.5em 1em;
            border: 1px solid #ddd;
            text-align: left;
        }

        th,{
            text-align: left;
        }

        .form-label {

        }

        .inn {
            padding: 8px 25px;
            margin-bottom: 5px;
            font-size: 15px;
        }

        /* Buttons */
        .btn {
            margin-top: 25px;
            display: inline-block;
            padding: 0.5em 1em;
            border: none;
            border-radius: 5px;
            color: #9564da;
            border: 1.5px solid #9564da; 
            cursor: pointer;
            margin-left: 292px;
            transition: all 0.2s ease-in-out;
            font-size:16px;
        }

        
        .btn2-a {
            display: inline-block;
            padding: 0.6em 1em;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            background-color: #9564da;
            border: 1px solid #ddd;
            font-size:16px;
        }

        .btn2-input {
            display: inline-block;
            padding: 0.5em 1em;
            border: none;
            border-radius: 5px;
            color: #fff;
            cursor: pointer;
            background-color: #9564da;
            border: 1px solid #ddd;
            font-size: 16px;
            margin-right: -360px;
            margin-top: -80px;
        }

        .btn2-a:hover {
            color: #fff;
            background-color: #6c45a2;
        }

        .btn2-input:hover {
            color: #fff;
            background-color: #6c45a2;
        }

        .footer {
            margin-top: 156px;
            text-align: center;
            padding: 2.5rem;
            background-color: #9564da;
            color: #fff;
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div class="container">
    <h2>User Profile</h2>
    <hr>
    <br>
    <?php
        $user = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE UserID='{$_SESSION['userid']}'"));
        if (isset($_POST['editprofile'])) {
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $username = $_POST['username'];
            $alamat = $_POST['alamat'];
            if (isset($username) && isset($email)) {
                if ($username == $user['Username'] && $email == $user['Email'] && $alamat == $user['Alamat']) {
                    $ubah = mysqli_query($conn, "UPDATE user SET NamaLengkap='$nama' WHERE UserID='$_SESSION[userid]'");
                    $session = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE UserID='$_SESSION[userid]'"));
                    if ($ubah) {
                        $_SESSION['userid'] = $session['UserID'];
                        $_SESSION['username'] = $session['Username'];
                        $_SESSION['nama_lengkap'] = $session['NamaLengkap'];
                        $_SESSION['email'] = $session['Email'];
                        $alert = "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Name successfully changed!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    } else {
                        $alert = "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Name failed to change!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    }
                } else if ($username == $user['Username'] && $email == $user['Email'] && $nama == $user['NamaLengkap']) {
                    $ubah = mysqli_query($conn, "UPDATE user SET Alamat='$alamat' WHERE UserID='$_SESSION[userid]'");
                    if ($ubah) {
                        $alert = "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Address successfully changed!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    } else {
                        $alert = "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Address failed to changed!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    }
                } else if ($username == $user['Username'] && $alamat == $user['Alamat'] && $nama == $user['NamaLengkap']) {
                    $ubah = mysqli_query($conn, "UPDATE user SET Email='$email' WHERE UserID='$_SESSION[userid]'");
                    $session = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE UserID='$_SESSION[userid]'"));
                    if ($ubah) {
                        $_SESSION['userid'] = $session['UserID'];
                        $_SESSION['username'] = $session['Username'];
                        $_SESSION['nama_lengkap'] = $session['NamaLengkap'];
                        $_SESSION['email'] = $session['Email'];
                        $alert = "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Email successfully changed!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    } else {
                        $alert = "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Email failed to changed!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    }
                } else if ($email == $user['Email'] && $alamat == $user['Alamat'] && $nama == $user['NamaLengkap']) {
                    $ubah = mysqli_query($conn, "UPDATE user SET Username='$username' WHERE UserID='$_SESSION[userid]'");
                    $session = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM user WHERE UserID='$_SESSION[userid]'"));
                    if ($ubah) {
                        $_SESSION['userid'] = $session['UserID'];
                        $_SESSION['username'] = $session['Username'];
                        $_SESSION['nama_lengkap'] = $session['NamaLengkap'];
                        $_SESSION['email'] = $session['Email'];
                        $alert = "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Username successfully changed!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    } else {
                        $alert = "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Username failed to changed!!!</p>";
                        echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editprofile">';
                    }
                }
            }
        } else if (isset($_POST['editpassword'])) {
            $password = md5($_POST['password']);
            if ($password != $user['Password']) {
                $ubah = mysqli_query($conn, "UPDATE user SET Password='$password' WHERE UserID='$_SESSION[userid]'");
                if ($ubah) {
                    $alert = "<p style='color: green; font-weight: bold; margin-bottom: 10px;'>Password successfully changed!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editpassword">';
                } else {
                    $alert = "<p style='color: red; font-weight: bold; margin-bottom: 10px;'>Password failed to changed!!!</p>";
                    echo '<meta http-equiv="refresh" content="1; url=?url=profile&&proses=editpassword">';
                }
            }
        }
        ?>

        <?php echo @$alert; if (@$_GET['proses'] == 'editprofile') : ?>
            <form action="?url=profile&&proses=editprofile" method="post">
                    <div>
                        <label style="margin-left: 10px; margin-right: 55px; font-weight: bold;" for="nama" >Full Name</label>
                        <input class="inn" type="text"  value="<?= $user['NamaLengkap'] ?>" id="nama" name="nama" required placeholder="Enter your full name"></td>
                    </div>
                    <div >
                        <label style="margin-left: 10px; margin-right: 90px; font-weight: bold;"  for="email" >Email</label>
                        <input class="inn" type="email" value="<?= $user['Email'] ?>" id="email" name="email" required placeholder="Enter your email">
                    </div>
                    <div >
                        <label style="margin-left: 10px; margin-right: 55px; font-weight: bold;"for="username" >Username</label>
                        <input class="inn" type="text"  value="<?= $user['Username'] ?>" id="username" name="username" required placeholder="Enter your username">
                    </div>
                    <div>
                        <label style="margin-left: 10px; margin-right: 70px; font-weight: bold;" for="alamat">Address</label>
                        <input class="inn" type="text" id="alamat" value="<?= $user['Alamat'] ?>" name="alamat" required placeholder="Enter your address">
                    </div>
                    <a class="btn" href="?url=profile">Back</a>
                    <input class="btn2-input" type="submit" value="Save Changes" name="editprofile">
            </form>
        <?php elseif (@$_GET['proses'] == 'editpassword') : ?>
            <form action="?url=profile&&proses=editpassword" method="post">
                <div>
                    <label style="margin-left: 10px; margin-right: 15px; font-weight: bold;" for="password">Password</label>
                    <input style="padding: 8px 25px; margin-bottom: 12px; text-align: left; font-size: 15px;" type="password" id="password" name="password" required placeholder="Enter your new password">
                </div>
                <a class="btn" href="?url=profile">Back</a>
                <input class="btn2-input" type="submit" value="Save Changes" name="editpassword">
            </form>
        <?php else : ?>
            <div>
                <table>
                    <tr>
                        <th style="width: 20%;" class="py-3">Full Name</th>
                        <td><?= $user['NamaLengkap'] ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%;" class="py-3">Email</th>
                        <td><?= $user['Email'] ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%;" class="py-3">Username</th>
                        <td><?= $user['Username'] ?></td>
                    </tr>
                    <tr>
                        <th style="width: 20%;" class="py-3">Address</th>
                        <td><?= $user['Alamat'] ?></td>
                    </tr>
                </table>
            </div>
            <a href="?url=profile&&proses=editprofile" class="btn">Edit Profil</a>
            <a href="?url=profile&&proses=editpassword" class="btn2-a">Edit Password</a>
        <?php endif; ?>
    </div>
    <footer class="footer">
        <p class="footer-p">&copy; 2024 Viko Ramayudha/SkensaPas</p>
    </footer>
</body>
</html>
