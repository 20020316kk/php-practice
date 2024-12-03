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
$prefectures = ['東京都','千葉県','埼玉県','神奈川県','群馬県','栃木県','茨城県','山梨県'];
echo "$prefectures[5]" . 'と' . "$prefectures[1]" . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$region = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市',
];
foreach ($region as $prefecture => $city){
echo $region[$prefecture]. "\n";
}

// Q8 連想配列-2
$region = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市',
];
foreach ($region as $prefecture => $city) {
	if ($prefecture === '埼玉県'){
		echo "$prefecture" . 'の県庁所在地は' . "$city" . 'です。';
	}
}

// Q9 連想配列-3
$region = [
	'東京都' => '新宿区',
	'神奈川県' => '横浜市',
	'千葉県' => '千葉市',
	'埼玉県' => 'さいたま市',
	'栃木県' => '宇都宮市',
	'群馬県' => '前橋市',
	'茨城県' => '水戸市',
];
$region['愛知県'] = '名古屋市';
$region['大阪府'] = '大阪市';

foreach ($region as $prefecture => $city) {
	if(in_array($prefecture,array('東京都','神奈川県','千葉県','埼玉県','栃木県','群馬県','茨城県'))){
		echo "$prefecture" . 'の県庁所在地は' . "$city" . 'です' . "\n";
	}else{
		echo "$prefecture" . 'は関東地方ではありません' . "\n";}
}

// Q10 関数-1
function hello($name) {
	echo $name . 'さん、こんにちは。' . "\n";
}

hello('金谷');
hello('安藤');


// Q11 関数-2
function calcTaxInPrice($price) {
	$taxInPrice = $price * 1.1;
	return $taxInPrice;
}
$price = 1000;
echo $price . '円の商品の税込価格は' . calcTaxInPrice($price) . '円です。' ;


// Q12 関数とif文
function distinguishNum($number) {
	if ($number % 2 == 0) {
	return "は偶数です。";
	}else {
	return "は奇数です。";
}
}
$number = 11;
echo $number . distinguishNum($number);

// Q13 関数とswitch文


?>