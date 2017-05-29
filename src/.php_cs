<?php

$rules = include __DIR__ . '/default_rules.php';

if (file_exists(getcwd() . '/.php_cs_rules.php')) {
    $override = include getcwd() . '/.php_cs_rules.php';

    if (is_array($override)) {
        echo "Rules from " .getcwd() . "/.php_cs_rules.php will be applied \n\r";

        $rules = array_merge($rules, $override);
    }
}

$finder = PhpCsFixer\Finder::create()
    ->exclude('bootstrap')
    ->exclude('public')
    ->exclude('storage')
    ->exclude('node_modules')
    ->exclude('var')
    ->in(getcwd());

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setCacheFile(__DIR__ . '/.php_cs.cache')
    ->setRules($rules)
    ->setFinder($finder);
