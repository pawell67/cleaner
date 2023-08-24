<?php

namespace Pawell67\Cleaner;

class PhpStanMover
{
    public static function movePhpStanConfig($sourceDirectory, $configsDirectory)
    {
        // Assuming phpstan config file is named phpstan.neon
        $sourceFile = $sourceDirectory . '/phpstan.neon';
        $targetFile = $configsDirectory . '/phpstan.neon';

        if (file_exists($sourceFile)) {
            rename($sourceFile, $targetFile);
        }
    }
}
