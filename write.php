<?php
$memo = $_POST["memo"];
$condition = $_POST["condition"];
$symptoms = $_POST["symptoms"];

if(empty($condition)) {
    $condition = "未入力";
}

if(empty($symptoms)) {
    $symptoms = "なし";
}
if(empty($memo)) {
    $memo = "なし";
}

// 値の置き換え
// $condition = str_replace("well", "元気", $condition);
// $condition = str_replace("soso", "まあまあ", $condition);
// $condition = str_replace("unwell", "不調", $condition);

// $symptoms = str_replace("headache", "頭痛", $symptoms);
// $symptoms = str_replace("stomachache", "腹痛", $symptoms);
// $symptoms = str_replace("lumbago", "腰痛", $symptoms);


$date = date("Y-m-d H:i:s");
$c = ",";
$str = $date . $c . $condition . $c . $symptoms . $c . $memo;

$file = fopen("data.csv", "a"); // "a"は追加書き込みモード、"r"は読み込みモード
fwrite($file, $str . "\n"); // fileにstrの文章を1行追加する。\nは改行コード
fclose($file); // fileを閉じる

header("Location: index.php"); // 処理が終わったらindex.phpに戻る
exit;
?>