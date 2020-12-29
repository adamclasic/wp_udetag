<div id="comments" class="clearfix">

  <h3 id="comments-title"><span>3</span> Comments</h3>

  <!-- Comments List
                                ============================================= -->
  <ol class="commentlist clearfix">

    <?php
    foreach($comments as $comment) {
      get_template_part('template-parts/one-comment');
    } ?>
  </ol><!-- .commentlist end -->

  <div class="clear"></div>

  <!-- Comment Form
                                ============================================= -->
  <div id="respond" class="clearfix">

    <h3>Leave a <span>Comment</span></h3>

    <form class="clearfix" action="#" method="post" id="commentform">

      <div class="col_one_third">
        <label>Name</label>
        <input type="text" name="author" class="sm-form-control" />
      </div>

      <div class="col_one_third">
        <label>Email</label>
        <input type="text" name="email" class="sm-form-control" />
      </div>

      <div class="col_one_third col_last">
        <label>Website</label>
        <input type="text" name="url" class="sm-form-control" />
      </div>

      <div class="clear"></div>

      <div class="col_full">
        <label>Comment</label>
        <textarea name="comment" cols="58" rows="7" class="sm-form-control"></textarea>
      </div>

      <div class="col_full nobottommargin">
        <button type="submit" id="submit-button" class="button button-3d nomargin">Submit Comment</button>
      </div>

    </form>

  </div><!-- #respond end -->

</div>