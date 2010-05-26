<?php
/*
Theme Name: BlancMont XL
Version: 2.1.d
Description: Night theme
Theme URI: http://piwigo.org/ext/extension_view.php?eid=232
Author: repie38
Author URI: 
*/


$conf['BlancmontXL'] = unserialize($conf['BlancmontXL']);

$themeconf = array(
  'parent'      => 'default',
  'local_head'  => 'local_head.tpl',
  'icon_dir'    => 'themes/blancmontxl/icon/'. $conf['BlancmontXL']['icon_dir'] 
);

add_event_handler('loc_begin_page_header', 'set_bmxl_header');

function set_bmxl_header()
{
  global $page,$template,$conf;

  if (isset($page['body_id']) and $page['body_id'] == 'theCategoryPage')
  {
    $header = isset($page['category']) ? $conf['BlancmontXL']['categories'] : $conf['BlancmontXL']['home'];
  }
  elseif (isset($page['body_id']) and $page['body_id'] == 'thePicturePage')
  {
    $header = $conf['BlancmontXL']['picture'];
  }
  else
  {
    $header = $conf['BlancmontXL']['other'];
  }
  $template->assign('display_bmxl_banner', $header);
}
?>