![PHPUnit Test](https://github.com/Submitty/Markdown/actions/workflows/test.yml/badge.svg)

Twig-Markdown Extension

Forked from [aptoma/twig-markdown](https://github.com/aptoma/twig-markdown)

To report issues for Submitty/Markdown, please file them under the [Submitty/Submitty](https://github.com/Submitty/Submitty) repository.

## Objectives
- Apply league/commonmark as an Twig Extension

## Installation
```json
{
    "repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/Submitty/Markdown.git"
    }
    ],
    "require":{
        "league/commonmark": "2.4.0",
        "submitty/markdown": "version"
    }
}
```
```bash
composer install
# or
composer update
```

## Example
```php
use League\CommonMark\MarkdownConverter;

use Markdown\twig\Extension\PHPLeagueMarkdownEngine;
use Markdown\twig\Extension\MarkdownExtension;

// Based on the league/commonmark example
$config = [
    'allow_unsafe_links' => false,
];
$environment = new Environment($config);
$environment->addExtension(new CommonMarkCoreExtension());

$converter = new MarkdownConverter($environment);
$engine = new PHPLeagueMarkdownEngine($converter);

twig->addExtension(new MarkdownExtension($engine));
```

## See Documentation
Documentation in Progress
[General Documentation](www.submitty.org)
