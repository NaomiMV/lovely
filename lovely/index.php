<?php

    get_header();
      get_sidebar();
?>
<div class="posts">
       <?php
        if (have_posts()) :
       while(have_posts()) : the_post(); ?>
       
        <h3><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h3>
    <b> <?php echo date('l, F j, Y'); ?> </b>
       <div id="tags"><?php
echo get_the_tag_list('<p> #',', ','</p>');
           ?></div>
       <?php the_content( $more_link_text , $strip_teaser ); ?>
       
       <?php endwhile;
        
        else : 
        echo '<p>no content</p>';
        endif;
     
       ?> 
</div> 
    <?php 
     get_footer();
     
?>