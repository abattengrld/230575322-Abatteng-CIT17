<?php
$exercise = $_GET["exercise"] ?? null;


switch ($exercise) {

case "1. Introduce Yourself": ?>
    <form method="POST">
        Name: <input type="text" name="name"><br><br>
        Age: <input type="number" name="age"><br><br>
        Favorite Color: <input type="text" name="color"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_POST) {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $color = $_POST["color"];
        echo "<p>My name is $name, I am $age years old, and my favorite color is $color.</p>";
    }
    break;

case "2. Simple Math": ?>
    <form method="POST">
        Number 1: <input type="number" name="a"><br><br>
        Number 2: <input type="number" name="b"><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_POST) {
        $a = $_POST["a"];
        $b = $_POST["b"];
        echo "<p>Sum: " . ($a + $b) . "<br><br>
              Difference: " . ($a - $b) . "<br><br>
              Product: " . ($a * $b) . "<br><br>
              Quotient: " . ($b != 0 ? $a / $b : "undefined") . "</p>";
    }
    break;

case "3. Area and Perimeter of a Rectangle": ?>
    <form method="POST">
        Length: <input type="number" name="length"><br><br>
        Width: <input type="number" name="width"><br><br>
        <input type="submit" value="Compute">
    </form>
    <?php
    if ($_POST) {
        $l = $_POST["length"];
        $w = $_POST["width"];
        echo "<p>Area: " . ($l * $w) . "<br>Perimeter: " . (2 * ($l + $w)) . "</p>";
    }
    break;

case "4. Temperature Converter": ?>
    <form method="POST">
        Celsius: <input type="number" name="celsius"><br><br>
        <input type="submit" value="Convert">
    </form>
    <?php
    if ($_POST) {
        $c = $_POST["celsius"];
        echo "<p>$c°C = " . (($c * 1.8) + 32) . "°F</p>";
    }
    break;

case "5. Swapping Variables": ?>
    <form method="POST">
        Value 1: <input type="number" name="val1"><br><br>
        Value 2: <input type="number" name="val2"><br><br>
        <input type="submit" value="Swap">
    </form>
    <?php
    if ($_POST) {
        $v1 = $_POST["val1"];
        $v2 = $_POST["val2"];
        echo "<p>Before: v1 = $v1, v2 = $v2<br><br>";
        $temp = $v1; $v1 = $v2; $v2 = $temp;
        echo "After: v1 = $v1, v2 = $v2</p><br>";
    }
    break;

case "6. Salary Calculator": ?>
    <form method="POST">
        Basic Salary: <input type="number" name="basic_salary"><br><br>
        Allowance: <input type="number" name="allowance"><br><br>
        Deduction: <input type="number" name="deduction"><br><br>
        <input type="submit" value="Compute">
    </form>
    <?php
    if ($_POST) {
        $gross = $_POST["basic_salary"] + $_POST["allowance"];
        $net = $gross - $_POST["deduction"];
        echo "<p>Net Salary: ₱$net</p>";
    }
    break;

case "7. BMI Calculator": ?>
    <form method="POST">
        Weight (kg): <input type="number" name="weight" step="0.01"><br><br>
        Height (m): <input type="number" name="height" step="0.01"><br><br>
        <input type="submit" value="Calculate">
    </form>
    <?php
    if ($_POST) {
        $bmi = $_POST["weight"] / ($_POST["height"] ** 2);
        echo "<p>Your BMI: " . round($bmi, 2) . "</p>";
    }
    break;

case "8. String Manipulation": ?>
    <form method="POST">
        Sentence: <input type="text" name="sentence" style="width:300px;"><br><br>
        <input type="submit" value="Analyze">
    </form>
    <?php
    if ($_POST) {
        $s = $_POST["sentence"];
        echo "<p>Characters: " . strlen($s) .
             "<br>Words: " . str_word_count($s) .
             "<br>Uppercase: " . strtoupper($s) .
             "<br>Lowercase: " . strtolower($s) . "</p>";
    }
    break;

case "9. Bank Account Simulation":
    session_start();
    if (!isset($_SESSION["balance"])) $_SESSION["balance"] = 100000;
    ?>
    <form method="POST">
        <p>Balance: ₱<?php echo number_format($_SESSION["balance"], 2); ?></p>
        <select name="action">
            <option value="">--Choose Action--</option>
            <option value="check">Check Balance</option>
            <option value="deposit">Deposit</option>
            <option value="withdraw">Withdraw</option>
            <option value="reset">Reset Account</option>
        </select><br><br>
        Amount (if applicable): <input type="number" name="amount" step="0.01"><br><br>
        <input type="submit" value="Submit">
    </form>
    <?php
    if ($_POST) {
        $action = $_POST["action"];
        $amount = floatval($_POST["amount"] ?? 0);

        switch ($action) {
            case "check":
                echo "<p>Your balance is ₱" . number_format($_SESSION["balance"], 2) . "</p>";
                break;
            case "deposit":
                $_SESSION["balance"] += $amount;
                echo "<p>Deposited ₱$amount. New balance: ₱" . number_format($_SESSION["balance"], 2) . "</p>";
                break;
            case "withdraw":
                if ($amount > $_SESSION["balance"]) {
                    echo "<p style='color:red;'>Insufficient funds.</p>";
                } else {
                    $_SESSION["balance"] -= $amount;
                    echo "<p>Withdrawn ₱$amount. New balance: ₱" . number_format($_SESSION["balance"], 2) . "</p>";
                }
                break;
            case "reset":
                $_SESSION["balance"] = 100000;
                echo "<p>Account reset to ₱100,000.00</p>";
                break;
            default:
                echo "<p>Please select an action.</p>";
        }
    }
    break;

case "10. Simple Grading System": ?>
    <form method="POST">
        Math: <input type="number" name="math"><br>
        English: <input type="number" name="english"><br>
        Science: <input type="number" name="science"><br>
        <input type="submit" value="Compute">
    </form>
    <?php
    if ($_POST) {
        $avg = ($_POST["math"] + $_POST["english"] + $_POST["science"]) / 3;
        $grade = "F";
        if ($avg >= 90) $grade = "A";
        elseif ($avg >= 85) $grade = "B";
        elseif ($avg >= 80) $grade = "C";
        elseif ($avg >= 75) $grade = "D";
        echo "<p>Average: " . round($avg, 2) . " → Grade: $grade</p>";
    }
    break;

case "11. Currency Converter": ?>
    <form method="POST">
        Amount in PHP: <input type="number" name="php" step="0.01"><br>
        <input type="submit" value="Convert">
    </form>
    <?php
    if ($_POST) {
        $php = $_POST["php"];
        echo "<p>$php PHP = " .
             round($php / 58.24, 2) . " USD, " .
             round($php / 68.24, 2) . " EUR, " .
             round($php / 0.39, 2) . " JPY</p>";
    }
    break;

case "12. Travel Cost Estimator": ?>
    <form method="POST">
        Distance (km): <input type="number" name="distance"><br><br>
        Fuel Consumption (km/L): <input type="number" name="consumption"><br><br>
        Fuel Price (per L): <input type="number" name="price"><br><br>
        <input type="submit" value="Estimate">
    </form>
    <?php
    if ($_POST) {
        $fuel_needed = $_POST["distance"] / $_POST["consumption"];
        $cost = $fuel_needed * $_POST["price"];
        echo "<p>Estimated Travel Cost: ₱" . round($cost, 2) . "</p>";
    }
    break;

default:
    echo "<p>Invalid exercise selected.</p>";
}
?>
