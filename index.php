<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <h1><?php bloginfo('name'); ?></h1>
    <p><?php bloginfo('description'); ?></p>
  </div>
</section>

<section class="section">
  <div class="container content-card">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <h2><?php the_title(); ?></h2>
      <div><?php the_content(); ?></div>
    <?php endwhile; else : ?>
      <p>No content found.</p>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>