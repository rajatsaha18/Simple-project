<?php 

function calculateResult($num1, $num2, $operationType)
{
    switch($operationType){
        case 'add':
            return $num1 + $num2;
        case 'sub':
            return $num1 - $num2;
        case 'multi':
            return $num1 * $num2;
        case 'divide':
            if($num1 === 0 || $num2 === 0)
            {
                return 'Error: divide by zero';
            }
            return $num1 / $num2;
        default:
            return "invalid operation";
    }
}
$numbers = [
    ['num1' => 10, 'num2'   => 20, 'operation'    => 'add'],
    ['num1' => 20, 'num2'   => 10, 'operation'    => 'sub'],
    ['num1' => 4, 'num2'    => 5, 'operation'     => 'multi'],
    ['num1' => 20, 'num2'   => 5, 'operation'     => 'divide'],
    ['num1' => 10, 'num2'   => 0, 'operation'     => 'divide'],
];

foreach($numbers as $number)
{
    $num1 = $number['num1'];
    $num2 = $number['num2'];
    $operationType = $number['operation'];

    $result = calculateResult($num1, $num2, $operationType);

    echo "First Number : $num1\n";
    echo "Second Number : $num2\n";
    echo "Operation Type : $operationType\n";
    echo "Result : $result\n\n";
}