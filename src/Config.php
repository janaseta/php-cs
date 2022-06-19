<?php

namespace JanaSeta\PhpCs;

class Config extends \PhpCsFixer\Config
{
	protected array $rules = [
		// Pre-made rulesets
		'@Symfony:risky' => true,
		'@PHP80Migration' => true,
		'@PHP80Migration:risky' => true,

		// Overrides `@PHP80Migration`
		'assign_null_coalescing_to_coalesce_equal' => false,
		'heredoc_indentation' => false,

		// Overrides `@PHP80Migration:risky`
		'get_class_to_class_keyword' => false,
		'modernize_strpos' => false,
		'use_arrow_functions' => false,
		'declare_strict_types' => false,
		'method_argument_space' => [
			'after_heredoc' => true,
			'on_multiline' => 'ignore',
		],

		// Overrides `PHP80Migration:risky` and `@Symfony:risky`
		'no_php4_constructor' => false,

		// Our custom rules
		'phpdoc_align' => false,
		'braces' => false,
		'new_with_braces' => false,
		'indentation_type' => true,
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

	public function addRules(array $rules): static
	{
		$this->setRules([
			...$this->rules,
			...$rules,
		]);

		return $this;
	}
}
