<?php get_header(); ?>
<main class="px-margin-mobile md:px-margin-desktop max-w-container-max mx-auto py-24">
    <?php if (have_posts()): while (have_posts()): the_post(); ?>
        <article class="prose prose-lg mx-auto">
            <h1 class="font-display-lg-mobile text-display-lg-mobile md:font-display-lg md:text-display-lg text-primary mb-6"><?php the_title(); ?></h1>
            <div class="text-on-surface text-body-lg">
                <?php the_content(); ?>
            </div>
        </article>
    <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
