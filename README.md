# php-cs

Jāņa sēta's php-cs-fixer config

## Installation & setup

Add package to dev dependencies:

```sh
composer require janaseta/php-cs --dev
```

Create a `.php-cs-fixer.dist.php` file that instructs fixer to work in the
directories where you need it:

```php
<?php

return JanaSeta\PhpCs\Fix::in([
	// List directories where your PHP is
	'src',
]);
```

## Usage

Dry run:

```sh
vendor/bin/php-cs-fixer fix --dry-run --diff
```

Fix the code style:

```sh
vendor/bin/php-cs-fixer fix
```

## Customization

To add or override some rules or rulesets use the `addRules` method:

```php
/* .php-cs-fixer.dist */
<?php

return JanaSeta\PhpCs\Fix::in([
	'src',
	'tests',
])->addRules([
	'braces' => true,
	'is_null' => false,
]);
```

If you need to specify some details on the `PhpCsFixer` instance or a custom
`Finder`, you can use this package in the following way:

```php
/* .php-cs-fixer.dist */
<?php

// Create a Finder instance
$finder = PhpCsFixer\Finder::create()
	->in($folders); // Search however you need

$config = new JanaSeta\PhpCs\Config;

return $config
	->setIndent('    ') // Set any php-cs-fixer options that you desire
	->setFinder($finder);
```

## Tips

Define these scripts in your `composer.json`:

```json
"scripts": {
	"fix": "php-cs-fixer fix",
	"cs": "@fix --dry-run --diff"
}
```

and you'll have `composer cs` and `composer fix` commands.
