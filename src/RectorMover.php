<?php

namespace Pawell67\Cleaner;

class RectorMover
{
    public static function moveRectorConfig($sourceDirectory, $configsDirectory)
    {
        // Assuming rector config file is named rector.php
        $sourceFile = $sourceDirectory . '/rector.php';
        $targetFile = $configsDirectory . '/rector.php';

        if (file_exists($sourceFile)) {
            rename($sourceFile, $targetFile);
        }
    }
}
