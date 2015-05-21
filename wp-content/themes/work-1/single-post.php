<?php get_header(); ?>
<div class="content-area clearfix">
    <?php the_post(); ?>

    <h3><?php the_title() ?></h3>

    <?php the_content(); ?>

</div>
<?php get_footer() ?>

