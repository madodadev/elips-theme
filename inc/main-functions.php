<?php
function getPostLinkTree() {
    //echo "fisica > sinematica > velocidade by: user";
    if (  false ) {
        $disciName = get_field("disciplina")[0]->post_title;
        $disciLink = get_field("disciplina")[0]->guid;

        $catName = get_the_category()[0]->name;
        $catLink = get_category_link( get_the_category()[0] );

        $disci = "<a href='$disciLink'>$disciName</a>";
        $cat = "<a href='$catLink'>$catName</a>";
        return $disci." > ".$cat;
    }
    return get_field("disciplina");
}

function theHeaderTitle() {
    if( is_front_page() ) {
        echo "<h1 class='page-info-title'>Home</h1>";
        return;
    }
    if( is_page() ) {
        echo "<h1 class='page-info-title'>".get_the_title()."</h1>";
        return;
    }
    
    if( is_archive() ) {
        echo "<h1 class='page-info-title'>".get_the_archive_title()."</h1>";
        return;
    }
    if( is_single() ) {
        echo "<div class='single-info-title'>".getPostLinkTree()."</div>";
        return;
    }else{
        echo "<h1 class='page-info-title'>".get_the_title()."</h1>";
    }

}

function theHeaderDesc() {
    if( get_the_category()[0]->description && is_single() ) {
        echo "<p class='description'>".get_the_category()[0]->description."</p>";
    }elseif ( is_archive(  ) && get_the_archive_description() ) {
        echo get_the_archive_description();
    }else {
        echo "<p class='description'>".get_bloginfo( "description" )."</p>";
    }

}