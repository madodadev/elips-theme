<?php get_header();?>
    <section class="main">
        <div class="container wrapper">
            <div class="top-post-container">
            <?php 
            $disciPosts = getDisciPosts( get_the_ID() );
            while($disciPosts->have_posts()):
                $disciPosts->the_post();?>
                <?php get_template_part('template-parts/content');
            endwhile;?>
            </div>
            
            <aside>
                <div class="exame-container">
                <?php
                    while($newexames->have_posts()){
                        $newexames->the_post();
                            get_template_part('template-parts/content', "list");
                        }
                        wp_reset_postdata();
                ?>
                </div>
            </aside>
        </div>
    </section>               
<?php get_footer();?>
</body>
</html>