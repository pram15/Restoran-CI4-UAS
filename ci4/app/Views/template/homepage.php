<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/bootstrap/css/bootstrap.min.css') ?>">
    <title>Restoran Apa Adanya</title>
</head>

<body>

        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: #e67649;">
                    <img class="pr-4" src="<?= base_url('icon/home.svg') ?>" href="<?= base_url('/front/homepage') ?>">
                    <a class="navbar-brand" href="<?= base_url('/front/homepage') ?>">
                        <h2>Restoran Maju</h2>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <?php if (!empty(session()->get('pelanggan')) && !empty(session()->get('email'))) { ?>
                                <li class="nav-item  ml-2"><a class="btn btn-primary" href="<?= base_url('/front/homepage/histori') ?>"><img src="<?= base_url('/icon/history.svg') ?>" alt=""> Histori</a></li>
                                <li class="nav-item mt-2 ml-2"> Cart(<a href="<?= base_url('/front/Beli') ?>"><?= $cart ?></a>)</li>
                                <li class="nav-item mt-2 ml-3"> Pelanggan : </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="#"> <?= session()->get('pelanggan'); ?> <span class="sr-only">(current)</span></a>
                                </li>

                                <li class="nav-item mt-2 ml-2"> Email : </li>
                                <li class="nav-item mt-2 ml-1">
                                    <?= session()->get('email'); ?>
                                </li>

                                <li class="nav-item ml-3">
                                    <a href="<?= base_url('/login/logout') ?>" class="btn btn-danger">Logout</a>
                                </li>
                            <?php } else { ?>
                                <li class="nav-item mt-2 ml-5"><a href="<?= base_url('/login') ?>" class="btn btn-warning">Login</a></li>
                                <li class="nav-item mt-2 ml-5"><a href="<?= base_url('/front/homepage/create') ?>" class="btn btn-outline-dark"><img src="<?= base_url('/icon/plus.svg') ?>" alt=""> Daftar</a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row pl-4 pt-3">
            <div class="col-3">
                <div class="mt-2" style="width: 15rem">
                    <h3>Kategori <img src="<?= base_url('icon/bars.svg') ?>" alt=""> </h3>
                    <hr>
                    <div class="list-group">
                        <?php foreach ($kategori as $key) : ?>
                            <a href="<?= base_url('/front/homepage/read/' . $key['idkategori'] . '')  ?>" class="list-group-item list-group-item-action text-decoration-none"><?= $key['kategori'] ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
            <div class="col-9 px-2">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
        
        


    <script src="<?= base_url('/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>

<footer class="page-footer bg-dark text-white">
    <div class="container">
        <div class="row">
            <div class="col-6 mt-3">Info Restoran Maju</div>
            <div class="col-6 mt-3">
                <ul>
                    <li>Alamat: Kahuripan Nirwana Village</li>
                    <li>Kontak: 085790959547</li>
                    <li>Buka: 08.00 - 22.00</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-copyright bg-secondary text-white">
        <div class="container">
            2020 - pram@smkrevit.com
        </div>
    </div>
</footer>



</html>

