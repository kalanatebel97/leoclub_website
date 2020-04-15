<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ngo_charity_lite
 */

global $post;
$post_format = get_post_format($post->ID);

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    ngo_charity_lite_blog_post_format($post_format, $post->ID);
    ?>
    <div class="post-bg">
        <header class="entry-header">
            <?php
            if ( is_singular() ) :
                the_title( '<h1 class="entry-title">', '</h1>' );
            else :
                the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
            endif;

            if ( 'post' === get_post_type() ) : ?>
                <div class="entry-meta">
                    <div class="metabar-wrap">
                    <span class="byline"><i class="fa fa-user" aria-hidden="true"></i>
                        <span class="author vcard">
                            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html(get_the_author()); ?></a>
                        </span>
                    </span>
                        <span class="article-full-date">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <a href="<?php echo esc_url(ngo_charity_lite_archive_link($post)); ?>"><?php echo esc_html(get_the_date('F d, Y')); ?></a>
                    </span>
                        <span class="post-like-count">
                        <i class="fa fa-comments" aria-hidden="true"></i>
                        <a href="<?php echo esc_url(get_comments_link()); ?>">
                            <?php
                            printf(/* translators: 1: number of comments */ _nx('%1$s Comment','%1$s Comments',get_comments_number(),'', 'ngo-charity-lite'), number_format_i18n( get_comments_number() ));?>

                        </a>
                    </span>
                    </div>
                </div><!-- .entry-meta -->
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php

            global $numpages;
            if (is_archive() || is_home()):
                if($numpages>1 && $post_format != 'gallery'){
                    the_content(sprintf( wp_kses( __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'ngo-charity-lite'), array( 'span' => array( 'class' => array(), ),)),get_the_title()));
                }
                elseif(get_the_excerpt() && trim(get_the_excerpt()) != ""){
                    the_excerpt();
                }
                else{
                    echo wp_kses_post(ngo_charity_lite_get_excerpt($post->ID, 400));
                }
            else:
                the_content(sprintf(wp_kses(__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'ngo-charity-lite'),array('span' => array('class' => array(),),)),get_the_title()));
            endif;
            if(is_single()) {
                wp_link_pages(array(
                    'before' => '<div class="page-links">' . esc_html__('Pages:', 'ngo-charity-lite'),
                    'after' => '</div>',
                    'link_before' => '<span>',
                    'link_after'  => '</span>',
                ));
            }
            ?>
        </div><!-- .entry-content -->


        <footer class="entry-footer">
            <?php ngo_charity_lite_entry_footer(); ?>
        </footer><!-- .entry-footer -->
    </div>
</article><!-- #post-<?php the_ID(); ?> -->
