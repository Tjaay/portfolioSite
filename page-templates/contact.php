<?php
/*
Template Name: Contact
 */
get_header();?>



<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="main-grid">
		<main class="main-content-full-width">
<div class="translucent-form-overlay">
  <form>
    <h3>Contact Form</h3>
    <div class="row columns">
      <label>Full Name
        <input type="text" name="keyword" placeholder="Any">
      </label>
    </div>

    <div class="row columns">
      <label>Email
        <input type="text" name="location" placeholder="Any">
      </label>
    </div>
    <textarea name="message" id="" rows="12" placeholder="Type your message here"></textarea>
        <div class="contact-us-form-actions">
    </div>
    <button type="button" class="primary button expanded search-button">
      Contact
    </button>
 </form>
</div>



		</main>
	</div>
</div>
<?php get_footer();
