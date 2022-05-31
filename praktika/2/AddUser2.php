<?php
$symbol = $_GET['symbol'];
$A = $_GET['A'];
$B = $_GET['B'];

switch ($symbol){
    case '+':
        $res = $A+$B;
        echo "Result: $res";
        break;
    case '-':
        $res = $A-$B;
        echo "Result: $res";
        break;
    case '*':
        $res = $A*$B;
        echo "Result: $res";
        break;
    case '/':
        $res = $A/$B;
        echo "Result: $res";
        break;
    default : echo "Error!!!";
}
?>


