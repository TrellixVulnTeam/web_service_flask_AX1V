<?php 
    session_start();
    $account = $_SESSION['account'];

    echo "<script>alert('Successfully Logout!!'); location.href = 'index.html';</script>";
    
    session_destroy();

?>
