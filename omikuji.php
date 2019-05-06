<?php
//おみくじアプリを作成したい
//rand関数により１〜１００数値をランダムに選ぶ
//選んだ数値を$numbar_omikujiに代入する

//if文により、数値を元におみくじの結果を出力する
$numbar_omikuji = rand(1,100);

if($numbar_omikuji <= 5){
 echo"おみくじ番号が".$numbar_omikuji."なので大吉です";
}elseif($numbar_omikuji <= 15){
  echo"おみくじ番号が".$numbar_omikuji."なので吉です";
}elseif($numbar_omikuji <= 30){
  echo"おみくじ番号が".$numbar_omikuji."なので中吉です";
}elseif($numbar_omikuji <= 45){
  echo"おみくじ番号が".$numbar_omikuji."なので小吉です";
}elseif($numbar_omikuji <= 65){
  echo"おみくじ番号が".$numbar_omikuji."なので末吉です";
}elseif($numbar_omikuji <= 90){
  echo"おみくじ番号が".$numbar_omikuji."なので凶です";
}else{
echo"おみくじ番号が".$numbar_omikuji."なので大凶です";
}


?>
