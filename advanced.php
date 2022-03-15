<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Day 2 Advanced</title>
</head>
<body>

<!-- 1- Create a function that can convert °F in °C and show the result on the screen. -->
<div class="container mt-5 mb-5 p-5 shadow text-center">
<h3 class="mb-4"> Weather station </h3>
<?php 
function weather($f){
    $c = round(($f - 32) * 5/9);
    return $c;
}

$f = 55;
$return_val = weather($f);
echo "Today we have $return_val °C";
echo "<br> That means ";

switch($return_val){
    case($return_val >= 0 && $return_val <= 5):
        $message = "it´s a very cold weather!";
        break;
    case($return_val >= 6 && $return_val <= 10):
        $message = "it´s just a cold weather!";
        break;
    case($return_val >= 11 && $return_val <= 15):
        $message = "it´s a pleasant weather!";
        break;
    case($return_val >= 16 && $return_val <= 20):
        $message = "it´s a warm weather!";
        break;
    case($return_val >= 21):
        $message = "it´s a hot weather!";
        break;
    default:
        $message = "it´s either super cold or super hot weather!";
    }

echo $message;

?>

</div>
<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>