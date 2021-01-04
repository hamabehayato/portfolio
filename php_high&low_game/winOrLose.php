<?php
$cardOppFace = $_POST['leftCardFace'];
$cardOppSuit = $_POST['leftCardSuit'];
$cardOppKey = $_POST['leftCardKey'];
$cardPlayerFace = $_POST['rightCardFace'];
$cardPlayerSuit = $_POST['rightCardSuit'];
$cardPlayerKey = $_POST['rightCardKey'];
$highOrLow = $_POST['select'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>High & Low Game</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
    <div align="center">
        <h1>High & Low Game</h1>
        <hr>
        <?php
        echo <<< EOM
            相手のカード：
            {$cardOppSuit}{$cardOppFace}<br>
            「{$highOrLow}」を選択しました。<br><br>
            あなたのカード：
            {$cardPlayerSuit}{$cardPlayerFace}<br>
            EOM;

            // 数値を比較
            if($cardOppKey < $cardPlayerKey) {
                $result = "High";
            } elseif($cardOppKey > $cardPlayerKey) {
                $result = "Low";
            } else {
                $result = $highOrLow;
            }

            // ラジオボタン
            if($highOrLow == $result) {
                echo 'You Win!';
            } else {
                echo 'You Lose';
            }
        ?>
        <br>
        <a href="select.php">もう一度挑戦する</a>
    </div>
</body>
</html>