<!-- superglobals are special variables provided by php which can be accessed form anywhere -->
<!--  -->
<!-- look thru documentataion for their details -->
<!--  -->
<!-- they start with "$_" and are mostly all Caps -->
<!--  -->
<!-- eg: "$_SERVER" is  a super global that contains info about the server -->


<?php

//create an dict to store data about the server

$myserver = [

        "name" => $_SERVER["SERVER_NAME"],
        "address"=> $_SERVER["SERVER_ADDR"],
        "server_software"=> $_SERVER["SERVER_SOFTWARE"],
        "current_script"=> $_SERVER["SCRIPT_NAME"],
        "script filename"=>$_SERVER["SCRIPT_FILENAME"],
        "php self"=>$_SERVER["PHP_SELF"],
        "document_root"=> $_SERVER["DOCUMENT_ROOT"],
        "http_host"=> $_SERVER["HTTP_HOST"],

];

$myclient = [

    "Client IP"=>$_SERVER["REMOTE_ADDR"],
    "remote port"=>$_SERVER["REMOTE_PORT"],
    "remote user"=>$_SERVER['REMOTE_USER'],
    "remote host"=>$_SERVER['REMOTE_HOST'],
    "client system info"=>$_SERVER['HTTP_USER_AGENT'],




];

// echo "<h2> Server Info</h2>";
// foreach($myserver as $key=>$value){
//     echo "<hf4> $key is $value </hf4>";
// }











?>
