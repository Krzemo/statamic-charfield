<?php

namespace AppsWithLove\Statamic\CharField;

use AppsWithLove\Statamic\CharField\Fieldtypes\CharFieldFieldtype;
use Statamic\Providers\AddonServiceProvider;

class ServiceProvider extends AddonServiceProvider
{
    protected $publishables = [
        __DIR__ . '/../resources/js/charfield.js' => 'js/charfield.js',
        __DIR__ . '/../resources/css/charfield.css' => 'css/charfield.css',
        __DIR__ . '/../resources/lang' => '../../../resources/lang',
    ];

    protected $scripts = [
        __DIR__ . '/../resources/js/charfield.js'
    ];

    protected $stylesheets = [
        __DIR__ . '/../resources/css/charfield.css'
    ];

    protected $fieldtypes = [
        CharFieldFieldtype::class
    ];
}
