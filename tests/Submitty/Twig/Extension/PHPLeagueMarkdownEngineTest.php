<?php

namespace Submitty\Twig\Extension\MarkdownEngine;

use Submitty\Twig\Extension\MarkdownExtensionTest;

// Require parent class if not autoloaded
if (!class_exists('\Submitty\Twig\Extension\MarkdownExtensionTest')) {
    require_once(__DIR__ . '/../MarkdownExtensionTest.php');
}

/**
 * Class PHPLeagueMarkdownEngineTest
 *
 * @author Casey McLaughlin <caseyamcl@gmail.com>
 */
class PHPLeagueMarkdownEngineTest extends MarkdownExtensionTest
{
    protected function getEngine()
    {
        return new PHPLeagueCommonMarkEngine();
    }
}
