<?php

namespace JanaSeta\PhpCs;

class Config extends \PhpCsFixer\Config
{
	protected array $rules = [
		'@Symfony:risky' => true,
		'ternary_to_null_coalescing' => true,
		'phpdoc_align' => false,
		'braces' => false,
		'new_with_braces' => false,
		'indentation_type' => true,
		'is_null' => false,
	];

	protected $indent = "\t";

	protected $isRiskyAllowed = true;

	protected $lineEnding = "\n";

	public function __construct()
	{
		parent::__construct();

		$this->setIndent($this->indent)
			->setRiskyAllowed($this->isRiskyAllowed)
			->setLineEnding($this->lineEnding)
			->setRules($this->rules);
	}
}
