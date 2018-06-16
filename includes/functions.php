<?php


function clean($user_input) {
    $clean_input = htmlspecialchars( htmlentities($user_input) );
    return $clean_input;
}



?>