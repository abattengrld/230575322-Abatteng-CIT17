<?php

echo"1. Introduce yourself\n";

$name = "Rhona";
$age = 21;
$fav_color = "white";

echo "My name is $name, I am $age years old, and my favorite color is $fav_color \n";

echo "---\n";


echo" 2. Simple Math\n";

$a = readline("Enter a number: ");
$b = readline("Enter a second number: ");
$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;

echo "The computations between the two numbers are as follows: \n Sum: $sum \n Difference: $difference \n Product: $product \n Quotient: $quotient \n";

echo "---\n";


echo"3. Area and Perimeter of a Rectangle\n";

$length = readline("Enter length of the rectangle: ");
$width = readline("Enter width of the rectangle: ");
$perimeter = 2 * ($length + $width);
$area = $length * $width;
echo "The perimeter of a rectangle with the length of $length and a width of $width is $perimeter. \n";
echo "The area of a rectangle with the length of $length and a width of $width is $area. \n";

echo "---\n";


echo "4. Temperature Converter \n";

$temp_celsius = readline("Enter temperature in Celsius: ");
$fahrenheit_conversion = ($temp_celsius * 1.8) + 32;

echo "$temp_celsius is equivalent to $fahrenheit_conversion degrees fahrenheit.\n";

echo "---\n";


echo "5. Swapping variables\n";

$swap = readline("Enter a number: ");
$swap2 = readline("Enter a number to be swapped with the previous one.: ");

echo "Before swapping, the first number is equal to $swap, the second is equal to $swap2\n";

$temp = $swap;
$swap = $swap2;
$swap2 = $temp;

echo "After swapping,the first number is now equal to $swap, the second is equal to $swap2\n";



echo"6. Salary Calculator\n";

$basic_salary = readline("Enter basic salary: ");
$allowance = readline("Enter allowance: ");
$deductions = readline("Enter deductions: ");
$gross_salary = $basic_salary + $allowance;
$net_salary = $gross_salary - $deductions;

echo "Your net salary is $net_salary. \n";

echo "---\n";


echo"7. BMI Calculator \n";

$height = readline("Enter height in meters: ");
$weight = readline("Enter weight in kilograms: ");
$bmi = $weight / ($height ** 2);

echo "Your BMI is $bmi. \n";

echo "---\n";



echo"8. String Manipulation\n";

$sentence = readline("Enter a sentence: ");

$s_length = strlen($sentence);
$s_word_count = str_word_count($sentence);
$uppercase = strtoupper($sentence);
$lowercase = strtolower($sentence);

echo "\nNumber of characters: $s_length \n";
echo "Number of words: $s_word_count \n";
echo "The sentence in uppercase: $uppercase \n";
echo "The sentence in lowercase: $lowercase \n";

echo "---\n";



echo"9. Bank Account Simulation\n";

$balance = 100000.00;

while (true) {
    $transaction = readline("[a] Check balance\n[b] Deposit\n[c] Withdraw\n[d] Exit\nChoose an option: ");

    switch ($transaction) {
        case "a":
            echo "Your balance is $balance\n";
            break;

        case "b":
            $deposit = readline("Enter deposit amount: ");
            $balance += $deposit;
            echo "Your new balance is $balance\n";
            break;

        case "c":
            $withdraw = readline("Enter withdrawal amount: ");
            $balance -= $withdraw;
            echo "Your new balance is $balance\n";
            break;

        case "d":
            echo "Exit.";
            exit;

        default:
            echo "Invalid. Please choose between the following only.\n";
    }
}

echo "---\n";


echo"10. Simple Grading System\n";

$math = readline("Enter grade in Math: ");
$science = readline("Enter grade in Science: ");
$english = readline("Enter grade in English: ");
$average = ($math + $science + $english) / 3;

echo "\nThe average is $average";

if($average >= 90) {
    echo " with a grade of A.";
}
elseif($average >= 85) {
    echo " with a grade of B.";
}
elseif($average >= 80) {
    echo " with a grade of C.";
}
elseif($average >= 75) {
    echo " with a grade of D.";
}
else {
    echo " with a failing grade.";
}

echo "\n---\n";



echo"11. Currency Converter\n";

$php = readline("Enter amount of money in Philippine Peso: ");
$usd = $php * 58.24;
$eur = $php * 68.24;
$jpy = $php * 0.39;

echo "\n $php in PHP is equal to $usd in USD, $eur in EUR, and $jpy in JPY.";

echo "---\n";


echo"12. Travel Cost Estimator\n";

$distance = readline("Enter the distance to be traveled in kilometers: ");
$fuel_consumption = readline("Enter the fuel consumption in kilometers per liter): ");
$fuel_price = readline("Enter the fuel price per liter: ");

$fuel_required = $distance / $fuel_consumption;

$travel_cost = $fuel_required * $fuel_price;

// Display the estimated travel cost
echo "The estimated travel cost for your trip is: $travel_cost\n";

?>