<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Snippets</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="my_css/basic.css">
    </head>


    <body>

        <!-- create a navbar -->

        <!-- add post form -->
        
        <h1>Snippets</h1>

        <form class="form">

            <div class="form-grp">
                <label>Title</label>
                <input type=text placeholder="Post Title"/>
            </div>

            <div class="form-grp">
                <label>Message</label>
                <textarea></textarea>
            </div>

            <div class="form-grp">
                <input type="submit" value = "Post"/>
            </div>
        </form>


        <?php for($i=1; $i<=3;$i++): ?>
        <div class="top-posts">
            <h2> Part <?php echo $i ?></h2>
                <p >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam error hic delectus mollitia eveniet placeat, modi cumque earum repellendus? Voluptatum sequi consectetur expedita doloremque laboriosam sit veniam beatae vero nobis!
                </p>
        </div>
        <?php endfor ?>

        <div class='clr'></div>

        <?php for($i=1; $i<=3;$i++): ?>
        <div class="clr posts">
            <h2> Part <?php echo $i ?></h2>
                <p >
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam error hic delectus mollitia eveniet placeat, modi cumque earum repellendus? Voluptatum sequi consectetur expedita doloremque laboriosam sit veniam beatae vero nobis!
                </p>
        </div> 
        <?php endfor ?>         




        <footer>
            <small>HTML - CSS - CODE SNIPPETS</small>
        </footer>



        <script src="" async defer></script>
    </body>

</html>




