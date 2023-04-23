<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .center {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 600px;
        }

        .items {
            width: 40%;
            padding: 20px;
            border: 3px solid grey;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="center">
            <div class="items">
                <h2 class="text-center">Login</h2>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <div class="mb-3">
                        <label class="form-label" for="username">Username</label>
                        <input type="text" class="form-control" name="tuser" id="username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="password">Password   </label>
                        <input type="password" class="form-control" name="tpass" id="password">
                    </div>
                    <div class="mb-3 text-center">
                        <input type="submit" class="btn btn-primary" value="login">
                    </div>
                </form>

                <?php
                session_start();
                include "koneksi.php";
                $username = "";
                $password = "";
                if (isset($_POST["tpass"])) {
                    $user = $_POST["tuser"];
                    $pass = $_POST["tpass"];

                    $sql = "SELECT * FROM user WHERE username='$user' AND password='$pass'";
                    $hasil = $conn->query($sql);
                    while ($rec = $hasil->fetch_assoc()) {
                        $iduser = $rec["iduser"];
                        $username = $rec["username"];
                        $password = $rec["password"];
                    }
                    if ($user == $username && $pass == $password) {
                        $_SESSION["iduser"] = $iduser;
                        $_SESSION["username"] = $username;
                        header("location: dashboard.php");
                    } else {
                        if ($user != "") {
                            echo "<div class='text-align:center;>User tidak valid</div>";
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>