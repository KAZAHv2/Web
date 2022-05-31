<?php
$x = $_GET['x'];
if($x<=3)
{
    $y = -pow($x,2)+3*$x+9;
}
else{
    $y = ($x)/(pow($x,2)+1);
}
echo "Result: $y";
?>


