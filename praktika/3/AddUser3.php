<?php
$N = $_GET['N'];
$x = $_GET['x'];

$res = 0;
for($i=0;$i<$N;$i++){
    $res += (1/sin(($i+1)*$x));
}
echo "$res";
?>



