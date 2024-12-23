<?php 
$account = [
    'balance' => 0,
];

//deposite
function deposite(&$account, $amount)
{
    if($amount > 0)
    {
        $account['balance'] += $amount;
        echo "Deposite successfully";
    }
    else
    {
        echo "you have no efficiant balanace for deposite";
    }
}

// withdraw
function withDraw(&$account, $amount)
{
    if($amount > 0)
    {
        // check have efficiant money for user account
        if($account['balance'] >= $amount)
        {
            $account['balance'] -= $amount; // after withdraw balance
            echo "Amount Withdraw successfully your account";
        }
        else
        {
            echo "you have not efficiant balance for withdraw";
        }
    }
    else
    {
        echo "you have no balance";
    }
}

//check balance

function checkBalance(&$account)
{
    echo "Current Balance: " . $account['balance'] . "\n";
}

// Main Loop

while(true)
{
    echo "\n choose an option : \n";
    echo "1. Account for Deposite \n";
    echo "2. Account Withdraw \n";
    echo "3. Balance Check \n";
    echo "4. Exit \n";

    // user choice

    $choice = trim(readline());

    //check choice and function call
    switch($choice)
    {
        case 1:
            echo "Enter deposite amount : \n";
            $amount = trim(readline());
            deposite($account, $amount); // call deposite function
            break;
        case 2:
            echo "Enter witdraw amount : \n";
            $amount = trim(readline());
            withDraw($account, $amount); // call withdraw function
            break;
        case 3:
            checkBalance($account); // call checkBalance function
            break;
        case 4:
            echo "Thank you using for the banking system\n";
            exit;
        default:
            echo "Invalid system. check again";

    }
}