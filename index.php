<?php get_header(); ?>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">


        <?php if(have_posts()){while(have_posts()){ the_post(); ?>
          <div class="item">
          <?php the_post_thumbnail('slider-preview') ?>
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?php the_category(', '); ?></span>
                </div>
                <a href="<?php the_permalink()?>"><h4><?php the_title(); ?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?php the_author_posts_link() ?></a></li>
                  <li><a href="#"><?php the_time('F jS, Y') ?></a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php  } // end while
        } // end if
        ?>

          
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

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


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
      <?php if(have_posts()){
        $var = 0;
        while(have_posts() and $var!=3){ $var++; the_post(); ?>

<div class="col-lg-12">
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
                      
                      <?php the_excerpt() ?>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              
                              <li><i class="fa fa-tags"></i></li>

                              <?php the_tags( '', ', ')?>
                            </ul>
                          </div>
                          <div class="col-6">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
<?php  } // end while
} // end if
?>

                <div class="col-lg-12">
                <?php
        wp_nav_menu([
          'theme_location'  => 'Button-View-All-Posts',
          'container'       => 'null',
          'menu_class'      => 'button-link',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'items_wrap'      => '<div class="main-button"><ul id="%1$s" class="%2$s">%3$s</ul></div>',
        ]);
        ?>
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