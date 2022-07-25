<?php
    session_start();
    function is_loggedin()
    {
        return  isset( $_SESSION['authenticated'] );
    }
?>
 