<?php


        setcookie("last_search","maheen",time()+3600);
        echo "cookie set <br>";

        setcookie("last_search",false);
        echo "cookie unset <br>";
    


        if (isset($_COOKIE['last_search'])){
            echo "last search is ".$_COOKIE['last_search'];
        }
        else{
            echo "no last search";
        }


?>