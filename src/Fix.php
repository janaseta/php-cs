<?php

namespace JanaSeta\PhpCs;

use PhpCsFixer\Finder;

class Fix
{
	public static function in(array $folders): Config
	{
		$finder = Finder::create()->in($folders);
		$config = new Config;

		return $config->setFinder($finder);
	}
}
