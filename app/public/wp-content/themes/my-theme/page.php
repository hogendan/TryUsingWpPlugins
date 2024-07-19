<!-- WordPress の固定ページのテンプレート -->
<?php get_header(); ?>
<main>
    <h1>
        <?php the_title(); ?>
    </h1>
    <div>
    </div>
    <?php the_content(); ?>
</main>
<?php get_footer(); ?>