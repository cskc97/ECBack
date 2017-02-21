<?php
/**
 * Created by PhpStorm.
 * User: santh
 * Date: 2/19/2017
 * Time: 12:29 AM
 */


function addCollegeRanking($collegeName,$ranking,&$array) //passing by reference
{

    $subArray["college_name"]=$collegeName;
    $subArray["ranking"]=$ranking;
    $array[] = $subArray;




}

function parseTop25()
{
    $returnArray = array();
    $fileName = "top25colleges.txt";
    $fileConnection = fopen($fileName,"r");
    if( $fileConnection == false ) {
        echo ( "Error in opening file" );
        exit();
    }
    $junkline = fgets($fileConnection);
    while(!feof($fileConnection))
    {
        $realLine = fgets($fileConnection);
      //  echo $realLine."<br>";

        $mainArray = explode('.',$realLine);

     //   echo print_r($mainArray);

        $subArray["ranking"]=$mainArray[0];
        $subArray["college"]=trim($mainArray[1]);
        $returnArray[] = $subArray;



    }

    fclose($fileConnection);

    if($returnArray!=NULl)
    {
        return $returnArray;
    }
    else
    {
        return null;
    }






}


?>

