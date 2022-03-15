<!-- Exercise 2: Create a function which takes two integer parameters - divide them and output the result on the screen. -->

<?php

function division ($x, $y) {
    $divis = $x / $y;
    return $divis;
}

$return_val = division (10, 5);
echo $return_val;
echo "<br><br><br>";
?>


<!-- Exercise 3: Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. then make the calculation and print them on the screen. Make sure that the variables are numbers.
E.g. If you put the following grades 3, 4, 5 the result should be:
Sum:12
Average: 4 -->

<?php

function grades ($x, $y, $z) {
    $sum = $x + $y + $z;
    $aver = $sum / 3;
    return "Sum: $sum <br/> Average: $aver";
}

$return_val = grades (3, 4, 5);
echo $return_val;
echo "<br><br><br>";
?>


<!-- Exercise 4: Create a function that calculates the area and volume of a box.
Formulas:
area = width x height
volume = width x height x depth
Pass three different numbers as arguments and get calculated results using the return statement.
You should get the following results:
The area of the box is: 14
The volume of the box is: 70 -->

<?php

function boxes ($x, $y, $z) {
    $area = $x * $y;
    $volume = $area * $z;
    return "The area of the box is: $area <br/> The volume of the box is: $volume";
}

$return_val = boxes (2, 7, 5);
echo $return_val;
echo "<br><br><br>";
?>

<!-- Exercise 5: Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.
E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s)." -->

<?php

function times ($x) {
    $hours = floor($x / 60);
    $minutes = $x - $hours * 60;
    return "$x minutes = $hours hour(s) and $minutes minute(s).";
}

$return_val = times (185);
echo $return_val;
echo "<br><br><br>";
?>

