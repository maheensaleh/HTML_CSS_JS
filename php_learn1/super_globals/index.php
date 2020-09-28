
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