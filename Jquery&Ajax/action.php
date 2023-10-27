<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Geting user input
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Performing addition operation
    $result = $num1 + $num2;

    // Sending result to javascript code
    echo "The result of $num1 + $num2 is: $result";
} else {
    echo "Please try again.";
}
?>
