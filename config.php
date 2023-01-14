<?php return array (
  'application' => 
  array (
    'debug' => true,
  ),
  'database' => 
  array (
    'default' => 'sqlite',
    'connections' => 
    array (
      'sqlite' => 
      array (
        'prefix' => 'pk_',
      ),
    ),
  ),
  'system' => 
  array (
    'secret' => 'jcmRw3KX6cdBmIDjDUQU/Ym9RkdZLot0yiqH7GW9fRTtXLC3N.09KNaQUltY/Va1',
  ),
  'system/cache' => 
  array (
    'caches' => 
    array (
      'cache' => 
      array (
        'storage' => 'auto',
      ),
    ),
    'nocache' => false,
  ),
  'system/finder' => 
  array (
    'storage' => '',
  ),
  'debug' => 
  array (
    'enabled' => true,
  ),
);