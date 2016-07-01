# Session

ZF2 Module. Initializing and configuring SessionManager. See [ZF2 Session Manager documentation](http://framework.zend.com/manual/current/en/modules/zend.session.manager.html)

### Instalation

Add to your `composer.json`:
```json
"t4web/session": "^1.0"
```

And to your `config/application.config.php`:
```php
'modules' => [
    // ...
    'T4web\Session',
    // ...
],
```

### Storage sessions in Db table

By Default session store by native php engine, if you want store sessions in Db add to your `global.config.php`:
```php
'session' => [
    'config' => [
        'options' => [
            'gc_maxlifetime' => 86400,
        ],
    ],
    'save_handler' => T4web\Session\SaveHandler\DbTableGateway::class,
    'save_handler_options' => [
        'db_table' => [
            'table' => 'sessions'
        ],
    ],
],
```
And create table `sessions`:
```sql
CREATE TABLE IF NOT EXISTS `sessions` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(32) NOT NULL,
    `modified` int(11),
    `lifetime` int(11),
    `data` text DEFAULT NULL,
    PRIMARY KEY (`id`, `name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
```
