<?php
session_start();
if(!isset( $_SESSION['myusername'])){
    header("location:login.php");
}
else{
    $textsSize = count($_POST);
    $count = 1;

    $jsonString = "{\n";

    foreach($_POST as $key => $value){

        $jsonString = $jsonString.'"'.$key.'":"'.$value.'"';

        if ($count != $textsSize){
            $jsonString = $jsonString.',';
            $jsonString = $jsonString."\n";
        }
        $count++;
    }

    $jsonString = $jsonString."\n}";

    $writeJson = file_put_contents('texts.json', $jsonString);

    header("location:edit.php");
}


?>
