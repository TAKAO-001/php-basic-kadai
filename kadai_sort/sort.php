<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎編</title>
</head>
<body>
 <p>
 <?php
  function sort_2way($array,$order) {
        if ($order) {
            echo '昇順にソートします。<br>';
            sort($array); //昇順ソート
        } else {
            echo '降順にソートします。<br>';
            rsort($array); //降順ソート
        }
        foreach($array as $nam){
            echo $nam . '<br>';
        }
      }  
       $nums = [15, 4, 18, 23, 10];
       sort_2way($nums,ture);
       sort_2way($nums,false);
 ?>
 </p>
</body>
</html>