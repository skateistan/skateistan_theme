<?php
/**
 * @file
 * Skateistan's custom static maintenance page
 *
 * All the available variables are mirrored in html.tpl.php and page.tpl.php.
 * Some may be blank but they are provided for consistency.
 *
 * @see template_preprocess()
 * @see template_preprocess_maintenance_page()
 */
?><!DOCTYPE html>

<head>
  <title>Skateistan | Skateboard NGO for youth in Afghanistan</title>
  <meta name="description" content="We use skateboarding as a tool for youth empowerment in Afghanistan and Cambodia." />
  <style>
    ul.socialmedia  {
                    display: inline;
                    top: 0px;
                    height: 25px;
                    padding-left:29px;
                    }

    ul.socialmedia li {                 /* header/meta/meta-wrapper/socialmedia icon list on top - mb */
                      list-style: none;                 
                      display:inline;
                      padding-left:1px;
                      }

    .diamond_left {
                  vertical-align:top;
                  display:inline-block;
                  width: 18px;
                  height: 24px;
                  background-image: url(/sites/default/files/theme/diamond_left.png);
                  }

    .diamond_right  {
                    display: inline-block;
                    width: 18px;
                    height: 24px;
                    vertical-align:top;
                    padding-top: 2px;
                    background-image: url(/sites/default/files/theme/diamond_right.png);
                    background-repeat: no-repeat;
                    }	
  </style>
</head>
<body>
  <center>
    <img src="/sites/default/files/construction/logo.png" width="201px" />
    <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
      <input name="lc" type="hidden" value="US" />
      <input name="cmd" type="hidden" value="_s-xclick" />
      <input name="hosted_button_id" type="hidden" value="6ZJZ24QJBKLU4" />
      <input alt="PayPal - The safer, easier way to pay online!" border="0" height="579px" name="submit" src="/sites/default/files/construction/construction.png" type="image" width="670px" />
      <img alt="" border="0" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" />
    </form>		
    <div>
      <div class="diamond_left"></div>
      <ul class="socialmedia" style="padding-left: 0px;">
      	<li><a href="http://facebook.com/skateistan" target="_blank"><img height="24" src="/sites/default/files/theme/social_fb.png" width="23" /></a></li>
      	<li><a href="http://twitter.com/skateistan" target="_blank"><img height="24" src="/sites/default/files/theme/social_twitter.png" width="24" /></a></li>
      	<li><a href="http://vimeo.com/skateistan" target="_blank"><img height="24" src="/sites/default/files/theme/social_vimeo.png" width="24" /></a></li>
      	<li><a href="http://youtube.com/skateistan" target="_blank"><img height="24" src="/sites/default/files/theme/social_yt.png" width="23" /></a></li>
      	<li><a href="http://instagram.com/skateistan" target="_blank"><img height="24" src="/sites/default/files/theme/social_instagram.png" width="23" /></a></li>
      	<li><a href="http://skateistan.org/rss" target="_blank"><img height="24" src="/sites/default/files/theme/social_rss.png" width="23" /></a></li>
      	<li><a href="http://pinterest.com/skateistan" target="_blank"><img height="24" src="/sites/default/files/theme/social_pinterest.png" width="24" /></a></li>
      	<li><a href="http://www.linkedin.com/company/1714682" target="_blank"><img height="24" src="/sites/default/files/theme/social_linkedin.png" width="24" /></a></li>
      </ul>
      <div class="diamond_right"></div>
    </div>
  </center>
</body>
</html>
