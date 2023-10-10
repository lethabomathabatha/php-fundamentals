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
    


    ?> 
    <!-- End PHP code -->
</body>
</html>