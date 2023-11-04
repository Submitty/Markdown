<?php
/*
Orginally from aptoma/twig-markdown extension
https://github.com/aptoma/twig-markdown
*/

namespace Submitty\Twig\Extension;

use Submitty\Twig\TokenParser\MarkdownTokenParser;

/**
 * MarkdownExtension provides support for Markdown.
 *
 * @author Gunnar Lium <gunnar@aptoma.com>
 * @author Joris Berthelot <joris@berthelot.tel>
 */
class MarkdownExtension extends \Twig\Extension\AbstractExtension implements \Twig\Extension\ExtensionInterface
{

    /**
     * @var PHPLeagueMarkdownEngine $markdownEngine
     */
    private $markdownEngine;

    /**
     * @param PHPLeagueMarkdownEngine $markdownEngine The Markdown parser engine
     */
    public function __construct(PHPLeagueMarkdownEngine $markdownEngine)
    {
        $this->markdownEngine = $markdownEngine;
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        return array(
            new \Twig\TwigFilter(
                'markdown',
                array($this, 'parseMarkdown'),
                array('is_safe' => array('html'))
            )
        );
    }

    /**
     * Transform Markdown content to HTML
     *
     * @param string $content The Markdown content to be transformed
     * @return string The result of the Markdown engine transformation
     */
    public function parseMarkdown($content)
    {
        return $this->markdownEngine->transform($content);
    }

    /**
     * {@inheritdoc}
     */
    public function getTokenParsers()
    {
        return array(new MarkdownTokenParser());
    }
}
