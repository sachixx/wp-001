<?php get_header(); ?>


<?php the_breadcrumb(); ?>
 <main role="main">
   <div class="mainContent cf" id=sec-post>
 <div class="contents">
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>




 <article>
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                        <figure class="postThumb">
                            <?php the_post_thumbnail('add_img01'); ?>
                        </figure>
                        <div class="category-icon <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>">
                            <p class="postCategory"><?php the_category(', ') ?></p>
                        </div>
                        <h3 class="postTitle"><?php the_title(); ?></h3>
       
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    </a>
                </article>
               


    <?php endwhile;endif; ?>
            </div>
             </div>


</main>


<?php get_footer(); ?>