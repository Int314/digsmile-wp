<?php get_header(); ?>
<main>
    <section class="section-wrapper">
        <div class="content-wrapper">
            <h1 class="section-title">
                <?php the_title(); ?>
            </h1>
            <time class="topics-date">
                <?php the_date(); ?>
            </time>
            <?php the_content(); ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>