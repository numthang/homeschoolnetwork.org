# Trait TypeField
 
 You can use trait in your models with "type" field (string)
 
# Installation
Require this package in your `composer.json` and update composer.
 
```php

"kharanenka/laravel-scope-type": "1.0.*"

```

# Usage

```php
    
    class MyModel extend Model {
    
        use \Kharanenka\Scope\TypeField;
    
        ...
    
    }
    
    $obElement = MyModel::getByType('Andrey')->first();
    $obElement = MyModel::likeByType('And')->first();
    $obElement = MyModel::nullType()->get();
    $obElement = MyModel::notNullType()->get();
    
```