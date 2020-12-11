<?php
//データベースの接続と選択
require_once (dirname(__FILE__). '/core/config.php');

$mysqli = new mysqli($host, $username, $password, $dbname);
if ($mysqli->connect_error) {
	error_log($mysqli->connect_error);
	exit;
}

// ↓DB接続のための記述
// $new_mysqli = new mysqli('hostの名前', 'DBに作成したuser名', 'userを作成する時に設定したPW', '使用するDB名');
