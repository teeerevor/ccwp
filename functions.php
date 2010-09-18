<?php

/*
WordPress Vibrant Theme
*/

/*
Register two sidebars
*/
if (function_exists('register_sidebars')) {
	register_sidebars(2);
}

function the_category_unlinked($separator = ' ') {
    $categories = (array) get_the_category();

    $thelist = '';
    foreach($categories as $category) {    // concate
        $thelist .= $separator . $category->category_nicename;
    }

    echo $thelist;
}


?>
