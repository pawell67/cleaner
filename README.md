# Cleaner
Automates moving PHP tool configuration files to a separate directory.

## Installation
You can install this package using Composer:

```bash
composer require pawell67/cleaner
```

After installation, the package will automatically create a `configs` directory and move the relevant configuration files from your project directory to the `configs` directory.

## Supported Tools
The following PHP code style/quality tools are currently supported:

Pest (pest.json)
php-cs-fixer (.php_cs.dist)
phpstan (phpstan.neon)
rector (rector.php)

## Usage
After installation, the package will perform the following actions:

Create a `configs` directory if it doesn't exist.
Move configuration files of supported tools to the `configs` directory.
Update your composer.json to use the new configuration file locations.
Please ensure that you review the moved configuration files and update any references or tool invocations that rely on the old file locations.

## Contributing
Contributions to this project are welcome. Feel free to open issues and submit pull requests on the GitHub repository: `pawell67/cleaner`.

## License
This package is open-source software licensed under the MIT License. See the LICENSE file for more information.
