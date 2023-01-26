# PHPUnit Laravel Leash extension

This package implements the [Laravel Leash](https://github.com/PrinsFrank/laravel-leash) package as a PHPUnit listener.

To get started, run the following command:

```shell
composer require prinsfrank/phpunit-laravel-leash --dev
```

And enable the extension by adding the following lines in you phpunit.xml.dist;

```xml
<extensions>
    <extension class="PrinsFrank\PHPUnitLaravelLeash\Plugin" />
</extensions>
```

The extension is enabled for all test in 'Unit' namespaces by default. If you want to modify this, you can overwrite the pattern:

```xml
<extensions>
    <extension class="PrinsFrank\PHPUnitLaravelLeash\Plugin">
        <arguments>
            <string>/\Unit\/</string>
        </arguments>
    </extension>
</extensions>
```
