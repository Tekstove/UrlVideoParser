<?php

use PHPUnit\Framework\TestCase;
use Tekstove\UrlVideoParser\Vbox\VboxPartser;
use Tekstove\UrlVideoParser\Vbox\VboxException;

/**
 * @author po_taka <angel.koilov@gmail.com>
 */
class VboxParserTest extends TestCase
{
    public function testParse()
    {
        $parser = new VboxPartser();
        
        // play:
        $this->assertSame('676723260d', $parser->getId('https://www.vbox7.com/play:676723260d?pos=pop'));
        $this->assertSame('676723260d', $parser->getId('http://www.vbox7.com/play:676723260d&start=1'));
        $this->assertSame('676723260d', $parser->getId('http://www.vbox7.com/play:676723260d'));
        
        $url1 = '<iframe width="560" height="315" src="https://www.vbox7.com/emb/external.php?vid=676723260d" frameborder="0" allowfullscreen></iframe>';
        $this->assertSame('676723260d', $parser->getId($url1));
    }
    
    public function testFailure()
    {
        $this->expectException(VboxException::class);
        $parser = new VboxPartser();
        $parser->getId("There is no video url here");
    }
}
