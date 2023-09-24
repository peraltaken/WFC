<?php
/**
 * Calculate the total price of items in a shopping cart.
 *
 * @param array $items An array of items with 'name' and 'price' keys.
 *
 * @return float The total price of all items.
 */
function calculateTotalPrice(array $items): float {
    $total = 0;
    foreach ($items as $item) {
        $total += $item['price'];
    }
    return $total;
}

/**
 * Modify a string by removing spaces and converting it to lowercase.
 *
 * @param string $inputString The input string to modify.
 *
 * @return string The modified string.
 */
function modifyString(string $inputString): string {
    $modifiedString = str_replace(' ', '', $inputString);
    $modifiedString = strtolower($modifiedString);
    return $modifiedString;
}

/**
 * Check if a number is even or odd.
 *
 * @param int $number The number to check.
 *
 * @return string A message indicating whether the number is even or odd.
 */
function checkEvenOrOdd(int $number): string {
    if ($number % 2 === 0) {
        return "The number $number is even.";
    } else {
        return "The number $number is odd.";
    }
}

// Sample shopping cart items
$items = [
    ['name' => 'Widget A', 'price' => 10],
    ['name' => 'Widget B', 'price' => 15],
    ['name' => 'Widget C', 'price' => 20],
];

// Calculate and display the total price
$totalPrice = calculateTotalPrice($items);
echo "Total price: $" . $totalPrice;

// Sample string manipulation
$inputString = "This is a poorly written program with little structure and readability.";

// Modify the string and display the result
$modifiedString = modifyString($inputString);
echo "\nModified string: " . $modifiedString;

// Check if a number is even or odd and display the result
$number = 42;
$evenOrOddMessage = checkEvenOrOdd($number);
echo "\n" . $evenOrOddMessage;
?>
