<?php

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

namespace ApacheSolrForTypo3\Solr\Tests\Unit\System\Solr\Parser;

use ApacheSolrForTypo3\Solr\System\Solr\Parser\StopWordParser;
use ApacheSolrForTypo3\Solr\Tests\Unit\SetUpUnitTestCase;

/**
 * Testcase for StopWordParser
 *
 * @author Timo Hund <timo.hund@dkd.de>
 */
class StopWordParserTest extends SetUpUnitTestCase
{
    /**
     * @test
     */
    public function canParseStopWords()
    {
        $parser = new StopWordParser();
        $stopwords = $parser->parseJson(self::getFixtureContentByName('stopword.json'));
        self::assertSame(['badword'], $stopwords, 'Could not parser stopwords from stopwords response');
    }
}
