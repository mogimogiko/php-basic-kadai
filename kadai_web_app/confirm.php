<?php
// POSTリクエストから入力データを取得
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編課題</title>
</head>
<body>
  <h2>入力内容をご確認ください。</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <!-- 表 -->
  <table border="1">

  <tr>
    <th>入力項目</th>
    <th>内容</th>
  </tr>

  <!-- 社員名 -->
  <tr>
    <td>社員名</td>
    <td><?php echo $name ?></td>
  </tr>

  <!-- 年齢 -->
  <tr>
    <td>年齢</td>
    <td><?php echo $age ?></td>
  </tr>

  <!-- 所属部署 -->
  <tr>
    <td>所属部署</td>
    <td><?php echo $department?></td>
  </tr>
  </table>

  <p>
    <button id="confirm-btn" onclick="location.href='complete.php';">確定</button>
    <button id="cancel-btn" onclick="history.back();">キャンセル</button>
  </p>
</body>
</html>