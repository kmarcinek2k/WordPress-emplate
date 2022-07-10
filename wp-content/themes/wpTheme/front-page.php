<?php get_header();?>
    <main>
    <?php
        if(have_posts() )   {
            while(have_posts()  ) {
                the_post();
                ?>
                <article>
                    <?php the_title('<h3>','</h3>'); ?>
                    <?php the_content(); ?>
                </article>
                <?php 
            }
        }else{
            echo "No posts to show";
        }
         
    ?>
    </main>
<?php get_footer();?>
