<?php
    get_header('blog');

        if(have_posts() )   {
            while(have_posts()  ) {
                the_post();
                if(in_category("Testowa_kategoria")){
                ?>
                <article>
                    <?php the_title('<h3>','</h3>'); ?>
                    <?php the_excerpt(); ?>

                    <?php get_template_part('template-parts/content', 'comments'); ?>
                </article>
                <?php 
                }
            }
        }else{
            echo "No posts to show";
        }

        //rewind_posts();
        wp_reset_postData();
        $newQuery = new Wp_Query([
            'post_type' => 'page'
        ] );
        if($newQuery -> have_posts() )   {
            while($newQuery -> have_posts()  ) {
                $newQuery -> the_post();
                if(!in_category("Testowa_kategoria")){
                ?>
                <article>
                    <?php the_title('<h3>','</h3>'); ?>
                    <?php the_excerpt(); ?>
                </article>
                <?php 
                }
            }
        }else{
            echo "No posts to show";
        }
        wp_reset_postData();
    ?>
</body>
</html>