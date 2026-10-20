<?php
// Q1 変数と文字列
$name = '「須藤」';
echo '私の名前は'. $name .'です。';

// Q2 四則演算
$x = 5;
$y = 4;
$num = $x * $y;
echo $num."\n";
echo $num / 2;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
echo '現在時刻は、'. date('Y年m月d日 H時i分s秒').'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device == 'windows'){
    echo '使用OSは、windowsです。';
}else{
    if($device == 'mac'){
        echo '使用OSは、macです。';
    }else{
        echo 'どちらでもありません。';
    }
}

// Q5 条件分岐-2 三項演算子
$age = 19;
$message = ($age < 18) ? '未成年です。':'成人です';
echo $message;

// Q6 配列
$array = ['東京都','神奈川県','千葉県','埼玉県','茨城県','群馬県','栃木県'];
echo $array[3] .'と'. $array[4].'は関東地方の都道府県です。';

// Q7 連想配列-1
$array = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '茨城県'   => '水戸市',
    '群馬県'   => '前橋市',
    '栃木県'   => '宇都宮市'
];
foreach ($array as $x => $y) {
    echo $y."\n";
}

// Q8 連想配列-2
$array = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '茨城県'   => '水戸市',
    '群馬県'   => '前橋市',
    '栃木県'   => '宇都宮市'
];
foreach ($array as $x => $y) {
    if($x == '埼玉県'){
        echo $x . 'の県庁所在地は、' . $y . 'です。';
    }
}

// Q9 連想配列-3
$array = [
    '東京都'   => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県'   => '千葉市',
    '埼玉県'   => 'さいたま市',
    '茨城県'   => '水戸市',
    '群馬県'   => '前橋市',
    '栃木県'   => '宇都宮市',
    '長野県'   => '長野市',
    '沖縄県'   => '那覇市'
  ];
foreach ($array as $x => $y) {
    if ($x == '長野県' || $x == '沖縄県') {
        echo $x .'は関東地方ではありません。'."\n";
    } else {
        echo $x .'の県庁所在地は、'. $y .'です。'."\n";
    }
}

// Q10 関数-1
function hello($name) {
    return $name .'さん、こんにちは。';
}
echo hello('東山') . "\n";
echo hello('西山');

// Q11 関数-2
function calcTaxInPrice ($price) {
    return $price * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice ($price);
echo $price . '円の商品の税込価格は'. $taxInPrice . '円です。';

// Q12 関数とif文
function distinguishNum($num) {
    if ($num % 2 == 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}
echo distinguishNum(15) . "\n";
echo distinguishNum(14) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch($grade){
        case 'A':
        case 'B':
        return '合格です。';
        case 'C':
        return '合格ですが追加課題があります。';
        case 'D':
        return '不合格です。';
        default:
        return '判定不明です。講師に問い合わせてください。';
    }
}
echo evaluateGrade('A')."\n";
echo evaluateGrade('Z')."\n";