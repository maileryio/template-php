<?php

$date = date('Y');
$header = <<<EOF
_____
@link      https://github.com/maileryio/_____
@package   _____
@license   BSD-3-Clause
@copyright Copyright (c) {$date}, Mailery (https://mailery.io/)
EOF;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__)
    ->notPath('vendor')
    ->notPath('runtime')
    ->notPath('web/assets');

return (new PhpCsFixer\Config())
    ->setFinder($finder)
    ->setUsingCache(true)
    ->setRiskyAllowed(true)
    ->setRules(array(
        '@PSR2' => true,
        'header_comment' => [
            'header' => $header,
            'location' => 'after_declare_strict',
            'comment_type' => 'PHPDoc',
        ],
        'array_syntax' => [
            'syntax' => 'short',
        ],
        'align_multiline_comment' => true,
        'blank_line_before_statement' => ['statements' => ['return']],
        'cast_spaces' => true,
        'combine_consecutive_unsets' => true,
        'combine_consecutive_issets' => true,
        'concat_space' => [
            'spacing' => 'one',
        ],
        'declare_strict_types' => true,
        'linebreak_after_opening_tag' => true,
        'blank_line_after_opening_tag' => true,
        'blank_line_after_namespace' => true,
        'date_time_immutable' => true,
        'dir_constant' => true,
        'elseif' => false,
        'heredoc_to_nowdoc' => true,
        'modernize_types_casting' => true,
        'no_break_comment' => false,
        'no_blank_lines_after_class_opening' => true,
        'no_blank_lines_after_phpdoc' => true,
        'no_extra_blank_lines' => true,
        'no_leading_import_slash' => true,
        'no_leading_namespace_whitespace' => true,
        'no_trailing_comma_in_singleline_array' => true,
        'no_php4_constructor' => true,
        'echo_tag_syntax' => ['format' => 'long'],
        'no_spaces_around_offset' => true,
        'no_unused_imports' => true,
        'no_unreachable_default_argument_value' => true,
        'no_useless_else' => true,
        'no_useless_return' => true,
        'no_whitespace_in_blank_line' => true,
        'no_whitespace_before_comma_in_array' => true,
        'normalize_index_brace' => true,
        'ordered_imports' => [
            'sort_algorithm' => 'alpha',
        ],
        'ordered_class_elements' => [
            'order' => [
                'use_trait',
                'constant_public',
                'constant_protected',
                'constant_private',
                'property_public',
                'property_protected',
                'property_private',
                'construct',
                'destruct',
                'magic',
                'phpunit',
                'method_public',
                'method_protected',
                'method_private',
            ],
        ],
        'phpdoc_indent' => true,
        'phpdoc_trim' => true,
        'phpdoc_add_missing_param_annotation' => [
            'only_untyped' => false,
        ],
        'phpdoc_order' => true,
        'phpdoc_types_order' => [
            'null_adjustment' => 'always_last',
        ],
        'psr_autoloading' => true,
        'strict_param' => true,
        'self_accessor' => true,
        'semicolon_after_instruction' => true,
        'single_quote' => [
            'strings_containing_single_quote_chars' => true,
        ],
        'single_line_comment_style' => false,
        'ternary_to_null_coalescing' => true,
        'trailing_comma_in_multiline' => ['elements' => ['arrays']],
        'trim_array_spaces' => true,
        'general_phpdoc_annotation_remove' => [
            'annotations' => [
                'author',
                'package',
            ],
        ],
        'list_syntax' => [
            'syntax' => 'short',
        ],
    ))
;
