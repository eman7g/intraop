<?php putRevSlider("home-slider") ?>

<?php if(get_field('defining_statement')) : ?> 
  <div class="defining-statement container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php the_field('defining_statement_title');?></h2>
        <?php the_field('defining_statement');?>
      </div>
    </div>
  </div>
<?php endif ?>

<?php if(get_field('audience_block_left')) : ?>  
  <div class="audience container">
    <div class="row">
      <div class="col-sm-4">
        <h2><?php the_field('audience_block_title_left');?></h2>
        <?php the_field('audience_block_left');?>
        <a class="btn btn-default" href="<?php the_field('audience_block_link_left');?>"><?php the_field('audience_block_link_left_button');?></a>
        <div class="additional">
          <?php if( have_rows('audience_block_add_links_left') ): ?>
            <ul>
            <?php while( have_rows('audience_block_add_links_left') ): the_row(); ?>
                <li><a href="<?php the_sub_field('audience_block_add_links_left_link');?>"><?php the_sub_field('audience_block_add_links_left_title');?></a></li>      
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-4">
        <h2><?php the_field('audience_block_title_center');?></h2>
        <?php the_field('audience_block_center');?>
        <a class="btn btn-default" href="<?php the_field('audience_block_link_center');?>"><?php the_field('audience_block_link_center_button');?></a>
        <div class="additional">
          <?php if( have_rows('audience_block_add_links_center') ): ?>
            <ul>
            <?php while( have_rows('audience_block_add_links_center') ): the_row(); ?>
                <li><a href="<?php the_sub_field('audience_block_add_links_center_link');?>"><?php the_sub_field('audience_block_add_links_center_title');?></a></li>      
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-4">
        <h2><?php the_field('audience_block_title_right');?></h2>
        <?php the_field('audience_block_right');?>
        <a class="btn btn-default" href="<?php the_field('audience_block_link_right');?>"><?php the_field('audience_block_link_right_button');?></a>
        <div class="additional">
          <?php if( have_rows('audience_block_add_links_right') ): ?>
            <ul>
            <?php while( have_rows('audience_block_add_links_right') ): the_row(); ?>
                <li><a href="<?php the_sub_field('audience_block_add_links_right_link');?>"><?php the_sub_field('audience_block_add_links_right_title');?></a></li>      
            <?php endwhile; ?>
            </ul>
          <?php endif; ?>
        </div>
      </div>    
    </div>
  </div>
<?php endif ?>

<div class="recent-news container">
  <div class="row">
    <div class="col-sm-4">
      <div class="date"></div>
      <div class="post-title">
        Firsthand Technology Value Fund Completes Purchase of IntraOp Medical
      </div>
    </div>
    <div class="col-sm-4">
      <div class="date"></div>
      <div class="post-title">
        Firsthand Technology Value Fund Completes Purchase of IntraOp Medical
      </div>
    </div>
    <div class="col-sm-4">
      <div class="date"></div>
      <div class="post-title">
        Firsthand Technology Value Fund Completes Purchase of IntraOp Medical
      </div>
    </div>
  </div>
</div>

<?php if(get_field('content_highlight_content_01')) : ?>  
  <div class="content-highlight container">
    <div class="row">
      <div class="col-sm-5 col-sm-offset-1">
        <h2><?php the_field('content_highlight_title_01');?></h2>
        <?php the_field('content_highlight_content_01');?>
        <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_01');?>"><?php the_field('content_highlight_button_text_01');?></a>
      </div>
      <div class="col-sm-5">
        <h2><?php the_field('content_highlight_title_02');?></h2>
        <?php the_field('content_highlight_content_02');?>
        <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_02');?>"><?php the_field('content_highlight_button_text_02');?></a>
      </div>
      <div class="col-sm-5 col-sm-offset-1">
        <h2><?php the_field('content_highlight_title_03');?></h2>
        <?php the_field('content_highlight_content_03');?>
        <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_03');?>"><?php the_field('content_highlight_button_text_03');?></a>
      </div>
      <div class="col-sm-5">
        <h2><?php the_field('content_highlight_title_04');?></h2>
        <?php the_field('content_highlight_content_04');?>
        <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_04');?>"><?php the_field('content_highlight_button_text_04');?></a>
      </div>            
    </div>
  </div>
<?php endif ?>