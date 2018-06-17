<?php get_header(); ?>

<?php the_breadcrumb(); ?>
      <main role="main">
        
        <section id="post-entry">
        <div class="contents">
          <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <div class="img-area">
            <figure>
              <?php the_post_thumbnail(); ?>
              </figure>
               <p class="category-icon <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"><?php the_category(', '); ?></p>
            </div>
  <div class="text-area">
    <div class="title cf">
  <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
  </div>
  <p><?php the_content('Read more'); ?></p>
  </div>
<?php endwhile; endif; ?>
  
<!--?php previous_post_link('%link','古い記事へ'); ?-->
<!--?php next_post_link('%link','新しい記事へ'); ?-->
</div>
</section>
</main>
<?php get_footer(); ?>​