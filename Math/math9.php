<?php
function arabic_rome($num){
    $c = 'IVXLCDM';
    for($x = 5, $y = $result='';$num;$y++, $x^=7)
        for($o=$num%$x, $num=$num/$x^0;$o--;$result=$c[$o>2?$y+$num-($num=-2)+$o=1:$y].$result)
            return $result;
}
print_r(arabic_rome(101)."\n");
?>