<?php
$cakeDescription = 'NPCI Kabupaten News Portal';
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        NPCI Kabupaten News Portal - <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="<?= $this->Url->build('/newsportal/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">

    <!-- Bootstrap & Custom CSS -->
    <link href="<?= $this->Url->build('/newsportal/css/style.css') ?>" rel="stylesheet">

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <!-- ...topbar HTML dari template BizNews... -->
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <!-- ...navbar HTML dari template BizNews... -->
    </div>
    <!-- Navbar End -->

    <!-- Main Content -->
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
        <!-- ...footer HTML dari template BizNews... -->
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="<?= $this->Url->build('/newsportal/lib/easing/easing.min.js') ?>"></script>
    <script src="<?= $this->Url->build('/newsportal/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
    <script src="<?= $this->Url->build('/newsportal/js/main.js') ?>"></script>
    <?= $this->fetch('script') ?>
</body>

</html>