
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


echo json_encode($mainArray);

?>