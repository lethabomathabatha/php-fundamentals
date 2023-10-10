<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals</title>
</head>
<body>

<!-- Start PHP code -->
<?php
    // php info is used to check configuration settings and for available predefined variables on a given system
    // phpinfo();

    // creating a variable
    $name = 'Lethabo';

    // single quotes are used for string literals and thus will not interprete the variable
    // adding line breaks: nl2br("\r\n")
    echo nl2br("My name is {$name}");
    print nl2br("\r\nHello ". $name);
    // 'echo' and 'print' are both used to output data to the screen. The differences are that echo has no return value while print has a return value of 1 so it can be used in expressions

    // html line break
    echo "<br>" . "This is a line-<br>break.";


    // VARIABLES- can start with a letter or underscore
    // VARIABLES- double quotes: variable names are repalces by the variable value
    // VARIABLES- single quotes: variable names are echoed as is
    $age = 23;
    echo ("<br> Ich bin {$age} jaar alt.");
    echo ('<br> Ich bin {$age} jaar alt.');
    echo ('<br> Ich bin ' . $age. ' jaar alt.');


    // DATA TYPES: string, integer, float, boolean, array, object, null, resource

    // STRING:
    $city = 'Budapest';

    // INTEGER:
    $number = 123;

    // FLOAT:
    $price = 123.45;
    
    // BOOLEAN:
    $isMale = false;

    // ARRAY:
    $colors = array('blue', 'red', 'green');

    // arrays usage example:
    $brand1 = "Apple";
    $brand2 = "Samsung";
    $brand3 = "Sony";
    $brand4 = 52;
    $brand5 = true;

    $brands = array($brand1, $brand2, $brand3, $brand4, $brand5);

    $otherBrands1 = "Xiaomi";
    $otherBrands2 = "Oppo";

    $otherBrands = array($otherBrands1, $otherBrands2);

    echo '<br> The best brand is ' . $brands[2] . '<br>';

    // var_dump() is used to display the data type of a variable
    // var_dump($brands);

    // merging of arrays:
    $brands = array_merge($brands, $otherBrands);
    var_dump($brands);
    print_r($brands) . "<br>";

    // Associative Arrays: 
    // indices are replaced by strings
    $cars = array("Audi" =>50.500, "BMW" => 40.700, "Mercedes" => 60.300);
    "<br>";
    var_dump($cars);

    // print_r() is used to display the data type of a variable in a readable format
    print_r($cars);

    // another way to write associative arrays:
    $car1["Mercedes"] = 60.300;
    echo $car1["Mercedes"];

    // for each loop
    // eg.: key is assigned to 'Mercedes' and value is assigned to 60.300
    foreach ($cars as $key => $value) {
        echo "<br> My " . $key . " has " . $value . "km mileage.";
    }


    // Multidimensional Arrays: every element in the array is an array and can hold other arrays

    // say you want to create an array of 'expensive trucks' with these brands: Audi, Mercedes, BMW
    // another array with 'inexpensive trucks' with these brands: Volvo, Ford, Toyota
    $trucks = array(
        "Expensive" => array("Audi", "Mercedes", "BMW"), 
        "Inexpensive" => array("Volvo", "Ford", "Toyota")
    );

    echo "<br>". $trucks ["Expensive"][0];
    echo "<br>". $trucks ["Inexpensive"][2];

    // OBJECT:

    // NULL:

?>

<!-- End PHP code  -->

</body>
</html>