<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">
<div class="bg-gray-200 p-4 rounded-lg mb-4 text-blue-500">
  <div class="text-lg font-semibold">This is the index.php file</div>
</div>
  <!-- example react component -->
  <div id="render-react-example-here"></div>
  <!-- end example react component -->

  <div class="prose max-w-full">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_content(); ?>
        </div>
      <?php }
    } ?>
  </div>
</div>

<?php get_footer();