<!DOCTYPE html>
<html lang="<?php bloginfo('launguage') ?>">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php Titles() ?></title>
    <meta name="description" content="<?php bloginfo('description') ?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/post.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <p>サイトタイトル</p>
        <div>ガイド日付<?php echo do_shortcode('[ivory-search id="15" title="Search Form Guide Date"]'); ?></div>
        <nav>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="/my-content/">MyContent</a></li>
            </ul>
        </nav>
    </header>