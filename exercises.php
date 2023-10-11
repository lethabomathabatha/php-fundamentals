<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Exercises</title>
</head>
<body>
    <!-- Start PHP code -->
    <?php 
    // EXERCISES ON DATA TYPES
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
    $countries = array(
        "Netherlands" => "Amsterdam", 
        "Morocco" => "Rabat", 
        "Panama" => "Panama City", 
        "Thailand" => "Bangkok", 
        "Canada" => "Ottawa"
    );

    foreach($countries as $key => $value) {
        echo "<br> The capital of " . $key . " is " . $value . ".";

    }


    // Exercise 5: create an integer 'cmToInch' that converts a number of centimeters ('cm') to inches ('inch'). Tip: 1cm = 0.39inch
    $cm = 157;
    $inch = 0.39;
    $cmToInch = $cm * $inch;

    echo "<br> My height is " . $cm ."cm in centimeters and " . $cmToInch . "inch in inches.";


    // Exercises 6: create an array called 'expenses' with your biggest expenses of the month. Loop through the array and add the expenses in an integer 'totalAmount'. 
    // Finally, display the total expenses that you had and the amount of values 'amountOfExpenses' you had stored inside your array
    $expenses = array(600, 150, 50, 35);
    $totalAmount = 0;

    foreach($expenses as $value) {
        $totalAmount += $value;
        // $totalAmount = $totalAmount + $value;
    }

    $amountOfExpenses = count($expenses);
    echo "<br> Total biggest expenses: " . $amountOfExpenses . " items that amount to: R " . $totalAmount;


    /*  Exercise 7: create an array called 'weather' of weather conditions with the following values: rain, sunshine, clouds, hail, sleet, snow, wind.
        Using the array variable for all the weather conditins, echo the following statement to the browser:
        "We've seen all kinds of weather this month. At the beginning of the month, we had snow and wind. Then came sunshine with a few clouds and some rain. 
        At least we didn't get any hail or sleet."
    */
    $weather = array("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

    echo "<br> We've seen all kinds of weather this month. At the beginning of the month, we had " . $weather[5] . " and " . $weather[6] . ". Then came ". $weather[1] . " with a few " . $weather[2] . " and some " . $weather[0] . ". At least we didn't get any " . $weather[3] . " or " . $weather[4] .  "." ;


    // EXERCISES ON CONTROL STRUCTURES
    // Exercise 1: create two variables with two integer numbers. Print out which one is the highest and which one is the lowest value.
    $numOne = 54;
    $numTwo = 22;

    if ($numOne > $numTwo) {
        print ("<br> The highest value is {$numOne} and the lowest value is {$numTwo}");

    } else if ($numOne < $numTwo) {
        print ("<br> The highest value is {$numTwo} and the lowest value is {$numOne}");
    } else {
        print "<br> The value is does not appear to be a valid integer.";
    }


    // Exercise 2: create a variable with a value in-between number 1 to 4 (reject any other value). Based on the value, print out "Spades", "Hearts", "Diamonds", "Clubs".
    $card = 3;

    switch ($card) {
        case 1:
            print "<br> Spades";
        break;
        case 2:
            print "<br> Hearts";
        break;
        case 3:
            print "<br> Diamonds";
        break;
        case 4:
            print "<br> Clubs";
        break;
        default: 
            print "<br> The card does not appear to be valid.";
    }


    /*
        Exercise 3: 
        The American grading system works with the letters A, B, C, D, F. C or higher means that you have passed the subject.
        Create a variable that shows the amount of points a student scored and based on that number, print out the letter grade.
        Also, print out if the student has passed or failed the subject.
        - A = 90 - 100
        - B = 80 - 89
        - C = 70 - 79
        - D = 60 - 69
        - F = 0 - 59
    */
    $score = -15;

    if ($score >= 90 && $score <= 100) {
        print "<br> A -  Passed";
    } else if ($score >= 80 && $score <= 89) {
        print "<br> B - Passed";
    } else if ($score >= 70 && $score <=79) {
        print "<br> C - Passed";
    } else if ($score >= 69 && $score <= 69) {
        print "<br> D - Failed";
    } else if ($score >= 0 && $score <= 59) {
        print "<br> F - Failed";
    } else {
        print "<br> The score does not appear to be valid.";
    }


    ?>
    <!-- End PHP code  -->
</body>
</html>