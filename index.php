<?php
//1. Introduce yourself //
$name = "Rhona";
$age = 21;
$fav_color = "white";
echo "My name is $name, I am $age years old, and my favorite color is $fav_color \n";

// 2. Simple Math //

$a = readline("Enter a number: ");
$b = readline("Enter a second number: ");
$sum = $a + $b;
$difference = $a - $b;
$product = $a * $b;
$quotient = $a / $b;
echo "The computations between the two numbers are as follows: \n Sum: $sum \n Difference: $difference \n Product: $product \n Quotient: $quotient";

// 3. Area and Perimeter of a Rectangle //

$length = readline("\n Enter length of the rectangle: ");
$width = readline("Enter width of the rectangle: ");
$perimeter = 2 * ($length + $width);
$area = $length * $width;
echo "The perimeter of a rectangle with the length of $length and a width of $width is $perimeter. \n";
echo "The area of a rectangle with the length of $length and a width of $width is $area. \n";

// 4. Temperature Converter //

$temp_celsius = readline("Enter temperature in Celsius: ")
$fahrenheit_conversion = ($temp_celsius * 1.8) + 32;
echo "$temp_celsius is equivalent to $fahrenheit_conversion degrees fahrenheit.";

// 5. Swapping variables //

$c = 1;
$d = 0;
$temp = $c;
$c = $d;
$d = $temp;



// 6. Salary Calculator //

$basic_salary = readline("Enter basic salary: ");
$allowance = readline("Enter allowance: ");
$deductions = readline("Enter deductions: ");
$gross_salary = $basic_salary + $allowance;
$net_salary = $gross_salary - $deductions;
echo "Your net salary is $net_salary";

// 7. BMI Calculator //

$height = readline("Enter your height in meters: ");
$weight = readline("Enter weigh in kilograms: ");
$bmi = $weight / ($height ** 2);

echo "Your BMI is $bmi";


// 8. String Manipulation //



// 9. Bank Account Simulation //


// 10. Simple Grading System //

$math = readline("Enter grade in Math: ");
$science = readline("Enter grade in Science: ");
$english = readline("Enter grade in English: ");
$average = ($math + $science + $english) / 3;

echo "The average is $average";

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

// 11. Currency Converter //

$php = readline("Enter amount of money in Philippine Peso: ");
$usd = $php * 58.24;
$eur = $php * 68.24;
$jpy = $php * 0.39;

// 12. Travel Cost Estimator //

$distance = readline("enter distance to be travelled: ");
?>