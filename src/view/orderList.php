
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../../css/orderstyle.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.html">THE COFFEE HOUSE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link" href="../../startbootstrap-freelancer-gh-pages/index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="category.html">OrdderList</a>
                </li>
            </ul>
</nav>
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Danh Sách Đồ Uống</h1>
    </div>
</section>
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <form>
                    <table class="table table-striped" style="text-align: center">
                        <thead>
                        <tr>
                            <th>Hình Ảnh</th>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Order</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php if (empty($orderdetails)):?>
                            <tr>
                                <td>No Data</td>
                            </tr>
                        <?php else:?>
                            <?php foreach ($orderdetails as $key=>$item):?>
                                <tr style="text-align: center;">
                                    <td><img  height="100px" width="100px" src="<?php echo $item->getImg();?>" /> </td>
                                    <td style="padding-top: 50px"><?php echo $item->getBeverageName()?></td>
                                    <td><input  type="text" value="0" style="width: 80px" /></td>
                                    <td><?php echo $item->getPriceEach();?> VNĐ</td>
<!--                                    <td><a href="index.php?page=orderList&id=--><?php //echo $item->getId()?><!--" type="submit" class="btn btn-danger"> </a> </td>-->
                                </tr>
                            <?php endforeach;?>
                        <?php endif; ?>
                </form>

                </tbody>
                </table>
            </div>
        </div>

    </div>
</div>
</body>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</html>