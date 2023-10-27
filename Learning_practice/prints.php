<?php 

echo 'Hello';
echo 123;
echo '<h1>Hello</h1>';

// Printing with print (slower then echo)
print 'Hello';

// print_r - more info
print_r('Hello');
print_r([1, 2, 3]);

// var_dump -  info like data type and length
var_dump('Hello');
var_dump([1, 2, 3]);


/* ------------ Comments ------------ */

// This is a single line comment

/*    
      * multi line comments
      *
      * It can be used to comment out a block of code
      */

// Php code ending tag
?>

<!-- You can output any HTML that you want within a .php file -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My PHP Website</title>
</head>
<body>
  <!-- output PHP including variables, etc -->
  <h1>Hello <?php echo 'Hemant'; ?></h1>

  <h1>Hello <?= 'Jaiman' ?></h1>
</body>
</html>
