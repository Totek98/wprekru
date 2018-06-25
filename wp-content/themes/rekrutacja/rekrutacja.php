<?php 
    /* Template Name: rekrutacja */
    get_header();
?>

    <div class="page_block">
        <div class="block">
            <div class="title">
                <span>BALTIC PARK POLO</span>
            </div>
            <div class="post_block">
                <?php $args = array('posts_per_page' => 1, 'category_name' => 'balticparkpolo'); query_posts($args);?>
                <?php if(have_posts()) : while (have_posts()) : the_post();?>

                    <div class="post_title">
                        <span><?php the_title(); ?></span>
                    </div>

                    <div class="text">
                        <?php the_content(); ?>
                    </div>

                <?php endwhile; else: ?>

                    <div>
                        <h2>Nic nie znaleziono.</h2>
                    </div>

                <?php endif;?>

                <div class="room_types">
                    <div class="title_room">
                        <span>Discover apartments & room</span>
                        <i class="fas fa-long-arrow-alt-down"></i>
                    </div>
                </div>
            </div>
            <div class="slider_container">
                <input type="radio" id="i1" name="images" checked />
                <input type="radio" id="i2" name="images" />
                <input type="radio" id="i3" name="images" />
                
                
                <?php $count = 1;
                $args = array('posts_per_page' => 3, 'category_name' => 'slideraparthotel'); query_posts($args);?>
                <?php if(have_posts()) : while (have_posts()) : the_post(); ?>

                    <div class="slide_block" id="<?php switch($count) { case 1: echo "one"; break; case 2: echo "two"; break; case 3: echo "three"; break;}?>">		
                        
                        <div class="slide_img">
                            
                        </div>

                        <div class="slide_mainblock">
                            <div class="slide_title"><?php the_title(); ?><br><br><i class="fas fa-utensils"></i></div>
                            <div class="slide_text"><?php the_content(); ?></div>
                        </div>

                        <div class="slide_img">
                            
                        </div>
                    
                        <label class="prev" for="i<?php if($count == 1) echo 3; else echo $count - 1 ?>"><span>&#x2039;</span></label>
                        <label class="next" for="i<?php if($count == 3) echo 1; else echo $count + 1 ?>"><span>&#x203a;</span></label>	
                    
                    </div>
                    <?php $count++; ?>
                <?php endwhile; else: ?>

                    <div>
                        <h2>Nic nie znaleziono.</h2>
                    </div>

                <?php endif;?>
                
            </div>
        </div>
        
    </div>

<?php get_footer(); ?>