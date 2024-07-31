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
       function sort_2way($array, $order = true) {
            if ($order) {
              sort($array); //昇順ソート
            } else {
              rsort($array); //降順ソート
            }
            return $array;
        }
        $nums = [15, 4, 18, 23, 10];
        
        //昇順
        $sorted_asc = sort_2way($nums, true);
        echo '昇順にソートします。<br>';
        foreach($sorted_asc as $value){
             echo $value . '<br>';
        }
        
        //降順
        $sorted_desc = sort_2way($nums, false);
        echo '降順にソートします。<br>';
        foreach($sorted_desc as $value){
             echo $value . '<br>';
        }
     ?>
 </p>
</body>
</html>