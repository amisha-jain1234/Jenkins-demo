<?php
echo 'welcome';
$multi = array(array(1,2,3,4), array(2,3,4,5), array(5,6,7,8));
for ($i=0; $i<count($multi); $i++) {
    for ($j=0; $j<count($multi[$i]); $j++){
        echo $multi[$i][$j];
    }
    echo "<br>";
}
?>