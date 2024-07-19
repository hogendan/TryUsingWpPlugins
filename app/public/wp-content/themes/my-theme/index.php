<?php get_header(); ?>

<main>
</main>
<section>
    <?php if (have_posts()) : ?>
        <article>
            <?php while (have_posts()) : the_post(); ?>
                <?php if (has_post_thumbnail()) : ?>
                    <figure>
                        <?php the_post_thumbnail('post-thumbnails'); ?>
                    </figure>
                <?php else : ?>
                    <figure class="eyecatch">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/kenshin.jpg" alt="noimage" srcset="">
                    </figure>
                <?php endif; ?>
                <p><?php the_date(); ?></p>
                <h2><?php the_title(); ?></h2>
                <a href="<?php the_permalink(); ?>">詳細はこちら</a>
            <?php endwhile;
        else : ?>
            <p>投稿がないよ</p>
        </article>
    <?php endif; ?>
</section>

<?php get_footer(); ?>