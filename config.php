<?php
return array(
                'templates.path'    => __DIR__ . '/templates/',
                'debug' => false,
                'log.enabled' => true,
                'log.writer' => new \Yee\Log\FileLogger(
                    array(
                        'path' => __DIR__.'/logs',
                        'name_format' => 'Y-m-d',
                        'message_format' => '%label% - %date% - %message%'
                    )
                ),
                'session' => 'php',   // php, database or memcached
                'cache.path'=> __DIR__ . '/cache',
                'cache.timeout'=> 1800,
                'system.base.url'  => "localhost",
                'system.base.path' =>"www/folder",
                'database' => array(
                   "default" => array(
                     "database.host"     => "localhost",
                     "database.name"     => "register",
                     "database.user"     => "root",
                     "database.pass"     => "",
                     "database.port"     => 3306
            )
        )
    );
//DickButt