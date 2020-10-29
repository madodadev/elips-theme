<?php get_header();?>
<section class="main">
<div class="container wrapper">

    <div class="top-post-container">
        <h3 class="section-title">Posts Novos</h3>
        <?php
        while($newposts->have_posts()){
            $newposts->the_post();
                get_template_part('template-parts/content');
            }
            wp_reset_postdata();
            
        ?>
    </div>

    <aside>
        <div class="exame-container">
            <div style="height:250px;background-color:red;width:100%;padding:10px;"></div>
            <?php
            while($newexames->have_posts()){
                $newexames->the_post();
                    get_template_part('template-parts/content', "list");
                }
                wp_reset_postdata();
            ?>
            <div style="height:250px;background-color:red;width:100%;padding:10px;"></div>
        </div>
    </aside>
</div>
</section>

<section class="main">
<div class="container wrapper">

    <div class="top-post-container">
        <h3 class="section-title">Posts Populares</h3>
        <?php
        while($topposts->have_posts()){
            $topposts->the_post();
                get_template_part('template-parts/content');
            }
            wp_reset_postdata();
        ?>
    </div>

    <aside>
        <div class="exame-container">
            <div style="height:250px;background-color:red;width:100%;padding:10px;"></div>
            <?php
            while($topexames->have_posts()){
                $topexames->the_post();
                    get_template_part('template-parts/content', "list");
                }
                wp_reset_postdata();
            ?>
            <div style="height:250px;background-color:red;width:100%;padding:10px;"></div>
        </div>
    </aside>
</div>
</section>

<section class="sec">
    <div class="container">
        <div class="section-title">Disciplinas</div>
        <div class="wrapper">
            <?php while($disciplinas->have_posts()):
                $disciplinas->the_post();?>
                <a href="<?php echo get_the_permalink()?>"><div class="deci-title"><?php the_title()?></div></a>
            <?php endwhile;
            wp_reset_postdata();?>
        </div>
    </div>
</section>


<?php get_footer()?>