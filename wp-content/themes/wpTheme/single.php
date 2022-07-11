<?php get_header(); ?>
<main>
    <?php
        if(have_posts() )   {
            while(have_posts()  ) {
                the_post();
                if(in_category("Testowa_kategoria")){
                ?>
                <article>
                    <?php get_template_part('template-parts/content',get_post_format(););?>
                  
                </article>
                <?php 
                }
            }
        }else{
            echo "No posts to show";
        }
        ?>
    </main>
    <?php get_footer(); ?>