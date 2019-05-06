<?php
//多次元配列

$fruits = array(
  'apple' => array(
    'price' => 100,
    'count' => 5,
  ),

  'banana' => array(
    'price'  => 300,
    'count' => 2,
  ),

  'orange' => array(
    'price' => 400,
    'count' => 3,
  ),
);



foreach ($fruits as $key => $value) {
  echo"$key は1つ{$value['price']}円、{$value['count']}個です";
  $b = $value['price'] * $value['count'];
  echo"    $key の合計の総額は$b 円です<br />";
  $a += $value['price'] * $value['count'];

}
//$keyにapple,banana,orangeが代入されている？
//$valueにはさらに奥のprice,countが代入され使うことができるようになっていると捉えてよろしいのだろうか？

  foreach($fruits as $data) {
    $total_cost += $data['price'];
  }

  foreach($fruits as $amount) {
    $total_amount +=  $amount['count'];
  }



echo "三つの単価の合計は".$total_cost."円です<br />";
echo "三つの個数の合計は".$total_amount."個です<br />";
echo "総額で".$a."円です";
 ?>
