<div class="entry clearfix">
  <div class="entry-image">
    <a href="#">
      <!-- <img class="image_fade" src="images/blog/standard/17.jpg"> -->
      <?php the_post_thumbnail('full', ['class'=> "image_fade"]) ?>
    </a>
  </div>
  <div class="entry-title">
    <h2>
      <a href="single.html">
        <?php the_title(); ?>
      </a>
    </h2>
  </div>
  <ul class="entry-meta clearfix">
    <li><i class="icon-calendar3"></i> <?php echo get_the_date() ?></li>
    <li>
      <a href="#">
        <i class="icon-user"></i>
        <?php the_author(); ?>
      </a>
    </li>
    <li>
      <i class="icon-folder-open"></i>
      <a href="#">General</a>, <a href="#">Media</a>
    </li>
    <li>
      <a href="#">
        <i class="icon-comments"></i>
        <?php echo get_comments_number(get_the_ID()); ?> Comment(s)
      </a>
    </li>
  </ul>
  <div class="entry-content">
    <p>
    <?php the_excerpt(); ?>

    </p>
    <a href="<?php echo get_the_permalink(); ?>" class="more-link">Read More</a>
  </div>
</div>