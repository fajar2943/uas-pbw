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
                        <a class="nav-link active" aria-current="page" href="product.php">List Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="bukutamu.php">Buku Tamu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-8">
                <h4>Katalog Buah</h4>
                <div class="row">
                    <div class="col-lg-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="img/anggur.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Anggur</h5>
                                <p class="card-text">Harga : 20000</p>
                                <a href="#" class="btn btn-primary btn-keranjang" data-nama="Anggur"
                                    data-harga="20000">Masukan Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="img/apel.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Apel</h5>
                                <p class="card-text">Harga : 15000</p>
                                <a href="#" class="btn btn-primary btn-keranjang" data-nama="Apel"
                                    data-harga="15000">Masukan Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="img/durian.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Durian</h5>
                                <p class="card-text">Harga : 100000</p>
                                <a href="#" class="btn btn-primary btn-keranjang" data-nama="Durian"
                                    data-harga="100000">Masukan Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="img/jeruk.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Jeruk</h5>
                                <p class="card-text">Harga : 10000</p>
                                <a href="#" class="btn btn-primary btn-keranjang" data-nama="Jeruk"
                                    data-harga="10000">Masukan Keranjang</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="img/mangga.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Mangga</h5>
                                <p class="card-text">Harga : 15000</p>
                                <a href="#" class="btn btn-primary btn-keranjang" data-nama="Mangga"
                                    data-harga="15000">Masukan Keranjang</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <h4 class="text-end">
                    Keranjang
                </h4>
                <form action="/order.php" method="post">
                    <div class="list-group" id="keranjang">

                    </div>
                    <div class="text-center my-3">
                        <button type="submit" class="btn btn-primary btnOrder" style="display: none;">Order
                            Sekarang</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-5 text-center">
            <p>@2022 developed by A11.2022.14832</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(document).ready(function () {
            let jmlProduk = 0;
            $('.btn-keranjang').on('click', function () {
                jmlProduk++
                showBtnOrder(jmlProduk)
                let nama = $(this).data('nama')
                let harga = $(this).data('harga')
                $('#keranjang').append(`
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">${nama}</h5>
                            <input type="hidden" name="produk[]" value="${nama}">
                            <input type="hidden" name="harga[]" value="${harga}">
                        </div>
                        <p class="mb-1">Harga</p>
                        <small class="text-muted">${harga}</small>
                    </a>
                `)
            })
        })

        function showBtnOrder(jmlProduk){
            if(jmlProduk != 0){
                $('.btnOrder').show();
            }else{
                $('.btnOrder').hide();
            }
        }
    </script>

</body>

</html>