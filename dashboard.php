<?php
session_start();
if (isset($_SESSION["username"])) {
    $user = $_SESSION["username"];
} else {
    header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="nav nav-pills flex-sm-row bg-primary">
        <a class="flex-sm-fill text-sm-start nav-link text-warning disabled" aria-current="page" href="#">Dashboard</a>
        <a class="flex-sm-fill text-sm-start nav-link text-light disabled" href="#">User: <?= $user ;?></a>
        <a class="flex-sm-fill text-sm-end nav-link text-light" href="logout.php">Logout</a>
    </nav>
    <div class="container p-5">
        <div class="row row-cols-2">
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listUser.php">
                            <img src="user.jpg" class="rounded mx-auto d-block" alt="..." style="width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        User
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listBarang.php">
                            <img src="barang.png" class="rounded mx-auto d-block" alt="..." style="width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Barang
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listOrder.php">
                            <img src="order.png" class="rounded mx-auto d-block" alt="..." style="width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Order
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-center">
                    <div class="card-body">
                        <a href="listMember.php">
                            <img src="customer.png" class="rounded mx-auto d-block" alt="..." style="width:180px;">
                        </a>
                    </div>
                    <div class="card-footer text-muted">
                        Member
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>