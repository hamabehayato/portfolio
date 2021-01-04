<?php

$suits = array (
    "♠︎", "♥", "♦︎", "♣︎"
);

$faces = [];

// カードを、弱　→ 強　の順に作成
// 2 ~ 11 のカードを作成
for($i =2; $i<11; $i++) {
    $faces[] = $i;
}
// J ~ A　のカードを作成
$faces [] = 'J';
$faces [] = 'Q';
$faces [] = 'K';
$faces [] = 'A';

// var_dump($faces);

$deck = [];

foreach( $suits as $suit) {
    foreach ($faces as $key => $face ) {
        $deck[] = array( "key"=>$key, "face"=>$face, "suit"=>$suit );
    }
}

// print_r($deck);

shuffle($deck);
$cardPlayer = array_shift($deck);
$cardOpp = array_shift($deck);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High & Low Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
    <div class="text-center">
        <h1>High & Low Game</h1>
        <hr>
        <form action="winOrLose.php" method="post">
            <?php
                echo <<< EOM
                相手のカード：
                {$cardOpp['suit']}{$cardOpp['face']}
                <input type="hidden" name="leftCardFace" value="{$cardOpp['face']}">
                <input type="hidden" name="leftCardSuit" value="{$cardOpp['suit']}">
                <input type="hidden" name="leftCardKey" value="{$cardOpp['key']}">
                <input type="hidden" name="rightCardFace" value="{$cardPlayer['face']}">
                <input type="hidden" name="rightCardSuit" value="{$cardPlayer['suit']}">
                <input type="hidden" name="rightCardKey" value="{$cardPlayer['key']}">
                EOM;
            ?>
            <br>
            <br>
            <br>
            <input type="radio" name="select" value="High" require>High
            <input type="radio" name="select" value="Low" require>Low
            <br>
            <br>
            <br>
            <br>
            <input type="submit" value="決定" class="btn btn-secondary">
        </form>
    </div>
</body>
</html>