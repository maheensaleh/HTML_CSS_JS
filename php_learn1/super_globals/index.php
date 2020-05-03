<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Server Info</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>
    <body>
    <?php include"server_info.php"; ?>

    <!-- ----------------------------------- -->
    <h1 style="text-align:center">Server Information</h1>

    <div class="container">
    <ul class= "list-group">
        <?php foreach($myserver as $k => $v):?>

            <li class= "list-group-item">
                <strong><?php echo "$k -  ";?></strong>
                <?php echo " $v" ;?>
            </li>
        <?php  endforeach; ?>
        </ul>
    </div>
    <!-- ------------------------------- -->
        

    <h1 style="text-align:center">Client Information</h1>

    <div class="container">
    <ul class= "list-group">
        <?php foreach($myclient as $k => $v):?>

            <li class= "list-group-item">
                <strong><?php echo "$k -  ";?></strong>
                <?php echo " $v" ;?>
            </li>
        <?php  endforeach; ?>
        </ul>
    </div>

<!-- ---------------------- -->
    
        <script src="" async defer></script>
    </body>
</html>