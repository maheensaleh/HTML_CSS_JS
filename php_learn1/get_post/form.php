
<?php 
    if (isset($_GET['name']) AND isset($_GET['email'])){
        $name  = $_GET['name'];
        $email = $_GET['email'];
        // echo "<h3>Hello $name</h3>";
    }

    // if (isset($_GET['username'])){
    //     $name  = $_GET['username'];
    //     echo "<h3>Hello $name</h3>";
    // }


    // if (isset($_POST['email'])){
    //     $email  = $_POST['email'];
    //     echo "<h3>your email is  $email</h3>";
    // }

    //request work sfor both get and post
    //     if (isset($_REQUEST['username'])){
    //     $username  = $_REQUEST['username'];
    //     echo "<h3>request  $username</h3>";
    //     print_r($_REQUEST);
    // }
?>

<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

    <h1> Login Page</h1>

    <!-- <form action="form.php" method = "GET">
        <div>
            <label>Username</label><br>
            <input type ="text" name = "username">
        </div>

        <div>
            <input type ="submit" name = "submit">
        </div>

    </form>

    <form action="form.php" method = "POST">

        <div>
            <label>Email_Id</label><br>
            <input type ="text" name = "email">
        </div>

        <div>
            <input type ="submit" name = "submit">
        </div>

    </form> -->
<!-- 
    <form action="form.php" method = "POST">
        <div>
            <label>Username</label><br>
            <input type ="text" name = "username">
        </div>

        <div>
            <label>Email_Id</label><br>
            <input type ="text" name = "email">
        </div>

        <div>
            <input type ="submit" name = "submit">
        </div>

    </form> -->

    <ul>
        <li>
            <a href = "form.php?name=Maheen&email=meme">See Maheen</a>
        </li>

        <li>
            <a href = "form.php?name=Sara&email=fsara1812">See Sara</a>
        </li>
    </ul>

    <?php

        echo "<h3>Hello {$name} , your email is {$email}</h3>";

    ?>

        <script src="" async defer></script>
    </body>
</html>