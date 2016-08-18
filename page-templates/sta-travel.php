<?PHP //Custom Page Templates
/*
Template Name: STA Travel
*/
?>
<?php get_header(); ?>

<div class="col-md-12">
  <section id="la-slider" class="first-citizen">
    <img src="http://teencanceramerica.org/wp-content/uploads/2016/02/STA-Travel-Banner.jpg" class="img-responsive">
  </section>
</div>
<div class="col-md-8">
  <div class="title">
    <h4 class="h4 pull-left">STA TRAVEL SUPPORTS TEEN CANCER AMERICA </h4>
  </div>
  <blockquote class="text-format">
    <p>We're excited to be working with STA Travel as part of a global fundraising partnership to support young people with cancer worldwide. STA Travel will connect organizations across the world helping the thousands of young people affected by cancer every year. Almost 12,000 young people between the ages of 13 and 25 are diagnosed with cancer each year – that is more than 30 every day, more than one every hour.</p>
    <p>The money raised by STA Travel will go towards helping spread awareness and to help raise funds for the development of specialized facilities and services to support young people with cancer.</p>
    <p>Please donate online below and help us make sure every young person with cancer gets the support they deserve. Teen Cancer America will receive 100% of your donation.</p>
  </blockquote>

  <section id="personal-info">
    <div class="title">
      <h4 class="h4 pull-left" style="border:0; padding:0;">Donate</h4>
    </div>
    <div id="la-form">
      <?php echo do_shortcode('[formassembly formid=410505]'); ?>
    </div>
  </section>
</div>

<?php get_sidebar('home'); ?>

<?php get_footer(); ?>