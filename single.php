<?php get_header();?>
<?php
while(have_posts()):
    the_post();?>
        <section class="main">
        <div class="container wrapper">
            <div class="top-post-container">
                <article class="main">
                    <header>
                        <h1 class="title single-title"><?php the_title();?></h1>
                        <samp class="post-info">by: <?php the_author_posts_link(  )?> . <?php the_date( "M d, Y" );?></samp>
                    </header>

                    <?php if(get_the_post_thumbnail()):?>
                        <div class="post-thumbnail">
                            <img src="<?php echo get_the_post_thumbnail_url();?>" alt="<?php echo get_the_title()." IMG"?>">
                        </div>
                    <?php endif;?>
                    <div class="single-content"><?php echo get_the_content();?></div>
                </article>
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
<?php endwhile;?>                
<?php get_footer();?>