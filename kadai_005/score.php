<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
         $number =80+60+55+40+100+25+80+95+30+60;
         echo '合計点は'.$number.'です';
         echo '<br>';
         $a =80+60+55+40+100+25+80+95+30+60/10;
         $b =10;
         $c =$a/$b;
        echo "平均点は{$c}です" ;
         ?>
     </p>
     
 </body>
 
 </html>