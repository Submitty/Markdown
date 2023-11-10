<?php

namespace Submitty\Twig\Extension\MarkdownEngine;

use Submitty\Twig\Extension\MarkdownExtensionTest;

// Require parent class if not autoloaded
if (!class_exists('\Aptoma\Twig\Extension\MarkdownExtensionTest')) {
    require_once(__DIR__ . '/../MarkdownExtensionTest.php');
}

/**
 * Class PHPLeagueCommonMarkEngineTest
 *
 * @author Casey McLaughlin <caseyamcl@gmail.com>
 */
class PHPLeagueCommonMarkEngineTest extends MarkdownExtensionTest
{
    protected function getEngine()
    {
        return new PHPLeagueCommonMarkEngine();
    }
}
