<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Next</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>

<?php
    session_start();

    $name = "Guest";

    if (!isset($_GET['logout'])){

        if (isset($_GET['rename']) AND !empty($_GET['rename'])){
            $name = $_GET['rename'];
            $_SESSION['name']=$name;
        }

        else{

        $name = isset($_SESSION['name']) ? $_SESSION['name'] : "Guest";

        }
    }

    else {
        unset($_SESSION['name']);
    
}
?>



    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div>
            <nav class="navbar navbar-dark bg-dark">
                <!-- Navbar content -->
                <a class="navbar-brand" href="#"><h2></h2><?php echo "Welcome ".$name?></a>
            </nav>
        </div>


        <div style="margin:30px">
        <form method="GET" action="<?php $_SERVER["PHP_SELF"] ?>">

            <div class="form-group">
                <label >New Name</label>
                <input type="text" name="rename" class="form-control" aria-describedby="emailHelp"
                    value="<?php  echo isset($_GET['rename']) ? $_GET['rename']: "" ?>"
                >
            </div>

            <button type="submit" class="btn btn-dark" name='submit'>Rename</button>
        </form> 
        </div>    

        <div>
            <a href="welcome.php" ><h4>go to welcome page</h4></a>
        </div>

        <form method="GET" action="<?php $_SERVER["PHP_SELF"] ?>">

<button type="submit" class="btn btn-dark" name='logout'>Logout</button>
</form> 

        
        <script src="" async defer></script>
    </body>
</html> 