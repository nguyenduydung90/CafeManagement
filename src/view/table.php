<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css">
</head>
<body>

<?php if (empty($tables)):?>
<tr>
    <td>NO DATA</td>
</tr>
<?php else: ?>
<h2>Danh Sách Bàn</h2>
<table class="table">
    <tr>
    <?php foreach ($tables as $table):?>
        <td style="text-align: center" col-4>
         <a href="index.php?page=order&id=<?php echo $table->getId()?>" class="btn btn-success"><?php echo $table->getTableName()?></a>
        </td>
    <?php endforeach;?>

    </tr>

</table>

<?php endif;?>
</body>

</html>
