<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator with php</title>
</head>
<body>

<h1> Calculator</h1>

<form method="post">
    <input type="text" name="num1" placeholder="Enter number 1" required>
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="num2" placeholder="Enter number 2" required>
    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];

    // Perform the calculation
    switch ($operator) {
        case "+":
            $result = $num1 + $num2;
            break;
        case "-":
            $result = $num1 - $num2;
            break;
        case "*":
            $result = $num1 * $num2;
            break;
        case "/":
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Division by zero is not allowed.";
            }
            break;
        default:
            $result = "Invalid operator";
    }

    // Display the result
    echo "<p>Result: $result</p>";
}
?>

</body>
</html>
