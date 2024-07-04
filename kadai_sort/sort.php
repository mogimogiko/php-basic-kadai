<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>
<body>
  <p>
    <?php
    function sort_2way($array, $order) {

      // orderがtrueなら昇順、falseなら降順
      if ($order) {
        echo '昇順で表示します<br>';
        sort($array);
      } else {
        echo '降順で表示します<br>';
        rsort($array);
      }

      // ソート済みの配列を表示する
      foreach ($array as $value) {
        echo $value . "<br>";
      }
    }

    $nums = [15, 4, 18, 23, 10];

    // 昇順でソート
    sort_2way($nums, true);

    echo "<br>";

    // 降順でソート
    sort_2way($nums, false);
    ?>
  </p>
</body>
</html>