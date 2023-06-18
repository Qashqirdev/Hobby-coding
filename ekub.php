<?php
    function ekub($x, $y){
        while($x!=$y){
            if ($x>$y) {
                $x-=$y;
            }else{
                $y-=$x;
            }
        }
        return $x;
    }
    echo ekub(24,19);
?>
