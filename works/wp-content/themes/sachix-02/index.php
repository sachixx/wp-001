<?php get_header(); ?>


<ul id="breadcrumb" class="cf">
    <li><a href="/">トップ</a></li>
    <li>仕事</li>
</ul>

 <section id="main-v">
        <div class="contents">
</div>
    </section>
    <!-- Page content -->
      <main role="main">
      	   
           <section id="sec-newpost">
 <div class="contents">
    <div class="title">all post</div>
     <div class="newpost-box">
<!--カテゴリーIDが「1,3,5」で表示件数が「15記事」の場合-->
<!--?php query_posts('cat=1,3,5&posts_per_page=15'); ?-->
<?php query_posts('posts_per_page=5'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <article>
                        <h2>
                       <a href="<?php the_permalink() ?>" rel="bookmark" class="newpost-title" title="<?php the_title_attribute(); ?>"><?php the_title(); ?> </a>
                       <span class="newpost-labels"><?php the_category(', ') ?></span>
                       
                    </h2>
                    </article>
 
<?php endwhile; endif; ?>
</div>
            </div>
            </section>

           <section id="sec-allpost">
 <div class="contents">
    <div class="title">all post</div>
      <div class="allpost-box cf">
     <div class="allpost">
                           <h3>WordPress</h3>
                       <ul>
<!--カテゴリーIDが「1,3,5」で表示件数が「15記事」の場合-->
<!--?php query_posts('cat=1,3,5&posts_per_page=15'); ?-->
<?php query_posts('category_name=wordpress&posts_per_page=5'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                   
    

<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

                   
                      
                  
 
<?php endwhile; endif; ?>
    </ul>
</div>
     <div class="allpost">
                           <h3>css</h3>
                       <ul>
<!--カテゴリーIDが「1,3,5」で表示件数が「15記事」の場合-->
<!--?php query_posts('cat=1,3,5&posts_per_page=15'); ?-->
<?php query_posts('category_name=css&posts_per_page=15'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                   
    

<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

                   
                      
                  
 
<?php endwhile; endif; ?>
    </ul>
</div>
     <div class="allpost">
                           <h3>jquery</h3>
                       <ul>
<!--カテゴリーIDが「1,3,5」で表示件数が「15記事」の場合-->
<!--?php query_posts('cat=1,3,5&posts_per_page=15'); ?-->
<?php query_posts('category_name=jquery&posts_per_page=15'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                   
    

<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

                   
                      
                  
 
<?php endwhile; endif; ?>
    </ul>
</div>
     <div class="allpost">
                           <h3>web</h3>
                       <ul>
<!--カテゴリーIDが「1,3,5」で表示件数が「15記事」の場合-->
<!--?php query_posts('cat=1,3,5&posts_per_page=15'); ?-->
<?php query_posts('category_name=jquery&posts_per_page=15'); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                   
    

<li><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>

                   
                      
                  
 
<?php endwhile; endif; ?>
    </ul>
</div>
</div>
            </div>
            </section>
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
