<!DOCTYPE html>
 <html lang="ja">
 <head>
     <meta charset="UTF-8">
 </head>
 <body>
     <p>
       <?php
       $user_name=['名前'=>'玉ねぎ','値段'=>'200','産地'=>'北海道'];
       foreach ($user_name as $key => $value){
        echo "{$key}:{$value}<br>";
       }
      ?>
      </p>
 </body>
 
 </html>
