
<?php
/*

Template Name: Contact Us Template

*/?>

<?php get_header(); ?>


<div class="Contact-form-container">

  <div class="Column-one-for-contact-us-page">
    <div class="text-waper-for-contact-us-page">
      <div class="eng-header">
        <h2>Contact Us</h2>
      </div>
      <div class="jp-header">
        <h2>名舗 メイホ</h2>
      </div>
    </div>

    <div class="sushi-girl-on-contact-form">
      <img src="<?php bloginfo('stylesheet_directory');?>/images/test1.png" alt="."
      style="
      max-width: 520px;
      max-height: 520px;
      margin-left: 6%;
      margin-top:-3%;"/>
    </div>
    <div class="sushi-girl-text-on-contact-form">
        <img src="<?php bloginfo('stylesheet_directory');?>/images/jp-text.png" alt="."

        style="
        max-width: 300px;
        max-height: 350px;
        margin-left: 65%;
        margin-top:-90%;"
        >
    </div>

<div class="sushi-girl-text-on-contact-form-breaking-point">
      <img src="<?php bloginfo('stylesheet_directory');?>/images/test1.png" alt="." style="width: 100%;">
</div>



  </div>



  <div class="Column-Two-for-contact-us-page">
    <div class="form-container">
    <form action="action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input id="submit-button" type="submit" value="Submit">

      </form>
          </div>
  </div>

</div>





 <?php get_footer(); ?>
