<!-- WordPress の固定ページのテンプレート -->
<?php get_header(); ?>
<main>
    <h1>
        <?php the_title(); ?>
    </h1>
    <section>
        <div>
            <?php the_field('biography'); ?>
        </div>
        <div>
            <?php the_field('guide_start_date'); ?>
            <?php the_field('guide_end_date'); ?>
        </div>
    </section>
    <?php the_content(); ?>
</main>
<?php get_footer(); ?>