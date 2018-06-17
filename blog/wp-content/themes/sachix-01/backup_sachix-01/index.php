<?php get_header(); ?>

 <section id="main-v">
        <div class="contents">
            <!-- ↓スライダー本体 -->
            <div class="slider-box">


<!--カテゴリーIDが「1,3,5」で表示件数が「15記事」の場合-->
<?php query_posts('tag=recommend&posts_per_page=15'); ?>y
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                <div class="slider">
                    <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail(); ?>
                        <div class="sliderText">
                        	<div class="in">
                          <p class="tag"><?php the_title(); ?></p>
                          

<p><?php echo get_the_custom_excerpt( get_the_content(), 50 )."…続きを読む"; ?></p>

                          </div>
                        </div>
                      </a>
                </div>
                
<?php endwhile; endif; ?>

            </div>
        </div>
    </section>
    <!-- Page content -->
      <main role="main">
      	    <div class="contents">
            <div class="mainContent cf" id=sec-post>

<!--カテゴリーIDが「1,3,5」で表示件数が「15記事」の場合-->
<?php query_posts('cat=1,3,5&posts_per_page=15'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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
               
 
<?php endwhile; endif; ?>
            </div>
             </div>
        </main>
        <!--div class="subContent">
            <aside>
                <section>
                    <h2>side-nav</h2>
                </section>
            </aside>
        </div-->
          <script>
        $('.slider-box').slick({
            dots: true,
            infinite: false,
            speed: 300,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows:false
                    }
                }
            ]
        });
        </script>
<?php get_footer(); ?>
