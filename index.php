<!-- Exercise 1

Create a PHP script which will accept two parameters from the form (name and surname). The user must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname.

Exercise 2

Create a function which takes two integer parameters - divide them and output the result on the screen.

Exercise 3

Make a function that will accept 3 parameters, which are the grades from Math, Physics and English. then make the calculation and print them on the screen. Make sure that the variables are numbers.
E.g. If you put the following grades 3, 4, 5 the result should be:
Sum:12
Average: 4

Exercise 4

Create a function that calculates the area and volume of a box.
Formulas:
area = width x height
volume = width x height x depth
Pass three different numbers as arguments and get calculated results using the return statement.
You should get the following results:
The area of the box is: 14
The volume of the box is: 70

Exercise 5

Create a function that will return the number of minutes, in hours and minutes. The function should accept only one argument.
E.g. If we call the function and pass the number of minutes 200 we should get the message "200 minutes = 3 hour(s) and 20 minute(s)."

Exercise 6

Create a form with input fields for your firstname, lastname and age. Extract the values from each input field and display them all in a separate div. Use the POST method.
If the length of your name is larger than 5 characters, change the text colour to green. Otherwise, change the text-colour to red.Now extend with adding a new input field "hobbies". Use the GET method to extract and display the hobbies -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Day 2</title>
</head>
<body>
    <!-- PHP -->
    <?php
    /*  Exercise 1: Create a PHP script which will accept two parameters from the form (name and surname). The user must insert name and surname into the form to get the output: "Welcome Name Surname!" otherwise you will output the message: please insert your name, or please insert your surname. */


    ?>

    <div class="container mt-5 mb-5 p-5 border shadow text-center">
        <h3 class="mb-4">Registration Form</h3>
        <div class="row row-cols-4 justify-content-center">
    <!-- Form -->
    <form>
        <div class="mb-3">
            <input type="fname" class="form-control" id="exampleInputFname" aria-describedby="" placeholder="First Name">
        </div>
        <div class="mb-3">
            <input type="lname" class="form-control" id="exampleInputLname" aria-describedby="" placeholder="Last Name">
        </div>
        <div class="mb-3">
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail">
        </div>
        <div class="mb-3">
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Log in</button>
    </form>
    </div>
    </div>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>