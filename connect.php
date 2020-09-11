<?php
    
    $conn = mysqli_connect('localhost','root');
    
    mysqli_select_db($conn,'mrbean');

    if($conn) {
        echo "connected";
    }else{
        echo "not connected";
    }

?>