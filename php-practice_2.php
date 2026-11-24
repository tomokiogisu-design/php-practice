<?php
// Q1 tic-tac問題
function tictac($num) {
    if($num % 4 == 0 && $num % 5 == 0) {
        return 'tic-tac';
    }elseif($num % 4 == 0) {
        return 'tic';
    }elseif($num % 5 == 0) {
        return 'tac';
    }else {
       return  $num ;
    }
}
echo '1から100までのカウントを開始します '. "\n";
for($num = 1; $num <= 100; $num++) {
    echo tictac($num) ."\n";
}

// Q2 多次元連想配列
// その1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] .'です。'

// その2
foreach($personalInfos as $index => $info) {
    echo $index+1 . '番目の' .$info['name'] . 'のメールアドレスは' . $info['mail'] . 'で、' . '電話番号は' . $info['tel'] . 'です。' . "\n";
}
// その３
$ageList = [25, 30, 18];

foreach ($personalInfos as $index => $info) {
    $personalInfos[$index]['age'] = $ageList[$index];
}

var_dump($personalInfos);

// Q3 オブジェクト-1
$student = new Student(120, '山田');

echo '学籍番号' . $student->studentId . '番の生徒は' . $student->studentName . 'です。';

// Q4 オブジェクト-2
class Student{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName . 'は' . $subject . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
$date = new DateTime();
$date->modify('-1 month');
echo $date->format('Y-m-d');

//その２
$today = new DateTime();
$targetDate = new DateTime('1992-04-25');
$interval = $targetDate->diff($today);
echo 'あの日から' . $interval->days . '日経過しました。';
?>