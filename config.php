<?php
return [
    'name' => 'AIO CMS',
    'debug' => true,
    'cache' => 10,
    'key' => 'VaticanCameos',
    'functions' => [ 
        'logged_in' => ['fun','basic','pages'],
    ],
    'data' => [ 'type' => 'mysql', 'server' => 'localhost', 'base' => 'cms_db', 'user' => 'cms_db', 'pass' => 'cms_db' ]
];