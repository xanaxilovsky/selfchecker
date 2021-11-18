<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude([
        __DIR__.'/config',
    ])
    ->in([
        __DIR__.'/src',
        __DIR__.'/tests',
    ])
;

$config = new PhpCsFixer\Config();

return $config->setRules([
        '@Symfony' => true,
        '@Symfony:risky' => true,
        '@PHP70Migration:risky' => true,
        '@PHP71Migration:risky' => true,
        '@PHP73Migration' => true,
        '@DoctrineAnnotation' => true,
        'phpdoc_trim_consecutive_blank_line_separation' => false,
        'array_syntax' => [
            'syntax' => 'short',
        ],
    ])
    ->setRiskyAllowed(true)
    ->setFinder($finder)
;
