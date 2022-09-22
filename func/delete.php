<?php 

include "config.php"; 

if (isset($_GET['id'])) {
    $user_id = $_GET['id'];
    delete($user_id);
    header("Location: index.php?hapus=berhasil");
    
} 

?>
