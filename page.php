<?php get_header(); ?>

<!-- ab hier: index.php -->
<div id="site_content">
  <div>
    <?php if (have_posts()): ?>
      <?php while (have_posts()): ?>
        <?php the_post(); ?>
          <?php the_title('<h2>', '</h2>', false); ?></a>
        <?php the_content('<br /><span class="ym-button ym-next">Weiterlesen</span>'); ?>
      <?php endwhile; ?>

    <?php else: ?>
      <h2>Nichts gefunden</h2>
      <p>Sorry, aber du suchst gerade nach etwas, was hier nicht ist.</p>
    <?php endif; ?>

    <!-- bis hier: index.php -->

    <?php get_footer(); ?>