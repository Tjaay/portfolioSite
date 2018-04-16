<?php
/*
Template Name: Home
 */
get_header();?>
  <div class="hero-full-screen parallax " style="background-image: url(<?php the_field('header_image');?>);">
    <div class="middle-content-section">
      <h1>
        <?php bloginfo('name');?>
      </h2>
      <h5>
        <?php bloginfo('description');?>
      </h5>
    </div>
    <div class="bottom-content-section" data-magellan data-threshold="0">
      <a href="#main-content-section">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z"
          />
        </svg>
      </a>
    </div>
  </div>


  <div class="main-content">
    <div class="parallax info-text">
      <h2 style="text-align:center;">About Me</h2>
    </div>

    <div class="main-content-section parallax" style="background-image: url(<?php the_field('about_image');?>);">
    </div>

    <div id="main-content-section" data-magellan-target="main-content-section">
      <div class=" large-12 columns">
        <div class="marketing-site-hero parallax " style="background-image: url(<?php the_field('about_image');?>);">
          <div class="marketing-content">
            <br>

            <div class="marketing-snippet">
              <h4 class="text-left">My name is Thomas Reeves</h4>
              <p class="text-left"> I am a web developer located in the Comox Valley. I moved to the valley 5 years ago and have loved it ever
                since. This site is a means for me to display my quirky musing and designs to the world.
              </p>
              <div class="LI-profile-badge" data-version="v1" data-size="large" data-locale="en_US" data-type="horizontal" data-theme="dark"
                data-vanity="thomas-reeves-9895b2161">
                <a class="LI-simple-link" href='https://ca.linkedin.com/in/thomas-reeves-9895b2161?trk=profile-badge'>Thomas Reeves</a>
              </div>
            </div>

            </div>
          </div>
        </div>
      </div>

      <div id="nav-appear"></div>
      <div class="info-text parallax">
        <h2 class="text-center">Tools</h2>
        <h5 class="text-center">Listed below are some languages and libaries i used to build this site </h5>
      </div>

      <div class="main-container parallax">
        <div class="main-grid">
          <main class="main-content-full-width">

            <div class="tools-grid">
              <div class="tools grid-x grid-padding-x">
                <div class="cell large-auto text-center">
                  <div class="type html">
                    <p class="icon">
                      <i class="fa fa-html5"></i>
                    </p>
                    <h2>Html 5</h2>
                    <p>HTML is a markup language used to present content on the Web</p>
                    <br>
                    <a class="btn btn-pricing" href="https://developer.mozilla.org/en-US/docs/Web/HTML" target="_blank">
                      Learn More</a>
                  </div>
                </div>

                <div class=" cell large-auto text-center">
                  <div class="type css">
                    <p class="icon">
                      <i class="fa fa-css3"></i>
                    </p>
                    <h2>CSS</h2>
                    <p>Cascading stylesheets are used to change the style of web pages</p>
                    <br>
                    <a class="btn btn-pricing" href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">
                      Learn More</a>
                  </div>
                </div>

                <div class=" cell large-auto text-center">
                  <div class="type sass">
                    <p class="icon">
                      <i class="fa fa-laptop"></i>
                    </p>
                    <h2 class="gold-text">SASS</h2>
                    <p>Sass is a CSS library to write CSS more efficently</p>
                    <br>
                    <a class="btn btn-pricing" href="https://sass-lang.com/documentation/file.SASS_REFERENCE.html" target="_blank">
                      Learn More</a>
                  </div>
                </div>
              </div>

              <div class="tools grid-x grid-padding-x">
                <div class="cell large-auto text-center">
                  <div class="type php">
                    <p class="icon">
                      <i class="fa fa-database"></i>
                    </p>
                    <h2>PHP</h2>
                    <p>Is a web based scripting language used for database's and wordpress related sites</p>
                    <br>
                    <a class="btn btn-pricing" href="http://php.net/docs.php" target="_blank">Learn More</a>
                  </div>
                </div>

                <div class="cell large-auto text-center">
                  <div class="type javascript">
                    <p class="icon">
                      <i class="fa fa-desktop"></i>
                    </p>
                    <h2>Javascript</h2>
                    <p>A scripting language to perform dynamic actions on a website</p>
                    <br>
                    <a class="btn btn-pricing" href="https://developer.mozilla.org/bm/docs/Web/JavaScript" target="_blank">
                      Learn More</a>
                  </div>
                </div>

                <div class=" cell large-auto text-center">
                  <div class="type wordpress">
                    <p class="icon">
                      <i class="fa fa-wordpress"></i>
                    </p>
                    <h2 class="gold-text">Wordpress</h2>
                    <p>Wordpress is a content management system widely used to form a basis for many sites. Now powering over
                      25% of the sites on the web.
                    </p>
                    <br>
                    <a class="btn btn-pricing" href="https://codex.wordpress.org/" target="_blank">Learn More</a>
                  </div>
                </div>
              </div>
            </div>

          </main>
        </div>
      </div>


      <div id="contact" name="contact" class="parallax info-text">
        <h2 style="text-align:center;">Contact Me</h2>
      </div>

      <div class="contact-container large-12 columns">
        <div class="marketing-site-hero parallax " style="background-image: url(<?php the_field('marketing_image');?>);">
          <div class="marketing-contact">
            <br>
            <div class="marketing-snippet">
              <h4 class="text-left">Contact Information</h4>
              <h5 class="text-left">Phone Number: 250-867-5390</h5>
              <p class="text-left">Send me a message through the contact form provided or download my resume
                <p>
                  <h3></h3>
                  <div class="button-hover-reveal-wrapper">
                    <label>Learn More</label>
                    <a href="#" class="button-hover-reveal">Resume</a>
                    <a href="/contact" class="button-hover-reveal">Contact</a>
                  </div>
            </div>
          </div>
        </div>

      </div>
    </div>


  <!-- End of main content -->
  <?php get_footer();