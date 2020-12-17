<?php
session_start();
if( isset($_SESSION['user']) != "") {
  // ログイン済みの場合はリダイレクト
  header("Location: home.php");
}
    // DBとの接続
    include_once  (dirname(__FILE__). '/../dbconnect.php');
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録機能</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="col-sm-6 offset-3 mt-5">
    <?php
    // signupがPOSTされたときに下記を実行
    if (isset($_POST['signup'])) {

        $username = $mysqli->real_escape_string($_POST['username']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $password = $mysqli->real_escape_string($_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);

        // POSTされた情報をDBに格納する
        $query = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
        if ($mysqli->query($query)) { ?>
        <div class="alert alert-success" role="alert">登録しました</div>
        <?php } else { ?>
        <div class="alert alert-danger" role="alert">エラーが発生しました</div>
        <?php
        }
    }?>
        <section>
            <h1 class="mb-3">会員登録フォーム</h1>

            <form method="post">
                <div class="form-group">
                    <input type="text" class="form-control"  name="username" placeholder="ユーザー名">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  name="email" placeholder="メールアドレス">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control"  name="password" placeholder="パスワード">
                </div>
                <div class="pt-3">
                    <button type="submit" class="btn btn-outline-dark mr-3" name="signup">会員登録する</button>
                    <a href="index.php">ログインはこちら</a>
                </div>
            </form>
        </seciton>
    </div>
</body>
</html>