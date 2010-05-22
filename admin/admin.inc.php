<?php

load_language('theme.lang', PHPWG_THEMES_PATH.'blancmontxl/');

$options = array(
  'home',
  'categories',
  'picture',
  'other',
  'ico',
);

if (isset($_POST['submit']))
{
  foreach ($options as $option)
  {
    $_POST['bmxl'][$option] = empty($_POST['bmxl'][$option]) ? false : true;
  }
  
  $_POST['bmxl']['ico'] = file_exists('themes/montblancxl/icon/add_tag.png') ? $_POST['bmxl']['ico'] : false ;

  $query = '
UPDATE '.CONFIG_TABLE.'
SET value = "'.addslashes(serialize($_POST['bmxl'])).'"
WHERE param = "BlancmontXL"
;';
  pwg_query($query);

  array_push($page['infos'], l10n('Information data registered in database'));

  load_conf_from_db();
}

$template->set_filenames(array(
    'theme_admin_content' => dirname(__FILE__) . '/admin.tpl'));

$template->assign('bmxl', unserialize($conf['BlancmontXL']));

$template->assign_var_from_handle('ADMIN_CONTENT', 'theme_admin_content');


?>