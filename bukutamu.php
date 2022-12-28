<?php
    $isInsert = false;
    if($_POST){
        $koneksi = mysqli_connect("localhost", "root", "", "uas_pbw");

        if(mysqli_connect_errno()){
            echo "Koneksi database gagal : ". mysqli_connect_error();
        }
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $komentar = $_POST['komentar'];

        $sql = "INSERT INTO tamu (nama, email, komentar) VALUES ('$nama', '$email', '$komentar')";
        if(mysqli_query($koneksi, $sql)){
            $isInsert = true;
        }else{
            echo "Error: ". $sql. "<br>". mysqli_error($koneksi);
        }
        $koneksi->close();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Buah Fajar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Toko Buah Fajar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="product.php">List Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="bukutamu.php">Buku Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <?php if($isInsert) : ?>
            <div class="alert alert-success" role="alert">
                Data Berhasil Disimpan.
            </div>
        <?php endif ?>
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
            </div>
            <div class="mb-3">
                <label for="komentar" class="form-label">Komentar</label>
                <textarea class="form-control" name="komentar" id="komentar" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-5 text-center">
            <p>@2022 developed by A11.2022.14832</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>