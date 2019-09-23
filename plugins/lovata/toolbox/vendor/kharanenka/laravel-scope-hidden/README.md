# Trait HiddenField
 
 You can use trait in your models with "hidden" field (bool)
 
# Installation
Require this package in your `composer.json` and update composer.
 
```php

"kharanenka/laravel-scope-hidden": "1.0.*"

```

# Usage

```php

    
    class MyModel extend Model {
    
        use Kharanenka\Scope\HiddenField;
    
        ...
    
    }
    
    $obElement = MyModel::hidden()->first();
    $obElement = MyModel::notHidden()->first();
    
```