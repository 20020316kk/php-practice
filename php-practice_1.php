<?php
// Q1 変数と文字列
$name = '金本';
echo "私の名前は「{$name}」です。";

// Q2 四則演算
$num =5 * 4;
echo "$num\n";
echo $num /= 2;

// Q3 日付操作
$current_time = date("Y-m-d H:i:s");
echo "現在時刻は " . $current_time . " です。;

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . "$device" . 'です。';
} else {
    echo 'どちらでもありません';
 }

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';

echo $message;

// Q6 配列


// Q7 連想配列-1


// Q8 連想配列-2


// Q9 連想配列-3


// Q10 関数-1


// Q11 関数-2


// Q12 関数とif文


// Q13 関数とswitch文


?>