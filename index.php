<?php

get_header();
?>



<div class="container">
    <div class="row justify-content-center">

<?php

if(have_posts()){

    while(have_posts()){//START LOOP OVER THE POSTS 
            the_post();
        ?>        

        <div class="col-sm-6">
            <div class="post">
                <h2 class="post-title">
                    <a href="<?php the_permalink();?>">
                    <?php the_title(); ?>
                </h2>
                </a>
                <div class="post-about">
                    <span><i class="fa-solid fa-pen fa-sm"></i><?php the_author_posts_link(); ?></span>
                    <span><i class="fa-solid fa-calendar-days fa-sm"></i><?php the_date(); ?></span>
                    <span><i class="fa-solid fa-comments fa-sm"></i><?php comments_number(); ?></span>
                </div>
                <?php the_post_thumbnail('' , ['class' => 'post-img' , 'alt'=>'post img']); ?>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
                <hr>
                <p><i class="fa-solid fa-tags fa-sm"></i> <?php the_category(' | '); ?></p>
                <p><i class="fa-brands fa-space-awesome"></i> <?php the_tags();?>  </p>

            </div>
        </div>

<?php
    }//END LOOP ON POSTS 


}//END IF CONDITION   
?>

    

    </div>

                <div class='pev-nex-post'>
                    <?php
                    if(get_previous_posts_link()){
                        previous_posts_link('<i class="fa-brands fa-space-awesome fa-rotate-270"></i>  PREV');
                    }else{
                        echo '<span><i class="fa-brands fa-space-awesome fa-rotate-270"></i>  No PREV anymore </span>';
                    };

                    if(get_next_posts_link()){
                        next_posts_link('NEXT <i class="fa-brands fa-space-awesome fa-rotate-90"></i>');
                    }else{
                        echo '<span>You reached the big freeze <i class="fa-brands fa-space-awesome fa-rotate-90"></i></span>';
                    }
                    
                    ?>
                </div>
</div>

<?php get_footer();?>