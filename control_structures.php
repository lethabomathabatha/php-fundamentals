<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Structures</title>
</head>
<body>
    <!-- Start PHP code -->
    <?php
    /* Conditionals:
        - if
        - else
        - else if
        - switch
    */

    // using if, else if and else
    $age = 16;

    if($age < 18) {
        echo ("Sorry, you are too young.");
    } else if ($age > 50) {
        echo ("Sorry, you are too old.");
    } else {
        echo ("Welcome, you are old enough.");
    }

    // using switch statements
    $role = "Visitor";

    switch ($role) {
        case 'Visitor':
            echo ("Welcome, Visitor!");
        break;
        case 'Admin':
            echo ("Welcome, Admin!");
        break;
        case 'Superadmin':
            echo ("Welcome, Superadmin!");
        break;
        case 'Boss':
            echo ("Welcome, Boss!");
        break;
        default:
            echo ("User has no role.");
    }


    /* Loops:
        - while
        - do while
        - for
        - foreach
    */

    // while
    $a = 1;

    while($a <= 10) {
        echo ("<br>" . $a);
        $a++;
    }

    // do while
    $cookie = 1;

    do {
        echo ("<br> I like cookies");
        $cookie++;
    } while ($cookie <= 10);

    // for
    // for (initialization; condition; counter)
    for ($x = 1; $x <= 10; $x++) {
        echo ("<br> The number is: " . $x);
    }

    /*  Exercise:
        - you have deposited $1000 into your bank account
        - the interest rate is 5% per year
        - you are withdrawing after 5 years
        - calculate the end balance after each year and print it
    */
    $deposit = 1000;
    $interest = 5/100;
    $withdrawalYears = 5;

    for ($years = 1; $years <= $withdrawalYears; $years++) {
        $deposit += $deposit * $interest;

        echo ("<br> The end balance after ". $years . " years is: " . $deposit);
    }
    




    ?> 
    <!-- End PHP code -->
</body>
</html>