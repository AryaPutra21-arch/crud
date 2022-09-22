<?php

$db_servername = 'localhost';
$db_username = 'root';
$db_password = '';
$db_name = 'db_sekolah';

$db = mysqli_connect($db_servername,$db_username,$db_password,$db_name);
// if($db){
//     echo 'connect';
// }

function read($a){
    global $db;
    $sql = "SELECT *  FROM $a ";
    $result = mysqli_query($db, $sql);
    return $result;
}

function readcondition($a,$b){
    global $db;
    $sql = "SELECT * FROM $a WHERE $b";
    $result = mysqli_query($db, $sql);
    return $result;
}

function create($a,$b,$c){
    global $db;
    $sql = "INSERT INTO `user` (`id`, `username`, `kegiatan`, `nim`) VALUES (NULL, '$a', '$b',`$c`);";
    $result = mysqli_query($db, $sql);
}

function update($a,$b,$c,$d){
    global $db;
    $sql = "UPDATE `user` SET `username` = '$a', `kegiatan` = '$b', `nim` = `$c`, WHERE `id` = '$d';";
    $result = mysqli_query($db, $sql);
}

function delete($a){
    global $db;
    $sql = "DELETE FROM `user` WHERE `id`='$a'";
    $result = mysqli_query($db, $sql);
}

?>