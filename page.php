<?php get_header(); ?>

    <div class="heading-page header-text">
      <section class="page-heading">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="text-content">
                <h4>Recent Posts</h4>
                <h2>Our Recent Blog Entries</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    
    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <h4>Place your ad here!</h4>
                </div>
                <div class="col-lg-4">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="blog-posts grid-system">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">

<?php 
// параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => 2,
	'post_type'   => 'post',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
	setup_postdata($post); ?>
                <div class="col-lg-6">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <a href="<?php the_permalink()?>"><?php the_post_thumbnail('post-home-preview') ?></a>
                    </div>
                    <div class="down-content">
                    <span><?php the_category(', '); ?></span>
                      <a href=<?php the_permalink(); ?>>
                        <h4><?php the_title(); ?></h4>
                      </a>
                      <ul class="post-info">
                        <li><a href="#"><?php the_author_posts_link() ?></a></li>
                        <li><a href="#"><?php the_time('F jS, Y') ?></a></li>
                        <li><a href="#">12 Comments</a></li>
                      </ul>
                      <?php the_excerpt('10') ?>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-lg-12">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <?php the_tags( '', ', ')?>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

<?php 
}
wp_reset_postdata(); // сброс
?>
<?php the_posts_pagination(); ?>


              
                
                <div class="col-lg-12">
                  <ul class="page-numbers">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


          
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
              <?php dynamic_sidebar('right-sidebar'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
<?php get_footer(); ?>