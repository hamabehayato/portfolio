<?php

$app = new Game();

$app->execute();

class Game {
    // アプリ実行のメソッド
    public function execute()
    {
        echo <<<EOM
        --------------------------------------------------------------------------
        ゲームFizzBuz
        --------------------------------------------------------------------------
        3の倍数のときは「Fizz」, 5の倍数の時は「Buzz」, 15の倍数の時は「FizzBuzz」と入力しましょう。
        対戦する人数を入力してください。
        --------------------------------------------------------------------------
        \n
        EOM;

        $number = $this->listen();

        if ($number === false) {
            echo '1 ~ 4の数字を入力してください';
            return;
        }

        $count = 0;
        while($count <= 4) {
            $opponent = $this->opponent($count, $number);
            $answer = $this->answer();
            $fizzBuzz = $this->fizzBuzz($opponent);
            if( $answer == $fizzBuzz ) {
                $count++;
                echo '正解';
                echo "\n";
            } else {
                echo '負け';
            break;
            }
        }
    }

    public function listen() {
        $input = $this->ask('対戦相手の人数 1 〜 4 人を入力してください');

        // 全角を半角に直す
        $value = mb_convert_kana($input, 'n');

        // 数字でないものを排除
        if (!is_numeric($value)){
            return false;
        }
        // (int) = 強制的に整数にする
        $number = (int)$value;

        if(5 < $number) {
            return false;
        }
        return $number;
    }

    public function ask(string $message) {
        // 標準入力
        echo escapeshellcmd($message);
        return trim(fgets(STDIN));
        // STADINはstandardinput　の略(標準入力）
    }

    public function fizzBuzz(int $i) {
        if ($i % 15 === 0) {
            return 'FizzBuzz';
        } elseif($i % 3 === 0) {
            return 'Fizz';
        } elseif($i % 5 === 0) {
            return 'Buzz';
        } else {
            return $i;
        }
    }

        public function answer() {
        $input = $this->ask('あなたの番です');
        $answer = $input;
        return $answer;
    }

    public function opponent(int $number, int $count) {
        for($i = 1; $i <= ($number+1)*($count+1)-1; $i++) {
            if($i <= $number*($count+1)) {
                continue;
            }
            $fizzBuzz = $this->fizzBuzz($i);
            echo $fizzBuzz;
            echo "\n";
            sleep (1);
        }
        return $i;
    }
}
?>