<!DOCTYPE html>
<html>
<head>
    <title>Book Catalog</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<h1>Book Catalog</h1>

<?php
// Define an array of books
$books = [
    ["title" => "Learn php from scratch", "author" => "Harper Lee", "year" => 2020],
    ["title" => "let us C", "author" => "George Orwell", "year" => 2005],
    ["title" => "Java Padho", "author" => "Jane Austen", "year" => 2002],
];

// Loop through the array and display each book in a well-formatted list
echo "<ul>";
foreach ($books as $book) {
    echo "<li>";
    echo "<strong>Title:</strong> " . $book["title"] . "<br>";
    echo "<strong>Author:</strong> " . $book["author"] . "<br>";
    echo "<strong>Publication Year:</strong> " . $book["year"];
    echo "</li>";
}
echo "</ul>";
?>

</body>
</html>
