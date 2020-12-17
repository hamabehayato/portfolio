<?php
ini_set('display_errors', "On");
require_once('menu.php');
require_once('data.php');

$menuName = $_GET['name'];
$menu = Menu::findByName($menus, $menuName);
$menuReviews = $menu->getReviews($reviews);
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品紹介</title>
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Pacifico|Lato' rel='stylesheet' type='text/css'>
</head>
<body>
    <div class="show">
        <div class="show-zone">
            <article class="show-image-zone">
                <img class="show-image" src="<?php echo $menu->getImage() ?>">
            </article>
            <div class="show-name">
                <?php echo $menu->getName() ?>
            </div>
            <div class="show-type">
                <?php if ($menu instanceof Drink): ?>
                    <p><?php echo $menu->getType() ?></p>
                <?php else: ?>
                    <?php for($i = 0; $i < $menu->getSpiciness(); $i++): ?>
                        <img class="show-spiciness" src="img/spiciness-icon.jpg">
                    <?php endfor ?>
                <?php endif ?>
            </div>
            <div class="show-price">
                ¥<?php echo $menu->getTaxIncludedPrice() ?> (税込)
            </div>

        </div>
        <div class="review">
            <h2 class="review-title">
                <span>
                    <img class="review-icon" src="img/review-icon.png" alt="">
                </span>
                レビュー一覧
            </h2>
            <hr>
            
            <div>
                <?php foreach ($menuReviews as $review): ?>
                    <?php $user = $review->getUser($users) ?>
                    <div class="review-list">
                        <div class="review-user">
                        <?php if ($user->getGender() == 'male'): ?>
                            <img class="user-image" src="img/male.png">
                        <?php else: ?>
                            <img class="user-image" src="img/female.png">
                        <?php endif ?>
                        <p class="review-user-name"><?php echo $user->getName() ?></p>
                        </div>
                    <p class="review-body"><?php echo $review->getBody() ?></p>
                    </div>
                <?php endforeach ?>

            </div>
            <div class="menu-swap">
                <a href="index.php">メニュー一覧へ</a>
            </div>
        </div>
    </div>
</body>
</html>