<!-- 投稿ページのテンプレート -->
<?php get_header(); ?>
<main>
    <p><?php echo get_the_date(); ?></p>
    <h1><?php the_title(); ?></h1>
    <div>
    </div>
    <?php the_content(); ?>
</main>
<?php get_footer(); ?>