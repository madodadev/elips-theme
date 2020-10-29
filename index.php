<?php get_header();?>
    <section class="main">
        <div class="container wrapper">
            <div class="top-post-container">
            <?php while(have_posts()):
                the_post();?>
                <?php get_template_part('template-parts/content');
                endwhile?>
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