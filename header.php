<!DOCTYPE html>
<html lang="<?php language_attributes()?>">
<head>
    <?php wp_head();?>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="top-nav">
        <div class="container">
                <a href="<?php echo site_url("/")?>"><div class="brand"><?php bloginfo( "name" )?></div></a>
                <div class="menu-toolbar"><img src="<?php echo get_theme_file_uri( "/assets/icons/menu.svg")?>" alt="mobail-menu-btn" ></div>
                <nav>
                    <ul>
                        <li class="dropDown">
                            <span id="nav-diciplina-btn" class="dropDown-title">diciplinas</span>
                            <ul id="nav-diciplina-list">
                                <a href="#"><li>matematica</li></a>
                                <a href="#"><li>Fisica</li></a>
                            </ul>
                        </li>
                        <a href="#"><li>Exanes</li></a>
                        <a href="#"><li>Noticias</li></a>
                        <a href="#"><li>sobre me</li></a>
                    </ul>
                </nav>
        </div>
        </div>

        <div class="page-info">
            <div class="wrapper container">
                <div class="info">
                <?php theHeaderTitle();?>
                <?php theHeaderDesc();?>
                <div class="tags"><?php //is_single( ) ? the_tags('tags: '):"";?></div>
                </div>
                <div class="search">
                    <input type="search">
                    <div class="search-icon">
                        <img src="<?php echo get_theme_file_uri("/assets/icons/search.svg"); ?>" alt="search-icon">
                    </div class="search-icon">
                </div>
            </div>
        </div>

    </header>
