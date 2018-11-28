### November 27, 2018 meeting demo project

Sample project demonstrating testing techniques with PHPUnit.

The only requirement is PHP 7.2.* which can be lowered by changing the PHPUnit version in the composer.json to whatever works with your version of PHP. Or, preferably, just remove the require-dev block in the file and run `composer require --dev phpunit/phpunit` which will automatically pick and install the highest compatible version available to your PHP version.

> Checkout the code
> Install the depdencies with `composer install`
> Run the test-suite with `./vendor/bin/phpunit` (optionally suffixing with `--testdox` for human readable output)
> Add more tests (specifications) and supporting logic to improve your testing abilities!
