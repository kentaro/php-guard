# Guard

Simplly cleaning up resources with RAII pattern.

# Synopsis

## `unset()`

```php
$guard = new Guard(function () { echo "unset!\n"; });
unset($guard); //=> unset!
```

## Function Scope

```php
function foo()
{
    $guard = new Guard(function () { echo "destructed!\n"; });
    // ... do something ...
}

foo(); //=> echoed "destructed!" after function called
```

# Run Tests Using Composer

```
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar install
$ bin/phpunit
```

# LICENSE

## Copyright

Copyright Kentaro Kuribayashi

## LICENSE

MIT LICENSE
