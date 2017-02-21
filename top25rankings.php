<?php

require_once("populateData.php");

if(md5($_GET["name"])=="25072b52beece80c4251b5125db3ef9f") {
    $array = parseTop25();
    if ($array != null) {
        echo json_encode($array);
    }
}
else
{
    echo "Don't be foolish lmao bro";
}




?>