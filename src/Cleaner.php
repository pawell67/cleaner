<?php

namespace Pawell67\Cleaner;

class Cleaner
{
    public static function initialize(): void
    {
        $configsDirectory = __DIR__ . '/../../configs';

        if (!file_exists($configsDirectory)) {
            mkdir($configsDirectory, 0755, true);
        }

        FileMover::moveConfigFiles(__DIR__, $configsDirectory, ['composer.json', '.gitignore']);
        PhpCsFixerMover::movePhpCsFixerConfig(__DIR__, $configsDirectory);
        PhpStanMover::movePhpStanConfig(__DIR__, $configsDirectory);
        RectorMover::moveRectorConfig(__DIR__, $configsDirectory);

        // Update scripts in composer.json
        $composerJsonPath = __DIR__ . '/../../composer.json';
        self::updateComposerScripts($composerJsonPath);
    }

    private static function updateComposerScripts($composerJsonPath): void
    {
        $composerData = json_decode(file_get_contents($composerJsonPath), true);

        // Update pest script if present
        if (isset($composerData['scripts']['test'])) {
            $composerData['scripts']['test'] = str_replace(
                'pest',
                './vendor/bin/pest --configuration=configs/pest.json',
                $composerData['scripts']['test']
            );
        }

        // Update other tool scripts if needed
        // ...

        file_put_contents($composerJsonPath, json_encode($composerData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
    }
}
