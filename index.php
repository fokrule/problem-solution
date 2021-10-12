<?php 
    $arrayName = array(1,2,4,1,4,5,2,5,77,2,77,5,1,-3,14);
    $max = max($arrayName); // get the maximum value
    $maxIndex = array_keys($arrayName, $max); // get the maimum value index
    foreach ( $maxIndex as $index ) {
        unset($arrayName[$index]); // remove all the index for max value
    }
    $secondMax = max($arrayName); // get the updated array max value
    echo $max;
    echo "<br/>";
    echo $secondMax;

?>