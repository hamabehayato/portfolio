<?php
ob_start();
session_start();
if( isset($SESSION['user']) != "") {
    header("Location: home.php");
}
include_once (dirname(__FILE__). '/../dbconnect.php')
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン機能</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="col-sm-6 offset-3 mt-5">
        <?php
        // ログインボタンがクリックされたときに下記を実行
        if (isset($_POST['login'])) {
            
            $email = $mysqli->real_escape_string($_POST['email']);
            $password = $mysqli->real_escape_string($_POST['password']);

            // クエリの実行
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = $mysqli->query($query);
            if (!$result) {
                print('クエリーが失敗しました。' .$mysqli->error);
                $mysqli->close();
                exit();
            }

            // パスワード(暗号化済み）とユーザーIDの取り出し
            while ($row = $result->fetch_assoc()) {
                $db_hashed_pwd =  $row['password'];
                $user_id = $row['user_id'];
            }

            // データベースの切断
            $result->close();

            // ハッシュ化されたパスワードがマッチするかどうかを確認
            if (password_verify($password, $db_hashed_pwd)) {
                $_SESSION['user'] = $user_id;
                header("Location: home.php");
                exit;
            } else { ?>
                <div class="alert alert-denger" role="alert">メールアドレスとパスワードが一致しません。</div>
        <?php }
        }?>
        <section>
            <h1>ログインフォーム</h1>
            <form method="post">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="メールアドレス">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="パスワード">
                </div>
                <div>
                    <button type="submit" name="login" class="btn btn-outline-dark mr-3">ログインする</button>
                    <a href="register.php">会員登録はこちら</a>
                </div>
            </form>
        </section>
    </div>
</body>
</html>