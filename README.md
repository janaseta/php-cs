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
	// 
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

## Tips

Define these scripts in your `composer.json`:

```json
"scripts": {
	"fix": "php-cs-fixer fix",
	"cs": "@fix --dry-run --diff"
}
```

and you'll have 
