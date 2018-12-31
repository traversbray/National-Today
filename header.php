<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package National-Day
 */

get_header('opening');
?>

<header id="masthead" class="site-header" role="banner">
<nav class="navbar navbar-default" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->

    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
    <div class="nav-logo">
      <a class="navbar-brand" href="<?php echo home_url(); ?>"><h1 style="display:none"><?php bloginfo('name'); ?></h1></a>
    </div>
    <li itemscope="itemscope"  id="mobileProfile" class="menu-item "><a title="Profile"><img class="profile-img" src="/wp-content/themes/Nation-Day/img/user77.png"/></a></li>

        <div class="nav-list">
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul id="menu-menu-1" class="nav navbar-nav">
                    <li itemscope="itemscope"  id="menu-item-1" class="menu-item ">
                        <a class="dropdown-toggle" type="button" data-toggle="dropdown">Topic <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">Holidays</a></li>
                        <li><a href="#">Surveys</a></li>
                        <li><a href="#">Listicles</a></li>
                        <li><a href="#">Quizzes</a></li>
                        </ul>
                    </li>
                    <li itemscope="itemscope"  id="menu-item-2" class="menu-item ">
                        <a class="dropdown-toggle" type="button" data-toggle="dropdown">Month <span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                        <ul class="dropdown-menu">
                        <li><a href="#">January</a></li>
                        <li><a href="#">February</a></li>
                        <li><a href="#">March</a></li>
                        <li><a href="#">April</a></li>
                        <li><a href="#">May</a></li>
                        <li><a href="#">June</a></li>
                        <li><a href="#">July</a></li>
                        <li><a href="#">August</a></li>
                        <li><a href="#">September</a></li>
                        <li><a href="#">October</a></li>
                        <li><a href="#">November</a></li>
                        <li><a href="#">December</a></li>
                        </ul>
                    </li>
                    <li itemscope="itemscope"  id="menu-item-3" class="menu-item"><a title="Today">Today</a></li>
                    <li itemscope="itemscope"  id="menu-item-4" class="menu-item "><a title="Tomorrow">Tomorrow</a></li>
                    <li itemscope="itemscope"  id="menu-item-5" class="menu-item "><a title="Monday">Monday</a></li>
                    <li itemscope="itemscope"  id="menu-item-6" class="menu-item "><a title="Sign Up">Sign Up</a></li>
                    <li itemscope="itemscope"  id="menu-item-7" class="menu-item "><a title="Profile"><img class="profile-img" src="/wp-content/themes/Nation-Day/img/user77.png"/></a></li>
                    <li itemscope="itemscope"  id="menu-item-8" class="menu-item "><a title="Search"><img class="search-img" style="width: 22px; height:20px"src="/wp-content/themes/Nation-Day/img/search.png"/></a></li>
                </ul>
            </div>
        </div>
   </div>
</nav>
</header><!-- #masthead -->

<div id="content" class="site-content">
