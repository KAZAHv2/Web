<?php
$A = $_GET['A'];
$B = $_GET['B'];

$sum=0;
$mult=1;
for(;$A<$B;$A++){
    if($A>0){
        $sum += $A;
    }
    elseif($A<0){
        $mult *= $A;
    }
}
echo "Sum of positive numbers: $sum <br>";
echo "Multiplication of negative numbers: $mult";
?>



