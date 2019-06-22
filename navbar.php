<header id="masthead" class="site-header">
<nav class="navbar navbar-expand-lg navbar-light <?php if (! is_home()){ echo 'navblack';} ?>">
	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a><span role="separator" class="divider"> / </span></h1>
	
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">      
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_category_link(3); ?>"><?php print_r(get_the_category_by_ID(3)); ?></a>
      </li>
      <li role="separator" class="divider"> / </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_category_link(6); ?>"><?php print_r(get_the_category_by_ID(6)); ?></a>
      </li>
      <li role="separator" class="divider"> / </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_page_link(2); ?>">about</a>
	  </li>
    </ul>
   </div>
</nav>
</header>