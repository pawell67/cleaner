<?php

namespace Pawell67\Cleaner;

class FileMover
{
    public static function moveConfigFiles($sourceDirectory, $configsDirectory, $exceptions = [])
    {
        $files = scandir($sourceDirectory);

        foreach ($files as $file) {
            if (!in_array($file, $exceptions) && pathinfo($file, PATHINFO_EXTENSION) === 'json') {
                rename($sourceDirectory . '/' . $file, $configsDirectory . '/' . $file);
            }
        }
    }
}
