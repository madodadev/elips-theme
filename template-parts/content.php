<article class="main">
    <h3 class="title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h3>
    <samp class="post-info"><?php echo getPostLinkTree();?> by: <?php the_author_posts_link();?></samp>
    <p class="short-content"><?php echo get_the_excerpt();?></p>
    <a href="<?php the_permalink()?>">Ler mais</a>
    
</article>