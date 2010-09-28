<?php
/*
This file is part of SimpleSplash.

SimpleSplash is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

SimpleSplash is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with SimpleSplash.  If not, see <http://www.gnu.org/licenses/>.
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="de-DE">
  <head>
    <title><?php bloginfo('name'); ?></title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="robots" content="noindex,nofollow" />
    
    <link rel="stylesheet" id="login-css" href="<?php echo get_bloginfo('home').'/wp-admin/css/login.css'; ?>" type="text/css" media="all" />
    <link rel="stylesheet" id="colors-fresh-css" href="<?php echo get_bloginfo('home').'/wp-admin/css/colors-fresh.css'; ?>" type="text/css" media="all" />
    <link rel="stylesheet" id="splash-css" href="<?php echo plugins_url('splash.css', __FILE__); ?>" type="text/css" media="all" />
  </head>
  <body>
    <div id="splash">
      <h1><?php bloginfo('name'); ?></h1>
      
      <div id="splashcontent">
        <p><?php _e('Du hast', 'simplesplash'); ?> <a href="http://wordpress.org/extend/plugins/"><strong>SimpleSplash</strong></a> <?php _e('erfolgreich aktiviert.', 'simplesplash'); ?></p>
  
        <p><?php _e('Um diese Einstiegsseite Deinen Bed&uuml;rfnissen anzupassen, lege eine neue Datei', 'simplesplash'); ?> <em><?php echo $filename; ?></em> <?php _e('im Theme-Verzeichnis an.', 'simplesplash'); ?></p>
    
        <p id="path"><strong>wp-content/themes/<?php echo get_template(); ?>/splash.php</strong></p>
    
        <p id="enter"><a class="button-primary" href="<?php bloginfo('home'); ?>">Zur Startseite</a></p>
      </div>
    </div>
  </body>
</html>