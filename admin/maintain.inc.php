<?php

function theme_activate($id, $version, &$errors)
{
  global $prefixeTable, $conf;

  if (!isset($conf['BlancmontXL']))
  {
    $config = array(
      'home'       => true,
      'categories' => true,
      'picture'    => false,
      'other'      => true,
	  'ico'        => false,
      );
      
    $query = '
INSERT INTO ' . CONFIG_TABLE . ' (param,value,comment)
VALUES ("BlancmontXL" , "'.addslashes(serialize($config)).'" , "BlancmontXL parameters");';

    pwg_query($query);
  }
}

function theme_deactivate()
{
  global $prefixeTable;

  $query = 'DELETE FROM ' . CONFIG_TABLE . ' WHERE param="BlancmontXL" LIMIT 1;';
  pwg_query($query);
}

?>