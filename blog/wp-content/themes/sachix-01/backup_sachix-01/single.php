<?php get_header(); ?>


      <main role="main">
<section id="post-entry">
        <div class="contents">

<?php the_breadcrumb(); ?>

<?php if(have_posts()): while(have_posts()):the_post(); ?>
    
    <figure>
  <?php the_post_thumbnail(); ?></figure>
  <div class="text-area">
  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
  <p><?php the_category(', '); ?></p>
  <p><?php the_content('Read more'); ?></p>
  </div>
<?php endwhile; endif; ?>
  
<?php previous_post_link('%link','古い記事へ'); ?>
<?php next_post_link('%link','新しい記事へ'); ?>
</div>
</section>
</main>


<?php get_footer(); ?>​