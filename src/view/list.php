<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="header">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">Logo</a>

            <!-- Links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php?page=order">ORDER</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Thanh Toán</a>
                </li>

                <!-- Dropdown -->
<!--                <li class="nav-item dropdown">-->
<!--                    <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">-->
<!--                        Dropdown link-->
<!--                    </a>-->
<!--                    <div class="dropdown-menu">-->
<!--                        <a class="dropdown-item" href="#">Link 1</a>-->
<!--                        <a class="dropdown-item" href="#">Link 2</a>-->
<!--                        <a class="dropdown-item" href="#">Link 3</a>-->
<!--                    </div>-->
<!--                </li>-->
            </ul>
        </nav>
    </div>
    <div class="content">
        <div class="container">
            <form action="orderList.php" method="post">
            <table class="table">
                <h2>Danh Sách Đồ Uống</h2>
                <thead>
                <tr>
                    <th>STT</th>
                    <th>Beverage</th>
                    <th>Image</th>
                    <th>PriceEach</th>
                </tr>
                </thead>
                <tbody>
                <?php if (empty($beverage)):?>
                <tr>
                    <td>No Data</td>
                </tr>
                <?php else:?>
                <?php foreach ($beverage as $key=>$item):?>
                <tr class="success">
                    <td><?php echo ++$key;?></td>
                    <td>
                        <div><?php echo $item->getBeverageName();?></div>
                    </td>
                    <td><img src="<?php echo $item->getImg();?>" width="100px" height="150px"></td>
                    <td><?php echo $item->getPriceEach();?></td>
                    <td><input id='quantity'  name="Quantity" type="number"></td>
                    <td><input type="submit" class="btn btn-info" value="Submit Button"></td>
<!--                    <td>-->
<!--                        <div class="def-number-input number-input safari_only">-->
<!--                            <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" class="minus" type="button" >-</button>-->
<!--                            <input id="quantity" min="0" name="quantity" value="1" type="number">-->
<!--                            <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()" class="plus" type="button" >+</button>-->
<!--                        </div>-->
<!--                   </td>-->

<!--                    <td><input class="btn btn-secondary" type="submit" value="Edit" "></input></td>-->
<!--                        <td><a href="index.php?page=add">add</a></td>-->
                </tr>


                </tbody>
                <?php endforeach;?>
                <?php endif; ?>
            </table>
            </form>
<!--            <div>-->
<!--                <tr>-->
<!--                    <td><input type="submit"  value="Ordered" class="btn btn-outline-primary"></td>-->
<!--                    <td><button type="submit" class="btn btn-outline-primary">payment</button></td>-->
<!--                </tr>-->
<!--            </div>-->
        </div>

    </div>
    <div class="footer">

    </div>
</div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>
