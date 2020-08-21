<?php

    // db connedct
    require('config/db_connect.php');
    require('config/urls.php');
    // query 
    $query1 = "SELECT * FROM Posts";

    // pass query to db
    $result  = mysqli_query($connect,$query1);
    $tuples = mysqli_fetch_all($result,MYSQLI_ASSOC);

    mysqli_free_result($result);
    

    //method 01 for displaying query data

    //     foreach($tuples as $tuple){
    //     $c =0;
    //     foreach($tuple as $record){
    //         if ($c==0){
    //             echo "<ul>Blog No : ", $record;
    //             $c+=1;
    //         }
    //         else{
    //             echo "<li>",$record,"</li>";

    //         }
    //         echo "</ul>";
    //     }
    //  }



?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Blogs</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1 align='center'>My Blogs</h1>

<!-- proper way of displaying data with html -->

        <?php foreach($tuples as $tuple): ?>

                <div>
                    <h3> <strong>Title : </strong><?php echo $tuple['Title'] ?></h3>
                    <li>Created on : <?php echo $tuple['Date'] ?></li>
                    <li>Author  : <?php echo $tuple['Author'] ?></li>
                    <a href="<?php echo ROOT_URL ?>single_post.php?id=<?php echo $tuple['ind']; ?>"> <strong>See Post</strong></a>
                </div>

        <?php endforeach ?>



        <script src="" async defer></script>
    </body>
</html>

