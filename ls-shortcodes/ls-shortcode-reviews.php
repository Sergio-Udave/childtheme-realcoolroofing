<?php

function ls_shortcode_reviews(){
    ob_start();

    echo 'okay i love you bye bye!';

    return ob_get_clean();
}
add_shortcode( 'ls_reviews','ls_shortcode_reviews' );