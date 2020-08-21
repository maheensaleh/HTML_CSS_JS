<?php
    // db connedct
    require('config/db_connect.php');
    require('config/urls.php');
    //get post ind
    $ind = mysqli_escape_string($connect,$_GET['id']);
    echo $ind;
    // query 
    $query1 = "SELECT * FROM Posts WHERE ind=$ind";
    echo $query1;
    // pass query to db
    $result  = mysqli_query($connect,$query1);
    $tuples = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Post</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1 align='center'><?php echo $tuples['Title'] ?></h1>

<!-- proper way of displaying data with html -->

                <div>
                    <li>Created on : <?php echo $tuples['Date'] ?></li>
                    <li>Author  : <?php echo $tuples['Author'] ?></li>
                    <p> <?php echo $tuples['Body'] ?></p>
                </div>


                <a href = '<?php echo ROOT_URL ?>'><strong>BACK</strong></a>

        <script src="" async defer></script>
    </body>
</html>

