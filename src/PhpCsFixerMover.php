<?php

namespace Pawell67\Cleaner;

class PhpCsFixerMover
{
    public static function movePhpCsFixerConfig($sourceDirectory, $configsDirectory)
    {
        // Assuming php-cs-fixer config file is named .php_cs.dist
        $sourceFile = $sourceDirectory . '/.php_cs.dist';
        $targetFile = $configsDirectory . '/.php_cs.dist';

        if (file_exists($sourceFile)) {
            rename($sourceFile, $targetFile);
        }
    }
}
