<?php
ini_set('display_errors', "On");
require_once('data.php');
require_once('menu.php');
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
    <header class="header">
        <section class="header-zone">
            <h1>Cafe Healing</h1>
            <h3>メニュー<?php echo Menu::getCount() ?>品</h3>
        </section>
    </header>

    <main class="main">
        <section class="main-zone">
            <form method="post" action="confirm.php">
                <div class="menus">
                    <?php foreach($menus as $menu): ?>
                    <div class="menu-float-wrap">
                        <article class="menu-image-zone">
                            <img class="menu-image" src="<?php echo $menu->getImage() ?>">
                        </article>
                        <div class="menu-name-zone">
                            <a class="menu-name" href="show.php?name=<?php echo $menu->getName() ?>">
                                <?php echo $menu->getName() ?>
                            </a>
                        </div>
                        <?php if ($menu instanceof Drink): ?>
                            <div class="menu-type">
                                <?php echo $menu->getType() ?>
                            </div>
                        <?php else: ?>
                            <div class="menu-spiciness-zone">
                                <?php for($i = 0; $i < $menu->getSpiciness(); $i++): ?>
                                        <img class="menu-spiciness" src="img/spiciness-icon.jpg">
                                <?php endfor ?>
                            </div>
                        <?php endif ?>
                        <div class="menu-price">
                            ¥<?php echo $menu->getTaxIncludedPrice() ?> (税込)
                        </div>
                        <div class="menu-ordercount">
                            <input class="ordercount no-spin" type="number" name="<?php echo $menu->getName() ?>" value="0" step="1"> 個
                        </div>
                    </div>
                    <?php endforeach ?>
                </div>
                <div class="submit-button-zone">
                    <input class="submit-button" type="submit" value="注文する">
                </div>
            </form>
        </section>
    </main>
</body>
</html>