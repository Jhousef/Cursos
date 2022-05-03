<?php
echo 'FOR'.'<br>';
// 2em 2 com for
for($i = 0; $i <= 100;$i=$i+2){
    echo $i.'-';
}

echo '<br>';
echo '<br>';


echo 'WHILE'.'<br>';
// 2em 2 com while
$count = 0;
while($count <= 100){
    echo $count."-";
    $count = $count + 2;
}

echo '<hr>';

for($i = 65; $i <= 90; $i++){
    echo chr($i) .' | ';
}