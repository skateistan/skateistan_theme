<?php
/**
 * @file
 * Skateistan's Zen theme implementation to display a single Drupal page.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $secondary_menu_heading: The title of the menu used by the secondary links.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['header']: Items for the header region.
 * - $page['navigation']: Items for the navigation region, below the main menu (if any).
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['footer']: Items for the footer region.
 * - $page['bottom']: Items to appear at the bottom of the page below the footer.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see zen_preprocess_page()
 * @see template_process()
 */
?>

<?php 
  if ($_SERVER['HTTP_HOST'] == 'skateistan.org' || $_SERVER['HTTP_HOST'] == 'www.skateistan.org' ) {
    $skateistan_site='org';
  } elseif ($_SERVER['HTTP_HOST'] == 'af.skateistan.org' || $_SERVER['HTTP_HOST'] == 'skateistan.org.af' || $_SERVER['HTTP_HOST'] == 'www.skateistan.org.af') {
    $skateistan_site='af';
  } elseif ($_SERVER['HTTP_HOST'] == 'de.skateistan.org') {
    $skateistan_site='de';
  } elseif ($_SERVER['HTTP_HOST'] == 'dk.skateistan.org' || $_SERVER['HTTP_HOST'] == 'skateistan.dk') {
    $skateistan_site='dk';
  } elseif ($_SERVER['HTTP_HOST'] == 'kh.skateistan.org') {
    $skateistan_site='kh';
  } elseif ($_SERVER['HTTP_HOST'] == 'pl.skateistan.org' || $_SERVER['HTTP_HOST'] == 'skateistan.pl' || $_SERVER['HTTP_HOST'] == 'www.skateistan.pl') {
    $skateistan_site='pl';
  } elseif ($_SERVER['HTTP_HOST'] == 'pk.skateistan.org') {
    $skateistan_site='pk';
  } elseif ($_SERVER['HTTP_HOST'] == 'us.skateistan.org') {
    $skateistan_site='us';
  } elseif ($_SERVER['HTTP_HOST'] == 'dev.skateistan.org' || $_SERVER['HTTP_HOST'] == 'dev2.skateistan.org' ) {
    $skateistan_site='dev';
  } elseif ($_SERVER['HTTP_HOST'] == 'template.skateistan.org') {
    $skateistan_site='template';
  } else {
    $skateistan_site='unknown';
  }
?>  

<div id="page">
  <div id="donate-curtain"></div>   <!-- highlighting the Donate menu item -->
  <div id="fullwidth-bar"></div>    <!-- black background for main navigation menu -->
  <header id="header" role="banner">
    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" width="255px" height="137px"/>
      </a>
    <?php endif; ?>
    <div id="meta">
      <div id="meta-wrapper">
        <div class="diamond_left"></div>
        <div id="nice-menus-1">      <!-- render region menu for switching through Skateistan's organizations / entities -->
          <?php
            $menu = theme('nice_menus', array('id' => 1, 'direction' => 'down', 'depth' => -1, 'menu_name' => 'menu-region', 'menu' => NULL));
            print $menu['content'];
          ?>
        </div>
        <div class="diamond_middle"></div>  
          <?php                       /* render search block - seach module must be enabled */
            $block = module_invoke('search', 'block_view', 'search');
            print render($block);
          ?>
        <div class="socialwrapper">
          <ul class="socialmedia">
             <li class="social_facebook"><a href="http://facebook.com/skateistan" target="_blank"></a></li><li class="social_twitter"><a href="http://twitter.com/skateistan" target="_blank"></a></li><li class="social_vimeo"><a href="http://vimeo.com/skateistan" target="_blank"></a></li><li class="social_youtube"><a href="http://youtube.com/skateistan" target="_blank"></a></li><li class="social_instagram"><a href="http://instagram.com/skateistan" target="_blank"></a></li><li class="social_rss"><a href="http://skateistan.org/rss.xml" target="_blank"></a></li><li class="social_pinterest"><a href="http://pinterest.com/skateistan" target="_blank"></a></li><li class="social_linkedin"><a href="http://www.linkedin.com/company/1714682" target="_blank"></a></li>
          </ul>
        </div>
        <div id="diamond_right_meta" class="diamond_right"></div>
      </div>
    </div>    
  </header>
  <div id="main">
    <div id="preface-top">
      <?php print render($page['preface_top']); ?>
    </div>
    <div id="content" class="column" role="main">
      <?php print render($page['highlighted']); ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title"><?php print $title; ?></h1>
        <div class="diamond-title"></div>             <!-- diamond underline for Page Title -->
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>
    </div><!-- /#content -->

    <div id="navigation">
      <?php print render($page['navigation']); ?>
    </div><!-- /#navigation -->

    <?php
      // Render the sidebars to see if there's anything in them.
      /* $sidebar_first  = render($page['sidebar_first']); */
      $sidebar_second = render($page['sidebar_second']);      /* this is the right sidebar filled with blocks */
    ?>

    <?php if ($sidebar_second): ?>
      <aside class="sidebars">
        <?php print $sidebar_second; ?>
      </aside><!-- /.sidebars -->
    <?php endif; ?>
  </div><!-- /#main -->
</div><!-- /#page -->
<div id="footer-wrapper">                 <!-- Footer containing navigation + subscribe form -->
  <?php print render($page['footer']); ?>
</div>
<footer id="bottom">                      <!-- Sponsor block at very bottom of page -->
  <?php print render($page['bottom']); ?>
</footer>
