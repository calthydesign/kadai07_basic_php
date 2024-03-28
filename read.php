<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>一覧</title>
    <link rel="stylesheet" href="style.css">
</head>
<?php
 
// ファイルを変数に格納
$filename = 'data.csv';
 
// ファイルを配列に格納し、さらに変数に格納
$lines = file($filename);
// ラベル配列
$labels = array("日付", "体調不良の有無", "症状", "メモ");

//配列に変換し、JSON形式にエンコード,フォームデータが存在する場合のみ値を代入
// $unwell = isset($_POST['unwell']) ? $_POST['unwell'] : '';
// $symptoms = isset($_POST['symptoms']) ? $_POST['symptoms'] : '';
// $memo = isset($_POST['memo']) ? $_POST['memo'] : '';

// $result = array($unwell, $symptoms, $memo);
// $json = json_encode($result);
?>

<!-- <script>
    //js処理
    const data = JSON.parse('<?=$json?>');
    console.log(data);
</script> -->

<!-- 表形式で表示 -->
<table>
    <tr>
        <!-- ラベルを表示 -->
        <?php foreach ($labels as $label) : ?>
            <th><?php echo $label; ?></th>
        <?php endforeach; ?>
    </tr>
    
    <!-- foreachでファイルの配列をループ処理 -->
    <?php 
    foreach ($lines as $line) : ?>
    <tr>
        <?php
        // 行データをカンマで分割し、配列に変換
        $columns = explode(',', $line);
        // var_dump($columns);
        
        // 分割された値を個別の<td>セルに出力
        foreach ($columns as $column) {
            echo "<td>$column</td>";
        }
        ?>
    </tr>
    <?php endforeach; ?>
</table>

<?php include("btn.html"); ?>


