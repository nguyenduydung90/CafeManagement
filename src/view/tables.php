<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="../../startbootstrap-freelancer-gh-pages/css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../css/table.css">

</head>
<body>
<div class="container">
    <div class="header">
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">THE COFFEE HOUSE</a>
            <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="../index.php">Order</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">OrderList</a></li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    <section class="page-section portfolio" id="portfolio" style="margin: 20px">
        <div class="container">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">TABLE MANAGERMENT</h2>
            <!-- Icon Divider-->
            <div class="row" >
                <?php if (empty($tables)):?>
                    <tr>
                        <td>NO DATA</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($tables as $table):?>
                        <a class="col-md-3 col-sm-6 btn btn-success" href="index.php?page=order&id=<?php echo $table->getId()?>" style="border-radius: 50px;width: 50px;height: 100px;padding-top: 20px;margin: 20px; font-size: 40px">

                            <?php echo $table->getTableName()?>

                        </a>
                    <?php endforeach;?>
                <?php endif;?>
            </div>
        </div>
    </section>


</body>
</html>
