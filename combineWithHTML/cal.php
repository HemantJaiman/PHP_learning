<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
</head>
<body>

<h1>Form Submission Result</h1>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user input
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    // Perform some processing (e.g., addition in this case)
    $result = $num1 + $num2;

    // Display the result
    echo "<p>The sum of $num1 and $num2 is: $result</p>";
} else {
    echo "<p>Form not submitted. Please go back and fill out the form.</p>";
}
?>

</body>
</html>
