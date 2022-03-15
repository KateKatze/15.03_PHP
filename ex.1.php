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

    if( isset($_POST['submit']))
       {
           if( $_POST["fname"] || $_POST["lname"] )
           {
               echo "Welcome, ". $_POST[ 'fname']. " ". $_POST[ 'lname']. "!". "<br />";
           } else {
                echo "Please insert your name!";
           }
       }
    
    ?>

    <!-- Container -->
    <div class="container mt-5 mb-5 p-5 border shadow text-center">

        <!-- Reg. form heading -->
        <h3 class="mb-4">Registration Form</h3>

        <!-- Row -->
        <div class="row row-cols-4 justify-content-center">

            <!-- Form -->
            <form action="index.php" method ="POST">
                        <div class="mb-3">
                                    <input type="fname" name="fname" class="form-control" id="exampleInputFname" aria-describedby="" placeholder="First Name">
                        </div>
                        <div class="mb-3">
                                    <input type="lname" name="lname" class="form-control" id="exampleInputLname" aria-describedby="" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-Mail">
                        </div>
                        <div class="mb-3">
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Log in</button>
            </form>
            <!-- End of form -->

        </div>
        <!-- End of row -->

    </div>
    <!-- End of container -->

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>