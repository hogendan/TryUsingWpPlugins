<?php
// アイキャッチを有効化
add_theme_support('post-thumbnails');
add_image_size('post-thumbnails', 400, 200, false);

function Titles()
{
    $title = wp_title(' | ', true, 'right');
    if (is_home()) {
        echo 'サイト名 | サイトのキャッチコピー';
    } else {
        echo $title . 'サイト名 ';
    }
};
