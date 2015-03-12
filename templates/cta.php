<?php if(get_field('cta_include')) : ?>
  <div class="cta container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-1">
        <div class="text">
          <?php the_field('cta-text');?>
        </div>
        <a class="btn-primary btn" href="<?php the_field('cta_button_link');?>"><?php the_field('cta_button_text');?></a>
      </div>
    </div>
  </div>
<?php endif ?>
