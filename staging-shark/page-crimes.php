<?php
/*
Template Name: All Crimes
*/

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="home-hero">
            <h1 class="page-title">
				<?php the_title(); ?>
            </h1>
        </div>

        <div class="all-posts">

            <div class="new-posts">
		        <?php
		        $category_id_to_post     = 3;
		        $number_of_posts_to_show = 10;
		        include( locate_template( 'template-parts/loops/loop-sleuth.php' ) );
		        ?>
            </div>

        </div>
        

    </main><!-- #main -->
</div><!-- #primary -->

