<?php get_header(); ?>
<main id="main" class="site-main">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <header class="entry-header">
                <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                <div class="last-updated">
                    <?php
                    $updated = get_the_modified_date();
                    $published = get_the_date();
                    if ( $updated !== $published ) :
                        echo 'Updated: ' . esc_html( $updated );
                    endif;
                    ?>
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

            <?php if ( is_active_sidebar( 'child-sidebar-1' ) ) : ?>
                <div class="child-sidebar">
                    <?php dynamic_sidebar( 'child-sidebar-1' ); ?>
                </div>
            <?php endif; ?>

        </article>
        <?php
    endwhile;
    ?>
</main>
<?php get_footer(); ?>