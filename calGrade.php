<?php 

function calculateGrade($score)
{
    if($score > 80)
    {
        return "Grade: A+";
    }
    elseif($score > 70)
    {
        return "Grade: A";
    }
    elseif($score > 40)
    {
        return "Grade: Pass";
    }
    else
    {
        return "Grade: Fail";
    }
}
$students = [
    ["name" => "Rajat", "score" => 90],
    ["name" => "Rohit", "score" => 75],
    ["name" => "Virat", "score" => 60],
    ["name" => "Hello", "score" => 30],
];

foreach($students as $student)
{
    $name = $student['name'];
    $score = $student['score'];
    $grade = calculateGrade($score);

    echo "Result : Name: $name | Score: $score | $grade . \n";
}

