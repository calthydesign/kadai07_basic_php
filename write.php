<?php
$memo = $_POST["memo"];
$unwell = $_POST["unwell"];
$symptoms = $_POST["symptoms"];

// 値の置き換え
$unwell = str_replace("unwell", "あり", $unwell);
$unwell = str_replace("well", "なし", $unwell);

$symptoms = str_replace("headache", "頭痛", $symptoms);
$symptoms = str_replace("stomachache", "腹痛", $symptoms);
$symptoms = str_replace("lumbago", "腰痛", $symptoms);


$date = date("Y-m-d H:i:s");
$c = ",";
$str = $date . $c . $unwell . $c . $symptoms . $c . $memo;

$file = fopen("data.csv", "a"); // "a"は追加書き込みモード、"r"は読み込みモード
fwrite($file, $str . "\n"); // fileにstrの文章を1行追加する。\nは改行コード
fclose($file); // fileを閉じる

header("Location: index.php"); // 処理が終わったらindex.phpに戻る
exit;
?>