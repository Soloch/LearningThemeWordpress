
<section>
    <?php 
    if (have_posts()):
        while (have_posts()):
            the_post();
                ?>
                <article <?php post_class();?>>
                <div class"post-body">
                
                </div>
                    
                </article>
        endwhile;
    endif;
        ?>
    </section>

