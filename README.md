# PHP Coding standard fixer

This package is based on https://github.com/FriendsOfPHP/PHP-CS-Fixer with addition of git pre-commit hook installation.

The hook will prevent the commit if the code does not comply with the coding standard rules

Default set of rules that are fully extendable

## Installation

#### Require a package
```
composer require --dev rabbitinternet/cs-fixer v1.0.0
```

#### Add composer commands
```
"scripts": {
    "post-install-cmd": [
        "composer run-script post-install-cmd -d ./vendor/rabbitinternet/cs-fixer"
    ],
    "cs": "vendor/bin/php-cs-fixer fix -v --config vendor/rabbitinternet/cs-fixer/src/.php_cs --dry-run",
    "cs-fix": "vendor/bin/php-cs-fixer fix -v --config vendor/rabbitinternet/cs-fixer/src/.php_cs"
}
```

**Note: sometimes (sylius project for example), composer installs the binaries in bin/ instead of vendor/bin/**


#### Install the it hook
```
composer run-script post-install-cmd
```

## Manual Usage

#### dry run
```
composer run-script cs
```

#### fix the issues
```
composer run-script cs-fix
```

## Rules configuration

To override default rules add `.php_cs_rules.php` file in the root of the project

```
<?php

return [
    // override rules
    'single_blank_line_at_eof' => true
];

```
