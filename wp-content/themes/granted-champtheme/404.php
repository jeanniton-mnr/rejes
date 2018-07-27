<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package granted_champtheme
 */



get_header(); ?>

    <div class="granted-breadcroumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2><?php esc_html_e('Oops! That page can&rsquo;t be found', 'granted-champtheme'); ?></h2>
                    <?php if (function_exists('bcn_display')) bcn_display(); ?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="granted-internal-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <section class="error-404 not-found">

                        <div class="page-content">
                            <p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'granted-champtheme' ); ?></p>


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="widget widget_search">
                                        <?php get_search_form(); ?>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
                                </div>

                                <?php if(granted_champtheme_categorized_blog()) : ?>
                                <div class="col-md-4">
                                    <div class="widget widget_categories">
                                        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'granted-champtheme' ); ?></h2>
                                        <ul>
                                        <?php
                                            wp_list_categories( array(
                                                'orderby'    => 'count',
                                                'order'      => 'DESC',
                                                'show_count' => 1,
                                                'title_li'   => '',
                                                'number'     => 10,
                                            ) );
                                        ?>
                                        </ul>
                                    </div><!-- .widget -->
                                </div>
                                <?php endif; ?>

                                <div class="col-md-4">
                                    <?php
                                        /* translators: %1$s: smiley */
                                        $archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'granted-champtheme' ), convert_smilies( ':)' ) ) . '</p>';
                                        the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
                                    ?>
                                </div>
                            </div>

                            <div class="error-page-tag-cloud">
                                <?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
                            </div>

                        </div><!-- .page-content -->
                    </section><!-- .error-404 -->            
                </div>
            </div>          
        </div>
    </div>   
    
<?php
get_footer();
