
<?php
/**
 * Created by PhpStorm.
 * User: santh
 * Date: 2/19/2017
 * Time: 12:33 AM
 */

require_once("populateData.php");




$mainArray;
addCollege("NYU",1,$mainArray);

if(md5($_GET["name"])=="25072b52beece80c4251b5125db3ef9f") {

    echo json_encode($mainArray);
}
else
{
    echo "LMAO BRO PLZ";
}

?>