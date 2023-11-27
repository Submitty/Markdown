<?php
/*
Orginally from aptoma/twig-markdown extension
https://github.com/aptoma/twig-markdown
*/
namespace Submitty\Twig\Extension;

use League\CommonMark\MarkdownConverter;
use League\CommonMark\CommonMarkConverter;

/**
 * PHPLeagueCommonMarkEngine.php
 *
 * Maps League\CommonMark\MarkdownConverter to Twig\ Markdown Extension
 * 
 *  @author Casey McLaughlin <caseyamcl@gmail.com>
 */
class PHPLeagueMarkdownEngine
{
    /**
     * @var \League\CommonMark\MarkdownConverter
     */
    private $converter;

    /**
     * Constructor
     *
     * Accepts CommonMarkConverter or creates one automatically
     *
     * @param \League\CommonMark\MarkdownConverter $converter
     */
    public function __construct(MarkdownConverter $converter = null)
    {
        // Default to use CommonMarkConverter
        $this->converter = $converter ?: new CommonMarkConverter();
    }

    /**
     * {@inheritdoc}
     */
    public function transform($content)
    {
        return $this->converter->convert($content)->getContent();
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'League\CommonMark';
    }
}
