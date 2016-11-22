<?php

use PHPUnit\Framework\TestCase;
use Tekstove\UrlVideoParser\Youtube\YoutubeParser;

/**
 * @author po_taka <angel.koilov@gmail.com>
 */
class YoutubeParserTest extends TestCase
{
    public function testParse()
    {
        $parser = new YoutubeParser();
        
        // youtube.com/watch?v=
        $this->assertSame('z7ODF3A0HhE', $parser->getId('https://www.youtube.com/watch?v=z7ODF3A0HhE'));
        $this->assertSame('z7ODF3A0HhE', $parser->getId('https://www.youtube.com/watch?v=z7ODF3A0HhE?t=22'));
        
        // yotu.be tests
        $this->assertSame('z7ODF3A0HhE', $parser->getId('https://youtu.be/z7ODF3A0HhE'));
        $this->assertSame('z7ODF3A0HhE', $parser->getId('https://youtu.be/z7ODF3A0HhE?t=14m3s'));
        
        $embedUrl1 = '<iframe width="560" height="315" src="https://www.youtube.com/embed/z7ODF3A0HhE" frameborder="0" allowfullscreen></iframe>';
        $this->assertSame('z7ODF3A0HhE', $parser->getId($embedUrl1));
    }
}
