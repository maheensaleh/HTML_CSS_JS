<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>

<?php

    // if (filter_has_var(INPUT_GET,"name") AND (filter_has_var(INPUT_GET,"email")) AND (filter_has_var(INPUT_GET,"contact_no")) ){
    //     echo "all data provided";
    // }
    // else {
    //     echo "incomplete data";
    // }

    if ( isset($_GET['name']) AND isset($_GET['email']) AND isset($_GET['contact_no'])){

        $name=$_GET['name'];
        $email=$_GET['email'];
        $contact_no=$_GET['contact_no'];
        $Complete;
    
        if ( !empty($name) AND (!empty($email)) AND (!empty($contact_no)) ){
            // echo "complete data";
            $Complete=true;

        }

        else {
            // echo "incomplete data";
            $Complete=false;
        }
    }


    ?>






    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div>
            <nav class="navbar navbar-dark bg-dark">
                <!-- Navbar content -->
                <a class="navbar-brand" href="#"><h2></h2>Contact Form</a>
            </nav>
        </div>


        <?php if ($Complete): ?>
            <div>
                <div class="alert alert-success" role="alert">
                Form successfully submited !
                </div>
            </div>
        <?php elseif (!$Complete): ?>
            <div>
                <div class="alert alert-danger" role="alert">
                Please provide all details !
                </div>
            </div>
        <?php endif ?>



        <div style="margin:30px">
        <form method="GET" action="<?php $_SERVER["PHP_SELF"] ?>">

            <div class="form-group">
                <label >Name</label>
                <input type="text" name="name" class="form-control" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label >Contact No.</label>
                <input type="number" name="contact_no" class="form-control"  aria-describedby="emailHelp">
            </div>

            <div class="form-group">
                <label >Email address</label>
                <input type="email" name ="email" class="form-control"  aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-dark">Submit</button>
        </form> 
        </div>     

        <script src="" async defer></script>
    </body>
</html>