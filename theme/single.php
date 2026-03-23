<?php get_header(); ?>
<main id="main" class="site-main">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <div class="entry-meta">
                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                    <span class="byline"> by <?php the_author(); ?></span>
                </div>

                <div class="reading-time">
                    <?php echo esc_html( mh_reading_time() ); ?>
                </div>
            </header>

            <?php if ( has_post_thumbnail() ) : ?>
                <div class="entry-thumbnail">
                    <?php the_post_thumbnail( 'large' ); ?>
                </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php the_content(); ?>
            </div>

            <footer class="entry-footer">
                <?php the_category( ', ' ); ?>
                <?php if ( has_tag() ) : ?>
                    <div class="entry-tags">
                        <?php the_tags( 'Tags: ', ', ' ); ?>
                    </div>
                <?php endif; ?>
            </footer>

        </article>
        <?php
    endwhile;
    ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
