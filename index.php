<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condition Record</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Condition Record</h1>
    </header>
    <form action="write.php" method="post">

      <div>今日の調子：
      <input type="radio" id="conditionChoice1" name="condition" value="元気" />
      <label for="conditionChoice1">😊</label>
      <input type="radio" id="conditionChoice2" name="condition" value="まあまあ" />
      <label for="conditionChoice2">🙂</label>
      <input type="radio" id="conditionChoice2" name="condition" value="不調" />
      <label for="conditionChoice2">😞</label>
    </div>

    <div>症状：
        <input type="radio" id="symptomsChoice1" name="symptoms" value="頭痛" />
          <label for="symptomsChoice1">頭痛</label>
        <input type="radio" id="symptomsChoice2" name="symptoms" value="腹痛" />
         <label for="symptomsChoice2">腹痛</label>
        <input type="radio" id="genderChoice3" name="symptoms" value="腰痛" />
          <label for="symptomsChoice3">腰痛</label>
      </div>
      <div>メモ📝こうしたら良くなったetc...<br><textarea name="memo" id="" cols="10" rows="1"></textarea>


      <button type="submit">送信</button>

    </form>
    <?php include("btn.html"); ?>
</body>
</html>