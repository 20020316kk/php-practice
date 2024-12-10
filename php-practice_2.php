<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 4 === 0 && $i % 5 === 0) {
      echo "tic-tac\n";
  } elseif ($i % 4 === 0) {
      echo "tic\n";
  } elseif ($i % 5 === 0) {
      echo "tac\n";
  } else {
      echo "$i\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];
//Q2-1
echo "{$personalInfos [1]['name']}" . 'の電話番号は' . "{$personalInfos [1]['tel']}" . 'です。';

//Q2-2
foreach ($personalInfos as $id => $detail) {
  //var_dump($id);
  //var_dump($detail);
        echo  $id +1 . '番目の' . $detail['name'] . 'のメールアドレスは' . $detail['mail'] . 'で、電話番号は' . $detail['tel'] . 'です。'. "\n";
}

//Q2-3
$ageList = [25, 30, 18];

foreach($personalInfos as $id =>& $detail){
  $detail["age"] = $ageList[$id];
}
unset($detail);
var_dump($personalInfos);


// Q3 オブジェクト-1



// Q4 オブジェクト-2


// Q5 定義済みクラス
?>