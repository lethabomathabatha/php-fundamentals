<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
</head>
<body>
    <!-- Start PHP code -->
    <?php 
    // Exercises on data types
    // Exercise 1: create two variables ('x', 'y'), add them, and multiply the sum by 5. Assign the output to a new variable 'z'.
    $x = 6;
    $y = 5;

    $z = 5 * ($x + $y);
    echo "The output is " . $z;

    // Exercise 2: create two variables ('price' and 'vat'). Create a new varibale 'totalPrice' and calculate the vat on the price and print out the price, vat and total price.
    $price = 339.99;
    $vat = 0.15;

    $totalPrice = $price + ($price * $vat);
    echo "<br> The Total Price is " . $totalPrice . ", the Price is " . $price . " and the VAT is " . $vat; 

    // Exercise 3: Create three variables: 'a', 'b' and 'c' and calculate the average ('average') of the numbers and print it out. Beware that the average is a decimal/float, so use a function number_format() to format it.
    $a = 7;
    $b = 13.07;
    $c = 25.3;

    $average = ($a + $b + $c) / 3;

    print "<br> The average is " . number_format($average, 2, ',');


    // Exercise 4: create an array called 'countries' that dispalys 5 countries and their capital names.
    $countries = array("Netherlands" => "Amsterdam" , "Morocco" => "Rabat", "Panama" => "Panama City", "Thailand" => "Bangkok", "Canada" => "Ottawa");

    foreach($countries as $key => $value) {
        echo "<br> The capital of " . $key . " is " . $value . ".";

    }

    ?>
    <!-- End PHP code  -->
</body>
</html>