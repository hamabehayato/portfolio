<?php
session_start();
include_once (dirname(__FILE__). '/../dbconnect.php');
if(!isset($_SESSION['user'])) {
    header("Location: index.php");
}

// ユーザーIDからユーザー名を取り出す
$query = "SELECT * FROM users WHERE user_id = ".$_SESSION['user']."";
$result = $mysqli -> query($query);

$result = $mysqli->query($query);
if (!$result) {
    print('クエリーが失敗しました。'. $mysqli->error);
    $mysqli->close();
    exit();
}

// ユーザー情報の取り出し
while ($row = $result->fetch_assoc()) {
    $username = $row['username'];
    $email = $row['email'];
}

// データベースの切断
$result->close();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ機能</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="col-sm-6 offset-3 mt-5">
        <section>
            <h1>プロフィール</h1>
            <ul>
                <li>名前: <?php echo $username; ?></li>
                <li>メールアドレス: <?php echo $email; ?></li>
            </ul>
            <a href="../logout.php?logout">ログアウト</a>
        </section>
    </div>
</body>
</html>