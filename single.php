<?php get_header() ;?>

        <?php
        if(have_posts()){
            while(have_posts()){
                the_post();

        ?>

                <div class="container">
                    <div class="row">
                        <div class="single-post-left col-sm-9">
                            <!--Post TITLE-->
                            <h2 class="post-title">  <?php the_title(); ?> </h2>
                            <!--Main IMAGE-->
                            <?php the_post_thumbnail('' , ['class' => 'single-post-img' , 'alt'=>'post img']); ?>
                            <span>   || || || || || || || ||<br>
                                     \/ \/ \/ \/ \/ \/ \/ \/
                            </span>
                            <!--CONTENT -->
                            <div class="single-post-content">
                                <?php the_content(); ?>
                            </div>
                        </div>

                        <div class="single-post-left col-sm-3">

                            <div class="single-post-about">
                                <span><i class="fa-solid fa-pen fa-sm"></i>=>  <?php the_author(); ?></span>
                                <span><i class="fa-solid fa-calendar-days fa-sm"></i>=>  <?php the_date(); ?></span>
                                <span><i class="fa-solid fa-comments fa-sm"></i>=>  <?php comments_number(); ?></span>
                            </div>

                        </div>

                    </div>

                    <div class='pev-nex-post'>
                    <?php
                    if(get_previous_post_link()){
                        ?>
                        <div><?php  previous_post_link(); ?></div>
                    <?php 
                    }else{
                        echo '<span><i class="fa-brands fa-space-awesome fa-rotate-270"></i>  No PREV anymore </span>';
                    };

                    if(get_next_post_link()){
                        ?>
                         <div><?php   next_post_link();?></div>
                    <?php
                    }else{
                        echo '<span>You reached the big freeze <i class="fa-brands fa-space-awesome fa-rotate-90"></i></span>';
                    }
                    
                    ?>
                </div>

                </div>




        <?php   
            }
        }
        ?>



<?php get_footer() ;?>
