<?php 
echo "Enter a string : ";
// user input
$input = trim(readline());

//str_split() use here custom
function customSplit($string)
{
    $arr = [];
    for($i = 0; $i < strlen($string); $i++)
    {
        $arr[] = $string[$i];
    }
    return $arr;
}
$stringArray = customSplit($input); // call function

// $stringArray = str_split($input); // str to array ['h','e','l','l','o']

$reverseArr = []; // call empty array

for($i = count($stringArray) - 1; $i >= 0; $i--)
{
    $reverseArr[] = $stringArray[$i];// ['o','l','l','e','h']
}

$reverseStr = implode('',$reverseArr); // $reverseStr = 'olleh';
echo "Reverse String : " . $reverseStr;
