<?php

add_action('after_setup_theme', function () {
    set_post_thumbnail_size(250,250,true);
    add_image_size('property-carousel', 777, 444, true);
    add_image_size('property-thumbnail', 385, 220, true);
    add_image_size('property-thumbnail-large', 802, 220, true);
});