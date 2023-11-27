<?php

namespace Submitty\Twig\Extension;

use Submitty\Twig\Extension\MarkdownEngine\PHPLeagueMarkdownEngine;
use PHPUnit\Framework\TestCase;


// Require parent class if not autoloaded
if (!class_exists('\Submitty\Twig\Extension\MarkdownExtensionTest')) {
    require_once(__DIR__ . '/../MarkdownExtensionTest.php');
}

/**
 * @author Gunnar Liun <gunnar@aptoma.com>
 */
class MarkdownExtensionTest extends TestCase
{
    /**
     * @dataProvider getParseMarkdownTests
     */
    public function testParseMarkdown($template, $expected, $context = array())
    {
        $this->assertEquals($expected, $this->getTemplate($template)->render($context));
    }

    public function getParseMarkdownTests()
    {
        return array(
            array('{{ "# Main Title"|markdown }}', '<h1>Main Title</h1>' . PHP_EOL),
            array('{{ content|markdown }}', '<h1>Main Title</h1>' . PHP_EOL, array('content' => '# Main Title'))
        );
    }

    protected function getEngine()
    {
        return new PHPLeagueMarkdownEngine();
    }

    protected function getTemplate($template)
    {
        $loader = new \Twig\Loader\ArrayLoader(array('index' => $template));
        $twig = new \Twig\Environment($loader, array('debug' => true, 'cache' => false));
        $twig->addExtension(new MarkdownExtension($this->getEngine()));

        return $twig->load('index');
    }
}
