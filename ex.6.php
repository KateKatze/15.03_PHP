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
       
    <!-- Container -->
    <div class="container mt-5 mb-5 p-5 border shadow text-center">

        <!-- Reg. form heading -->
        <h3 class="mb-4">Login Form</h3>

        <!-- Row -->
        <div class="row row-cols-4 justify-content-center">

            <!-- Form -->
            <form action="ex.6.php" method ="POST">
                        <div class="mb-3">
                                    <input type="fname" name="fname" class="form-control" id="exampleInputFname" aria-describedby="" placeholder="First Name">
                        </div>
                        <div class="mb-3">
                                    <input type="lname" name="lname" class="form-control" id="exampleInputLname" aria-describedby="" placeholder="Last Name">
                        </div>
                        <div class="mb-3">
                                    <input type="age" name="age" class="form-control" id="exampleInputAge" aria-describedby="" placeholder="Age">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Log in</button>
            </form>

            <!-- Hobbies form -->
            <form action="ex.6.php" method ="GET">
            <div class="mb-3">
                        <input type="hobby" name="hobby" class="form-control" id="exampleInputHobby" aria-describedby="" placeholder="Hobby">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
            <!-- End of form -->

        </div>
        <!-- End of row -->

    </div>
    <!-- End of container -->
            
    <!-- Info -->
    <div class="container mt-5 mb-5 p-5 border shadow text-center">

        <!-- Name of the card -->
        <h3 class="mb-4">My info</h3>

            <!-- Row -->
            <div class="row row-cols-4 justify-content-center">

            <!-- Div with names -->
                <div class="text-<?php echo $tcol ?>">
                <?php
                $tcol = "dark";

                if( isset($_POST['submit']))
                {
                    $tcol = strlen($_POST["fname"]) > 5 ? "success":"danger";
                    if( $_POST["fname"] || $_POST["lname"] || $_POST["age"])
                    {
                        echo "<div class='text-".$tcol."'>Welcome, ". $_POST['fname']. " ". $_POST['lname']. "!". " ". "You are ". $_POST['age']. " y.o.". "</div> <br /> ";
                    } else {
                            echo "<div> Please insert your name and age! </div>";
                    }
                }
                ?> 
                </div>
                
            <!-- Div with hobby -->
                <div>
                    <?php
                    if (isset ($_GET["submit"]))
                    {
                    if ($_GET["hobby"]){
                    echo "Your hobby is:  ". $_GET['hobby']. " ";
                    } else {
                    echo "Please type your hobby!";
                    }
                    }        
                    ?>
                </div>
        </div> 
        <!-- row div -->
    </div>
    <!-- container div -->

    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>