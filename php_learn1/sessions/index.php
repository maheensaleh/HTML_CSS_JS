<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>


<!-- ======================== PHP =========================== -->
<?php

    // if (filter_has_var(INPUT_GET,"name") AND (filter_has_var(INPUT_GET,"email")) AND (filter_has_var(INPUT_GET,"contact_no")) ){
    //     echo "all data provided";
    // }
    // else {
    //     echo "incomplete data";
    // }

    if ( isset($_GET['name']) AND isset($_GET['email']) AND isset($_GET['contact_no'])){

        $name=htmlentities($_GET['name']);
        $email=htmlentities($_GET['email']);
        $contact_no=htmlentities($_GET['contact_no']);
        $Complete;
    
        if ( !empty($name) AND (!empty($email)) AND (!empty($contact_no)) ){
            // echo "complete data";nkn
            $Complete=true;

            //when form successfully submitted
            if (isset($_GET['submit'])){
                echo "form submitted";

                session_start();
                    $_SESSION['name']=$name;
                    $_SESSION['email']=$email;
                    $_SESSION['contact_no']=$contact_no;

                    $alldata =[
                        'name'=>$name,
                        'contact_no'=>$contact_no
                    ];
                    $_SESSION['alldata']=serialize($alldata); //cz can only save strings in session 

                header('Location: welcome.php');

            }

        }

        else {
            // echo "incomplete data";
            $Complete=false;
        }
    }

    ?>


<!-- =================================HTML =========================== -->

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


        <?php if (isset($Complete) AND ($Complete)): ?>
            <div>
                <div class="alert alert-success" role="alert">
                Form successfully submited !
                </div>
            </div>
        <?php elseif (isset($Complete) AND !$Complete): ?>
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
                <input type="text" name="name" class="form-control" aria-describedby="emailHelp"
                    value="<?php  echo isset($_GET['name']) ? $_GET['name']: "" ?>"
                >
            </div>

            <div class="form-group">
                <label >Contact No.</label>
                <input type="number" name="contact_no" class="form-control"  aria-describedby="emailHelp"
                value="<?php  echo isset($_GET['contact_no']) ? $_GET['contact_no']: "" ?>">

            </div>

            <div class="form-group">
                <label >Email address</label>
                <input type="email" name ="email" class="form-control"  aria-describedby="emailHelp"
                value="<?php  echo isset($_GET['email']) ? $_GET['email']: "" ?>">

            </div>

            <button type="submit" class="btn btn-dark" name='submit'>Submit</button>
        </form> 
        </div>     

        <script src="" async defer></script>
    </body>
</html>