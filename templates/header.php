<?php get_template_part('assets/images/inline', 'icons.svg'); ?>

<?php use Roots\Sage\Nav; ?>

<div class="header-wrap">
  <div id="header-section">
    <header id="header" >

      <div class="header-top">
        <div class="container">
          <ul>
            <li class="customer-support">
              <div class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" role="button"><i class="glyphicon glyphicon-user"></i> Cusomer Support</a>
                <div class="dropdown"
              </div>
            </li>
            <li class="search dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" role="button"><i class="glyphicon glyphicon-search"></i></a>
              <div class="dropdown-menu">
                <form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
                    <input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Search..." />
                    <button type="submit" id="searchsubmit"><i class="glyphicon glyphicon-play"></i></button>
                </form>
              </div>
            </li>
          </ul>
        </div>
      </div>

      <div class="banner navbar navbar-default navbar-static-top sticky-header" role="banner">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <div class="navbar-brand">
              <a class="navbar-brand-link" href="<?= esc_url(home_url('/')); ?>">
                <svg class="logo"><use xlink:href="#logo" /></svg>
              </a>
            </div>
          </div>

          <nav class="collapse navbar-collapse" role="navigation">
            <?php
            if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new Nav\SageNavWalker(), 'menu_class' => 'nav navbar-nav']);
            endif;
            ?>
          </nav>
        </div>
      </div>

    </header>
  </div>
</div>
