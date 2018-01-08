<?php

    get_header();

?>
<div class="posts">
       <?php
        if (have_posts()) : ?>
        
        <h2><?php
            
            if(is_category()){
               single_cat_title();
            }
            elseif(is_tag()){
                single_tag_title();
            }
            elseif(is_author()){
               the_post();
                echo 'Author Archief: ' . get_the_author();
                rewind_posts();
            }
            elseif(is_day()){
                echo "Dagelijks Archief: " . get_the_date();
            }
            elseif(is_month()){
                echo 'Maandelijks Archief: ' . get_the_date('F Y');
            }
            elseif(is_year()){
                echo 'Jaarliks Archief:' . get_the_date('Y');
            }
            else {
                echo 'archives:';
            }
            
            ?></h2>
        
       <?php while(have_posts()) : the_post(); ?>
       
        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
    <b> <?php echo date('l, F j, Y'); ?> </b>
       <div id="tags"><?php
echo get_the_tag_list('<p> #',', ','</p>');
           ?></div>
       <?php the_content(); ?>
       
       <?php endwhile;
        
        else : 
        echo '<p>no content</p>';
        endif;
     
       ?> 
</div> 
    <?php 
     get_footer();
     
?>