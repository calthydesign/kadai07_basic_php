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
      <div>体調不良：
      <input type="radio" id="unwellChoice1" name="unwell" value="unwell" />
      <label for="unwellChoice1">あり</label>
      <input type="radio" id="unwellChoice2" name="unwell" value="well" />
      <label for="unwellChoice2">なし</label>
    </div>

    <div>症状：
        <input type="radio" id="symptomsChoice1" name="symptoms" value="headache" />
          <label for="symptomsChoice1">頭痛</label>
        <input type="radio" id="symptomsChoice2" name="symptoms" value="stomachache" />
         <label for="symptomsChoice2">腹痛</label>
        <input type="radio" id="genderChoice3" name="symptoms" value="lumbago" />
          <label for="symptomsChoice3">腰痛</label>
      </div>
      <div>メモ：<textarea name="memo" id="" cols="10" rows="1"></textarea>


      <button type="submit">送信</button>

    </form>
    <?php include("btn.html"); ?>
</body>
</html>