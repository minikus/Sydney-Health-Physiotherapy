<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package VW Fitness
 */

get_header(); ?>

<div id="mainpostbox">
    <div class="container">
        <?php
        $left_right = get_theme_mod( 'vw_fitness_theme_options','One Column');
        if($left_right == 'Left Sidebar'){ ?>
            <div class="row">
                <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
                <div class="col-md-8">
                    <h1 class="entry-title"><?php printf( esc_html('Results For: %s', 'vw-fitness' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                    /* Start the Loop */
                    
                        while ( have_posts() ) : the_post();

                            get_template_part( 'template-parts/content' , get_post_format() ); 
                    
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'vw-fitness' ),
                                'next_text'          => __( 'Next page', 'vw-fitness' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-fitness' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        <?php }else if($left_right == 'Right Sidebar'){ ?>
            <div class="row">
                <div id="blog_fit" class="hospi-blog col-md-8 col-sm-8">
                     <h1 class="entry-title"><?php printf( esc_html('Results For: %s', 'vw-fitness' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                          get_template_part( 'template-parts/content' , get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'vw-fitness' ),
                                'next_text'          => __( 'Next page', 'vw-fitness' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-fitness' ) . ' </span>',
                            ) );
                        ?>
                          <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
            </div>
        <?php }else if($left_right == 'One Column'){ ?>            
                <h1 class="entry-title"><?php printf( esc_html('Results For: %s', 'vw-fitness' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                <?php if ( have_posts() ) :
                    /* Start the Loop */
                      
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/content' , get_post_format()  ); 
                      
                    endwhile;
                    wp_reset_postdata();
                    else :

                        get_template_part( 'no-results' ); 

                    endif; 
                ?>
                <div class="navigation">
                    <?php
                        // Previous/next page navigation.
                        the_posts_pagination( array(
                            'prev_text'          => __( 'Previous page', 'vw-fitness' ),
                            'next_text'          => __( 'Next page', 'vw-fitness' ),
                            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-fitness' ) . ' </span>',
                        ) );
                    ?>
                    <div class="clearfix"></div>
                </div>           
      <?php }else if($left_right == 'Three Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                <div class="col-md-6 col-sm-6">
                     <h1 class="entry-title"><?php printf( esc_html('Results For: %s', 'vw-fitness' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                          get_template_part( 'template-parts/content' , get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'vw-fitness' ),
                                'next_text'          => __( 'Next page', 'vw-fitness' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-fitness' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
           </div>
        <?php }else if($left_right == 'Four Columns'){ ?>
            <div class="row">
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-1' ); ?></div>
                <div class="col-md-3 col-sm-3">
                     <h1 class="entry-title"><?php printf( esc_html('Results For: %s', 'vw-fitness' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                          get_template_part( 'template-parts/content' , get_post_format() ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'vw-fitness' ),
                                'next_text'          => __( 'Next page', 'vw-fitness' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-fitness' ) . ' </span>',
                            ) );
                        ?>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-2' ); ?></div>
                <div id="sidebar" class="col-md-3 col-sm-3"><?php dynamic_sidebar( 'sidebar-3' ); ?></div>
            </div>
        <?php }else if($left_right == 'Grid Layout'){ ?> 
            <div class="row">       
                <div class="col-md-8 col-sm-8">
                     <h1 class="entry-title"><?php printf( esc_html('Results For: %s', 'vw-fitness' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1>
                    <?php if ( have_posts() ) :
                        /* Start the Loop */
                          
                        while ( have_posts() ) : the_post();

                          get_template_part( 'template-parts/grid-layout' ); 
                          
                        endwhile;
                        wp_reset_postdata();
                        else :

                            get_template_part( 'no-results' ); 

                        endif; 
                    ?>
                    <div class="navigation">
                        <?php
                            // Previous/next page navigation.
                            the_posts_pagination( array(
                                'prev_text'          => __( 'Previous page', 'vw-fitness' ),
                                'next_text'          => __( 'Next page', 'vw-fitness' ),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-fitness' ) . ' </span>',
                            ) );
                        ?>
                          <div class="clearfix"></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4"><?php get_sidebar(); ?></div>
            </div>
        <?php } ?>
    </div>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>