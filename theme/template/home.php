<?php

/**
Template Name: Trang chủ
 */

get_header();
?>
<main>
    <?php get_template_part('components/home-slider')  ?>
    <?php get_template_part('components/offers-slider')  ?>
    <?php get_template_part('components/download-app')  ?>
    <?php get_template_part('components/chart')  ?>
    <?php get_template_part('components/block-news')  ?>
    <?php get_template_part('components/partner')  ?>
</main>
<?php
get_footer();