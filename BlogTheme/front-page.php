<?php get_header();?>

<div class="container pt-5 pb-5 BlockPost">
    <div style="width: 100%; padding-top:65px">
        <div style="width: 50%;  float: left; color: white; margin-left:175px;">
            <?php $the_query = new WP_Query(array(
                'category_name' => 'ThreePosts',
                'post_status' => 'publish',
                'posts_per_page' => 3,
            ));
            ?>
            <?php if ($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();?>
            <?php the_post_thumbnail( 'medium_large' );?>
            <p style="font-size:30px"><?php the_title();?></p>
            <?php the_excerpt();?>
            <?php endwhile; endif;?>
        </div>
        <div style="margin-left: 5%; height: 100px; color: white; float:left; width:325px"> 
            <input type="text" id="fname" name="fname" value="Search" size="35" style="font-style:italic;" ><br>
            <img style="width:93%;padding-top:25px;"src="../Resources/Images/hamburguesa14.jpg" alt="Ibra's Logo">
            <table class="menubutton" style="margin:0px" ><tr><td><a href="../Menu.html" class="menu_button" style="padding:15px 91px; margin-left:0px; margin-bottom:25px">VER MENÚ HOY</a></td></tr></table>
            <?php $the_query = new WP_Query(array(
                'category_name' => 'Uncategorized',
                'post_status' => 'publish',
                'orderby'   => 'rand',
                'posts_per_page' => 4,
            ));
            ?>
            <?php if ($the_query->have_posts()) : while($the_query->have_posts()) : $the_query->the_post();?>
            <?php the_post_thumbnail( 'thumbnail' );?>
            <p style="font-size:30px"><?php the_title();?></p>
            <?php the_excerpt();?>
            <?php endwhile; endif;?>
            <img style="width:93%;padding-top:25px;"src="../Resources/Images/hamburguesa19.jpg" alt="Ibra's Logo">
        </div>
    </div>
</div>
<?php get_footer();?>
