<?php

    if (isset($_GET['submit'] )){
        if (isset($_GET['search']) AND !empty($_GET['search'])){
        
        setcookie("last_search",$_GET['search'],time()+36000);
        header('Location: page2.php');
    }}

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Page1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <div style="margin:30px">
            <form method = "GET">
            
            <div>
                <label>Enter to search</label>
                <input type="text" name = "search">
            </div>

            <div>
                <button type="submit" name = "submit" class="btn btn-dark">Search</button>
            </div>

            
            </form>

        
        </div>

        
        <script src="" async defer></script>
    </body>
</html>