<?php 

function calculateDiscount($price, $discountPercent)
{
    $discountPrice = ($price * $discountPercent) / 100;

    $finalPrice = $price - $discountPrice;

    return [
        'original_price' => $price,
        'discount_percent' => $discountPercent,
        'discount_price' => $discountPrice,
        'final_price' => $finalPrice,
    ];
}
echo "Enter Product price : ";
$price = trim(readline());

echo "Enter discount percent : ";
$discountPercent = trim(readline());
$result = calculateDiscount($price, $discountPercent);

// display the result
echo "\n=====Discount Calculation=======\n";
echo "Original Price : " . $result['original_price'] . "\n";
echo "Discount Percent : " . $result['discount_percent'] . "\n";
echo "Discount Price : " . $result['discount_price'] . "\n";
echo "Final Price : " . $result['final_price'] . "\n";