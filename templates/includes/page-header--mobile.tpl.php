<?php
/**
 * @file
 * page-header.tpl.php - Returns the HTML of the page header for mobile
 */
?>

<div class="mm-header">
    <a href="/" aria-label="homepage">
        <img src="/<?php print path_to_theme(); ?>/img/logo-afma.svg" class="afma-logo" alt="Australian Fisheries Management Authority"/>
    </a>
    <a href="#" class="search-btn" id="search-btn">
        <i class="far fa-search"></i>
    </a>

    <a href="#menu" class="mob-menu">
        <i class="fal fa-bars"></i>
    </a>

    <div class="search" id="mob-search-popup">
        <i class="fal fa-times" id="close-btn"></i>
        <?php print $search_box_mobile; ?>
    </div>
</div>