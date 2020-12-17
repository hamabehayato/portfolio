<?php
require_once('data.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="confirm">
        <section class="confirm-zone">
            <div class="confirm-title-zone">
                <h1 class="confirm-title">注文内容確認</h1>
            </div>
            <?php foreach($menus as $menu): ?>
                <?php
                    $orderCount = $_POST[$menu->getname()];
                    $menu->setOrderCount($orderCount);
                    $totalPayment += $menu->getTotalPrice();
                ?>
                <p class="confirm-ordercount">
                    <?php echo $menu->getName() ?>
                    ×
                    <?php echo $orderCount ?>
                個
                </p>
                <p class="confirm-orderprice">
                    <?php echo $menu->getTotalPrice() ?> 円
                </p>
            <?php endforeach ?>
            <div class="confirm-totalpayment">
                合計金額 : <?php echo $totalPayment ?> 円
            </div>
        </section>
    </div>
</body>
</html>