<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 *
 * @package WPL Summit Child Theme
 */

get_header();
?>

<div class="wpl-section">
    <div class="container">
        <div class="row">
            <div class="content-area">
                <?php if ( have_posts() ) : ?>
                    
                    <header class="page-header">
                        <h1 class="page-title">
                            <?php
                            if ( is_home() ) {
                                echo 'Latest News';
                            } elseif ( is_archive() ) {
                                the_archive_title();
                            } elseif ( is_search() ) {
                                printf( 'Search Results for: %s', get_search_query() );
                            } else {
                                echo 'Blog';
                            }
                            ?>
                        </h1>
                    </header>

                    <div class="posts-grid">
                        <?php
                        while ( have_posts() ) :
                            the_post();
                            ?>
                            
                            <article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
                                <?php if ( has_post_thumbnail() ) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'medium' ); ?>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    
                                    <div class="post-meta">
                                        <span class="post-date">
                                            <?php echo get_the_date(); ?>
                                        </span>
                                        <span class="post-author">
                                            By <?php the_author(); ?>
                                        </span>
                                    </div>
                                    
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" class="read-more btn-wpl-primary">
                                        Read More
                                    </a>
                                </div>
                            </article>
                            
                        <?php endwhile; ?>
                    </div>

                    <div class="posts-navigation">
                        <?php
                        the_posts_pagination( array(
                            'mid_size'  => 2,
                            'prev_text' => __( 'Previous', 'wpl-summit' ),
                            'next_text' => __( 'Next', 'wpl-summit' ),
                        ) );
                        ?>
                    </div>

                <?php else : ?>
                    
                    <div class="no-posts">
                        <h2>No posts found</h2>
                        <p>Sorry, no posts matched your criteria.</p>
                        <a href="<?php echo home_url(); ?>" class="btn-wpl-primary">Return to Homepage</a>
                    </div>

                <?php endif; ?>
            </div>

            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                <aside class="sidebar">
                    <?php dynamic_sidebar( 'sidebar-1' ); ?>
                </aside>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php
get_footer();
