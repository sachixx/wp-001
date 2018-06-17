<?php get_header(); ?>

<?php the_breadcrumb(); ?>
<main role="main">
	<section id="post-entry">
		<div class="contents">
			<article>
				<?php if(have_posts()): while(have_posts()):the_post(); ?>
					<div class="cf">
					<h1>
						<?php the_title(); ?>		
					</h1>
					<p class="category-icon <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
						<?php the_category(', '); ?>		
					</p>
          	</div>
          		<p><?php the_content('Read more'); ?></p>
          <?php endwhile; endif; ?>
      </article>
</div>
</section>
</main>
<?php get_footer(); ?>​