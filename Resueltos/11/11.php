<?php

for($i=1;$i<=4;$i++){
    potencias($i);
}

function potencias($num){
    echo "<br>";
    echo pow($num,1);
    echo "<br>";
    echo pow($num,2);
    echo "<br>";
    echo pow($num,3);
    echo "<br>";
    echo pow($num,4);
    echo "<br>";
    echo "----------";
}
?>