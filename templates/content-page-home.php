<?php putRevSlider("home-slider") ?>

<?php if(get_field('defining_statement')) : ?> 
  <section class="defining-statement ">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
          <h1><?php the_field('defining_statement_title');?></h1>
          <p><?php the_field('defining_statement');?></p>
        </div>
      </div>
    </div>
  </section>
<?php endif ?>

<?php if(get_field('audience_block_left')) : ?>  
  <section class="audience has-top has-bottom swatch-gray-white">
    <svg class="decor-top"><use xlink:href="#decor-top-right" /></svg>
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <div class="content">
            <h2><?php the_field('audience_block_title_left');?></h2>
            <p><?php the_field('audience_block_left');?></p>
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
        </div>
        <div class="col-sm-4">
          <div class="content">
            <h2><?php the_field('audience_block_title_center');?></h2>
            <p><?php the_field('audience_block_center');?></p>
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
        </div>
        <div class="col-sm-4">
          <div class="content">
            <h2><?php the_field('audience_block_title_right');?></h2>
            <p><?php the_field('audience_block_right');?></p>
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
    </div>
    <svg class="decor-bottom"><use xlink:href="#decor-bottom-right" /></svg>    
  </section>
<?php endif ?>

<div class="recent-news container">
  <h2>Recent News + Events</h2>
  <div class="row">
    <div class="col-sm-4">
      <article>
        <div class="entry-content row">
          <div class="entry-meta col-sm-3">
            <span class="post-date">May <strong>9</strong></span>
          </div>
          <div class="post-title col-sm-9">
            <a href="#">
              Firsthand Technology Value Fund Completes Purchase of IntraOp Medical
            </a>
          </div>
        </div>
      </article>
    </div>
    <div class="col-sm-4">
      <article>
        <div class="entry-content">
          <div class="entry-meta">
            <span class="post-date">May <strong>9</strong></span>
          </div>
          <div class="post-title">
            <a href="#">
              Firsthand Technology Value Fund Completes Purchase of IntraOp Medical
            </a>
          </div>
        </div>
      </article>
    </div>
    <div class="col-sm-4">
      <article>
        <div class="entry-content">
          <div class="entry-meta">
            <span class="post-date">May <strong>9</strong></span>
          </div>
          <div class="post-title">
            <a href="#">
              Firsthand Technology Value Fund Completes Purchase of IntraOp Medical
            </a>
          </div>
        </div>
      </article>
    </div>
  </div>
</div>

<?php if(get_field('content_highlight_content_01')) : ?>  
  <div class="content-highlight">
    <div class="container">
      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <div class="content">
            <h2><?php the_field('content_highlight_title_01');?></h2>
            <?php the_field('content_highlight_content_01');?>
            <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_01');?>"><?php the_field('content_highlight_button_text_01');?></a>
          </div>        
        </div>
        <div class="col-sm-5">
          <div class="content">
            <h2><?php the_field('content_highlight_title_02');?></h2>
            <?php the_field('content_highlight_content_02');?>
            <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_02');?>"><?php the_field('content_highlight_button_text_02');?></a>
          </div>        
        </div>
        <div class="col-sm-5 col-sm-offset-1">
          <div class="content">
            <h2><?php the_field('content_highlight_title_03');?></h2>
            <?php the_field('content_highlight_content_03');?>
            <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_03');?>"><?php the_field('content_highlight_button_text_03');?></a>
          </div>        
        </div>
        <div class="col-sm-5">
          <div class="content">
            <h2><?php the_field('content_highlight_title_04');?></h2>
            <?php the_field('content_highlight_content_04');?>
            <a class="btn btn-default" href="<?php the_field('content_highlight_button_link_04');?>"><?php the_field('content_highlight_button_text_04');?></a>
          </div>        
        </div>            
      </div>
    </div>
  </div>
<?php endif ?>