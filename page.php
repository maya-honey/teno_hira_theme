<?php get_header(); ?>
<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'article-content-original' ); ?>>
  <div class="article-info">
    <!--ζ¬ζεεΎ-->
    <?php the_content(); ?>
  </div>
</article>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
