<?php
/*
Template Name: Code
 */
get_header();?>
  <div id="nav-appear"></div>
  <?php get_template_part('template-parts/featured-image');?>
  <nav class="hover-underline-menu" data-menu-underline-from-center>
    <ul class="menu align-center">
      <li>
        <a href="/coding">All Coding</a>
      </li>
      <li>
        <a href="/wordpress">Wordpress</a>
      </li>
      <li>
        <a href="/javascript">Javascript</a>
      </li>
      <li>
        <a href="/ruby">Ruby</a>
      </li>
      <li>
        <a href="/ios">iOS</a>
      </li>
      <li>
      <a href="/android">Android</a>
      </li>
    </ul>
  </nav>

  <div class="main-content">
    <div class="code-info-text">
      <h2 style="text-align:center;"><?php the_field("page_header")?></h2>
      <p class="text-center"><?php the_field("header_text")?></p>
    </div>

    <div class="main-container">
      <div class="main-grid">
        <main class="main-content-full-width">
          <div class="grid-x grid-padding-x ">
            <?php query_posts('category_name=code&posts_per_page=10');?>
            <?php while (have_posts()): the_post();?>
            <div class="column medium-4">
              <div class="card card-hover">
                <?php the_post_thumbnail('large');?>
                <div class="card-hover-icons">
                  <a data-open=<?php echo "post" . the_ID();?> >
                    <i class="fa fa-question-circle">
                      <span class="about-code"> About</span>
                    </i>
                  </a>
                  <a href=<?php the_field( 'demo')?> target="_blank">
                    <i class="fa fa-desktop">
                      <span class="demo-code"> Demo</span>
                    </i>
                  </a>
                  <a href=<?php the_field( 'github_link'); ?> target="_blank">
                    <i class="fa fa-github-alt">
                      <span class="git-code"> Git </span>
                    </i>
                  </a>
                </div>
                <div class="card-hover-details">
                  <h3 class="card-hover-title">
                    <?php the_title()?>
                  </h3>
                </div>
              </div>


            </div>
            <!--- end of column medium-4 -->


            <div class="reveal" id=<?php echo "post" . the_ID();?> data-reveal>
              <br>
              <div class="blog-module-img">
                <?php the_post_thumbnail('large');?>
              </div>
              <br>
              <hr>
              <h4>
                <?php the_title();?>
              </h4>
              <?php the_content();?>
              <button class="close-button" data-close aria-label="Close modal" type="button">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

            <?php endwhile;?>

          </div>
          <!-- end of grid-x -->
        </main>
      </div>
      <!--- end of main grid -->
    </div>
    <!--- main container -->
  </div>
  <?php get_footer();