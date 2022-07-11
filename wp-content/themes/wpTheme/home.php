<?php
    get_header('blog');

        if(have_posts() )   {
            while(have_posts()  ) {
                the_post();
                ?>
                <article>
                    <?php the_title('<h3>','</h3>'); ?>
                    <?php the_excerpt(); ?>
                    <?php the_shortlink( 'Read more', 'Go to ', '<span>', '</span>'); ?>
                </article>
                <?php 
                }
        }else{
            echo "No posts to show";
        }
    ?>
</body>
</html>