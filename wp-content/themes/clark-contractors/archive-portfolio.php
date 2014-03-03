<!-- get_header -->
<?php get_header(); ?>
<!-- END get_header -->         

            <!-- #content -->
            <div id="content">

                <!-- #inner-content -->
                <div id="inner-content" class="wrap clearfix">

                    <!-- #main -->
                    <div id="main" class="twelvecol first clearfix" role="main">

                        <!-- have_posts -->
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                        <!-- article -->
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">

                            <!-- .entry-content -->
                            <section class="entry-content clearfix portfolio-gallery">

                                <!-- PORTFOLIO PROJECT LINK -->
                                <a href="<?php the_permalink() ?>">

                                    <!-- .portfolio-project -->
                                    <figure class="portfolio-project">

                                        <!-- custom header -->
                                        <header class="portfolio-project-title">
                                            <h1 class="bigtext">
                                                <div>
                                                    <?php
                                                        global $post;
                                                            $text = get_post_meta( $post->ID, 'juroto_custom_header', true );
                                                        echo $text;
                                                    ?>
                                                </div>
                                            </h1>                                   
                                        </header> <!-- END custom header -->                                    

                                        <!-- the_excerpt -->
                                        <figcaption class="portfolio-project-excerpt">
                                            <?php the_excerpt(); ?>
                                        </figcaption> <!-- END the_excerpt -->

                                        <!-- .black-filter -->
                                        <div class="black-filter"></div>
                                        <!-- END .black-filter -->

                                        <!-- featured image -->
                                        <?php
                                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                                the_post_thumbnail('thumbnail-bw', array('class'=>'bw-image-fade'));
                                                the_post_thumbnail('thumbnail');
                                            } 
                                        ?> <!-- END featured image -->

                                    </figure> <!-- END .portfolio-project -->

                                </a> <!-- END PORTFOLIO PROJECT LINK -->

                            </section> <!-- END .entry-content -->

                        </article> <!-- END article -->

                        <?php endwhile; ?> <!-- END have_posts -->

                        <?php else : ?>

                            <!-- #post-not-found -->
                            <article id="post-not-found" class="hentry clearfix">
                                <header class="article-header">
                                    <h1><?php _e("Oops, Post Not Found!", "bonestheme"); ?></h1>
                                </header>
                                <section class="entry-content">
                                    <p><?php _e("Uh Oh. Something is missing. Try double checking things.", "bonestheme"); ?></p>
                                </section>
                                <footer class="article-footer">
                                    <p><?php _e("This is the error message in the custom posty type archive template.", "bonestheme"); ?></p>
                                </footer>
                            </article>

                        <?php endif; ?> <!-- END #post-not-found -->

                    </div> <!-- END #main -->

                </div> <!-- END #inner-content -->

            </div> <!-- END #content -->

<!-- get_footer -->
<?php get_footer(); ?>
<!-- END get_footer -->