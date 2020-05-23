<html>


<?php if (isset($_GET["emailid"])): ?>
<h4>your email has been saved as :<?php echo $_GET["emailid"] ?></h4>
<?php endif ?>


<!-- filter has var is alternate of isset -->
<?php if (filter_has_var(INPUT_GET,'emailid'))  :?>
<h4>Filter has vaiable :<?php echo $_GET["emailid"] ?></h4>
<?php endif ?>


<!-- to validae email format -->
<?php if (filter_input(INPUT_GET,'emailid',FILTER_VALIDATE_EMAIL))  :?>
<h4>Email validated as:<?php echo $_GET["emailid"] ?></h4>
<?php endif ?>


<!-- remove irregular charcters -->
<?php $sanitizd = filter_var($_GET["emailid"],FILTER_SANITIZE_EMAIL)?>
<h4>Sanitized :<?php echo $sanitizd ?></h4>
<?php if (filter_input(INPUT_GET,$sanitizd,FILTER_VALIDATE_EMAIL))  :?>
<h4>Sanitized :<?php echo $sanitizd ?></h4>
<?php endif ?>

<!-- validate and sanitize integers -->
<!-- filter special characters -->



<form action="validation_filters.php" method="GET">

<div>
<label>Enter Email ID</label>
<input input type ="text" name = "emailid">
</div>

<div>
    <input type ="submit" name = "submit">
</div>



</form>

</html>