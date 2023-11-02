Twig-Markdown Extension
Credits to [aptoma/twig-markdown](https://github.com/aptoma/twig-markdown)

To report issues for Submitty/Markdown, please file them under the [Submitty/Submitty](https://github.com/Submitty/Submitty) repository.

Minimum league/Commonmark version 2.0.0

## Objectives
- Apply league/commonmark as an Twig Extension
- Include latex using MathJax

## Installation
In progress

## Example
```php
use League\CommonMark\MarkdownConverter;

use Markdown\twig\Extension\PHPLeagueMarkdownEngine;
use Markdown\twig\Extension\MarkdownExtension;

// Based on the league/commonmark example
$config = [
    'html_input' => 'escape',
    'allow_unsafe_links' => false,
    'max_nesting_level' => 10
];
$environment = new Environment($config);
$environment->addExtension(new CommonMarkCoreExtension());

$converter = new MarkdownConverter($environment);
$engine = new PHPLeagueMarkdownEngine($converter);

twig->addExtension(new MarkdownExtension($engine));
```

## See Documentation
Documentation in Progress
[Developing]()
[Usages]()
[General Documentation](submitty.org)