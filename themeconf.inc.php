<?php
/*
Theme Name: BlancMont XL
Version: 2.1.c
Description: Night theme
Theme URI: http://piwigo.org/ext/extension_view.php?eid=232
Author: repie38
Author URI: 
*/

$themeconf = array(
  'parent'      => 'default',
  'local_head'  => 'local_head.tpl',
);

global $conf;
$config = unserialize($conf['BlancmontXL']);
$themeconf['icon_dir']=$config['ico'] ? 'themes/montblancxl/icon' : 'themes/blancmontxl/icon' ;

add_event_handler('loc_begin_page_header', 'set_bmxl_header');

function set_bmxl_header()
{
  global $page, $conf, $template;

  $config = unserialize($conf['BlancmontXL']);

  if (isset($page['body_id']) and $page['body_id'] == 'theCategoryPage')
  {
    $header = isset($page['category']) ? $config['categories'] : $config['home'];
  }
  elseif (isset($page['body_id']) and $page['body_id'] == 'thePicturePage')
  {
    $header = $config['picture'];
  }
  else
  {
    $header = $config['other'];
  }
  $template->assign('display_bmxl_banner', $header);
}
?>