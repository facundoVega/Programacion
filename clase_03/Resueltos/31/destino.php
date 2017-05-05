<?php
var_dump($_GET);
echo "<br>";
if(isset($_GET['opcion'])){
 
    switch($_GET['opcion']){

        case 'rio':
            echo "<b>900</b>";
        break;

        case 'punta':
            echo "<b>550</b>";
        break;

        case 'habana':
            echo "<b>1000</b>";
        break;

        case 'miami':
            echo "<b>1250</b>";
        break;

        case 'ibiza':
            echo "<b>1500</b>";
        break;

    }
}
?>